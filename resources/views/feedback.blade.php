@extends('layouts.app')
@section('content')

<div class="product-big-title-area" style="margin-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>ФОРМА ОБРАТНОЙ СВЯЗИ</h2>
                    </div>
                    
                </div>
            </div>
        </div>
</div>

<div class="row base_row" >
  <div class="panel panel-default bas" >
       
    <div class="panel-body" style="padding-top: 40px; padding-right: 180px;" >
      <form class="form-horizontal" 
            role="form" method="POST" action="{{asset('feedback') }}">
          {!! csrf_field() !!}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label class="col-md-4 control-label">Name
                    <abbr title="required" class="required">*</abbr>
          </label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="name"
                   value="{{ (old('fio') == true) ? old('fio') : $name }}">    
                  @if ($errors->has('name'))
                    <span class="help-block"><strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label class="col-md-4 control-label">E-Mail
                    <abbr title="required" class="required">*</abbr>
          </label>  
          <div class="col-md-6">
            <input type="email" class="form-control" name="email"
                  value="{{ (old('email') == true) ? old('email') : $email }}">
                  @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
          <label class="col-md-4 control-label">Phone
                        <abbr title="required" class="required">*</abbr>
          </label>  
          <div class="col-md-6">
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"> 
              @if ($errors->has('phone'))
                <span class="help-block"><strong>{{ $errors->first('phone') }}</strong>
                </span>
              @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">        
          <label class="col-md-4 control-label">Textarea
                      <abbr title="required" class="required">*</abbr>
          </label> 
          <div class="col-md-6">
            <textarea class="form-control"  name="body" id="exampleFormControlTextarea1" 
                      rows="6">{{ old('body') }}
            </textarea>
          </div>
        </div>

        <div class="form-group">                
          <div class="col-md-6 col-md-offset-4">                    
            <button type="submit" class="btn btn-primary btn-block" id="clearBasket">
                <i class="fa fa-btn fa-user">   Отправить</i>
            </button>                   
          </div>                  
        </div>
      </form>                
    </div>
  </div>
</div>

@endsection