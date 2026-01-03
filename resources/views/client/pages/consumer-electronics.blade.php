@extends('client.layout.master')
@section('page_title', __('Consumer Electronics'))
@section('content')
@php
$locale = app()->getLocale(); // en, es, de, fr, ru, zh
use App\Models\Translation;
@endphp



<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_four_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_four" data-version="5.4.1">
            <ul>
                @foreach ($sliders as $slider)
                <li data-index="rs-17" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="850" data-thumb="" data-delay="5999" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/' . $slider->background_image) }}" alt="" title="{{$slider->getTitle($locale)}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-17-layer-40"
                        data-x="100"
                        data-y=""
                        data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-type="image"
                        data-responsive_offset="on"
                        data-frames='[{"delay":300,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 5;"><img src="{{ asset('storage/' . $slider->content_image) }}" alt="" data-ww="735px" data-hh="887px" width="735" height="887" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption rev-btn  tp-resizeme"
                        id="slide-17-layer-36"
                        data-x="930"
                        data-y="center" data-voffset="100"
                        data-width="['auto']"
                        data-height="['auto']"
                        data-visibility="['on','on','off','off']"
                        data-type="button"
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":"","speed":"700","ease":"Linear.easeNone"}]'
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(250,49,56,1);bg:rgba(255,255,255,1)"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[50,50,50,50]"
                        data-paddingbottom="[20,20,20,20]"
                        data-paddingleft="[50,50,50,50]"

                        style="z-index: 6; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1);font-family:Catamaran;background-color:rgba(250,49,56,1);border-color:rgba(250,49,56,1);border-style:solid;border-width:0px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        {{Translation::getValue('learn_more', $locale)}}
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-17-layer-38"
                        data-x="930"
                        data-y="center" data-voffset="-130"
                        data-width="['800']"
                        data-height="['auto']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: normal; font-size: 72px; line-height: 72px; font-weight: 800; color: #ffffff; letter-spacing: 0px;font-family:Catamaran;">
                        {{$slider->getTitle($locale)}}
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-17-layer-39"
                        data-x="930"
                        data-y="center" data-voffset=""
                        data-width="['auto']"
                        data-height="['auto']"
                        data-visibility="['on','on','off','off']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 8; white-space: nowrap; font-size: 24px; line-height: 40px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Open Sans;">
                        {!! nl2br(e($slider->getDescription($locale))) !!}
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->

<!-- Product Features Section -->
<section class="product-features-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{asset('storage/' . $productFeatureSection->background_image)}});">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
    </div>

    <div class="auto-container">
        <div class="row">
            <!-- Feature Column -->
            <div class="feature-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>{{$productFeatureSection->getTitle($locale)}}</h2>
                    </div>
                    <!-- Feature BLock Seven -->
                    <div class="feature-block-seven">
                        <div class="inner-box">
                            <div class="icon {{$productFeatureSection->getIconClass(1)}}"></div>
                            <h4>{{$productFeatureSection->getIconTitle(1, $locale)}}</h4>
                            <div class="text">{{$productFeatureSection->getIconDescription(1, $locale)}}</div>
                        </div>
                    </div>

                    <!-- Feature BLock Seven -->
                    <div class="feature-block-seven">
                        <div class="inner-box">
                            <div class="icon {{$productFeatureSection->getIconClass(2)}}"></div>
                            <h4>{{$productFeatureSection->getIconTitle(2, $locale)}}</h4>
                            <div class="text">{{$productFeatureSection->getIconDescription(2, $locale)}}</div>
                        </div>
                    </div>

                    <!-- Feature BLock Seven -->
                    <div class="feature-block-seven">
                        <div class="inner-box">
                            <div class="icon {{$productFeatureSection->getIconClass(3)}}"></div>
                            <h4>{{$productFeatureSection->getIconTitle(3, $locale)}}</h4>
                            <div class="text">{{$productFeatureSection->getIconDescription(3, $locale)}}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image"><img src="{{asset('storage/' . $productFeatureSection->image)}}" alt="{{$productFeatureSection->getTitle($locale)}}" /></figure>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End Product Features -->


<!-- Product Supports -->
<section class="product-supports">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay top-right"></div>
        <div class="cws-image-bg" style="background-image: url({{asset('storage/' . $productSupportSection->background_image)}});">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
    </div>

    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h2>{{$productSupportSection->getTitle($locale)}}</h2>
                        <div class="text">{{$productSupportSection->getDescription($locale)}}</div>
                    </div>
                    <ul class="icon-list-two clearfix">
                        <li><a href="{{$productSupportSection->getIconUrl(1)}}"><span class="icon {{$productSupportSection->getIconClass(1)}}"></span></a></li>
                        <li><a href="{{$productSupportSection->getIconUrl(2)}}"><span class="icon {{$productSupportSection->getIconClass(2)}}"></span></a></li>
                        <li><a href="{{$productSupportSection->getIconUrl(3)}}"><span class="icon {{$productSupportSection->getIconClass(3)}}"></span></a></li>
                    </ul>
                    <div class="btn-box"><a href="#" class="theme-btn btn-style-one large bg-pink">{{Translation::getValue('explore', $locale)}}</a></div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('storage/' . $productSupportSection->image)}}" alt="{{$productSupportSection->getTitle($locale)}}"></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Supports -->

<!-- Quality Equipment -->
<section class="quality-equipment style-two">
    <div class="cws-image-bg">
        <div class="cws-overlay-bg"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>{{$qualityConsumerEquipmentSection->getTitle($locale)}}</h2>
            <div class="text">{{$qualityConsumerEquipmentSection->getDescription($locale)}}</div>
        </div>
        <div class="device-img">
            <figure class="image"><img src="{{asset('storage/' . $qualityConsumerEquipmentSection->image)}}" alt="{{$qualityConsumerEquipmentSection->getTitle($locale)}}"></figure>
        </div>
    </div>
</section>
<!-- End Quality Equipment -->



<!-- Easy Setup -->
<section class="easy-setup">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>{{$easySetupSection->getTitle($locale)}}</h2>
            <div class="text">{{$easySetupSection->getDescription($locale)}}</div>
        </div>
        <div class="setup-img">
            <figure class="image"><img src="{{asset('storage/' . $easySetupSection->image)}}" alt="{{$easySetupSection->getTitle($locale)}}"></figure>
        </div>
    </div>
</section>
<!--End Easy Setup -->


<!-- Local Recording -->
<section class="local-recording">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{asset('storage/' . $localRecordingSection->background_image)}});">
            <div class="cws-overlay-bg"></div>
            <div class="cws-overlay-bg half-left"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12">
                <div class="inner-column">
                    <div class="sec-title light text-right">
                        <h2>{{$localRecordingSection->getTitle($locale)}}</h2>
                        <div class="text">{{$localRecordingSection->getDescription($locale)}}</div>
                    </div>
                    <div class="device-img">
                        <figure class="image"><img src="{{asset('storage/' . $localRecordingSection->content_image)}}" alt="{{$localRecordingSection->getTitle($locale)}}" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Easy Setup -->



<!-- Night Vision -->
<section class="night-vision">
    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-ms-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2> {{$nightVisionSection->getTitle($locale)}}</h2>
                        <div class="text">{{$nightVisionSection->getDescription($locale)}}</div>
                    </div>
                    <div class="btn-box">
                        <a href="{{$nightVisionSection->button_primary_url}}" class="theme-btn btn-style-one dark">{{Translation::getValue('read_more',$locale)}}</a>
                        <a href="{{$nightVisionSection->button_secondary_url}}" class="theme-btn btn-style-one bg-pink">{{Translation::getValue('try_now',$locale)}}</a>
                    </div>
                </div>
            </div>

            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image"><img src="{{asset('storage/' . $nightVisionSection->image)}}" alt="{{$nightVisionSection->getTitle($locale)}}"></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Night Vision -->

<!-- Call To Action Two -->
<section class="call-to-action-two">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay top-left"></div>
        <div class="cws-image-bg" style="background-image: url({{asset('storage/' . $callToActionTwoSection->background_image)}});">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
    </div>

    <div class="auto-container">
        <div class="content-box">
            <h2>{{$callToActionTwoSection->getTitle($locale)}}</h2>
            <div class="text">{{$callToActionTwoSection->getSubTitle($locale)}}</div>
            <div class="btn-box"><a href="{{$callToActionTwoSection->button_url}}" class="theme-btn btn-style-one bg-pink large">{{Translation::getValue('get_started',$locale)}}</a></div>
        </div>
    </div>
</section>
<!-- End Call To Action Two -->

<!-- About Section Two -->
<section class="about-section-two">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>{{$aboutSectionTwo->getTitle($locale)}}</h2>
                        <div class="text">{{$aboutSectionTwo->getDescription($locale)}}</div>
                    </div>
                    <div class="progress-grap row">
                        <!-- Pie Graph -->
                        <div class="pie-graph col-lg-3 col-md-3 col-sm-6">
                            <div class="graph-outer">
                                <input type="text" class="dial" data-fgColor="#363636" data-bgColor="#c3c3c3" data-width="96" data-height="96" data-linecap="normal" value="{{$aboutSectionTwo->graph_1_value}}">
                                <div class="inner-text count-box"><span class="count-text txt" data-stop="{{$aboutSectionTwo->graph_1_value}}" data-speed="2000"></span>%</div>
                            </div>
                            <h4>{{$aboutSectionTwo->getGraphTitle(1, $locale)}}</h4>
                        </div>

                        <!-- Pie Graph -->
                        <div class="pie-graph col-lg-3 col-md-3 col-sm-6">
                            <div class="graph-outer">
                                <input type="text" class="dial" data-fgColor="#363636" data-bgColor="#c3c3c3" data-width="96" data-height="96" data-linecap="normal" value="{{$aboutSectionTwo->graph_2_value}}">
                                <div class="inner-text count-box"><span class="count-text txt" data-stop="{{$aboutSectionTwo->graph_2_value}}" data-speed="2000"></span>%</div>
                            </div>
                            <h4>{{$aboutSectionTwo->getGraphTitle(2, $locale)}}</h4>
                        </div>

                        <!-- Pie Graph -->
                        <div class="pie-graph col-lg-3 col-md-3 col-sm-6">
                            <div class="graph-outer">
                                <input type="text" class="dial" data-fgColor="#363636" data-bgColor="#c3c3c3" data-width="96" data-height="96" data-linecap="normal" value="{{$aboutSectionTwo->graph_3_value}}">
                                <div class="inner-text count-box"><span class="count-text txt" data-stop="{{$aboutSectionTwo->graph_3_value}}" data-speed="2000"></span>%</div>
                            </div>
                            <h4>{{$aboutSectionTwo->getGraphTitle(3, $locale)}}</h4>
                        </div>

                        <!-- Pie Graph -->
                        <div class="pie-graph col-lg-3 col-md-3 col-sm-6">
                            <div class="graph-outer">
                                <input type="text" class="dial" data-fgColor="#363636" data-bgColor="#c3c3c3" data-width="96" data-height="96" data-linecap="normal" value="{{$aboutSectionTwo->graph_4_value}}">
                                <div class="inner-text count-box"><span class="count-text txt" data-stop="{{$aboutSectionTwo->graph_4_value}}" data-speed="2000"></span>%</div>
                            </div>
                            <h4>{{$aboutSectionTwo->getGraphTitle(4, $locale)}}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image"><img src="{{asset('storage/' . $aboutSectionTwo->image)}}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section Two -->

<!-- Subscribe Section -->
<section class="subscribe-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay top-left"></div>
        <div class="cws-triangle-overlay top-right"></div>
        <div class="cws-image-bg">
            <div class="cws-overlay-bg bg-sky"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center light">
            <h2>{{Translation::getValue('subscribe_title_' . $locale)}}</h2>
            <div class="text">{{Translation::getValue('subscribe_description_' . $locale)}}</div>
        </div>
        <!--Newslatter Form-->
        <div class="newslatter-form">
            <form method="post"
                action="{{ route('subscribe.store', ['locale' => $locale]) }}"
                id="subscribe-form">
                @csrf

                <div class="form-group input">
                    <input type="email"
                        name="email"
                        class="email"
                        placeholder="Your Email Address"
                        required>
                </div>

                <div class="form-group">
                    <button type="submit" class="theme-btn btn-style-one large dark">
                        {{ Translation::getValue('subscribe_button_' . $locale) }}
                    </button>
                </div>
            </form>

            {{-- MESSAGES --}}
            @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ Translation::getValue('subscribe_success_' . $locale) }}
            </div>
            @endif


        </div>
    </div>
</section>
<!--End Subscribe Section -->

@endsection