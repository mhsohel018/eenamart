@extends('front.template')
@section('title')
@if(session()->get('locale')=='zh')
                  {{$product->name_ch}}
                  @else
                  {{$product->name_en}}
                  @endif
@stop
@section('body')


<link rel="stylesheet" href="{{URL::to('front_asset/product_files/mbcsmbmcp.css')}}" type="text/css" />
<link rel="stylesheet" href="{{URL::to('front_asset/jqzoom/css/jquery.jqzoom.css')}}" type="text/css">
<style type"text/css">

a img,:link img,:visited img { border: none; }
table { border-collapse: collapse; border-spacing: 0; }
:focus { outline: none; }
*{margin:0;padding:0;}
p, blockquote, dd, dt{margin:0 0 8px 0;line-height:1.5em;}
fieldset {padding:0px;padding-left:7px;padding-right:7px;padding-bottom:7px;}
fieldset legend{margin-left:15px;padding-left:3px;padding-right:3px;color:#333;}
dl dd{margin:0px;}
dl dt{}

.clearfix:after{clear:both;content:".";display:block;font-size:0;height:0;line-height:0;visibility:hidden;}
.clearfix{display:block;zoom:1}


ul#thumblist{display:block;}
ul#thumblist li{float:left;margin-right:2px;list-style:none;}
ul#thumblist li a{display:block;border:1px solid #CCC;}
ul#thumblist li a.zoomThumbActive{
  border:1px solid red;
}

.jqzoom{

  text-decoration:none;
  float:left;
}

</style>


<section class="content-layout content-section">
  <div class=container>
   <h1 class="produts_title">{{trans('general.products')}} {{trans('general.details')}}</h1>
   <div class="row">
     <div class="col-md-7 product_img">
      
      <!-- Product image starts here -->
      <div id="content" >
        <div class="clearfix">
          <a href="{{URL::to('uploads/'.$product->photo)}}" class="jqzoom" rel='gal1'  title="triumph" >
            <img src="{{URL::to('uploads/'.$product->photo)}}"  title="triumph"  style="border: 4px solid #666;">
          </a>
        </div>
      </div>
      <!-- Product Image ends here -->

    </div> 
    <div class="col-md-5 produts_details">
     <h1>
       @if(session()->get('locale')=='zh')
                  {{$product->name_ch}}
                  @else
                  {{$product->name_en}}
                  @endif
     </h1>
     <!-- <ul class="list-inline">
      <li>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </li>
      <li class="reviews">2 reviews  |</li>
      <li class="reviews">Write a review</li>
    </ul> -->

    <h3>Info</h3>
    <ul>
      <li> - Brand: @if(session()->get('locale')=='zh')
                  {{$product->b_ch}}
                  @else
                  {{$product->b_en}}
                  @endif</li>
      <li>- {{trans('general.availability')}}: In Stock</li>
    </ul>
    <hr class="hr">

    <h2 class="price">$
      @if(session()->get('locale')=='zh')
      {{$product->price_ch}}
      @else
      {{$product->price_en}}
      @endif <small>({{trans('general.per')}} 
      @if(session()->get('locale')=='zh')
      {{$product->unit_ch}}
      @else
      {{$product->uni_en}}
      @endif)</small></h2>


    <hr class="hr">
   </div> 
 </div>
 <div class="row">
  <div class="col-md-12 description">
    <h1>{{trans('general.description')}}</h1>
    @if(session()->get('locale')=='zh')
      {!!$product->description_ch!!}
      @else
      {!!$product->description_en!!}
      @endif
  </div>
  
</div>
</div>
</section>

@stop
@section('footer')
<script type="text/javascript" src="{{URL::to('front_asset/product_files/mbjsmbmcp.js')}}"></script>

<script src="{{URL::to('front_asset/jqzoom/js/jquery-1.5.js')}}" type="text/javascript"></script>
<script src="{{URL::to('front_asset/jqzoom/js/jquery.jqzoom-core.js')}}" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function() {
  $('.jqzoom').jqzoom({
    zoomType: 'innerzoom',
    preloadImages: false,
    alwaysOn:false
  });
});


</script>
@stop