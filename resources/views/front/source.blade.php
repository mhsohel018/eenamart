@extends('front.template')
@section('title')
Product sources
@stop
@section('body')
        <section class="content-layout content-section">
            <div class=container>
                <div class="row pad-top-small">
                    <div class="col-md-12 heading text-center">
                        <h2>Farmers</h2><br>
                        <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, <span class=text-break></span> as opposed to using Content here, content here', making it look like readable English.</p>
                    </div>
                </div>
                <div class=farmers>
                    <div class="farmer farmer-image-left">
                        <figure><img src={{URL::to('front_asset/images/farmers/farmer-1.jpg')}} height=502 width=600 alt=""></figure>
                        <div class=farmer-details>
                            <div class=farmer-details-content>
                                <h2>Jhon Smith</h2><br>
                                <p class=meta>An American <a href=#>Organic farmer</a></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div class=social-links>
                                    <a href=# class="fa fa-facebook"></a>
                                    <a href=# class="fa fa-twitter"></a>
                                    <a href=# class="fa fa-pinterest"></a>
                                    <a href=# class="fa fa-envelope-o"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="farmer farmer-image-right">
                        <figure><img src={{URL::to('front_asset/images/farmers/farmer-2.jpg')}} height=502 width=600 alt=""></figure>
                        <div class=farmer-details>
                            <div class=farmer-details-content>
                                <h2>Robert William</h2><br>
                                <p class=meta>An American <a href=#>Organic farmer</a></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div class=social-links>
                                    <a href=# class="fa fa-facebook"></a>
                                    <a href=# class="fa fa-twitter"></a>
                                    <a href=# class="fa fa-pinterest"></a>
                                    <a href=# class="fa fa-envelope-o"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="farmer farmer-image-left">
                        <figure><img src={{URL::to('front_asset/images/farmers/farmer-3.jpg')}} height=502 width=600 alt=""></figure>
                        <div class=farmer-details>
                            <div class=farmer-details-content>
                                <h2>Robert Jose</h2><br>
                                <p class=meta>An American <a href=#>Organic farmer</a></p>
                                <p>In the context of developing nations or other pre-industrial cultures, most farmers practice a meager subsistence agriculture—a simple organic farming system employing crop rotation, seed saving, slash and burn, or other techniques to maximize efficiency while meeting the needs of the household or community. Historically, one subsisting in this way may have been known as a peasant. In developed nations, however, a person using such techniques on small patches of land might be called a gardener and be considered a hobbyist. Alternatively, one might be driven into such practices by poverty or, ironically—against.</p>
                                <div class=social-links>
                                    <a href=# class="fa fa-facebook"></a>
                                    <a href=# class="fa fa-twitter"></a>
                                    <a href=# class="fa fa-pinterest"></a>
                                    <a href=# class="fa fa-envelope-o"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-float farmer-loader pad-top-large text-center">
                        <button class="btn btn-ghost btn-lg">Load More </button>
                    </div>
                </div>
            </div>
        </section>
        @stop