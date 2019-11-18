<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel=stylesheet href={{URL::to('front_asset/vendor.css')}}>
    <link rel=stylesheet href={{URL::to('front_asset/style.css')}}>
    <script src={{URL::to('front_asset/js/vendor/modernizr.js')}}></script>

    
</head>

<body>
    <!--[if lt IE 10]>
 <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
    <div class=wrap>
        <header class=main-header-v1>
            <div class=header-top-v-1>
                <div class=container>
                    <nav class=navigation>
                        <a href="#" class=menu-toogle></a>
                        <ul>
                            <li><a href={{URL::to('/')}} @if(Session::get('menu')=='home')class=active @endif>{{trans('general.home')}}</a></li>
                            <li><a href={{URL::to('/shop')}} @if(Session::get('menu')=='shop')class=active @endif>{{trans('general.products')}}</a></li>
                            <li><a href={{URL::to('/source')}} @if(Session::get('menu')=='source')class=active @endif>{{trans('general.sources')}}</a></li>
                            <li><a href={{URL::to('/about')}} @if(Session::get('menu')=='about')class=active @endif>{{trans('general.about')}}</a></li>
                            <li><a href={{URL::to('/contact')}} @if(Session::get('menu')=='contact')class=active @endif>{{trans('general.contact')}}</a></li>
                        </ul>

                    </nav>
                    <div class=logo>
                        <a href=index-2.html><img src={{URL::to('front_asset/images/logo2.png')}} height=164 width=164 alt=""></a>
                    </div>
                    <div class=header-top-right-v1>
                        <a class="toggle-share-alt fa fa-share-alt" href=#></a>
                        <div class=social-links>
                            <a href=# class="fa fa-facebook"></a>
                            <a href=# class="fa fa-twitter"></a>
                            <a href=# class="fa fa-behance"></a>
                            <a href=# class="fa fa-vimeo-square"></a>
                        </div>
                        <div class=search-form>
                            @if(session()->get('locale')=='zh')
                            <a href={{URL::to('lang/en')}} style="color: #fff; margin-top: 30px"><img src="{{URL::to('front_asset/images/en.png')}}" height="30" width="30"></a>
                            @else
                            <a href={{URL::to('lang/zh')}} style="color: #fff; margin-top: 30px"><img src="{{URL::to('front_asset/images/china.png')}}" height="30" width="30"></a>
                            @endif
                        </div>
                        <!-- <div class=search-form>
                            <a href=# class=toggle-search-form></a>
                        </div> -->
                    </div>
                    <!-- <form class=header-search>
                        <div class=form-content>
                            <input type=text placeholder=Search class=form-control>
                            <button type=submit><i class="fa fa-search"></i></button>
                        </div>
                    </form> -->
                </div>
            </div>
            <div class=navigation-mobile>
                <ul>
                    <li><a href={{URL::to('/')}} @if(Session::get('menu')=='home')class=active @endif>{{trans('general.home')}}</a></li>
                    <li><a href={{URL::to('/shop')}} @if(Session::get('menu')=='shop')class=active @endif>{{trans('general.products')}}</a></li>
                    <li><a href={{URL::to('/source')}} @if(Session::get('menu')=='source')class=active @endif>{{trans('general.sources')}}</a></li>
                    <li><a href={{URL::to('/about')}} @if(Session::get('menu')=='about')class=active @endif>{{trans('general.about')}}</a></li>
                    <li><a href={{URL::to('/contact')}} @if(Session::get('menu')=='contact')class=active @endif>{{trans('general.contact')}}</a></li>
                </ul>
            </div>
            @yield('banner')
            
        </header>
        @yield('body')
        <footer class="main-footer">
            <div class="footer-top">
                <div class="container">
                    <div class"=col-md-3">
                        <div class="widget-2"><img src={{URL::to('front_asset/images/logo2.png')}} height="117" width="117" alt="" class="footer-logo">
                            <p>{{trans('general.tagline')}}</p>
                            <hr class=hr-1>
                            <div class=social-links>
                                <a href=# class="fa fa-facebook"></a>
                                <a href=# class="fa fa-twitter"></a>
                                <a href=# class="fa fa-behance"></a>
                                <a href=# class="fa fa-vimeo-square"></a>
                            </div>
                        </div>

                        <!-- <div class="widget-2 widget-newsletter">
                            <p>Enter Your email address for our mailing list to keep yourself update</p>
                            <form>
                                <div class=form-group>
                                    <input type=email placeholder="Email address">
                                    <button class="">Submit</button>
                                </div>
                            </form>
                        </div> -->
                    </div>

                    <div class=col-md-3>
                        <div class=widget-2>
                            <h5>{{trans('general.latest_product')}}</h5>
                            <ul>
                                <li><a href=#>Lorem Ipsum is simply dummy</a></li>
                                <li><a href=#>Aliquam ut magna eros</a></li>
                                <li><a href=#>Quisque feugiat commodo</a></li>
                                <li><a href=#>Sit amet efficitur metus</a></li>
                                <li><a href=#>Sed vehicula, eros id ornare</a></li>
                                <li><a href=#>Lorem Ipsum is simply dummy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=col-md-3>
                        <div class=widget-2>
                            <h5>{{trans('general.facebook-page')}}</h5>
                            <div class=twitter-posts></div>
                        </div>
                    </div>
                    <div class=col-md-3>
                        <div class=widget-2>
                            <h5>{{trans('general.contact-info')}}</h5>
                            <div class=contact-details>
                                <p><strong>{{trans('general.web')}}:</strong>
                                    <br><a href="http://eenamart.com">www.eenamart.com</a></p>
                                <p><strong>{{trans('general.phone')}}:</strong>
                                    <br>+1 2356 5876 2576,
                                    <br>+1 2356 55867 25</p>
                                <p><strong>{{trans('general.address')}}:</strong>
                                    <br>3 Alidemoname St Tantia, demoname, India.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=footer-bottom>
                <div class=container>
                    <div class="col-md-6 footer-bottom-left">
                        <p><a href="http://eenamart.com">EENA MART </a> made with love by <a href="https://prantiksoft.com">PRANTIK-SOFT</a></p>
                    </div>
                    <div class=col-md-6>
                        <nav class=footer-nav>
                            <ul>
                                <li><a href={{URL::to('/')}} @if(Session::get('menu')=='home')class=active @endif>{{trans('general.home')}}</a></li>
                                <li><a href={{URL::to('/shop')}} @if(Session::get('menu')=='shop')class=active @endif>{{trans('general.products')}}</a></li>
                                <li><a href={{URL::to('/source')}} @if(Session::get('menu')=='source')class=active @endif>{{trans('general.sources')}}</a></li>
                                <li><a href={{URL::to('/about')}} @if(Session::get('menu')=='about')class=active @endif>{{trans('general.about')}}</a></li>
                                <li><a href={{URL::to('/contact')}} @if(Session::get('menu')=='contact')class=active @endif>{{trans('general.contact')}}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src={{URL::to('front_asset/js/vendor/vendor.js')}}></script>
    <script src={{URL::to('front_asset/js/main.js')}}></script>
    
    @yield('footer')
</body>

</html>