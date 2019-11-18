<?php use App\SubCategory; use App\Products;  ?>
@extends('front.template')
@section('title')
Shop
@stop
@section('body')
<link rel="stylesheet" href="{{URL::to('front_asset/product_files/mbcsmbmcp.css')}}" type="text/css" />
<section class="content-layout content-section">
  <div class=container>
      <div class="row">
           <div class="col-md-3 category">
                <h3><i class="fa fa-list-alt" aria-hidden="true"></i>Category List </h3>
                <!-- category menu -->
                @foreach($category as $c)
                <div id="mbmcpebul_wrapper" style="width: 184px;">
                     <ul id="mbmcpebul_table" class="mbmcpebul_menulist css_menu">
                          <li>
                               <div class="buttonbg gradient_button gradient30">
                                    <div class="arrow">
                                         <a>
                                               @if(session()->get('locale')=='zh')
                                               {{$c->category_ch}}
                                               @else
                                               {{$c->category_en}}
                                               @endif
                                         </a>
                                   </div>
                             </div>
                             <ul class="gradient_menu gradient126">
                              <?php 
                              $sub=SubCategory::where('categoryID',$c->id)->get();
                              ?>
                              @foreach($sub as $s)
                              <li class="gradient_menuitem gradient31 first_item"><a href="{{URL::to('/shop/'.$s->id)}}">
                                    @if(session()->get('locale')=='zh')
                                    {{$s->sub_category_ch}}
                                    @else
                                    {{$s->sub_category_en}}
                                    @endif
                              </a></li>
                              @endforeach
                        </ul>
                  </li>
            </ul>
      </div>
      @endforeach


      <!-- /category menu -->

</div>
<div class="col-md-9">
  <h2> {{trans('general.trending')}} <b>{{trans('general.products')}}</b></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">

    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
          <div class="item carousel-item active">
              <div class="row">
                  

     @foreach($latest as $l)          
<div class="col-sm-3">
    <div class="thumb-wrapper">
        <div class="img-box">
            <img src="{{URL::to('/uploads/'.$l->photo)}} " class="img-responsive img-fluid" alt="">
      </div>
      <div class="thumb-content" style="background: #f5eeed">
            <h4><a href="{{URL::to('/product/'.$l->id)}}">
                  @if(session()->get('locale')=='zh')
                  {{$l->name_ch}}
                  @else
                  {{$l->name_en}}
                  @endif
                  </a>
            </h4>
            <p class="item-price"> <span>
@if(session()->get('locale')=='zh')
                  {{$l->price_ch}}
                  @else
                  {{$l->price_en}}
                  @endif
                  / 
                  @if(session()->get('locale')=='zh')
                  {{$l->unit_ch}}
                  @else
                  {{$l->uni_en}}
                  @endif
            </span></p>
  </div>            
</div>
</div>
@endforeach
</div>
</div>


</div>
<!-- Carousel controls -->
<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
    <i class="fa fa-angle-left"></i>
</a>
<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
    <i class="fa fa-angle-right"></i>
</a>
</div>


</div>
</div>
<!-- <div class="row pad-top-small">
    <div class="col-md-12 heading text-center">
      <h2>Organic Vegetables</h2><br>
      <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, <span class=text-break></span> as opposed to using Content here, content here', making it look like readable English.</p>
</div>
</div> -->
<!-- <div class=product-list-v1>
    <div class=column>
      <div class=product>
        <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('front_asset/images/shop/product-thumb-1.jpg')}}><img src={{URL::to('front_asset/images/shop/product-thumb-1.jpg')}} alt="" height=299 width=370></a>
        <div class=box-background>
          <h3 class=title>Fresh Capsicum</h3>
          <p class=excerpt>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here,</p>
          <p class=price><span class=currency>$</span> <span class=amount>45.00</span> <span class=per>(Per kg)</span></p>
          <div class=buy-options>
            <select>
              <option>Quantity</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
        <select>
              <option>Type</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
  </div>
  <div class=options><a href="#" class=add-to-wishlist><i class="fa fa-heart"></i> Add to wish list</a> <a href="product-details.html" class="btn btn-primary add-to-cart hvr-shutter-out-vertical btn-with-icon-right">Add to cart <i class="fa fa-cart-plus"></i></a></div>
</div>
</div>
</div>
<div class=column>
      <div class=product>
        <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('front_asset/images/shop/product-thumb-1-1.jpg')}}><img src={{URL::to('front_asset/images/shop/product-thumb-1-1.jpg')}} alt="" height=299 width=370></a>
        <div class=box-background>
          <h3 class=title>Fresh Capsicum</h3>
          <p class=excerpt>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here,</p>
          <p class=price><span class=currency>$</span> <span class=amount>45.00</span> <span class=per>(Per kg)</span></p>
          <div class=buy-options>
            <select>
              <option>Quantity</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
        <select>
              <option>Type</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
  </div>
  <div class=options><a href="#" class=add-to-wishlist><i class="fa fa-heart"></i> Add to wish list</a> <a href="product-details.html" class="btn btn-primary add-to-cart btn-with-icon-right hvr-shutter-out-vertical">Add to cart <i class="fa fa-cart-plus"></i></a></div>
</div>
</div>
</div>
<div class=column>
      <div class=product>
        <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('front_asset/images/shop/product-thumb-1-2.jpg')}}><img src={{URL::to('front_asset/images/shop/product-thumb-1-2.jpg')}} alt="" height=299 width=370></a>
        <div class=box-background>
          <h3 class=title>Fresh Capsicum</h3>
          <p class=excerpt>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here,</p>
          <p class=price><span class=currency>$</span> <span class=amount>45.00</span> <span class=per>(Per kg)</span></p>
          <div class=buy-options>
            <select>
              <option>Quantity</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
        <select>
              <option>Type</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
  </div>
  <div class=options><a href="#" class=add-to-wishlist><i class="fa fa-heart"></i> Add to wish list</a> <a href="product-details.html" class="btn btn-primary add-to-cart btn-with-icon-right hvr-shutter-out-vertical">Add to cart <i class="fa fa-cart-plus"></i></a></div>
</div>
</div>
</div>
</div> -->
<!-- <div class="product-list-v1-pager text-center">
    <nav>
      <ul class=pagination>
        <li><a href=# aria-label=Previous><span aria-hidden=true class="fa fa-angle-left"></span></a></li>
        <li class=active><a href=#>1</a></li>
        <li><a href=#>2</a></li>
        <li><a href=# aria-label=Next><span aria-hidden=true class="fa fa-angle-right"></span></a></li>
  </ul>
</nav>
</div> -->
<!-- <div class="row pad-top-large">
    <div class="col-md-12 heading text-center">
      <h2>Fresh Fruits</h2><br>
      <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, <span class=text-break></span> as opposed to using Content here, content here', making it look like readable English.</p>
</div>
</div> -->
<!-- <div class="product-list-v2 pad-top-large">
    <div class=column>
      <div class=product>
        <div class=product-image>
          <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('front_asset/images/shop/product-thumb-2.jpg')}}><img src={{URL::to('front_asset/images/shop/product-thumb-2.jpg')}} alt="" height=303 width=570></a>
    </div>
    <div class=box-background>
          <h3 class=title>Fresh Capsicum</h3>
          <p class=excerpt>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here,</p>
          <p class=price><span class=currency>$</span> <span class=amount>45.00</span> <span class=per>(Per kg)</span></p>
          <div class=buy-options>
            <select>
              <option>Quantity</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
        <select>
              <option>Type</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
  </div>
  <div class=options><a href="#" class=add-to-wishlist><i class="fa fa-heart"></i> Add to wish list</a> <a href="product-details.html" class="btn btn-primary add-to-cart btn-with-icon-right hvr-shutter-out-vertical">Add to cart <i class="fa fa-cart-plus"></i></a></div>
</div>
</div>
</div>
<div class=column>
      <div class=product>
        <div class=product-image>
          <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('front_asset/images/shop/product-thumb-2-1.jpg')}}><img src={{URL::to('front_asset/images/shop/product-thumb-2-1.jpg')}} alt="" height=303 width=570></a>
    </div>
    <div class=box-background>
          <h3 class=title>Fresh Capsicum</h3>
          <p class=excerpt>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here,</p>
          <p class=price><span class=currency>$</span> <span class=amount>45.00</span> <span class=per>(Per kg)</span></p>
          <div class=buy-options>
            <select>
              <option>Quantity</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
        <select>
              <option>Type</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
  </div>
  <div class=options><a href="#" class=add-to-wishlist><i class="fa fa-heart"></i> Add to wish list</a> <a href="product-details.html" class="btn btn-primary add-to-cart btn-with-icon-right hvr-shutter-out-vertical">Add to cart <i class="fa fa-cart-plus"></i></a></div>
</div>
</div>
</div>
<div class=column>
      <div class=product>
        <div class=product-image>
          <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('front_asset/images/shop/product-thumb-2-2.jpg')}}><img src={{URL::to('front_asset/images/shop/product-thumb-2-2.jpg')}} alt="" height=303 width=570></a>
    </div>
    <div class=box-background>
          <h3 class=title>Fresh Capsicum</h3>
          <p class=excerpt>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here,</p>
          <p class=price><span class=currency>$</span> <span class=amount>45.00</span> <span class=per>(Per kg)</span></p>
          <div class=buy-options>
            <select>
              <option>Quantity</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
        <select>
              <option>Type</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
  </div>
  <div class=options><a href="#" class=add-to-wishlist><i class="fa fa-heart"></i> Add to wish list</a> <a href="product-details.html" class="btn btn-primary add-to-cart btn-with-icon-right hvr-shutter-out-vertical">Add to cart <i class="fa fa-cart-plus"></i></a></div>
</div>
</div>
</div>
</div> -->
<!-- 
<div class="row-float pad-top-large">
    <div class="col-md-12 heading text-center">
      <h2>Dried Powders</h2><br>
      <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, <span class=text-break></span> as opposed to using Content here, content here', making it look like readable English.</p>
</div>
</div>
<div class=product-list-v3>
    <div class=column>
      <div class=product>
        <div class=product-image>
          <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('front_asset/images/shop/product-thumb-3.jpg')}}><img src={{URL::to('front_asset/images/shop/product-thumb-3.jpg')}} alt="" height=340 width=340></a>
    </div>
    <div class=box-background>
          <h3 class=title>Fresh Capsicum</h3>
          <p class=excerpt>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here,</p>
          <p class=price><span class=currency>$</span> <span class=amount>45.00</span> <span class=per>(Per kg)</span></p>
          <div class=buy-options>
            <select>
              <option>Quantity</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
        <select>
              <option>Type</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
  </div>
  <div class=options><a href="product-details.html" class=add-to-wishlist><i class="fa fa-heart"></i> Add to wish list</a> <a href="#" class="btn btn-primary add-to-cart hvr-shutter-out-vertical btn-with-icon-right">Add to cart <i class="fa fa-cart-plus"></i></a></div>
</div>
</div>
</div>
<div class=column>
      <div class=product>
        <div class=product-image>
          <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('front_asset/images/shop/product-thumb-3-1.jpg')}}><img src={{URL::to('front_asset/images/shop/product-thumb-3-1.jpg')}} alt=""></a>
    </div>
    <div class=box-background>
          <h3 class=title>Fresh Capsicum</h3>
          <p class=excerpt>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here,</p>
          <p class=price><span class=currency>$</span> <span class=amount>45.00</span> <span class=per>(Per kg)</span></p>
          <div class=buy-options>
            <select>
              <option>Quantity</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
        <select>
              <option>Type</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
  </div>
  <div class=options><a href="#" class=add-to-wishlist><i class="fa fa-heart"></i> Add to wish list</a> <a href="product-details.html" class="btn btn-primary add-to-cart hvr-shutter-out-vertical btn-with-icon-right">Add to cart <i class="fa fa-cart-plus"></i></a></div>
</div>
</div>
</div>
<div class=column>
      <div class=product>
        <div class=product-image>
          <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('front_asset/images/shop/product-thumb-3-2.jpg')}}><img src={{URL::to('front_asset/images/shop/product-thumb-3-2.jpg')}} alt=""></a>
    </div>
    <div class=box-background>
          <h3 class=title>Fresh Capsicum</h3>
          <p class=excerpt>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here,</p>
          <p class=price><span class=currency>$</span> <span class=amount>45.00</span> <span class=per>(Per kg)</span></p>
          <div class=buy-options>
            <select>
              <option>Quantity</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
        <select>
              <option>Type</option>
              <option>1 kg</option>
              <option>5 kg</option>
        </select>
  </div>
  <div class=options><a href="#" class=add-to-wishlist><i class="fa fa-heart"></i> Add to wish list</a> <a href="product-details.html" class="btn btn-primary add-to-cart hvr-shutter-out-vertical btn-with-icon-right">Add to cart <i class="fa fa-cart-plus"></i></a></div>
</div>
</div>
</div>
</div> -->
<?php $i=1;  ?>
@foreach($subcategory_1['list'] as $sub)
<?php 
if($subcategory_1['type']=='all'){
$products=Products::where('sub_categoryID',$sub->id)->limit(4)->get(); 
}else{
    $products=Products::where('sub_categoryID',$sub->id)->get(); 
}
?>
@if($i%2==1)
<div class="row-float pad-top-large">
    <div class="col-md-12 heading text-center">
      <h2>@if(session()->get('locale')=='zh')
      {{$sub->sub_category_ch}}
      @else
      {{$sub->sub_category_en}}
      @endif</h2><br>
      @if(session()->get('locale')=='zh')
      {!!$sub->brief_ch!!}
      @else
      {!!$sub->brief_en!!}
      @endif
</div>
</div>
<div class=product-list-v4>
      @forelse($products as $p)
    <div class=column>
      <div class=product>
        <div class=product-image>
          <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('/uploads/'.$p->photo)}}><img src={{URL::to('/uploads/'.$p->photo)}} alt="" height=181 width=302></a>
    </div>
    <div class=box-background>
          <h3 class=title>
            @if(session()->get('locale')=='zh')
      {!!$p->name_ch!!}
      @else
      {!!$p->name_en!!}
      @endif
</h3>
          @if(session()->get('locale')=='zh')
      {!!$p->description_ch!!}
      @else
      {!!$p->description_en!!}
      @endif
    </div>
    <div class=product-footer>
          <p class=price><span class=currency>$</span> <span class=amount>
                @if(session()->get('locale')=='zh')
      {!!$p->price_ch!!}
      @else
      {!!$p->price_en!!}
      @endif
          </span> <span class=per>(Per @if(session()->get('locale')=='zh')
      {!!$p->unit_ch!!}
      @else
      {!!$p->uni_en!!}
      @endif)</span></p>
          <div class=buy-options>
            <a href="{{URL::to('/product/'.$p->id)}}" class="btn btn-primary add-to-cart hvr-shutter-out-vertical btn-with-icon-right">{{trans('general.view_details')}}</a>
  </div>
</div>
</div>
</div>
@empty
<p>NO PRODUCTS FOUNDS</p>
@endforelse
</div>
@else
<div class="row-float pad-top-large">
    <div class="col-md-12 heading text-center">
      <h2>@if(session()->get('locale')=='zh')
      {{$sub->sub_category_ch}}
      @else
      {{$sub->sub_category_en}}
      @endif</h2><br>
      @if(session()->get('locale')=='zh')
      {!!$sub->brief_ch!!}
      @else
      {!!$sub->brief_en!!}
      @endif
</div>
</div>
<div class="product-list-v2 pad-top-large">
      <?php $ii=0;?>
@forelse($products as $p)
<?php $ii+=1; ?>
@if($ii%2==1)
    <div class=column>
      <div class=product>
        <div class=product-image>
          <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('uploads/'.$p->photo)}}><img src={{URL::to('uploads/'.$p->photo)}} alt="" height=303 width=570></a>
    </div>
    <div class=box-background>
          <h3 class=title>
                @if(session()->get('locale')=='zh')
      {!!$p->name_ch!!}
      @else
      {!!$p->name_en!!}
      @endif
          </h3>
          @if(session()->get('locale')=='zh')
      {!!$p->description_ch!!}
      @else
      {!!$p->description_en!!}
      @endif
          <p class=price><span class=currency>$</span> <span class=amount>
                @if(session()->get('locale')=='zh')
      {!!$p->price_ch!!}
      @else
      {!!$p->price_en!!}
      @endif
          </span> <span class=per>(Per @if(session()->get('locale')=='zh')
      {!!$p->unit_ch!!}
      @else
      {!!$p->uni_en!!}
      @endif)</span></p>
          <div class=buy-options>
            <a href="{{URL::to('/product/'.$p->id)}}" class="btn btn-primary add-to-cart hvr-shutter-out-vertical btn-with-icon-right">{{trans('general.view_details')}}</a>
  </div>

</div>
</div>
</div>
@else
<div class=column>
      <div class="product product-image-right">
        <div class=product-image>
          <a class=mfp-image data-effect=mfp-zoom-in href={{URL::to('uploads/'.$p->photo)}}><img src={{URL::to('uploads/'.$p->photo)}} alt="" height=303 width=570></a>
    </div>
    <div class=box-background>
          <h3 class=title>
                @if(session()->get('locale')=='zh')
      {!!$p->name_ch!!}
      @else
      {!!$p->name_en!!}
      @endif
          </h3>
          @if(session()->get('locale')=='zh')
      {!!$p->description_ch!!}
      @else
      {!!$p->description_en!!}
      @endif
          <p class=price><span class=currency>$</span> <span class=amount>
                @if(session()->get('locale')=='zh')
      {!!$p->price_ch!!}
      @else
      {!!$p->price_en!!}
      @endif
          </span> <span class=per>({{trans('general.per')}} @if(session()->get('locale')=='zh')
      {!!$p->unit_ch!!}
      @else
      {!!$p->uni_en!!}
      @endif)</span></p>
          <div class=buy-options>
            <a href="{{URL::to('/product/'.$p->id)}}" class="btn btn-primary add-to-cart hvr-shutter-out-vertical btn-with-icon-right">{{trans('general.view_details')}}</a>
  </div>
</div>
</div>
</div>
@endif
@empty
<p>NO PRODUCTS FOUNDS</p>
@endforelse
</div>
@endif
<?php $i+=1; ?>
@endforeach
</div>
</section>
<script type="text/javascript" src="{{URL::to('front_asset/product_files/mbjsmbmcp.js')}}"></script>
@stop
