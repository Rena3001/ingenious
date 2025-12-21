@extends('client.layout.master')
@section('page_title', __('Security Overview'))
@section('content')
@php
$locale = app()->getLocale(); // en, es, de, fr, ru, zh
use App\Models\Translation;
@endphp


<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                @foreach($securitySliders as $slider)
                <li data-index="rs-10" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="850" data-thumb="" data-delay="5999" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/' . $slider->image) }}" alt="" title="Interactive Security" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-10-layer-38"
                        data-x="center" data-hoffset=""
                        data-y="center" data-voffset=""
                        data-width="['full-proportional','full-proportional','full-proportional','full-proportional']"
                        data-height="['full-proportional','full-proportional','full-proportional','full-proportional']"
                        data-type="image"
                        data-basealign="slide"
                        data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 5;background:linear-gradient(45deg, rgba(72,61,96,0.8) 11%, rgba(72,61,96,0.79) 20%, rgba(0,89,112,0.70) 90%, rgba(0,89,112,0.7) 90%);"><img src="images/main-slider/pattern/1.png" alt="" data-ww="full-proportional" data-hh="full-proportional" width="1920" height="1080" data-no-retina>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-10-layer-31"
                        data-x="center" data-hoffset=""
                        data-y="center" data-voffset="-100"
                        data-width="['593']"
                        data-height="['auto']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 593px; max-width: 593px; white-space: normal; font-size: 72px; line-height: 72px; font-weight: 800; color: rgba(255,255,255,1);font-family:Catamaran;text-transform:uppercase;">{{ $slider->getTitle($locale) }}
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-10-layer-33"
                        data-x="center" data-hoffset=""
                        data-y="center" data-voffset="200"
                        data-width="['auto']"
                        data-height="['auto']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: nowrap; font-size: 24px; line-height: 40px; font-weight: 400; color: rgba(255,255,255,1); font-family:Catamaran;">{!! nl2br($slider->getDescription($locale)) !!}

                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption rev-btn  tp-resizeme"
                        id="slide-10-layer-36"
                        data-x="center" data-hoffset=""
                        data-y="center" data-voffset="350"
                        data-width="['auto']"
                        data-height="['auto']"
                        data-type="button"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(104,107,184,1);bg:rgba(255,255,255,1);"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[50,50,50,50]"
                        data-paddingbottom="[20,20,20,20]"
                        data-paddingleft="[50,50,50,50]"

                        style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1); font-family:Catamaran;background-color:rgba(104,107,184,1);border-color:rgba(104,107,184,1);border-style:solid;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        {{ Translation::getValue('go_to_products', $locale) }}
                    </div>
                </li>
                @endforeach



            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->

<!-- Security Features  -->
<section class="security-features">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg style-four">
            <div class="cws-overlay-bg purple-gradient-one"></div>
            <div class="cws-overlay-bg purple-gradient-two"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="row">

            @foreach($features as $index => $feature)
            <div class="feature-block-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">

                    <div class="icon-box">
                        <div class="icon_shape">
                            <svg viewBox="0 0 73 86">
                                <defs>
                                    <filter id="shape_guard{{ $index }}">
                                        <feGaussianBlur in="SourceAlpha" stdDeviation="2" />
                                        <feOffset dx="1" dy="1" />
                                        <feComponentTransfer>
                                            <feFuncA type="linear" slope="0.6" />
                                        </feComponentTransfer>
                                        <feMerge>
                                            <feMergeNode />
                                            <feMergeNode in="SourceGraphic" />
                                        </feMerge>
                                    </filter>
                                </defs>
                                <path filter="url(#shape_guard{{ $index }})"
                                    d="M167.52,434.43a0.85,0.85,0,0,1-.28,0c-23.87-8.32-32.34-23.22-32.34-33.44V367.53a0.85,0.85,0,0,1,.57-0.81l31.78-10.56a0.85,0.85,0,0,1,.54,0l31.77,10.57a0.85,0.85,0,0,1,.6.8v33.41c0,10.23-8.47,25.13-32.34,33.45A0.86,0.86,0,0,1,167.52,434.43Z"
                                    transform="translate(-132 -353.43)" />
                            </svg>
                        </div>

                        <span class="icon {{ $feature->icon }}"></span>
                    </div>

                    <div class="lower-content">
                        <h4>{{ $feature->getTitle(app()->getLocale()) }}</h4>

                        <p>
                            {{ $feature->getDescription(app()->getLocale()) }}
                        </p>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!--End Security Features -->

<!-- Security Package -->
<section class="security-package"
    style="background-image: url('{{ asset('storage/'.$package->background_image) }}');">

    <div class="auto-container">
        <div class="row">

            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-7 col-sm-12 order-2">
                <div class="sec-title">
                    {{-- 8. MODEL ADI --}}
                    <h2>{{ $package->getTitle($locale) }}</h2>

                    {{-- 8.1 MODEL AÇIQLAMA --}}
                    <div class="text">
                        {{ $package->getDescription($locale) }}
                    </div>
                </div>

                {{-- 9. TEXNİKİ GÖSTƏRİCİLƏR BAŞLIĞI --}}
                <h4>{{ $package->getFeaturesTitle($locale) }}</h4>

                {{-- 9.1 TEXNİKİ SİYAHI --}}
                <ul class="package-list clearfix">
                    @foreach($package->features as $feature)
                    <li>{{ $feature->getText($locale) }}</li>
                    @endforeach
                </ul>

                {{-- 10. CTA BUTTON --}}
                <div class="btn-box">
                    <a href="{{ route('product.detail', [
                            'locale' => app()->getLocale(),
                            'product' => $package->product->id
                        ]) }}"
                        class="theme-btn btn-style-one large bg-purple">
                        {{ Translation::getValue('installed_free', $locale) }}
                    </a>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-5 col-md-5 col-sm-12">
                <figure class="image">
                    <img src="{{ asset('storage/'.$package->model_image) }}" alt="">
                </figure>
            </div>

        </div>
    </div>
</section>

<!-- End Security Package -->



<!-- Real Time Response -->
<section class="realtime-response">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay bg-purple-one"></div>

        <div class="cws-image-bg"
            style="background-image: url({{ asset('storage/' . $highlight->background_image) }});">
            <div class="cws-overlay-bg bg-purple-left"></div>
            <div class="cws-overlay-bg bg-purple-right"></div>
        </div>

        <div class="cws-triangle-overlay bg-purple-one bottom-left"></div>
    </div>

    <div class="auto-container">
        <div class="row align-items-center">

            <!-- CONTENT -->
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">

                <!-- 12. Məhsul adı -->
                <div class="sec-title light">
                    <h2>
                        {{ $highlight->{'title_' . app()->getLocale()} }}
                    </h2>
                </div>

                <!-- 12.1 Qısa izah -->
                <div class="text mb-40">
                    {{ $highlight->{'description_' . app()->getLocale()} }}
                </div>

                <!-- 13–15 Feature List -->
                <div class="feature-outer">

                    @foreach($highlight->features as $feature)
                    <div class="feature-block-three">
                        <div class="inner-box">

                            <!-- Icon -->
                            <div class="icon-box">
                                <span class="icon {{ $feature->icon }}"></span>
                            </div>

                            <!-- 13.1 / 14.1 / 15.1 -->
                            <h4>
                                {{ $feature->{'title_' . app()->getLocale()} }}
                            </h4>

                            <!-- 13.2 / 14.2 / 15.2 -->
                            <p>
                                {!! nl2br(e($feature->{'content_' . app()->getLocale()})) !!}
                            </p>

                        </div>
                    </div>
                    @endforeach

                </div>

                <!-- 16 CTA Button -->
                <div class="btn-box">
                    <a href="{{ route('product.detail', [
                        'locale' => app()->getLocale(),
                        'product' => $highlight->product_id
                    ]) }}"
                        class="theme-btn btn-style-one large bg-purple">

                        <i class="fa fa-arrow-right"></i>
                        {{ Translation::getValue('go_to_product', $locale) }}

                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- End Real Time Response -->


<!-- Quality Equipment -->
<section class="quality-equipment">
    <div class="auto-container">

        {{-- 17 — Məhsul adı --}}
        <div class="sec-title text-center">
            <h2>
                {{ $qualityEquipment->{'title_'.$locale} }}
            </h2>

            {{-- 17.1 — Qısa izah --}}
            <div class="text">
                {{ $qualityEquipment->{'description_'.$locale} }}
            </div>
        </div>

        {{-- 18 — Hero image --}}
        <div class="device-img text-center">
            <figure class="image">
                <img
                    src="{{ asset('storage/'.$qualityEquipment->hero_image) }}"
                    alt="{{ $qualityEquipment->{'title_'.$locale} }}">
            </figure>
        </div>

        {{-- 19 — CTA --}}
        @if($qualityEquipment->product)
        <div class="btn-box text-center">
            <a
                href="{{ route('product.detail', ['locale'=>$locale, 'product'=>$qualityEquipment->product->id]) }}"
                class="theme-btn btn-style-one large bg-purple">
                {{ Translation::getValue('go_to_product', $locale) }}
            </a>
        </div>
        @endif

    </div>
</section>
<!-- End Quality Equipment -->


<!-- Installation Service -->
<section class="installation-service">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay top-right"></div>
        <div class="cws-image-bg style-five" style="background-image: url({{ asset('storage/'.$installationService->background_image) }});">
            <div class="cws-overlay-bg"></div>
            <div class="cws-triangle-overlay"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="content-column col-md-6 col-sm-12 offset-6">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h2>{{ $installationService->{'title_'.$locale} }}</h2>
                        <div class="text">{{ $installationService->{'description_'.$locale} }}</div>
                    </div>
                    <!-- Services Icons -->
                    <div class="services-icons row">
                        @foreach($installationService->icons as $icon)
                        <div class="service-icon col-lg-3 col-md-3 col-sm-12">
                            <span class="icon {{ $icon->icon }}"></span>
                        </div>
                        @endforeach
                    </div>
                    <div class="btn-box"><a href="{{$installationService->cta_link}}" class="theme-btn btn-style-one large bg-purple">{{ Translation::getValue('go_to_product', $locale) }}</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Installation Service -->

<!-- Why Choose Us -->

<section class="why-choose-us product-showcase">

    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg style-six" style="background-image: url({{ asset('storage/'.$productShowcase->image) }});">
            <div class="cws-overlay-bg bg-gradient"></div>
        </div>
        <div class="cws-triangle-overlay bottom-right"></div>
    </div>

    <div class="auto-container">
        <div class="row align-items-center">

            <!-- LEFT: TEXT & ICONS -->
            <div class="content-column col-lg-6 col-md-12">
                <div class="inner-column">

                    <!-- Title -->
                    <div class="sec-title light">
                        <h2>
                            {{ $productShowcase->{'title_'.$locale} }}
                        </h2>
                        <div class="text">
                            {{ $productShowcase->{'description_'.$locale} }}
                        </div>
                    </div>

                    <!-- ICON FEATURES -->
                    <div class="row pie-graphs">

                        <!-- Icon 1 -->
                        <div class="pie-graph col-lg-4 col-md-4 col-sm-12">
                            <div class="graph-outer icon-box">
                                <img src="{{ asset('storage/'.$productShowcase->icon_1) }}"
                                    alt=""
                                    class="feature-icon">
                            </div>
                            <h4>{{ $productShowcase->{'icon_1_text_'.$locale} }}</h4>
                        </div>

                        <!-- Icon 2 -->
                        <div class="pie-graph col-lg-4 col-md-4 col-sm-12">
                            <div class="graph-outer icon-box">
                                <img src="{{ asset('storage/'.$productShowcase->icon_2) }}"
                                    alt=""
                                    class="feature-icon">
                            </div>
                            <h4>{{ $productShowcase->{'icon_2_text_'.$locale} }}</h4>
                        </div>

                        <!-- Icon 3 -->
                        <div class="pie-graph col-lg-4 col-md-4 col-sm-12">
                            <div class="graph-outer icon-box">
                                <img src="{{ asset('storage/'.$productShowcase->icon_3) }}"
                                    alt=""
                                    class="feature-icon">
                            </div>
                            <h4>{{ $productShowcase->{'icon_3_text_'.$locale} }}</h4>
                        </div>

                    </div>

                    <!-- BUTTON -->
                    <div class="btn-box">
                        <a href="{{ $productShowcase->button_link }}"
                            class="theme-btn btn-style-one large">
                            {{Translation::getValue('go_to_product', $locale)}}
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>

<!-- End Why Choose Us -->



<!-- App Download -->
<section class="app-download">
    <div class="cws-background-image" style="background-image: url({{asset('storage/' . $appProductSection->image)}});"></div>
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 offset-6 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>{{ $appProductSection->{'title_'.$locale} }}</h2>
                        <div class="text">{{ $appProductSection->{'description_'.$locale} }}</div>
                        <!-- ICON FEATURES -->
                        <div class="row pie-graphs">

                            <!-- Icon 1 -->
                            <div class="pie-graph col-lg-4 col-md-4 col-sm-12 text-center">
                                <h3 class="m-0">
                                    <span class="icon {{ $appProductSection->icon_1 }}"></span>
                                </h3>
                            </div>

                            <!-- Icon 2 -->
                            <div class="pie-graph col-lg-4 col-md-4 col-sm-12 text-center">
                                <h3 class="m-0">
                                    <span class="icon {{ $appProductSection->icon_2 }}"></span>
                                </h3>
                            </div>

                            <!-- Icon 3 -->
                            <div class="pie-graph col-lg-4 col-md-4 col-sm-12 text-center">
                                <h3 class="m-0">
                                    <span class="icon {{ $appProductSection->icon_3 }}"></span>
                                </h3>
                            </div>

                        </div>


                        <!-- BUTTON -->
                        <div class="btn-box">
                            <a href="{{ $appProductSection->button_link }}"
                                class="theme-btn btn-style-one large">
                                {{Translation::getValue('go_to_product', $locale)}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End App Download -->
@endsection