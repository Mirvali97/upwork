<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{ __('text.title') }} @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/banner.png') }}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('magcss/style.css') }}">
    <link rel="stylesheet" href="{{ asset('calendar/css/demo.css') }}"/>
    <link rel="stylesheet" href="{{ asset('footer/style.css') }}">
    <link rel="stylesheet" href="{{ asset('footer/mbr-additional.css') }}" type="text/css">
    <!-- Custom CSS -->
    <link href="{{ asset('sportcss/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('sportcss/style.css') }}" rel="stylesheet">
    <!-- Template js -->
    <script src="{{ asset('sportjs/jquery.appear.js') }}"></script>
    <script src="{{ asset('sportjsjs/modernizr.custom.js') }}"></script>
    <script src="{{ asset('sportjs/script.js') }}"></script>

</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>


<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">

                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li> <i class="fa fa-phone" ></i>   +99871 242-30-87</li>
                                <li> <i class="fa fa-clock-o" ></i>  9:00 - 18:00</li>
                                <li> <i class="fa fa-envelope-o" ></i> mail.sportedu.uz</li>
                            </ul>
                        </div>
                            <a  class="pl-2 text-white" href="{{ route('locale', ['locale' => 'uz']) }}">УЗ</a>
                            <a class="pl-2 text-white" href="{{ route('locale', ['locale' => 'ru']) }}">RU</a>
                            <a class="pl-2 text-white" href="{{ route('locale', ['locale' => 'en']) }}">EN</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="top-meta-data d-flex align-items-center justify-content-end">
                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-telegram"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="{{ route('search') }}" method="get">
                                @csrf
                                @method('get')
                                <input type="search" name="top_search" placeholder="{{ __('text.izlash') }}" id="topSearch">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- Login -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-img">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                     <img class="img-fluid" src="{{ asset('img/logo.png') }}" style="height: 120px;" alt="logo">
                </div>

                <div class="col-md-6">
                    <p class="text-center text-uppercase mt-3" style="font-size: 13px; color: #000; padding-right: 63px;">{{ __('text.title') }} <i>(BETA)</i></p>
                </div>

                <div class="col-md-3">
                  <img class="img-fluid mt-2" src="{{ asset('img/banner.png') }}" alt="logo">
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="vizew-main-menu" id="sticker">
        <div class="classy-nav-container  breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="vizewNav">


                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap text-info"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav ml-5">
                            <a href="{!! url('/') !!}"><i class="fa fa-home" style="font-size: 40px; list-style: none; color: #fff"></i></a>
                            <ul>
                                <li><a href="{!! url('/news') !!}">{{ __('text.yangiliklar')  }}</a></li>
                                <li><a href="{!! url('/relations') !!}">{{ __('text.aloqalar') }}</a></li>
                                <li><a target="_blank" href="http://galereya.sportedu.uz/">{{ __('text.Foto') }} </a></li>
                                <li><a target="_blank" href="http://lib.sportedu.uz/">{{ __('text.kutubxona') }} </a></li>
                                <li><a href="{!! url('/symbols') !!}">{{ __('text.ramzlari') }}</a></li>
                                <li><a href="{!! url('/structure') !!}">{{ __('text.Tuzilmasi') }}</a></li>
                                <li><a href="{!! url('/contact/create') !!}">{{ __('text.qilish') }}</a></li>
                                <li><a href="{!! url('/charter') !!}">{{ __('text.nizomi') }}</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

