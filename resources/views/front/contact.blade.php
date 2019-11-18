@extends('front.template')
@section('title')
Contact us
@stop
@section('body')
<section class="content-section pad-top-small">
    <div class=container>
        <div class=col-md-6><img src={{URL::to('front_asset/images/about/content-image-3.jpg')}} height=430 width=570 alt=""></div>
        <div class=col-md-6>
            <div class=heading>
                <h2>Contact us</h2><br>
            </div>
            <div class="" style="text-align:justify">
                @if(session()->get('locale')=='zh')
                {!!$data->contact_brief_ch!!}
                @else
                {!!$data->contact_brief_en!!}
                @endif
            </div>
            <div class=pad-top-large>
                @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
                
                    {{ Form::open(array('url' => '/send','files'=>true)) }}
                    <div class=row>
                        <div class="col-md-6 form-group">
                            <input type=text class="form-control input-lg" placeholder="Your Name" required="" name="name">
                        </div>
                        <div class="col-md-6 form-group">
                            <input type=email class="form-control input-lg" placeholder=Email required="" name="email">
                        </div>
                    </div>
                    <div class=form-group>
                        <input type=text class="form-control input-lg" placeholder=Subject required="" name="subject">
                    </div>
                    <div class=form-group>
                        <textarea rows=5 class="form-control input-lg" placeholder=Message required="" name="message"></textarea>
                    </div>
                    <div class=form-group>
                        <input type=submit class="btn btn-lg btn-primary pull-right hvr-shutter-out-vertical" value=Submit>
                    </div>
                    <div></div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
@stop