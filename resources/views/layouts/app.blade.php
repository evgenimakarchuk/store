<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @section('styles')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @show
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="header-area" style="background: #7CFC00;">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="user-menu">
          <ul class="navbar-nav ml-auto">
            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
            <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
            <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
                  @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
                  @endif
                  @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" 
                 role="button" data-toggle="dropdown" aria-haspopup="true" 
                 aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                        style="display: none;">
                      @csrf
                  </form>
              </div>
            </li>
                @endguest
          </ul>

        </div>
      </div>

      <div class="col-md-6">
        <div class="header-right">
          <ul class="list-unstyled list-inline">
           
            <li class="dropdown dropdown-small aut">
              <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" 
                 href="#"><span class="key">currency :</span><span class="value">USD 
                 </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">INR</a></li>
                <li><a href="#">GBP</a></li>
              </ul>
            </li>

            <li class="dropdown dropdown-small aut">
              <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" 
                 href="#"><span class="key">language :</span>
                 <span class="value">English </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>

            <li class="dropdown dropdown-sm" >        
              <form>
                @csrf 
                  <svg id="close" class="bi bi-x-square" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M16 3H4a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H4z" clip-rule="evenodd"></path>
                      <path fill-rule="evenodd" d="M9.293 10L6.646 7.354l.708-.708L10 9.293l2.646-2.647.708.708L10.707 10l2.647 2.646-.708.708L10 10.707l-2.646 2.647-.708-.707L9.293 10z" clip-rule="evenodd"></path>
                  </svg>

                  <datalist id="mydata"></datalist>
                  <input id="data_products" type="search" list="mydata" placeholder="Search...">
                  <button type="submit"  list="mydata">Поиск</button> 
                
                  <svg class="bi bi-search" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M12.442 12.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"></path>
                      <path fill-rule="evenodd" d="M8.5 14a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM15 8.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"></path>
                  </svg>   
              </form>
            </li>  
          </ul>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End header area -->


<div class="mainmenu-area">
  <div class="container">
    <div class="row">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" 
                data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <!-- <li class="active"><a href="{{asset('/')}}">Домой</a></li> -->
          <!-- <li><a href="/shop.html">Страница магазина</a></li> -->
          <!-- <li><a href="single-product.html">Один продукт</a></li> -->
          <!-- <li><a href="cart.html">Корзина</a></li> -->
          <!-- <li><a href="/checkout.html">Проверка</a></li> -->
           <!-- <li><a href="#">Другие</a></li> -->
          <li class="{{($v_url_arr[1]=='')?'active':''}}"><a href="{{asset('/')}}">Домой</a></li>
                     
          <li class="dropdown dropdown-small {{($v_url_arr[1]=='catalog')?'active':''}}">
              <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" 
                                                                      href="#">Категория</a>
            <ul class="katehori dropdown-menu">
                @foreach($v_cats as $one)
              <li class="dropdown dropdown-small">
                <a data-hover="dropdown" class="dropdown-toggle" 
                                  href="{{asset('catalog/'.$one->slug)}}">{{$one->name}}</a>

                  @if($one->categories()->get()->count()>0) 
                <ul class="subkatehori dropdown-menu" >
                      @foreach($one->categories()->get() as $two)  
                    <li class="dropdown dropdown-small">
                      <a data-hover="dropdown" class="dropdown-toggle" 
                                    href="{{asset('catalog/'.$two->slug)}}">{{$two->name}}</a>
                    </li>
                      @endforeach
                </ul>              
                  @endif               
              </li>
                @endforeach 
                      
            </ul>
          </li> 
          <!-- <ul class="katehori btn-group dropright">
                  <li type="button" class="btn btn-secondary">
                  <a data-hover="dropdown" class="dropdown-toggle" 
                                  href="{{asset('catalog/'.$one->slug)}}">{{$one->name}}</a>
                  </li> 
                  <li type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Переключить Dropright</font></font></span>
                  </li> 
       
                </ul>         -->
                   
          <li class="{{($v_url_arr[1]=='about')?'active':''}}">
            <a href="{{asset('about')}}">О компании</a>
          </li>
          <li class="{{($v_url_arr[1]=='contacts')?'active':''}}">
            <a href="{{asset('contacts')}}">Контакты</a>
          </li>
          <li class="{{($v_url_arr[1]=='feedback')?'active':''}}">
            <a href="{{asset('feedback/create')}}">Обратная связь</a>
          </li>
        </ul>
            <!-- @php
              print_r($v_url_arr)
            @endphp -->
               
          <a class="shopping-item" style="display: none; color: red;"  id="clearBasket" 
                                                href="#">Очистить</a>     
          <div class="shopping-item" >
              <a class="cart-amunt" href="#">Корзина - <span class="cart-amunt"><span id="totalPrice">0</span> руб.</span> 
                <i class="fa fa-shopping-cart"></i> 
                <span class="product-count"><span id="totalGoods">0</span></span>
              </a> 
          </div>        
          <a class="shopping-item" style="display: none; color: green;" id="checkOut" 
                                   href="{{asset('basket')}}">Оформить</a>                   
      </div>
    </div>
  </div>
</div> <!-- End mainmenu area -->
@yield('content')

      




<div class="footer-top-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer-about-us">
          <h2>u<span>Stora</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis 
             sunt id doloribus vero quam laborum quas alias dolores blanditiis 
             iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam 
             iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum 
             commodi veritatis magni at?</p>
          <div class="footer-social">
            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="footer-menu">
          <h2 class="footer-wid-title">User Navigation </h2>
          <ul>
            <li><a href="#">My account</a></li>
            <li><a href="#">Order history</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Vendor contact</a></li>
            <li><a href="#">Front page</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="footer-menu">
          <h2 class="footer-wid-title">Categories</h2>
          <ul>
            <li><a href="#">Mobile Phone</a></li>
            <li><a href="#">Home accesseries</a></li>
            <li><a href="#">LED TV</a></li>
            <li><a href="#">Computer</a></li>
            <li><a href="#">Gadets</a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="footer-newsletter">
          <h2 class="footer-wid-title">Newsletter</h2>
          <p>Sign up to our newsletter and get exclusive deals you wont find 
             anywhere else straight to your inbox!</p>
          <div class="newsletter-form">
            <form action="#">
              <input type="email" placeholder="Type your email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End footer top area -->

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy; 2015 uCommerce. All Rights Reserved. 
                       <a href="http://www.freshdesignweb.com" target="_blank">
                          freshDesignweb.com</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer bottom area -->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>

<!-- jQuery easing -->
<script src="{{ asset('js/jquery.easing.1.3.min.js') }}"></script>

<!-- Main Script -->
<script src="{{ asset('js/main.js') }}"></script>

<!-- Slider -->
<script type="text/javascript" src="{{ asset('js/bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.slider.js') }}"></script>

<script src="{{asset('js/jquery.cookie.js')}}"></script>
<script src="{{asset('js/cart.js')}}"></script>

<script src="{{asset('js/menu.js')}}"></script>
<script src="{{asset('js/datalist.js')}}"></script>
@section('scripts')

@show
</body>
</html>




<!-- <script src="{{asset('js/menu.js')}}"></script> -->


<!-- <table id="bascets">
          <tbody>
            <tr style="display: none;" class="hPb">
              <td>Выбрано:</td>                  
              <td><span id="totalGoods">0</span>  товар(-а, -ов)</td>   
              <td>Сумма: &asymp; </td>
              <td><span id="totalPrice">0</span> руб.</td>
            </tr>
            <tr class="hPe">
              <td>Корзина пуста</td>
            </tr>
            <tr>
              <td>
                <a style="display: none; color: red;" id="clearBasket" href="#">Очистить</a></td>
              <td>
                <a style="display: none; color: green;" id="checkOut" 
                                                  href="{{asset('basket')}}">Оформить</a></td>
            </tr>
          </tbody>
        </table> -->
        <!-- style="position: absolute;top: 5px;left: 100%; display: none; background-color: white;" -->
        <!-- position: relative; -->
       