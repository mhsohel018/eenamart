<?php $settings=\App\Settings::first();  ?>
@extends('front.template')
@section('title')
About us
@stop
@section('body')
        <section class="content-layout content-section page-template-about">
            <div class=container>
                <div class=row>
                    <div class=col-md-5><img src={{URL::to('uploads/'.$data->photo)}} height=634 width=601 alt=""></div>
                    <div class=col-md-7><img src={{URL::to('uploads/'.$settings->logo)}} alt="" class=align-center height=253 width=253>
                        @if(session()->get('locale')=='zh')
                        {!!$data->brief_ch!!}
                        @else
                        {!!$data->brief_en!!}
                        @endif
                    </div>
                </div>
                <!-- <div class="row pad-top-large">
                    <hr>
                </div>
                <div class="row content-row pad-top-large">
                    <div class=col-md-5><img src={{URL::to('front_asset/images/about/content-image-2.jpg')}} alt="" height=562 width=570></div>
                    <div class=col-md-6>
                        <h2>Farmers</h2>
                        <h3>Lorem Ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div> -->
            </div>
        </section>
       
        @stop