<?php
namespace Theme\Main\Http\Controllers;

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
            $saveOrder= Order::saveOrder($request->all());
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

}