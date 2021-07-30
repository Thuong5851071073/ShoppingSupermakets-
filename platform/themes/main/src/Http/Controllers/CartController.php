<?php
namespace Theme\Main\Http\Controllers;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Platform\Cart\Models\Cart;
use Platform\CartDetail\Models\CartDetail;
use Platform\Ecommerce\Models\City;
use Platform\Ecommerce\Models\Order;
use Platform\Ecommerce\Models\OrderAddress;
use Platform\Ecommerce\Models\OrderProduct;
use Platform\Ecommerce\Models\Product;
use Platform\Theme\Http\Controllers\PublicController;
use Theme\Main\Http\Request\InfoRequest;
use Theme;
use EmailHandler;
use Illuminate\Support\Facades\DB;

class CartController extends PublicController
{
    //Get Cart:
    public function getCart()
    {
       
        $cartId = auth('customer')->user()->getCart->id;
        $data['detailCart'] = CartDetail::getDetailCartByCardId($cartId);
        $data['money']=0;
        $data['allQuantity'] = 0;
        $data['allPrice'] = [];
        foreach ($data['detailCart'] as $k => $detail) {
            $data['allQuantity'] = $data['allQuantity'] + $detail->quantity;
            $data['allPrice'][$k] = 0;
            if (!empty($detail->getProduct->sale_price)) {
                $data['allPrice'][$k] = $data['allPrice'][$k] + $detail->quantity * $detail->getProduct->sale_price;
                $data['money']= $data['money']+ $data['allPrice'][$k];
                
            } else {
                $data['allPrice'][$k] = $data['allPrice'][$k] + $detail->quantity * $detail->getProduct->price;
                $data['money']= $data['money']+ $data['allPrice'][$k];
            }
        }
        // dd( $data['total']);
        // dd(  $data['detailCart']);
        Theme::breadcrumb()->add(__('Giỏ Hàng'), url('/'));
        return Theme::scope('shopping-bag',$data)->render();
    }



    public function addCart($guard = 'customer' , Request $request )
    {
        try{
            if (!Auth::guard($guard)->check()) {
                $notification = array(
                    'message' => 'Vui lòng đăng nhập để tiến hành mua hàng',
                    'alert-type' => 'warning'
                );
                return redirect()->back()->with($notification);
            } 
            else {
                $input = $request->all();
                $dataDetailCart = [];
                $dataDetailCart['cartId'] = auth('customer')->user()->getCart->id;
                $dataDetailCart['productId'] = $input['productId'];
                $dataDetailCart['quantityProduct'] = $input['quantityProduct'];
                if ($dataDetailCart['quantityProduct'] > $input['qtyProduct']) {
                    $notification = array(
                        'message' => 'Số lượng trong kho không đủ',
                        'alert-type' => 'warning'
                    );
                    return redirect()->back()->with($notification);
                }
                $checkDetailCart = CartDetail::getDetailcart($dataDetailCart['cartId'], $dataDetailCart['productId']);
                if (empty($checkDetailCart)) {
                    $saveDetailCart = CartDetail::saveDetailCart($dataDetailCart);
                } 
                else {
                    $saveDetailCart = CartDetail::updateDetailCart($dataDetailCart);
                }
                $updateQuantity = Product::updateQuantity( $dataDetailCart['quantityProduct'], $dataDetailCart['productId']);
                  if( !$saveDetailCart ||  !$updateQuantity)
                   {
                    $notification = array(
                        'message' => 'Thêm vào giỏ hàng thất bại! Vui lòng thử lại',
                        'alert-type' => 'error'
                    );
                    return redirect()->back()->with($notification);
                }
                $notification = array(
                    'message' => 'Thêm vào giỏ hàng thành công',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
    
        }

        }
        catch (Exception $e) {
            logger($e->getMessage() . ' at ' . $e->getLine() .  ' in ' . $e->getFile());
        }
}

    public function updateCart(Request $request)
    {
        try {
            $input = $request->all();
            $updateCartDetail = CartDetail::updateQuantity($input);
            if (!$updateCartDetail) {
                return \Response::json(['error' => 'fail', 'message' => 'Cập nhật giỏ hàng thất bại!']);
            }
            
            return \Response::json(['success' => 'success', 'message' => 'Cập nhật giỏ hàng thành công!']);
        } catch (Exception $e) {
            logger($e->getMessage() . ' at ' . $e->getLine() .  ' in ' . $e->getFile());
        }
    }

    public function removeDetailCart(Request $request)
    {
        try {
            $input = $request->all();
            $cartDetail = CartDetail::getDetailCartById($input);
            if (!empty($cartDetail)) {
                $cartDetail->delete();
            }
            return \Response::json(['success' => 'success', 'message' => 'Xóa sản phẩm thành công!']);
        } catch (Exception $e) {
            logger($e->getMessage() . ' at ' . $e->getLine() .  ' in ' . $e->getFile());
        }
    }

       /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getwaypay($orderId)
    {
        $data['orderAddress'] = OrderAddress::getAddressOrderByOrderId($orderId);
        $cartId = auth('customer')->user()->getCart->id;
        $data['detailCart'] = CartDetail::getDetailCartByCardId($cartId);
        $data['money']=0;
        $data['orderId'] = $orderId;
        $data['allQuantity'] = 0;
        $data['allPrice'] = [];
        // $data['getinfor'] = OrderAddress::getAddressOrderById();
       
        foreach ($data['detailCart'] as $k => $detail) {
            $data['allQuantity'] = $data['allQuantity'] + $detail->quantity;
            $data['allPrice'][$k] = 0;
            if (!empty($detail->getProduct->sale_price)) {
                $data['allPrice'][$k] = $data['allPrice'][$k] + $detail->quantity * $detail->getProduct->sale_price;
                $data['money']= $data['money']+ $data['allPrice'][$k];
                
            } else {
                $data['allPrice'][$k] = $data['allPrice'][$k] + $detail->quantity * $detail->getProduct->price;
                $data['money']= $data['money']+ $data['allPrice'][$k];
            }
        }

        Theme::breadcrumb()->add(__('Giỏ Hàng'), url('/'));
        return Theme::scope('market.checkout4',$data)->render();
    }
    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function waypay(){
        try{
           
            $cartId = auth('customer')->user()->getCart->id;
            $detailCart = CartDetail::getDetailCartByCardId($cartId);
            foreach ($detailCart as $detail) {
                $detailCartProduct = CartDetail::deleteCartDetail($detail->id);
            }
            EmailHandler::send(view('theme.main::views.pages.mail.confirm-order'), 'Re: ' . 'Xác nhận đơn hàng', auth('customer')->user()->email);
            $notification = array(
                'message' => 'Mua hàng thành công ! chờ chủ của hàng liên hệ với bạn nhé !',
                'alert-type' => 'success'
            );
            return redirect()->route('public.index')->with($notification);
        }
        catch(Exception $e) {
            logger($e->getMessage() . ' at ' . $e->getLine() .  ' in ' . $e->getFile());
        }
       

    }

       /**
     * @return \Illuminate\Http\Response|Response
     */
    public function getinforreship()
    { 
        $data['get_city'] = City::all();
        $cartId = auth('customer')->user()->getCart->id;
        $data['customer'] = auth('customer')->user();
        $data['detailCart'] = CartDetail::getDetailCartByCardId($cartId);
        $data['money']=0;
        $data['allQuantity'] = 0;
        $data['allPrice'] = [];
        foreach ($data['detailCart'] as $k => $detail) {
            $data['allQuantity'] = $data['allQuantity'] + $detail->quantity;
            $data['allPrice'][$k] = 0;
            if (!empty($detail->getProduct->sale_price)) {
                $data['allPrice'][$k] = $data['allPrice'][$k] + $detail->quantity * $detail->getProduct->sale_price;
                $data['money']= $data['money']+ $data['allPrice'][$k];
                
            } else {
                $data['allPrice'][$k] = $data['allPrice'][$k] + $detail->quantity * $detail->getProduct->price;
                $data['money']= $data['money']+ $data['allPrice'][$k];
            }
        }
  
        return Theme::scope('market.checkout',$data)->render();
    }
    public function inforreship(InfoRequest $request){
        try
        {
            $input = $request->all();
            $input['type_payment'] = 0;
            $input['is_purchased'] = 'Chưa Thanh Toán';
            $saveOrder= Order::saveOrder($input);
            $cartId = auth('customer')->user()->getCart->id;
            $detailCart = CartDetail::getDetailCartByCardId($cartId);
            foreach ($detailCart as $detail) {
                $dataOrderProduct[] = [
                    'order_id' => $saveOrder->id,
                    'qty' => $detail->quantity,
                    'price' => (!empty($detail->getProduct->sale_price)) ? $detail->getProduct->sale_price : $detail->getProduct->price,
                    'product_id' => $detail->getProduct->id,
                    'product_name' => $detail->getProduct->name
                ];
            }
            $saveOrderProduct = OrderProduct::saveOrderProduct($dataOrderProduct);
            $data['orderAddress'] = [
                'orderId' => $saveOrder->id,
                'addressOrder' => $input['address'],
                'cityOrder' => $input['city']
            ];
            $saveOrderAddress = OrderAddress::saveOrderAddress($data['orderAddress']);
            if (!$saveOrder || !$saveOrderProduct || !$saveOrderAddress) {
                $notification = array(
                    'message' => 'Xác nhận đơn hàng thất bại!',
                    'alert-type' => 'error'
                );
             
                return redirect()->back()->with($notification);
            }
           
            $notification = array(
                'message' => 'Xác nhận thông tin thành công',
                'alert-type' => 'success'
            );
            return redirect()->route('get_waypay2', $saveOrder->id)->with($notification);
           

        } catch(Exception $e) {
            logger($e->getMessage() . ' at ' . $e->getLine() .  ' in ' . $e->getFile());
        }
       
    }

    public function GetPayonline($orderId, Request $request)
    {
        $data['order'] = Order::where('id', $orderId)->first();
        return Theme::scope('vnpay_php.index', $data)->render();
    }

    public function Payonline(Request $request)
    {
        $vnp_TxnRef = $_POST['order_id']; //Reference code of transaction at Merchant system. This code is unique and used to differentiate orders sent to VNPAY. Codes must not be duplicated within a day.
        $vnp_OrderInfo = $_POST['order_desc'];
        $vnp_OrderType = $_POST['order_type'];
        $vnp_Amount = $_POST['amount'] * 100;
        $vnp_Locale = $_POST['language'];
        $vnp_BankCode = $_POST['bank_code'];
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $inputData = array(
            "vnp_Version" => "2.0.1",
            "vnp_TmnCode" => env('VNP_TMN_CODE'),
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => route('VNPay.return') ,
            "vnp_TxnRef" => $vnp_TxnRef
            
        );
        $vnp_HashSecret = env('VNP_HASH_SECRET');

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        
        $vnp_Url = 'http://sandbox.vnpayment.vn/paymentv2/vpcpay.html' . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash('sha256', env('VNP_HASH_SECRET') . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        
        return redirect($vnp_Url);
    
    }

    public function VNPayreturn(Request $request)
    {
        
        try {
            DB::beginTransaction();
            $response = $request->toArray();
            $vnp_HashSecret = env('VNP_HASH_SECRET');
            $vnp_SecureHash = $response['vnp_SecureHash'];
            $inputData = [];
            foreach ($response as $key => $value) {
                if ($key == 'vnp_SecureHashType' || $key == 'vnp_SecureHash') {
                    continue;
                }
                if (substr($key, 0, 4) == 'vnp_') {
                    $inputData[$key] = $value;
                }
            }
    
            ksort($inputData);
            $i = 0;
            $hashData = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashData = $hashData . '&' . $key . "=" . $value;
                } else {
                    $hashData = $hashData . $key . "=" . $value;
                    $i = 1;
                }
            }
            $secureHash = hash('sha256',$vnp_HashSecret . $hashData);
    
            if ($secureHash == $vnp_SecureHash) {
                if (!empty($response['vnp_ResponseCode']) && $response['vnp_ResponseCode'] == '00') {
                    $inputData['paymentResult'] = 1;
                    if (!empty($response['vnp_TxnRef'])) {
                        $order = Order::getOrderById($response['vnp_TxnRef']);
                        if (!empty($order)) {
                            $order->status = 'processing';
                            $order->is_purchased = 'Đã thanh toán';
                            $order->type_payment = 1;
                            $order->purchased_at = Carbon::now()->addHours(7);
                            $inputData['purchased'] = Carbon::now()->addHours(7);
                            $order->save();

                            $cartId = auth('customer')->user()->getCart->id;
                            $detailCart = CartDetail::getDetailCartByCardId($cartId);
                            foreach ($detailCart as $detail) {
                                CartDetail::deleteCartDetail($detail->id);
                            }
                            DB::commit();
                            return Theme::scope('vnpay_php.vnpay_return', $inputData)->render();
                        }
                    } else {
                        return Theme::scope('vnpay_php.vnpay_return', $inputData)->render();
                    }
                } else {
                    return Theme::scope('vnpay_php.vnpay_return', $inputData)->render();
                }
            } else {
                return Theme::scope('vnpay_php.vnpay_return', $inputData)->render();
            }

        } catch (Exception $e) {
            DB::rollBack();
            logger($e->getMessage() . ' at ' . $e->getLine() .  ' in ' . $e->getFile());
        }
    }
}