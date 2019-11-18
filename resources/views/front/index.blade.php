<?php use \App\Products; ?>
@extends('front.template')
@section('title')
{{ trans('general.name')}}
@stop
@section('banner')
<style>
@media screen and (min-width: 992px){
    .image-banner-2, .image-banner-1, .text-1, .main-header-v1 .banner-caption-text h2 {
        opacity: 1;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        zoom: 1;
    }
}
</style>
<div class="banner-v1 banner-image-container" style="background-image: url({{URL::to('uploads/'.$data->banner)}})"><img src={{URL::to('uploads/'.$data->banner)}} height=1098 width=1920 alt="" class=banner-image>
    <div class="banner-caption-v1">
        <div class="container">
            <div class="banner-caption-text">
                <h1 class="text-1"><img src={{URL::to('./front_asset/images/veg-iconc-1.png')}} height=96 width=147 alt="">{{ trans('general.name')}}</h1>
                <h2 style="opacity: 1"><img src={{URL::to('front_asset/images/banner-text-1.png height=142')}} width=436 alt=""></h2>
                <p>
                    @if(session()->get('locale')=='zh')
                    {!!$data->welcome_msg_ch!!}
                    @else
                    {!!$data->welcome_msg_en!!}
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
@stop
@section('body')
<section class="content-section content-1">
    <div class=container>
        <div class="image-banner-2 col-md-4">
            @if(session()->get('locale')=='zh')
            <img src={{URL::to('uploads/'.$data->about_msg_photo_en)}} height=453 width=370 alt="">
            @else
            <img src={{URL::to('uploads/'.$data->about_msg_photo_ch)}} height=453 width=370 alt="">
            @endif
        </div>
        <div class="col-md-8 content-block">
            <h2>{{ trans('general.about_msg_title')}}</h2>
            <p>@if(session()->get('locale')=='zh')
                {!!$data->about_msg_ch!!}
                @else
                {!!$data->about_msg_en!!}
                @endif</p>
                <!-- <p><a class="btn btn-primary hvr-shutter-out-vertical vg-btn-lg" href=#>Read more</a></p> -->
            </div>
        </div>
    </section>
    <section class="content-section content-2">
        <div class=container>
            <div class=row>
                <div class="col-xs-12 text-center">
                    <h2>{{ trans('general.service')}}</h2><br>
                    <p>@if(session()->get('locale')=='zh')
                        {!!$data->service_msg_ch!!}
                        @else
                        {!!$data->service_msg_en!!}
                        @endif</p>
                    </div>
                </div>
                <div class="row pad-top-large">
                    <div class=image-banner-1>
                        @if(session()->get('locale')=='en')
                        <img src={{URL::to('uploads/'.$data->service_one_en)}} height=546 width=270 alt="">
                        @else
                        <img src={{URL::to('uploads/'.$data->service_one_ch)}} height=546 width=270 alt="">
                        @endif
                    </div>
                    <div class=image-banner-1>
                        @if(session()->get('locale')=='en')
                        <img src={{URL::to('uploads/'.$data->service_two_en)}} height=546 width=270 alt="">
                        @else
                        <img src={{URL::to('uploads/'.$data->service_two_ch)}} height=546 width=270 alt="">
                        @endif
                    </div>
                    <div class=image-banner-1>
                        @if(session()->get('locale')=='en')
                        <img src={{URL::to('uploads/'.$data->service_three_en)}} height=546 width=270 alt="">
                        @else
                        <img src={{URL::to('uploads/'.$data->service_three_ch)}} height=546 width=270 alt="">
                        @endif
                    </div>
                    <div class=image-banner-1>
                        @if(session()->get('locale')=='en')
                        <img src={{URL::to('uploads/'.$data->service_four_en)}} height=546 width=270 alt="">
                        @else
                        <img src={{URL::to('uploads/'.$data->service_four_ch)}} height=546 width=270 alt="">
                        @endif
                    </div>
                </div>
            <!-- <div class=row>
            <div class="col-xs-12 text-center"><a href="#" class="btn btn-primary hvr-shutter-out-vertical vg-btn-lg">Know more</a></div> -->
        </div>
    </div>
</section>
<section class="content-section content-3">
    <div class=container>
        <div class=col-md-6><img src={{URL::to('uploads/'.$data->middle_part_photo)}} height=693 width=559 alt=""></div>
        <div class=col-md-6>
            <h2>@if(session()->get('locale')=='en')
                {!!$data->middle_part_title_en!!}
                @else
                {!!$data->middle_part_title_ch!!}
                @endif</h2>
                <p>@if(session()->get('locale')=='en')
                    {!!$data->middle_part_msg_en!!}
                    @else
                    {!!$data->middle_part_msg_ch!!}
                    @endif</p>
                    <!-- <p><a href=# class="btn btn-primary hvr-shutter-out-vertical vg-btn-lg">Purchase Now</a></p> -->
                </div>
            </div>
        </section>
        <section class="content-section content-4">
            <div class=container>
                <div class="row heading text-center">
                    <div class=col-xs-12>
                        <h2>{{trans('general.latest_product')}}</h2>
                        <p>
                            @if(session()->get('locale')=='en')
                            {!!$data->latest_product_msg_en!!}
                            @else
                            {!!$data->latest_product_msg_ch!!}
                            @endif
                        </p>
                    </div>
                </div>
                <div class=farming-tipps-slider>
                    <div class=owl-carousel>
                        @foreach($latest as $l)
                        <?php $p=Products::find($l->productID); ?>
                        <div class=item>
                            <div class=text-block-v1>
                                <!-- <div class=badge-v1>Tips 2</div> -->
                                <h3>
                                    @if(session()->get('locale')=='en')
                                    {!!$p->name_en!!}
                                    @else
                                    {!!$p->name_ch!!}
                                    @endif
                                </h3>
                                <img src="{{URL::to('uploads/'.$p->photo)}}" class="img-responsive">
                                @if(session()->get('locale')=='en')
                                {!!$p->description_en!!}
                                @else
                                {!!$p->description_ch!!}
                                @endif
                                <p class=text-center><a href={{URL::to('/product/'.$p->id)}} class="btn btn-info hvr-shutter-out-vertical vg-btn-lg">{{trans('general.view_details')}}</a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section content-5">
            <div class=container>
                <div class="row heading">
                    <div class="col-xs-12 text-center">
                        <h2>{{trans('general.new_week_featured')}}</h2><br>
                        <p>
                            @if(session()->get('locale')=='en')
                            {!!$data->featured_msg_en!!}
                            @else
                            {!!$data->featured_msg_ch!!}
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row pad-top-large">
                    <div class=col-sm-7>
                        <div class="image-block-v1 big"><img src={{URL::to('uploads/'.$data->featured_one_photo)}} height=721 width=669 alt="">
                            <div class=block-meta-v1>
                                <h4>@if(session()->get('locale')=='en')
                                    {!!$data->featured_one_title_en!!}
                                    @else
                                    {!!$data->featured_one_title_ch!!}
                                    @endif</h4>
                                    <p><a href="{{URL::to('/product/'.$data->featured_one_id)}}" class="btn btn-primary hvr-shutter-out-vertical vg-btn-lg">{{trans('general.read-more')}}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class=col-sm-5>
                            <div class=image-block-v1><img src={{URL::to('uploads/'.$data->featured_two_photo)}} height=343 width=470 alt="">
                                <div class=block-meta-v1>
                                    <h4>@if(session()->get('locale')=='en')
                                        {!!$data->featured_two_title_en!!}
                                        @else
                                        {!!$data->featured_two_title_ch!!}
                                        @endif</h4>
                                        <p><a href="{{URL::to('/product/'.$data->featured_two_id)}}" class="btn btn-primary hvr-shutter-out-vertical vg-btn-lg">{{trans('general.read-more')}}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class=col-sm-5>
                                <div class=image-block-v1><img src={{URL::to('uploads/'.$data->featured_three_photo)}} height=343 width=470 alt="">
                                    <div class=block-meta-v1>
                                        <h4>@if(session()->get('locale')=='en')
                                            {!!$data->featured_three_title_en!!}
                                            @else
                                            {!!$data->featured_three_title_ch!!}
                                            @endif</h4>
                                            <p><a href="{{URL::to('/product/'.$data->featured_three_id)}}" class="btn btn-primary hvr-shutter-out-vertical vg-btn-lg">{{trans('general.read-more')}}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="content-section content-6">
                        <div class=container>
                            <div class="row heading text-center">
                                <div class=col-xs-12>
                                    <h2>{{trans('general.our_product')}}</h2><br>
                                    <p>
                                        @if(session()->get('locale')=='en')
                                        {!!$data->our_product_msg_en!!}
                                        @else
                                        {!!$data->our_product_msg_ch!!}
                                        @endif
                                    </p>
                                </div>
                                <div class="row-float pad-top-large product-list-filter">
                                    <div class=col-md-2><a href=# class="btn-block btn btn-outline hvr-back-pulse" data-filter=*>All</a></div>
                                    @foreach($category as $c)
                                    <div class=col-md-2><a href=# class="btn-block btn btn-outline hvr-back-pulse" data-filter=.category_{{$c->id}}>
                                    @if(session()->get('locale')=='en')
                                        {!!$c->category_en!!}
                                        @else
                                        {!!$c->category_ch!!}
                                        @endif</a></div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product-list row pad-top-large">
                                @foreach($product as $p)
                                <div class="product-grid category_{{$p->categoryID}}">
                                    <div class=product-v1>
                                        <figure><img src={{URL::to('uploads/'.$p->photo)}} height=410 width=370 alt=""></figure>
                                        <div class=description>
                                            <h3>@if(session()->get('locale')=='en')
                                        {!!$data->name_en!!}
                                        @else
                                        {!!$data->name_ch!!}
                                        @endif</h3>
                                            <p><a href="{{URL::to('/product/'.$p->id)}}" class="btn btn-info hvr-shutter-out-vertical">{{trans('general.view_details')}}</a></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <div class="content-section content-newsletter text-center color-options-1">
                        <div class=container>
                            <div class=row>
                                <div class="col-xs-12 heading">
                                    <h2>{{trans('general.subscribe_to_us')}}</h2>
                                    <p>
                                        @if(session()->get('locale')=='en')
                                        {!!$data->subscribe_msg_en!!}
                                        @else
                                        {!!$data->subscribe_msg_ch!!}
                                        @endif
                                    </p>
                                </div>
                                <div class="row-float pad-top-large">
                                    <form class="newsletter-form container" action=# method=post data-parsley-validate="">
                                        <input type=email placeholder="Your email address" class=form-control required="">
                                        <button type=submit class="btn btn-default hvr-back-pulse">{{trans('general.subscribe_now')}}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    <!-- <div class="content-section content-farmers">
        <div class=container>
            <div class=row>
                <div class="col-xs-12 heading text-center">
                    <h2>Our Farmers</h2><br>
                    <p>long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <span class=text-break></span> The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                </div>
                <div class="row-float pad-top-large">
                    <div class=farmer-grid>
                        <div class=farmer-v1>
                            <figure><img src={{URL::to('front_asset/images/homepage/farmer-1.png')}} alt=""></figure>
                            <div class=description>
                                <h3>Nicole Jonshon</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
                                <div class=social-links>
                                    <a href=# class="fa fa-facebook"></a>
                                    <a href=# class="fa fa-twitter"></a>
                                    <a href=# class="fa fa-behance"></a>
                                    <a href=# class="fa fa-vimeo-square"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=farmer-grid>
                        <div class=farmer-v1>
                            <figure><img src={{URL::to('front_asset/images/homepage/farmer-2.png')}} alt=""></figure>
                            <div class=description>
                                <h3>John Doe</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
                                <div class=social-links>
                                    <a href=# class="fa fa-facebook"></a>
                                    <a href=# class="fa fa-twitter"></a>
                                    <a href=# class="fa fa-behance"></a>
                                    <a href=# class="fa fa-vimeo-square"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=farmer-grid>
                        <div class=farmer-v1>
                            <figure><img src={{URL::to('front_asset/images/homepage/farmer-3.png')}} alt=""></figure>
                            <div class=description>
                                <h3>william smith</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,</p>
                                <div class=social-links>
                                    <a href=# class="fa fa-facebook"></a>
                                    <a href=# class="fa fa-twitter"></a>
                                    <a href=# class="fa fa-behance"></a>
                                    <a href=# class="fa fa-vimeo-square"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    @stop