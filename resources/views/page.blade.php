@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="product-bit-title text-center product-big-title-area sidebar-title">
          <h2 class="section-title">{{$obj->title}}</h2>
        </div>
        <div class="card-body">
          
          {!!$obj->body!!}
          
                   

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
