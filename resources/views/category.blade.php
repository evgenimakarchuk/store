@extends('layouts.app')
@section('scripts')
    @parent
    <script src ="{{asset('js/modal.js')}}"></script>
@endsection
@section('content')

<!-- <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="#"><img src="http://localhost:8888/img/logo.png"></a></h1>
                    </div>
                </div>
            </div>
        </div>
</div> -->

<div class="product-big-title-area" style="margin-bottom: 100px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="product-bit-title text-center"style="padding-bottom: 20px;">
          <h2 style="margin-bottom: -20px;">{{$catalog->name}}</h2>
            @foreach($catalogs as $one)
            <a href="{{asset('catalog/'.$one->slug)}}" style="color: #FFF; margin: 20px">
                                              {{$one->name}}</a> 
            @endforeach  
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        
        <div class="card-body">
          
          @foreach($catalogs as $one)
          <a href="{{asset('catalog/'.$one->slug)}}">{{$one->name}}</a> 
          @endforeach  
          
          @foreach($products as $product)
            @include('includes.product')   
          @endforeach 
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="margin-bottom: 120px;">
  <div class="col-md-12">
    <div class="product-pagination text-center">
      <nav>
        <ul class="pagination">
          <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
        </ul>
      </nav>                        
    </div>
  </div>
</div>
                     
@endsection


