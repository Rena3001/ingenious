@extends('client.layout.master')
@section('page_title', "__('Technical Services')")
@section('content')

@php
use App\Models\Translation;
$locale = app()->getLocale();
@endphp


<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                @foreach($slides as $slide)
                <li data-index="rs-14" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="850" data-thumb="" data-delay="5999" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/'.$slide->background_image) }}" alt="" title="Video Monitoring" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-14-layer-38"
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
                        style="z-index: 5;background-color:rgba(0,173,255,0.8);"><img src="images/main-slider/pattern/2.png" alt="" data-ww="full-proportional" data-hh="full-proportional" width="1920" height="1080" data-no-retina></div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-14-layer-31"
                        data-x="center" data-hoffset=""
                        data-y="center" data-voffset="-70"
                        data-width="['904']"
                        data-height="['73']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 904px; max-width: 904px; max-width: 73px; max-width: 73px; white-space: normal; font-size: 72px; line-height: 72px; font-weight: 800; color: rgba(255,255,255,1);font-family:Catamaran;text-transform:uppercase;">
                        {{ $slide->{'title_' . $locale} }}
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme"
                        id="slide-14-layer-33"
                        data-x="center" data-hoffset=""
                        data-y="center" data-voffset=""
                        data-width="['auto']"
                        data-height="['auto']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: nowrap; font-size: 48px; line-height: 48px; font-weight: 700; color: rgba(255,255,255,1);font-family:Catamaran;">
                        {{ $slide->{'subtitle_' . $locale} }}
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption rev-btn  tp-resizeme"
                        id="slide-14-layer-36"
                        data-x="center" data-hoffset=""
                        data-y="center" data-voffset="100"
                        data-width="['auto']"
                        data-height="['auto']"
                        data-type="button"
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":"","speed":"700","ease":"Linear.easeNone"}]'
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(70,70,70,0.9);"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-paddingtop="[20,20,20,20]"
                        data-paddingright="[50,50,50,50]"
                        data-paddingbottom="[20,20,20,20]"
                        data-paddingleft="[50,50,50,50]"
                        style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 17px; font-weight: 700; color: rgba(255,255,255,1);font-family:Catamaran;background-color:rgb(70,70,70);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        {{Translation::getValue('learn_more', $locale)}}
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->


<!-- Features Section -->
<section class="features-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg style-seven"
            style="background-image: url({{ asset('storage/' . $featureSection->background_image) }});">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">

                    {{-- Section Title --}}
                    <div class="sec-title">
                        <h2>{{ $featureSection->{'title_' . $locale} }}</h2>
                        <div class="text">
                            {{ $featureSection->{'description_' . $locale} }}
                        </div>
                    </div>

                    {{-- Feature Items --}}
                    <div class="feature-list">
                        @foreach($featureSection->items as $item)
                        <div class="feature-block-four">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon {{ $item->icon }}"></span>
                                </div>
                                <h4>{{ $item->{'title_' . $locale} }}</h4>
                                <p>{{ $item->{'text_' . $locale} }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="btn-box">
                        <a href="{{ $featureSection->button_link }}"
                            class="theme-btn btn-style-one large bg-sky">
                            {{Translation::getValue('learn_more', $locale)}}
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Section -->


<!-- Accordion Section -->
<section class="accordion-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg"
            style="background-image: url({{ asset('storage/' . $accordionSection->background_image) }});">
            <div class="cws-overlay-bg"></div>
            <div class="cws-triangle-overlay"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="accordion-column col-lg-5 col-md-12 offset-7">
                <div class="inner-column">

                    {{-- Section title --}}
                    <div class="sec-title">
                        <h2>{{ $accordionSection->{'title_' . $locale} }}</h2>
                    </div>

                    {{-- Accordion Items --}}
                    <ul class="accordion-box">
                        @foreach($accordionSection->items as $index => $item)
                        <li class="accordion block {{ $index === 0 ? 'active-block' : '' }}">
                            <div class="acc-btn {{ $index === 0 ? 'active' : '' }}">
                                <div class="icon-outer">
                                    <span class="icon fa fa-plus"></span>
                                </div>
                                {{ $item->{'title_' . $locale} }}
                            </div>

                            <div class="acc-content {{ $index === 0 ? 'current' : '' }}">
                                <div class="content">
                                    <div class="text">
                                        {{ $item->{'content_' . $locale} }}
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Accordion Section -->

<!-- Portfolio Section Two -->
<section class="portfolio-section-two">
    <div class="container-fluid">
        <div class="sec-title text-center">
            <h2>{{ $portfolioSection->{'title_' . $locale} }}</h2>
            <div class="text">{{ $portfolioSection->{'description_' . $locale} }}</div>
        </div>

        <div class="carousel-outer">
            <div class="portfolio-carousel owl-carousel owl-theme default-dots sky-dots">
                @foreach($portfolioSection->items as $item)
                <!-- Portfolio Block -->
                <div class="portfolio-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->{'title_' . $locale} }}"></figure>
                            <div class="overlay"><a href="{{ asset('storage/' . $item->image) }}" class="lightbox-image" data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="#">{{ $item->{'title_' . $locale} }}</a></h4>
                            <div class="text">{{ $item->{'description_' . $locale} }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--End Portfolio Section Two-->


<!-- Features Section Two -->
<section class="features-section-two">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg style-eight" style="background-image: url({{ asset('storage/' . $featureSectionTwo->background_image) }});">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-5 col-md-12 offset-7">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>{{ $featureSectionTwo->{'title_' . $locale} }}</h2>
                    </div>
                    <p>{{ $featureSectionTwo->{'description_' . $locale} }}</p>
                    <div class="row">
                        <!-- Feature BLock Five -->
                        <div class="feature-block-five col-lg-4 col-md-4 col-sm-12">
                            <div class="icon-box">
                                <div class="icon_shape"><svg viewBox="0 0 67 60">
                                        <path d="M36.7,5.7L64,52.8a2.8,2.8,0,0,1-2.4,4.2H7a2.8,2.8,0,0,1-2.4-4.2L31.9,5.7A2.8,2.8,0,0,1,36.7,5.7Z"></path>
                                    </svg></div>
                                <span class="icon {{ $featureSectionTwo->icon_1 }}"></span>
                            </div>
                            <h4>{{ $featureSectionTwo->{'icon_1_title_' . $locale} }}</h4>
                        </div>

                        <!-- Feature BLock Five -->
                        <div class="feature-block-five col-lg-4 col-md-4 col-sm-12">
                            <div class="icon-box">
                                <div class="icon_shape"><svg viewBox="0 0 67 60">
                                        <path d="M36.7,5.7L64,52.8a2.8,2.8,0,0,1-2.4,4.2H7a2.8,2.8,0,0,1-2.4-4.2L31.9,5.7A2.8,2.8,0,0,1,36.7,5.7Z"></path>
                                    </svg></div>
                                <span class="icon {{ $featureSectionTwo->icon_2 }}"></span>
                            </div>
                            <h4>{{ $featureSectionTwo->{'icon_2_title_' . $locale} }}</h4>
                        </div>

                        <!-- Feature BLock Five -->
                        <div class="feature-block-five col-lg-4 col-md-4 col-sm-12">
                            <div class="icon-box">
                                <div class="icon_shape"><svg viewBox="0 0 67 60">
                                        <path d="M36.7,5.7L64,52.8a2.8,2.8,0,0,1-2.4,4.2H7a2.8,2.8,0,0,1-2.4-4.2L31.9,5.7A2.8,2.8,0,0,1,36.7,5.7Z"></path>
                                    </svg></div>
                                <span class="icon {{ $featureSectionTwo->icon_3 }}"></span>
                            </div>
                            <h4>{{ $featureSectionTwo->{'icon_3_title_' . $locale} }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feature Section Two -->


<!-- Process Section -->
<section class="process-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url(images/background/15.jpg)">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>{{ $processSection->{'title_' . $locale} }}</h2>
            <div class="text">{{ $processSection->{'description_' . $locale} }}</div>
        </div>

        <div class="row">
            <!-- Process BLock -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box active">
                    <div class="icon-box">
                        <span class="process_line">
                            <span class="process_line_active"></span>
                            <span class="process_line_circle"></span>
                        </span>
                        <span class="icon {{ $processSection->icon_1 }}"></span>
                    </div>
                    <h4>{{Translation::getValue('step_1_title_' . $locale)}}</h4>
                    <div class="text">{{ $processSection->{'step_1_desc_' . $locale} }}</div>
                </div>
            </div>

            <!-- Process BLock -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="process_line hide-sm">
                            <span class="process_line_active"></span>
                            <span class="process_line_circle"></span>
                        </span>
                        <span class="icon {{ $processSection->icon_2 }}"></span>
                    </div>
                    <h4>{{Translation::getValue('step_2_title_' . $locale)}}</h4>
                    <div class="text">{{ $processSection->{'step_2_desc_' . $locale} }}</div>
                </div>
            </div>

            <!-- Process BLock -->
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon {{ $processSection->icon_3 }}"></span></div>
                    <h4>{{Translation::getValue('step_3_title_' . $locale)}}</h4>
                    <div class="text">{{ $processSection->{'step_3_desc_' . $locale} }}</div>
                </div>
            </div>
        </div>

        <div class="btn-box text-center"><a href="{{$processSection->button_link}}" class="theme-btn large btn-style-one bg-sky">{{Translation::getValue('find_partner_button_' . $locale)}}</a></div>
    </div>
</section>
<!--End Process Section -->


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