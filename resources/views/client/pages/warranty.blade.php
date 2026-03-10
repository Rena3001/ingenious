@extends('client.layout.master')
@php
use App\Models\Translation;
$locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('warranty_title', $locale))
@section('content')



<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>

                @foreach($slides as $slide)

                <li data-transition="zoomout"
                    data-slotamount="default"
                    data-easein="default"
                    data-easeout="default"
                    data-masterspeed="850"
                    data-delay="5999">

                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/'.$slide->background_image) }}"
                        alt=""
                        class="rev-slidebg"
                        data-bgposition="center center"
                        data-bgfit="cover"
                        data-bgrepeat="no-repeat"
                        data-no-retina>

                    <!-- PATTERN LAYER -->
                    <div class="tp-caption tp-resizeme"
                        id="slide-{{ $loop->index }}-layer-pattern"
                        data-x="center"
                        data-y="center"
                        data-width="full-proportional"
                        data-height="full-proportional"
                        data-type="image"
                        data-basealign="slide"
                        data-responsive_offset="on"
                        data-frames='[
                            {"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
                            {"delay":"wait","speed":300,"frame":"999","ease":"Power3.easeInOut"}
                        ]'
                        style="z-index:5;background-color:rgba(0,173,255,0.8);">

                        <img src="{{ asset('images/main-slider/pattern/2.png') }}"
                            alt=""
                            data-ww="full-proportional"
                            data-hh="full-proportional"
                            width="1920"
                            height="1080"
                            data-no-retina>
                    </div>

                    <!-- TITLE -->
                    <div class="tp-caption tp-resizeme"
                        id="slide-{{ $loop->index }}-layer-title"
                        data-x="center"
                        data-y="center"
                        data-voffset="-200"
                        data-width="904"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[
                            {"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},
                            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;"}
                        ]'
                        data-textAlign="center"
                        style="z-index:6;
                               font-size:72px;
                               line-height:72px;
                               font-weight:800;
                               color:#fff;
                               font-family:Catamaran;
                               text-align:center;">

                        {{ $slide->{'title_' . $locale} }}

                    </div>

                    <!-- SUBTITLE -->
                    <div class="tp-caption tp-resizeme"
                        id="slide-{{ $loop->index }}-layer-subtitle"
                        data-x="center"
                        data-y="center"
                        data-voffset="-20"
                        data-width="700"
                        data-fontsize="18"
                        data-lineheight="30"
                        data-textalign="center"
                        data-frames='[
                            {"delay":450,"speed":600,"frame":"0","from":"opacity:0;y:20;","to":"o:1;y:0;"}
                        ]'
                        style="z-index:7;
                               color:#fff;
                               white-space:normal;
                               max-width:700px;
                               padding-top:20px;
                               text-align:center;">

                        {{ $slide->{'subtitle_' . $locale} }}

                    </div>

                    <!-- BUTTON -->
                    <div class="tp-caption rev-btn tp-resizeme"
                        id="slide-{{ $loop->index }}-layer-button"
                        data-x="center"
                        data-y="center"
                        data-voffset="130"
                        data-type="button"
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"px","speed":"700"}]'
                        data-frames='[
                            {"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;"},
                            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;"}
                        ]'
                        style="z-index:8;
                               font-size:16px;
                               font-weight:700;
                               color:#fff;
                               background-color:rgb(70,70,70);
                               padding:20px 20px;
                               border-radius:30px;
                               cursor:pointer;">

                        {{ Translation::getValue('learn_more', $locale) }}

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
                    <div class="btn-box">
                        <a href="mailto:{{ $accordionSection->cta_email}}"
                            class="theme-btn btn-style-one large bg-sky">
                            {{Translation::getValue('write_to_us', $locale)}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Accordion Section -->



<!-- Portfolio Section Two -->
<section class="portfolio-section-two">
    <div class="container-fluid">

        {{-- SECTION TITLE --}}
        <div class="sec-title text-center">
            <h2>{{ $portfolioSection->{'title_' . $locale} }}</h2>
            <div class="text">
                {{ $portfolioSection->{'description_' . $locale} }}
            </div>
        </div>

        {{-- CAROUSEL --}}
        <div class="carousel-outer">
            <div class="portfolio-carousel owl-carousel owl-theme default-dots sky-dots">

                @foreach($portfolioSection->items as $item)
                <div class="portfolio-block">
                    <div class="inner-box">

                        {{-- IMAGE --}}
                        <div class="image-box">
                            <figure class="image">
                                <img
                                    src="{{ asset('storage/' . $item->image) }}"
                                    alt="{{ $item->{'title_' . $locale} }}">
                            </figure>

                            {{-- LIGHTBOX --}}
                            <div class="overlay">
                                <a
                                    href="{{ asset('storage/' . $item->image) }}"
                                    class="lightbox-image"
                                    data-fancybox="gallery">
                                    <span class="icon fa fa-expand-arrows-alt"></span>
                                </a>
                            </div>
                        </div>

                        {{-- CONTENT --}}
                        <div class="lower-content">
                            <h4>
                                <a href="{{ $item->link }}">
                                    {{ $item->{'title_' . $locale} }}
                                </a>
                            </h4>
                            <div class="text">
                                {{ $item->{'description_' . $locale} }}
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
<!-- End Portfolio Section Two -->


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
        <div class="cws-image-bg"
            style="background-image: url('{{ asset('storage/'.$processSection->background_image) }}')">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">

        {{-- 36 — MAIN TITLE --}}
        <div class="sec-title text-center">
            <h2>{{ $processSection->{'title_'.$locale} }}</h2>

            {{-- 36.1 — DESCRIPTION --}}
            <div class="text">
                {{ $processSection->{'description_'.$locale} }}
            </div>
        </div>

        <div class="row">

            {{-- 37 — MISSION --}}
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box active">
                    <div class="icon-box">
                        <span class="process_line">
                            <span class="process_line_active"></span>
                            <span class="process_line_circle"></span>
                        </span>
                        <span class="icon {{ $processSection->icon_1 }}"></span>
                    </div>

                    <h4>{{ $processSection->{'icon_1_title_'.$locale} }}</h4>
                    <div class="text">
                        {{ $processSection->{'icon_1_desc_'.$locale} }}
                    </div>
                </div>
            </div>

            {{-- 38 — VISION --}}
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="process_line hide-sm">
                            <span class="process_line_active"></span>
                            <span class="process_line_circle"></span>
                        </span>
                        <span class="icon {{ $processSection->icon_2 }}"></span>
                    </div>

                    <h4>{{ $processSection->{'icon_2_title_'.$locale} }}</h4>
                    <div class="text">
                        {{ $processSection->{'icon_2_desc_'.$locale} }}
                    </div>
                </div>
            </div>

            {{-- 39 — VALUES --}}
            <div class="process-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon {{ $processSection->icon_3 }}"></span>
                    </div>

                    <h4>{{ $processSection->{'icon_3_title_'.$locale} }}</h4>
                    <div class="text">
                        {{ $processSection->{'icon_3_desc_'.$locale} }}
                    </div>
                </div>
            </div>

        </div>

        {{-- 40 — CTA --}}
        <div class="btn-box text-center">
            <a href="{{ $processSection->button_link }}"
                class="theme-btn large btn-style-one bg-danger">
                {{ Translation::getValue('why_bamoone',$locale)}}
            </a>
        </div>

    </div>
</section>
<!-- End Process Section -->

<!-- Help / Contact CTA Section -->
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

        {{-- 41 — MAIN TITLE --}}
        <div class="sec-title text-center light">
            <h2>
                {{ $contactCta->{'title_'.$locale} }}
            </h2>

            {{-- 41.1 — DESCRIPTION --}}
            <div class="text">
                {{ $contactCta->{'description_'.$locale} }}
            </div>
        </div>

        {{-- 41.2 — CTA BUTTON --}}
        <div class="btn-box text-center mt-30">
            <a href="{{ $contactCta->button_link }}"
                class="theme-btn btn-style-one large dark">
                {{Translation::getValue('contact_us',$locale)}}
            </a>
        </div>

    </div>
</section>
<!-- End Help / Contact CTA Section -->

@endsection