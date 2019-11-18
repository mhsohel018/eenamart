@extends('front.template')
@section('title')
Product Name
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
   <h1 class="produts_title">Product Details</h1>
   <div class="row">
     <div class="col-md-7 product_img">
      
      <!-- Product image starts here -->
      <div id="content" >
        <div class="clearfix">
          <a href="{{URL::to('front_asset/jqzoom/imgProd/triumph_big1.jpg')}}" class="jqzoom" rel='gal1'  title="triumph" >
            <img src="{{URL::to('front_asset/jqzoom/imgProd/triumph_small1.jpg')}}"  title="triumph"  style="border: 4px solid #666;">
          </a>
        </div>
      </div>
      <!-- Product Image ends here -->

    </div> 
    <div class="col-md-5 produts_details">
     <h1>CASHMERE CUFF VINTAGE LEVI MAXI</h1>
     <ul class="list-inline">
      <li>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
      </li>
      <li class="reviews">2 reviews  |</li>
      <li class="reviews">Write a review</li>
    </ul>

    <h3>Info</h3>
    <ul>
      <li> - Brand: Apple</li>
      <li>- Product Code: Product 5</li>
      <li>- Availability: In Stock</li>
    </ul>
    <hr class="hr">

    <h2 class="price">$122.00</h2>
    <label>Ex Tax: $100.00</label>


    <hr class="hr">

    <label>Qty</label>
    <input type="number" name="Qty" value="2">


    <div class="adt_to_cart">
     <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> 
       ADD TO CART</button>
     </div>

   </div> 
 </div>
 <div class="row">
  <div class="col-md-12 description">
    <h1>Description</h1>
    <p>


      Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitae, cursus volutpat lectus. Aliquam tincidunt leo ac dui efficitur, eget tristique sapien faucibus. Etiam tempor quam mauris,Fusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitaeFusce ut pellentesque justo. Aliquam sit amet tincidunt orci. Praesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitae, cursus volutpat lectus. Aliquam tincidunt leo ac dui efficitur, eget tristique sapien faucibus. Etiam tempor quam mauris,raesent mauris lorem, iaculis et blandit eget, tristique id risus. Donec nibh lorem, rhoncus a orci vitae, cursus volutpat lectus. Aliquam tincidunt leo ac dui efficitur, eget tristique sapien faucibus.


    </p>
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