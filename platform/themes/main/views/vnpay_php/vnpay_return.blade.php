
   <style>
     #content {
        text-align: center;
        display: block;
        width: 100%;
        background: #fff;
        padding: 25px 20px;
        padding-bottom: 15px;
        -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
        -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
    }

    dt, dd {
        margin: auto;
        width: 50%;
        margin-left: 50px;
    }
    #Box {
        margin: auto;
        width: 50%;
       
    }
  </style>
<div>
    <div id="content">
        <div class="notify successbox"style="margin-top: 9rem;" >
            <h1 > THANH TOÁN HÓA ĐƠN  {{ $vnp_TxnRef }}</h1><br />
            <span class="alerticon"><img style="width: 120px;" src="{{ Theme::asset()->url('images/LOGO/tenor.gif') }}" alt="checkmark" /></span><br />
            @if (!empty($paymentResult))
            <p class="text-success" >Thanh toán thành công</p>
            @else
                <p class="text-danger" >Thanh toán thất bại! Vui lòng thử lại sau</p>
            @endif
        </div>

        <div id="Box">
            <hr />
            <dl class="dl-horizontal">
                <div class="form-group">
                    <label >Mã đơn hàng:</label>
                    <label>{{ $vnp_TxnRef }}</label>
                </div>  

                <div class="form-group">
                    <label >Số tiền:</label>
                    <label >{{ number_format($vnp_Amount) }}</label>
                </div>  
                <div class="form-group">
                    <label >Nội dung thanh toán:</label>
                    <label >{{ $vnp_OrderInfo }}</label>
                </div> 
                <div class="form-group">
                    <label >Ngân hàng:</label>
                    <label>{{ $vnp_BankCode }}</label>
                </div> 
                <div class="form-group">
                    <label >Thời gian thanh toán:</label>
                    <label >{{ date_format(date_create($purchased), 'H:i:s d-m-Y') }}</label>
                </div> 

            </dl>
        </div>
    </div>
</div>