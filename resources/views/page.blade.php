@extends('layouts.app')

@section('content')
<div class="product-big-title-area" style="margin-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>{{$obj->title}}</h2>
                    </div>
                    
                </div>
            </div>
        </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body"style="margin-bottom: 100px;">         
          {!!$obj->body!!}       
        </div>         
      </div>
    </div>
  </div>
</div>
@endsection



<!-- <h2 class="section-title">{{$obj->title}}</h2> -->
