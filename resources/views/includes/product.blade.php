<div class="col-md-7 col-sm-6">
  <div class="single-shop-product">
    <div class="product-upper">  
      <a data-id="{{$product->id}}" class="modal_ajax" href="#">
        <img style="height: 150px;"src="{{asset('storage/'.$product->picture)}}"alt="">
      </a>            
    </div>
    
    <h2><a href="{{asset('/product/'.$product->id)}}">{{$product->name}}</a></h2>
    <div class="product-carousel-price">
        <ins>{{$product->price}}</ins> <del>$999.00</del>
    </div>  
                        
    <div class="product-option-shop">
      <a id="good-{{$product->id}}-{{$product->price}}" class="add_to_cart_button addCart" 
         data-quantity="1" data-product_sku="" data-product_id="70" 
         rel="nofollow" href="#">Add to cart</a>
    </div>                       
  </div>
</div>

