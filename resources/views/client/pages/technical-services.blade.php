@extends('client.layout.master')
@php
use App\Models\Translation;
$locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('technical_services', $locale))
@section('content')

<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                @foreach($sliders as $slider)
                <li data-index="rs-7" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="850" data-thumb="" data-delay="5999" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <!-- MAIN IMAGE -->
                    <img src="{{asset('storage/' . $slider->background_image)}}" alt="" title="{{$slider->getTitle($locale)}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-7-layer-40"
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
                        style="z-index: 5;"><img src="{{asset('assets/images/main-slider/pattern/5.png')}}" alt="" data-ww="full-proportional" data-hh="full-proportional" width="1920" height="1080" data-no-retina> </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-7-layer-31"
                        data-x="center" data-hoffset=""
                        data-y="center"
                        data-voffset="['-180','-250','-230','-190']"
                        data-width="['623']"
                        data-height="['auto']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 623px; max-width: 623px; white-space: normal; font-size: 72px; line-height: 72px; font-weight: 800; color: rgba(255,255,255,1); ;font-family:Catamaran;">
                        {{$slider->getTitle($locale)}}
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-7-layer-33"
                        data-x="center" data-hoffset=""
                        data-y="center"
                        data-voffset="['0','0','0','0']"


                        data-width="['800','700','90%','90%']"

                        data-height="['auto']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[20px]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: normal; font-size: 24px; line-height: 40px; font-weight: 400; color: rgba(255,255,255,1); ;font-family:Catamaran;">
                        {!!nl2br($slider->getDescription($locale))!!}</div>

                    <!-- LAYER NR. 4 -->
                    <a href="{{ $slider->button_link }}">
                        <div class="tp-caption rev-btn  tp-resizeme"
                            id="slide-7-layer-36"
                            data-x="center" data-hoffset=""
                            data-y="center"
                            data-voffset="['120','110','100','90']"


                            data-width="['auto']"
                            data-height="['auto']"
                            data-type="button"
                            data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":"","speed":"700","ease":"Linear.easeNone"}]'
                            data-responsive_offset="on"
                            data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#1b5e8a;bg:rgba(255,255,255,1);"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[20,20,20,20]"
                            data-paddingright="[50,50,50,50]"
                            data-paddingbottom="[20,20,20,20]"
                            data-paddingleft="[50,50,50,50]"

                            style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1); ;font-family:Catamaran;background-color:#1b5e8a;border-color:#1b5e8a;border-style:solid;border-width:0px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                            {{Translation::getValue('learn_more', $locale)}}
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->



<!-- Top Features -->
<section class="top-features">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="outer-box">
            <div class="row">

                <!-- Feature Block Eight -->
                <div class="feature-block-eight col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon_shape">
                                <svg viewBox="0 0 91 91">
                                    <defs>
                                        <filter id="shape_5bf73c8aa7345">
                                            <feGaussianBlur in="SourceAlpha" stdDeviation="2"></feGaussianBlur>
                                            <feOffset dx="1" dy="1"></feOffset>
                                            <feComponentTransfer>
                                                <feFuncA type="linear" slope="0.6"></feFuncA>
                                            </feComponentTransfer>
                                            <feMerge>
                                                <feMergeNode></feMergeNode>
                                                <feMergeNode in="SourceGraphic"></feMergeNode>
                                            </feMerge>
                                        </filter>
                                    </defs>
                                    <path filter="url(#shape_5bf73c8aa7345)" d="M169.92,316l38.45,38.45a3.67,3.67,0,0,1,0,5.2l-38.45,38.45a3.67,3.67,0,0,1-5.2,0l-38.45-38.45a3.67,3.67,0,0,1,0-5.2L164.73,316A3.67,3.67,0,0,1,169.92,316Z" transform="translate(-123 -312.68)"></path>
                                </svg>
                            </div>
                            <span class="icon {{ $icons->icon_1 }}"></span>
                        </div>
                        <div class="lower-content">
                            <h4>{{$icons->getIconTitle(1, $locale)}}</h4>
                        </div>
                    </div>
                </div>

                <!-- Feature Block Eight -->
                <div class="feature-block-eight col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon_shape">
                                <svg viewBox="0 0 91 91">
                                    <defs>
                                        <filter id="shape_5bf73c8aa73453">
                                            <feGaussianBlur in="SourceAlpha" stdDeviation="2"></feGaussianBlur>
                                            <feOffset dx="1" dy="1"></feOffset>
                                            <feComponentTransfer>
                                                <feFuncA type="linear" slope="0.6"></feFuncA>
                                            </feComponentTransfer>
                                            <feMerge>
                                                <feMergeNode></feMergeNode>
                                                <feMergeNode in="SourceGraphic"></feMergeNode>
                                            </feMerge>
                                        </filter>
                                    </defs>
                                    <path filter="url(#shape_5bf73c8aa73453)" d="M169.92,316l38.45,38.45a3.67,3.67,0,0,1,0,5.2l-38.45,38.45a3.67,3.67,0,0,1-5.2,0l-38.45-38.45a3.67,3.67,0,0,1,0-5.2L164.73,316A3.67,3.67,0,0,1,169.92,316Z" transform="translate(-123 -312.68)"></path>
                                </svg>
                            </div>
                            <span class="icon {{ $icons->icon_2 }}"></span>
                        </div>
                        <div class="lower-content">
                            <h4>{{$icons->getIconTitle(2, $locale)}}</h4>
                        </div>
                    </div>
                </div>

                <!-- Feature Block Eight -->
                <div class="feature-block-eight col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon_shape">
                                <svg viewBox="0 0 91 91">
                                    <defs>
                                        <filter id="shape_5bf73c8aa73454">
                                            <feGaussianBlur in="SourceAlpha" stdDeviation="2"></feGaussianBlur>
                                            <feOffset dx="1" dy="1"></feOffset>
                                            <feComponentTransfer>
                                                <feFuncA type="linear" slope="0.6"></feFuncA>
                                            </feComponentTransfer>
                                            <feMerge>
                                                <feMergeNode></feMergeNode>
                                                <feMergeNode in="SourceGraphic"></feMergeNode>
                                            </feMerge>
                                        </filter>
                                    </defs>
                                    <path filter="url(#shape_5bf73c8aa73454)" d="M169.92,316l38.45,38.45a3.67,3.67,0,0,1,0,5.2l-38.45,38.45a3.67,3.67,0,0,1-5.2,0l-38.45-38.45a3.67,3.67,0,0,1,0-5.2L164.73,316A3.67,3.67,0,0,1,169.92,316Z" transform="translate(-123 -312.68)"></path>
                                </svg>
                            </div>
                            <span class="icon {{ $icons->icon_3 }}"></span>
                        </div>
                        <div class="lower-content">
                            <h4>{{$icons->getIconTitle(3, $locale)}}</h4>
                        </div>
                    </div>
                </div>

                <!-- Feature Block Eight -->
                <div class="feature-block-eight col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon_shape">
                                <svg viewBox="0 0 91 91">
                                    <defs>
                                        <filter id="shape_5bf73c8aa73457">
                                            <feGaussianBlur in="SourceAlpha" stdDeviation="2"></feGaussianBlur>
                                            <feOffset dx="1" dy="1"></feOffset>
                                            <feComponentTransfer>
                                                <feFuncA type="linear" slope="0.6"></feFuncA>
                                            </feComponentTransfer>
                                            <feMerge>
                                                <feMergeNode></feMergeNode>
                                                <feMergeNode in="SourceGraphic"></feMergeNode>
                                            </feMerge>
                                        </filter>
                                    </defs>
                                    <path filter="url(#shape_5bf73c8aa73457)" d="M169.92,316l38.45,38.45a3.67,3.67,0,0,1,0,5.2l-38.45,38.45a3.67,3.67,0,0,1-5.2,0l-38.45-38.45a3.67,3.67,0,0,1,0-5.2L164.73,316A3.67,3.67,0,0,1,169.92,316Z" transform="translate(-123 -312.68)"></path>
                                </svg>
                            </div>
                            <span class="icon {{ $icons->icon_4 }}"></span>
                        </div>
                        <div class="lower-content">
                            <h4>{{$icons->getIconTitle(4, $locale)}}</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Top Features -->


<!-- Features Section Five-->
<section class="features-section-five">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{asset('storage/' . $faqSection->background_image)}});"></div>
        <div class="cws-triangle-overlay bottom-left"></div>
        <div class="cws-triangle-overlay bottom-right"></div>
    </div>

    <div class="auto-container">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column order-2 col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <h2>{{ $faqSection->getTitle($locale) }}</h2>
                            <div class="text">{{ $faqSection->getDescription($locale) }}</div>
                        </div>

                        <ul class="features-list">
                            <li>
                                <span class="icon {{ $faqSection->feature_1_icon }}"></span>
                                <h4>{{ $faqSection->getFeatureTitle(1, $locale) }}</h4>
                                <p>{{ $faqSection->getFeatureText(1, $locale) }}</p>
                            </li>

                            <li>
                                <span class="icon {{ $faqSection->feature_2_icon }}"></span>
                                <h4>{{ $faqSection->getFeatureTitle(2, $locale) }}</h4>
                                <p>{{ $faqSection->getFeatureText(2, $locale) }}</p>
                            </li>

                            <li>
                                <span class="icon {{ $faqSection->feature_3_icon }}"></span>
                                <h4>{{ $faqSection->getFeatureTitle(3, $locale) }}</h4>
                                <p>{{ $faqSection->getFeatureText(3, $locale) }}</p>
                            </li>
                        </ul>

                        <div class="btn-box"><a href="{{$faqSection->button_url}}" class="theme-btn btn-style-one large bg-caribbean">{{Translation::getValue('request_a_free_brochure', $locale)}}</a></div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-7 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('storage/' . $faqSection->image)}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Section Five-->


<!-- Services Section Two -->
<section class="services-section-two">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{asset('storage/' . $ourServicesSection->background_image)}});"></div>
        <div class="cws-overlay-bg"></div>
        <div class="cws-triangle-overlay bottom-right"></div>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>{{ $ourServicesSection->getTitle($locale) }}</h2>
            <div class="text">{{ $ourServicesSection->getDescription($locale) }}</div>
        </div>
        <div class="row">
            <!-- Service Block Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon_shape">
                            <svg viewBox="0 0 91 91">
                                <defs>
                                    <filter id="shape_5bf73c8aa9d5d">
                                        <feMerge>
                                            <feMergeNode></feMergeNode>
                                            <feMergeNode in="SourceGraphic"></feMergeNode>
                                        </feMerge>
                                    </filter>
                                </defs>
                                <path filter="url(#shape_5bf73c8aa9d5d)" d="M169.92,316l38.45,38.45a3.67,3.67,0,0,1,0,5.2l-38.45,38.45a3.67,3.67,0,0,1-5.2,0l-38.45-38.45a3.67,3.67,0,0,1,0-5.2L164.73,316A3.67,3.67,0,0,1,169.92,316Z" transform="translate(-123 -312.68)"></path>
                            </svg>
                        </div>
                        <span class="icon {{ $ourServicesSection->service_1_icon }}"></span>
                    </div>
                    <div class="lower-content">
                        <h4>{{ $ourServicesSection->getServiceTitle($locale, 1) }}</h4>
                        <div class="text">{{ $ourServicesSection->getServiceText($locale, 1) }}</div>
                        <div class="btn-box"><a href="{{ $ourServicesSection->service_1_button_url }}" class="theme-btn btn-style-one bg-caribbean">{{Translation::getValue('explore', $locale)}}</a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon_shape">
                            <svg viewBox="0 0 91 91">
                                <defs>
                                    <filter id="shape_5bf73c8aa9d52">
                                        <feMerge>
                                            <feMergeNode></feMergeNode>
                                            <feMergeNode in="SourceGraphic"></feMergeNode>
                                        </feMerge>
                                    </filter>
                                </defs>
                                <path filter="url(#shape_5bf73c8aa9d52)" d="M169.92,316l38.45,38.45a3.67,3.67,0,0,1,0,5.2l-38.45,38.45a3.67,3.67,0,0,1-5.2,0l-38.45-38.45a3.67,3.67,0,0,1,0-5.2L164.73,316A3.67,3.67,0,0,1,169.92,316Z" transform="translate(-123 -312.68)"></path>
                            </svg>
                        </div>
                        <span class="icon {{ $ourServicesSection->service_2_icon }}"></span>
                    </div>
                    <div class="lower-content">
                        <h4>{{ $ourServicesSection->getServiceTitle($locale, 2) }}</h4>
                        <div class="text">{{ $ourServicesSection->getServiceText($locale, 2) }}</div>
                        <div class="btn-box"><a href="{{ $ourServicesSection->service_2_button_url }}" class="theme-btn btn-style-one bg-caribbean">{{Translation::getValue('explore', $locale)}}</a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="icon_shape">
                            <svg viewBox="0 0 91 91">
                                <defs>
                                    <filter id="shape_5bf73c8aa9d53">
                                        <feMerge>
                                            <feMergeNode></feMergeNode>
                                            <feMergeNode in="SourceGraphic"></feMergeNode>
                                        </feMerge>
                                    </filter>
                                </defs>
                                <path filter="url(#shape_5bf73c8aa9d53)" d="M169.92,316l38.45,38.45a3.67,3.67,0,0,1,0,5.2l-38.45,38.45a3.67,3.67,0,0,1-5.2,0l-38.45-38.45a3.67,3.67,0,0,1,0-5.2L164.73,316A3.67,3.67,0,0,1,169.92,316Z" transform="translate(-123 -312.68)"></path>
                            </svg>
                        </div>
                        <span class="icon {{ $ourServicesSection->service_3_icon }}"></span>
                    </div>
                    <div class="lower-content">
                        <h4>{{ $ourServicesSection->getServiceTitle($locale, 3) }}</h4>
                        <div class="text">{{ $ourServicesSection->getServiceText($locale, 3) }}</div>
                        <div class="btn-box"><a href="{{ $ourServicesSection->service_3_button_url }}" class="theme-btn btn-style-one bg-caribbean">{{Translation::getValue('explore', $locale)}}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section Two -->


@if($productVideoSection)
<!-- Projects Section -->
<!-- <section class="projects-section">

    
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{ asset('storage/' . $productVideoSection->background_image) }});">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
    </div>

    <div class="auto-container">
        <div class="sec-title light text-center">
            <h2>{{ $productVideoSection->getTitle($locale) }}</h2>
            <div class="text">
                {{ $productVideoSection->getDescription($locale) }}
            </div>
        </div>
    </div>

    <div class="projects-tabs tabs-box">

        <ul class="tab-buttons clearfix">
            <li class="tab-btn active-btn" data-tab="#tab-all">
                {{ $productVideoSection->filter_all_label ?? 'All' }}
            </li>

            <li class="tab-btn" data-tab="#tab-security">
                {{ $productVideoSection->filter_security_label ?? 'Security' }}
            </li>

            <li class="tab-btn" data-tab="#tab-energy">
                {{ $productVideoSection->filter_electrical_label ?? 'Energy' }}
            </li>
        </ul>

        <div class="tabs-content">

            <div class="tab active-tab" id="tab-all">
                <div class="row">
                    @foreach($productVideoSection->items as $item)
                    <div class="project-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image techical-image">
                                    <img src="{{ asset('storage/' . $item->image) }}"
                                        alt="{{ $item->getTitle() }}">
                                </figure>
                                <div class="overlay">
                                    <a href="" target="_blank">
                                        <span class="icon fa fa-reply"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="lower-content">
                                <h4>
                                    <a href="" target="_blank">
                                        {{ $item->getTitle() }}
                                    </a>
                                </h4>

                                <div class="cat">
                                    {{ ucfirst($item->category) }}
                                </div>

                                <div class="text">
                                    {{ $item->getDescription() }}
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>

            <div class="tab" id="tab-security">
                <div class="row">
                    @foreach($productVideoSection->items->where('category','security') as $item)
                    <div class="project-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('storage/' . $item->image) }}"
                                        alt="{{ $item->getTitle() }}">
                                </figure>
                                <div class="overlay">
                                    <a href="#" target="_blank">
                                        <span class="icon fa fa-reply"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="lower-content">
                                <h4>
                                    <a href="#" target="_blank">
                                        {{ $item->getTitle() }}
                                    </a>
                                </h4>

                                <div class="cat">
                                    {{ ucfirst($item->category) }}
                                </div>

                                <div class="text">
                                    {{ $item->getDescription() }}
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>

            <div class="tab" id="tab-energy">
                <div class="row">
                    @foreach($productVideoSection->items->where('category','energy') as $item)
                    <div class="project-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('storage/' . $item->image) }}"
                                        alt="{{ $item->getTitle() }}">
                                </figure>
                                <div class="overlay">
                                    <a href="#" target="_blank">
                                        <span class="icon fa fa-reply"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="lower-content">
                                <h4>
                                    <a href="#" target="_blank">
                                        {{ $item->getTitle() }}
                                    </a>
                                </h4>

                                <div class="cat">
                                    {{ ucfirst($item->category) }}
                                </div>

                                <div class="text">
                                    {{ $item->getDescription() }}
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section> -->
<!-- End Projects Section -->
@endif

<!-- Testimonial Section -->
<section class="testimonial-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{asset('assets/images/background/28.jpg')}});">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay top-right"></div>
        <div class="cws-triangle-overlay bottom-left"></div>
    </div>

    <div class="auto-container">

        <div class="sec-title text-center light">
            <h2>{{Translation::getValue('why_bamoone_testimonials_title', $locale)}}</h2>
        </div>


        <div class="testimonial-carousel owl-carousel owl-theme default-dots">
            <!-- Testimonial Block -->
            @foreach($testimonials as $item)
            <div class="testimonial-block">
                <div class="inner-box">

                    {{-- Logo / Image --}}
                    @if(!empty($item->image_logo))
                    <div class="thumb-box">
                        <figure class="thumb">
                            <img
                                src="{{ asset('storage/' . $item->image_logo) }}"
                                alt="{{ $item->title }}"
                                loading="lazy">
                        </figure>
                    </div>
                    @endif

                    {{-- Description --}}
                    <div class="text">
                        {{ $item->description }}
                    </div>

                    {{-- Title --}}
                    <h6 class="name">
                        {{ $item->title }}
                    </h6>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Testimonial Section -->

<!-- Fun Fact Section -->
<section class="fun-fact-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{ asset('assets/images/background/27.jpg') }});">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay bottom-right"></div>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center light">
            <h2>{{Translation::getValue('support_resources_title', $locale)}}</h2>
        </div>
        <div class="row clearfix">



            <!-- Column 1 -->
            <div class="counter-column col-lg-4 col-md-6 col-sm-12">
                <div class="count-text">
                    <i class="{{ $supportResourcesSection->getItemIcon(1) }} fa-solid"></i>
                </div>
                <h4 class="counter-title">
                    {{ $supportResourcesSection->getItemTitle(1, $locale) }}
                </h4>
            </div>

            <!-- Column 2 -->
            <div class="counter-column col-lg-4 col-md-6 col-sm-12">
                <div class="count-text">
                    <i class="{{ $supportResourcesSection->getItemIcon(2) }} fa-solid"></i>
                </div>
                <h4 class="counter-title">
                    {{ $supportResourcesSection->getItemTitle(2, $locale) }}
                </h4>
            </div>

            <!-- Column 3 -->
            <div class="counter-column col-lg-4 col-md-6 col-sm-12">
                <div class="count-text">
                    <i class="{{ $supportResourcesSection->getItemIcon(3) }} fa-solid"></i>
                </div>
                <h4 class="counter-title">
                    {{ $supportResourcesSection->getItemTitle(3, $locale) }}
                </h4>
            </div>

        </div>
    </div>
</section>
<!--End Fun Fact Section -->


<!-- Our Shop -->
<section class="our-shop alternate">
    <div class="auto-container">

        {{-- SECTION TITLE --}}
        @if($shopSection)
        <div class="sec-title text-center">
            <h2>{{ $shopSection->getTitle($locale) }}</h2>
            <div class="text">
                {{ $shopSection->getDescription($locale) }}
            </div>
        </div>
        @endif

        {{-- FILTER BUTTONS --}}
        <div class="projects-tabs tabs-box">
            <ul class="tab-buttons clearfix">

                <li class="tab-btn active-btn" data-filter="all">
                    {{ Translation::getValue('all_products', $locale) }}
                </li>

                @foreach($categories as $category)
                <li class="tab-btn" data-filter="{{ $category->id }}">
                    {{ $category->{'name_'.$locale} ?? $category->name_az }}
                </li>
                @endforeach

            </ul>
        </div>

        {{-- PRODUCTS GRID --}}
        <div class="row products-grid">

            @foreach($products as $product)
            <div class="shop-item col-lg-3 col-md-6 col-sm-12"
                data-category="{{ $product->category_id }}">

                <div class="inner-box">

                    <div class="image-box">
                        <a href="{{ $product->amazon_link }}" target="_blank">
                            <img
                                src="{{ asset('storage/'.$product->image) }}"
                                alt="{{ $product->{'name_'.$locale} ?? $product->name_az }}"
                                loading="lazy">
                        </a>
                    </div>

                    <div class="lower-content">
                        <h4 class="name">
                            {{ $product->{'name_'.$locale} ?? $product->name_az }}
                        </h4>

                        <div class="price">
                            ${{ number_format($product->price, 2) }}
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>
<!-- End Our Shop -->



<!-- Process Section Two -->
<section class="process-section-two">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url(images/background/15.jpg)">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay top-left"></div>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center light">

            <h2>{{$installationSection->getTitle($locale)}}</h2>
            <div class="text">{{$installationSection->getDescription($locale)}}</div>
        </div>

        <div class="row">
            @foreach($installationSection->steps as $step)
            <!-- Process BLock -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box active">
                    <div class="icon-box">
                        <span class="process_line">
                            <span class="process_line_active"></span>
                            <span class="process_line_circle"></span>
                        </span>
                        <span class="icon {{ $step->icon }}"></span>
                    </div>
                    <h4>{{ $step->getTitle($locale) }}</h4>
                    <div class="text">{{ $step->getDescription($locale) }}</div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="btn-box text-center"><a href="{{$installationSection->cta_link}}" class="theme-btn large btn-style-one bg-caribbean">
                {{Translation::getValue('apply_for_support',$locale)}}
            </a></div>
    </div>
</section>
<!--End Process Section -->


<!-- Call to Action Three -->
<section class="call-to-action-three">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>
    <div class="auto-container">
        <h2>{{Translation::getValue('brave_person',$locale)}}</h2>
        <h4>{{Translation::getValue('brave_person_desc',$locale)}}</h4>
    </div>
</section>
<!--End Call to Action Three -->


@if($servicePackageSection)
<!-- Pricing Section -->
<section class="pricing-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url(images/background/29.jpg);">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
        <div class="cws-triangle-overlay bottom-right"></div>
    </div>

    <div class="auto-container">

        {{-- SECTION TITLE --}}
        <div class="sec-title text-center">
            <h2>{{ $servicePackageSection->getTitle($locale) }}</h2>
            <div class="text">
                {{ $servicePackageSection->getSubtitle($locale) }}
            </div>
        </div>

        {{-- NOTES --}}
        <div class="pricing-notes text-center">
            <p>{{ $servicePackageSection->getNote($locale) }}</p>
            <p>{{ $servicePackageSection->getRemoteNote($locale) }}</p>
        </div>

        <div class="outer-box">
            <div class="row no-gutters">

                @foreach($servicePackageSection->packages as $package)
                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 {{ $package->is_featured ? 'tagged' : '' }}">
                    <div class="inner-box">

                        <div class="pricing_plan_price">
                            <div class="pricing_plan_price_wrap">
                                <span class="currency">$</span>
                                <span class="main_price_part">{{ $package->price }}</span>
                                <span class="price_desc">/{{ strtoupper($package->price_unit) }}</span>
                            </div>

                            <h4 class="title">
                                {{ $package->getTitle($locale) }}
                            </h4>

                            @if($package->icon)
                            <div class="icon-box package-div">
                                <img src="{{asset('/storage/' . $package->icon )}}" alt="">
                            </div>
                            @endif
                        </div>

                        <ul class="features">
                            <li>{{ $package->getMainDescription($locale) }}</li>
                            <li>{{ $package->getDetailDescription($locale) }}</li>
                            <li>{{ $package->getRemoteNote($locale) }}</li>
                        </ul>

                        <div class="btn-box">
                            <a href="#technical-support"
                                class="theme-btn btn-style-one {{ $package->is_featured ? 'bg-purple' : 'bg-caribbean' }}">
                                {{ \App\Models\Translation::getValue('activate', $locale) }}
                            </a>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
<!--End Pricing Section -->
@endif





<!--Clients Section-->
@include('components.client')
<!--End Clients Section-->


@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const buttons = document.querySelectorAll('.tab-btn');
        const items = document.querySelectorAll('.shop-item');

        buttons.forEach(btn => {
            btn.addEventListener('click', function() {

                const filter = this.dataset.filter;

                // active button
                buttons.forEach(b => b.classList.remove('active-btn'));
                this.classList.add('active-btn');

                // filter items
                items.forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });

            });
        });

    });
</script>
@endpush