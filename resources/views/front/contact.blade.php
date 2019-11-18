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
                        <h2>Contact us</h2>
                        <p class=sub>Multipurpose theme</p>
                    </div>
                    <div class="">
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                    </div>
                    <div class=pad-top-large>
                        <form name=contact-form action=# data-parsley-validate="">
                            <div class=row>
                                <div class="col-md-6 form-group">
                                    <input type=text class="form-control input-lg" placeholder="Your Name" required="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type=email class="form-control input-lg" placeholder=Email required="">
                                </div>
                            </div>
                            <div class=form-group>
                                <input type=text class="form-control input-lg" placeholder=Subject required="">
                            </div>
                            <div class=form-group>
                                <textarea rows=5 class="form-control input-lg" placeholder=Message required=""></textarea>
                            </div>
                            <div class=form-group>
                                <input type=submit class="btn btn-lg btn-primary pull-right hvr-shutter-out-vertical" value=Submit>
                            </div>
                            <div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @stop