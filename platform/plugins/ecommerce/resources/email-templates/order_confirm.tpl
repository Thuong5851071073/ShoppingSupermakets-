{{ header }}

<h2>Cám ơn quý khách đã mua hàng của chúng tôi !</h2>

<p>Chào {{ customer_name }},</p>

<p>Chúng tôi đã nhận được thông tin đơn hàng của bạn và </p>

<a href="{{ site_url }}/orders/tracking?order_id={{ order_id }}&email={{ customer_email }}" class="button button-blue">View order</a> or <a href="{{ site_url }}">Go to our shop</a>

<br />

<h3>Thông tin đơn hàng </h3>

<p>Mã đơn hàng: <strong>#{{ order_id }}</strong></p>

{{ product_list }}

<h3> Thông tin khách hàng</h3>

<p>{{ customer_name }} - {{ customer_phone }}, {{ customer_address }} </p>


{{ footer }}
