<h2 align="center">{{ $obj->name }}</h2>
<p align="center">
    <img src ="{{asset('storage/'.$obj->picture)}}"/>
</p>
<div class="product-option-shop"align="right">
    <a  id="good-{{$obj->id}}-{{$obj->price}}" class="add_to_cart_button addCart" 
        data-quantity="1" data-product_sku="" data-product_id="70" 
        rel="nofollow" href="#">Add to cart</a>
</div>
<div>{!!$obj->body!!}</div>

<script src="{{asset('js/cart.js')}}"></script>

