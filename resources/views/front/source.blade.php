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
                        @if(session()->get('locale')=='zh')
                {!!$data->source_brief_ch!!}
                @else
                {!!$data->source_brief_en!!}
                @endif
                    </div>
                </div>
                <div class=farmers>
                    <?php $i=0; ?>
                    @foreach($list as $l)
                    <?php  $i+=1;?>
                    @if($i%2==1)
                    <div class="farmer farmer-image-left">
                        <figure><img src={{URL::to('uploads/'.$l->photo)}} height=502 width=600 alt=""></figure>
                        <div class=farmer-details>
                            <div class=farmer-details-content>
                                <h2>
                                    @if(session()->get('locale')=='zh')
                    {!!$l->name_ch!!}
                    @else
                    {!!$l->name_en!!}
                    @endif
                                </h2><br>
                                <p class=meta> <a href=#>@if(session()->get('locale')=='zh')
                    {!!$l->designation_ch!!}
                    @else
                    {!!$l->designation_en!!}
                    @endif</a></p>
                                @if(session()->get('locale')=='zh')
                    {!!$l->description_ch!!}
                    @else
                    {!!$l->description_en!!}
                    @endif
                                
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="farmer farmer-image-right">
                        <figure><img src={{URL::to('uploads/'.$l->photo)}} height=502 width=600 alt=""></figure>
                        <div class=farmer-details>
                            <div class=farmer-details-content>
                                <h2>
                                    @if(session()->get('locale')=='zh')
                    {!!$l->name_ch!!}
                    @else
                    {!!$l->name_en!!}
                    @endif
                                </h2><br>
                                <p class=meta> <a href=#>@if(session()->get('locale')=='zh')
                    {!!$l->designation_ch!!}
                    @else
                    {!!$l->designation_en!!}
                    @endif</a></p>
                                @if(session()->get('locale')=='zh')
                    {!!$l->description_ch!!}
                    @else
                    {!!$l->description_en!!}
                    @endif
                                
                            </div>
                        </div>
                    </div>
                   @endif
                    @endforeach
                </div>
            </div>
        </section>
        @stop