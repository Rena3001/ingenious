@extends('client.layout.master')
@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('electrical_equipment', $locale))
@section('content')



<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_three_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_three" data-version="5.4.1">
            <ul>
                @foreach($sliders as $slider)
                <li data-index="rs-4" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="850" data-thumb="" data-delay="5999" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/' . $slider->background_image) }}" alt="" title="Energy Management" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-4-layer-40"
                        data-x="center" data-hoffset=""
                        data-y="center" data-voffset=""
                        data-width="['full-proportional','full-proportional','full-proportional','full-proportional']"
                        data-height="['full-proportional','full-proportional','full-proportional','full-proportional']"
                        data-type="image"
                        data-basealign="slide"
                        data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 5;background-color:rgba(36,30,27,0.7);"><img src="images/main-slider/pattern/3.png" alt="" data-ww="full-proportional" data-hh="full-proportional" width="1920" height="1080" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-4-layer-39"
                        data-x="right" data-hoffset="300"
                        data-y="130"
                        data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']"
                        data-type="image"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 6;"><img src="{{ asset('storage/' . $slider->content_image) }}" alt="" data-ww="676px" data-hh="676px" width="676" height="676" data-no-retina> </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-4-layer-31"
                        data-x="right" data-hoffset="1000"
                        data-y="center" data-voffset="-130"
                        data-width="['623']"
                        data-height="['auto']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['right','right','right','right']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; min-width: 623px; max-width: 623px; white-space: normal; font-size: 72px; line-height: 72px; font-weight: 800; color: rgba(255,255,255,1);font-family:Catamaran;text-transform:uppercase;">
                        {{ $slider->getTitle($locale) }}
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-4-layer-33"
                        data-x="right" data-hoffset="1000"
                        data-y="center" data-voffset=""
                        data-width="['800']"
                        data-height="['auto']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['right','right','right','right']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 8; white-space: normal; font-size: 24px; line-height: 40px; font-weight: 400; color: rgba(255,255,255,1);font-family:Catamaran;">
                        {!! nl2br(e($slider->getDescription($locale))) !!}


                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption rev-btn  tp-resizeme"
                        id="slide-4-layer-36"
                        data-x="right" data-hoffset="1000"
                        data-y="center" data-voffset="100"
                        data-width="['auto']"
                        data-height="['auto']"
                        data-type="button"
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":"","speed":"700","ease":"Linear.easeNone"}]'
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#1b5e8a;bg:rgba(255,255,255,1);"}]'
                        data-textAlign="['right','right','right','right']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[50,50,50,50]"
                        data-paddingbottom="[20,20,20,20]"
                        data-paddingleft="[50,50,50,50]"
                        style="z-index: 9; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1);font-family:Catamaran;background-color:#1b5e8a;border-color:#1b5e8a;border-style:solid;border-width:0px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        {{Translation::getValue('explore_products', $locale)}}
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->



<!-- Features Section Three -->
<section class="features-section-three">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg"
            style="background-image: url({{ asset('storage/' . $featureSectionThree->upper_image) }});">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
    </div>

    <div class="auto-container">
        <div class="row">
            <!-- Upper Column -->
            <div class="upper-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h3>{{ $featureSectionThree->upperTitle($locale) }}</h3>
                        <div class="text">
                            {!! nl2br(e($featureSectionThree->upperDescription($locale))) !!}
                        </div>
                    </div>

                    <div class="row">
                        <!-- ICON 1 -->
                        <div class="feature-block-six col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon flaticon-renewable-energy"></span>
                                </div>
                                <h4>{{ $featureSectionThree->{'upper_icon_1_title_'.$locale} }}</h4>
                                <div class="text">
                                    {{ $featureSectionThree->{'upper_icon_1_desc_'.$locale} }}
                                </div>
                            </div>
                        </div>

                        <!-- ICON 2 -->
                        <div class="feature-block-six col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon flaticon-plug-2"></span>
                                </div>
                                <h4>{{ $featureSectionThree->{'upper_icon_2_title_'.$locale} }}</h4>
                                <div class="text">
                                    {{ $featureSectionThree->{'upper_icon_2_desc_'.$locale} }}
                                </div>
                            </div>
                        </div>

                        <!-- ICON 3 -->
                        <div class="feature-block-six col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon flaticon-renewable-energy-1"></span>
                                </div>
                                <h4>{{ $featureSectionThree->{'upper_icon_3_title_'.$locale} }}</h4>
                                <div class="text">
                                    {{ $featureSectionThree->{'upper_icon_3_desc_'.$locale} }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LOWER SECTION -->
            <div class="lower-column col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <!-- Image -->
                    <div class="image-column col-lg-6 col-md-12">
                        <figure class="image">
                            <img src="{{ asset('storage/' . $featureSectionThree->lower_image) }}" alt="">
                        </figure>
                    </div>

                    <!-- Content -->
                    <div class="content-column col-lg-6 col-md-12">
                        <div class="inner-column">
                            <div class="sec-title light">
                                <h3>{{ $featureSectionThree->lowerTitle($locale) }}</h3>
                                <div class="text">
                                    {{ $featureSectionThree->lowerDescription($locale) }}
                                </div>
                            </div>

                            <ul class="device-features">
                                <li><a href="{{$featureSectionThree->lower_icon_link_1}}"><span class="icon {{ $featureSectionThree->lower_icon_1 }}"></span></a></li>
                                <li><a href="{{$featureSectionThree->lower_icon_link_2}}"><span class="icon {{ $featureSectionThree->lower_icon_2 }}"></span></a></li>
                                <li><a href="{{$featureSectionThree->lower_icon_link_3}}"><span class="icon {{ $featureSectionThree->lower_icon_3 }}"></span></a></li>
                                <li><a href="{{$featureSectionThree->lower_icon_link_4}}"><span class="icon {{ $featureSectionThree->lower_icon_4 }}"></span></a></li>
                            </ul>

                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-one dark large">
                                    {{ Translation::getValue('request_brochure', $locale) }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Section Three -->



<!-- Services Section -->
<section class="services-section style-two">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>{{ Translation::getValue('included_free', $locale) }}</h2>
        </div>

        <div class="row">
            @foreach($serviceItems as $item)
            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="icon-box"><span class="icon {{ $item->icon }}"></span></div>
                        <figure class="image"><img src="{{ asset('storage/' . $item->image) }}" alt=""></figure>
                        <div class="overlay">
                            <div class="desc">{{ $item->overlay($locale) }}</div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h4>{{ $item->title($locale) }}</h4>
                        <div class="text">{{ $item->description($locale) }}</div>
                        <div class="btn-box"><a href="#" class="theme-btn btn-style-two dark-alt">{{ Translation::getValue('know_all', $locale) }}</a></div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!--End Services Section -->

<!-- Features Section Four -->
<section class="features-section-four">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{asset('storage/' . $featureSectionFour->upper_image)}});">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="row">
            <!-- Upper Column -->
            <div class="upper-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h3>{{ $featureSectionFour->upperTitle($locale) }}</h3>
                        <div class="text">{!! nl2br(e($featureSectionFour->upperDescription($locale))) !!}</div>
                    </div>

                    <ul class="device-features">
                        <li><a href="{{ $featureSectionFour->upper_icon_1_url }}"><span class="icon {{ $featureSectionFour->upper_icon_1 }}"></span></a></li>
                        <li><a href="{{ $featureSectionFour->upper_icon_2_url }}"><span class="icon {{ $featureSectionFour->upper_icon_2 }}"></span></a></li>
                        <li><a href="{{ $featureSectionFour->upper_icon_3_url }}"><span class="icon {{ $featureSectionFour->upper_icon_3 }}"></span></a></li>
                        <li><a href="{{ $featureSectionFour->upper_icon_4_url }}"><span class="icon {{ $featureSectionFour->upper_icon_4 }}"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="lower-column col-lg-12 col-md-12 col-sm-12">

                <div class="row">
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12">
                        <figure class="image"><img src="{{ asset('storage/' . $featureSectionFour->lower_image) }}" alt=""></figure>
                    </div>
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12">
                        <div class="inner-column">
                            <div class="sec-title light">
                                <h3>{{ $featureSectionFour->lowerTitle($locale) }}</h3>
                                <div class="text">{{ $featureSectionFour->lowerDescription($locale) }}</div>
                            </div>

                            <div class="btn-box"><a href="{{ $featureSectionFour->button_url }}" class="theme-btn btn-style-one bg-orange large">{{ Translation::getValue('explore_smart_devices', $locale) }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Section Four -->


<!-- Products Section -->
<section class="products-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{asset('storage/' . $productSection->background_image)}});">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
        <div class="cws-triangle-overlay bottom-right"></div>
    </div>

    <div class="auto-container">

        <div class="sec-title text-center light">
            <h2>{{ $productSection->title($locale) }}</h2>
            <div class="text">{{ $productSection->description($locale) }}</div>
        </div>

        <div class="row">
            <!-- Product Block -->
            <div class="product-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('storage/' . $productSection->product_1_image) }}" alt=""></figure>
                    </div>
                    <div class="lower-content">
                        <h3>{{ $productSection->productTitle(1, $locale) }}</h3>
                        <div class="text">{{ $productSection->productDesc(1, $locale) }}</div>
                    </div>
                </div>
            </div>

            <!-- Product Block -->
            <div class="product-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('storage/' . $productSection->product_2_image) }}" alt=""></figure>
                    </div>
                    <div class="lower-content">
                        <h3>{{ $productSection->productTitle(2, $locale) }}</h3>
                        <div class="text">{{ $productSection->productDesc(2, $locale) }}</div>
                    </div>
                </div>
            </div>

            <!-- Product Block -->
            <div class="product-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('storage/' . $productSection->product_3_image) }}" alt=""></figure>
                    </div>
                    <div class="lower-content">
                        <h3>{{ $productSection->productTitle(3, $locale) }}</h3>
                        <div class="text">{{ $productSection->productDesc(3, $locale) }}</div>
                    </div>
                </div>
            </div>

            <!-- Product Block -->
            <div class="product-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="{{ asset('storage/' . $productSection->product_4_image) }}" alt=""></figure>
                    </div>
                    <div class="lower-content">
                        <h3>{{ $productSection->productTitle(4, $locale) }}</h3>
                        <div class="text">{{ $productSection->productDesc(4, $locale) }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-box text-center"><a href="{{ $productSection->button_url }}" class="theme-btn btn-style-two large dark">{{Translation::getValue( 'explore_in_the_shop',$locale)}}</a></div>
    </div>
</section>
<!-- End Products Section -->

<!-- Call To Action -->
<section class="call-to-action">
    <div class="cws-background-image"
        style="background-image: url({{ asset('storage/' . $callToAction->background_image) }});">
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="sec-title text-right clearfix">
                    <h2>{{ $callToAction->title($locale) }}</h2>

                    <div class="text">
                        {!! nl2br(e($callToAction->description($locale))) !!}
                    </div>

                    <div class="btn-box">
                        <a href="{{ $callToAction->button_url }}"
                            class="theme-btn btn-style-two large bg-orange">
                            {{ Translation::getValue('create_my_comfort', $locale) }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Call To Action -->


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