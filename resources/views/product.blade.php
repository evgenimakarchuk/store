@extends('layouts.app')
@section('content')
<!-- /Applications/MAMP/htdocs/laravel/resources/views/product.blade.php -->
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>{{$product->name}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
      <div class="zigzag-bottom"></div>
      <div class="container">
        <div class="row">
        <!-- 'catalog/'.$product->categories->slug -->
        <!-- 'catalog/'.$v_cats->slug -->
          <div class="col-md-12">
            <div class="product-content-right">
              <div class="product-breadcroumb">
                <a href="/">Home</a>              
                <a href="{{asset('catalog/'.$product->categories->slug)}}">
                                                  {{$product->categories->slug}}</a>
                <a href="">{{$product->name}}</a>
              </div>
                        
              <div class="row">
                <div class="col-sm-6">
                  <div class="product-images">
                    <div class="product-main-img" >
                      <img src="{{asset('storage/'.$product->picture)}}" alt="">                    
                    </div >
                    <div ></div>                                   
                    <div id="details" class="product-gallery">
                      <img src="img/product-thumb-1.jpg" alt="">
                      <img src="img/product-thumb-2.jpg" alt="">
                      <img src="img/product-thumb-3.jpg" alt="">
                    </div>
                    <div  style="margin-top: 50px;">{!!$product->body!!}</div>
                  </div>
                </div>
                            
                <div class="col-sm-6">
                  <div class="product-inner">
                    <h2 class="product-name">{{$product->name}}</h2>
                    @include('includes.product')     
                    <br style="clear: both"/>
                                      
                                    
                  <div class="product-inner-category" >
                    <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                  </div> 
                                    
                  <div role="tabpanel">
                    <ul class="product-tab" role="tablist">
                      <li role="presentation" class="active">
                        <a href="#home" aria-controls="home" role="tab" 
                                                            data-toggle="tab">Description</a>
                      </li>
                      <li role="presentation">
                        <a href="#profile" aria-controls="profile" role="tab" 
                                                              data-toggle="tab">Reviews</a>
                      </li>
                    </ul>
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                      <h2>Product Description</h2>  
                      {!!$product->smoll_body!!}
                    </div>
                  <div role="tabpanel" class="tab-pane fade" id="profile">
                    <h2>Reviews</h2>
                    <div class="submit-review">
                      <p><label for="name">Name</label> <input name="name" type="text"></p>
                      <p><label for="email">Email</label> <input name="email" type="email"></p>
                      <div class="rating-chooser">
                        <p>Your rating</p>

                        <div class="rating-wrap-post">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                      <p><label for="review">Your review</label> 
                         <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                      <p><input type="submit" value="Submit"></p>
                    </div>
                  </div>
                </div>
              </div>
                                    
            </div>
          </div>
        </div>
                        
                        
        <div class="related-products-wrapper">
          <h2 class="related-products-title">СОПУТСТВУЮЩИЕ ТОВАРЫ</h2>
          <div class="related-products-carousel">
            
           
            @foreach($products as $prod)
            <div class="single-product">          
              <div class="product-f-image" style="width: 250px;">
                 
                <img src="{{asset('storage/'.$prod->picture)}}" alt="" style="height: 250px;">
                  
                <div class="product-hover">
                  <a  href="#" class="add-to-cart-link addCart" id="good-{{$prod->id}}-{{$prod->price}}">
                          <i class="fa fa-shopping-cart"></i> Add to cart</a>
                  <a href="#details" class="view-details-link">
                          <i class="fa fa-link"></i> See details</a>
                </div>                
              </div>
              
              <h2><a href="{{asset('/product/'.$prod->id)}}">{{$prod->name}}</a></h2>
              <div class="product-carousel-price">
                <ins>{{$prod->price}}</ins> <del>$999.00</del>
              </div> 
            </div>
            @endforeach
          

                                          
              </div>                                    
            </div>
          </div>
        </div>                    
      </div>
    </div>
  </div>
</div>
@endsection

