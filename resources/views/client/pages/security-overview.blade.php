@extends('client.layout.master')
@php
use App\Models\Translation;
$locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('security_overview', $locale))
@section('content')



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
                        style="z-index: 5;background:linear-gradient(45deg, rgba(72,61,96,0.8) 11%, rgba(72,61,96,0.79) 20%, rgba(0,89,112,0.70) 90%, rgba(0,89,112,0.7) 90%);">
                        <img src="{{asset('assets/images/main-slider/pattern/1.png')}}" alt="" data-ww="full-proportional" data-hh="full-proportional" width="1920" height="1080" data-no-retina>
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
                        data-width="['800','700','90%','90%']"
                        data-height="['auto']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: normal;   word-break: break-word;
    text-align:center; font-size: 24px; line-height: 40px; font-weight: 400; color: rgba(255,255,255,1); font-family:Catamaran;">
                        {!! nl2br($slider->getDescription($locale)) !!}

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
    @if(!empty($package->background_image))
    style="background-image: url('{{ asset('storage/'.$package->background_image) }}');"
    @endif
    >

    <div class="auto-container">
        <div class="row">

            <!-- Content Column -->
            <div class="content-column col-lg-7 col-md-7 col-sm-12 order-2">
                <div class="sec-title">
                    {{-- 8. MODEL ADI --}}
                    <h2>{{ optional($package)->getTitle($locale) ?? 'Professional Security Package' }}</h2>


                    {{-- 8.1 MODEL AÇIQLAMA --}}
                    <div class="text">
                        {{ optional($package)->getDescription($locale) ?? 'This security solution is designed to provide reliable protection, advanced monitoring, and seamless control for modern environments.' }}
                    </div>

                </div>

                {{-- 9. TEXNİKİ GÖSTƏRİCİLƏR BAŞLIĞI --}}
                <h4>{{ optional($package)->getFeaturesTitle($locale) ?? 'Technical Specifications' }}</h4>


                {{-- 9.1 TEXNİKİ SİYAHI --}}
                <ul class="package-list clearfix">
                    @foreach(optional($package)->features ?? [] as $feature)
                    <li>{{ $feature->getText($locale) ?? 'Smart security feature' }}</li>
                    @endforeach
                </ul>

                {{-- 10. CTA BUTTON --}}
                <div class="btn-box">
                    <a href="{{ 
        optional(optional($package)->product)->slug
            ? route('product.detail', [
                'locale'  => app()->getLocale(),
                'product' => optional($package->product)->slug
            ])
            : '#'
    }}"
                        class="theme-btn btn-style-one large bg-purple">

                        {{ Translation::getValue('installed_free', $locale) ?? 'Free Installation' }}

                    </a>
                </div>

            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-5 col-md-5 col-sm-12">
                <figure class="image">
                    <img
                        src="{{ asset('storage/'.optional($package)->model_image) 
        ?? asset('assets/images/default/security-model.png') }}"
                        alt="Security Model">

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
            style="background-image: url('{{ asset('storage/'.optional($highlight)->background_image) }}');">

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
                        {{ $highlight->{'title_'.$locale} ?? 'Real-Time Security Response' }}
                    </h2>

                </div>

                <!-- 12.1 Qısa izah -->
                <div class="text mb-40">
                    {{ $highlight->{'description_'.$locale} 
        ?? 'Instant alerts, smart detection, and real-time monitoring to keep you protected at all times.' }}
                </div>


                <!-- 13–15 Feature List -->
                <div class="feature-outer">

                    @php
                    $fallbackFeatures = [
                    [
                    'icon' => 'fa fa-shield',
                    'title' => 'Instant Security Alerts',
                    'content' => 'Receive real-time notifications and alerts for every important security event.',
                    ],
                    [
                    'icon' => 'fa fa-eye',
                    'title' => 'Live Monitoring',
                    'content' => 'Monitor your environment 24/7 with high accuracy and smart detection.',
                    ],
                    [
                    'icon' => 'fa fa-lock',
                    'title' => 'Advanced Protection',
                    'content' => 'Multiple layers of security ensure complete and reliable protection.',
                    ],
                    ];
                    @endphp

                    @forelse(optional($highlight)->features ?? [] as $feature)
                    <div class="feature-block-three">
                        <div class="inner-box">

                            <!-- Icon -->
                            <div class="icon-box">
                                <span class="icon {{ $feature->icon ?? 'fa fa-shield' }}"></span>
                            </div>

                            <!-- Title -->
                            <h4>
                                {{ $feature->{'title_'.app()->getLocale()} ?? 'Smart Security Feature' }}
                            </h4>

                            <!-- Content -->
                            <p>
                                {{ $feature->{'content_'.app()->getLocale()} 
                    ?? 'Advanced technology designed to keep your system secure and responsive.' }}
                            </p>

                        </div>
                    </div>
                    @empty
                    @foreach($fallbackFeatures as $item)
                    <div class="feature-block-three">
                        <div class="inner-box">

                            <div class="icon-box">
                                <span class="icon {{ $item['icon'] }}"></span>
                            </div>

                            <h4>{{ $item['title'] }}</h4>

                            <p>{{ $item['content'] }}</p>

                        </div>
                    </div>
                    @endforeach
                    @endforelse


                </div>

                <!-- 16 CTA Button -->
                <div class="btn-box">
                  <a href="{{ 
        optional(optional($package)->product)->slug
            ? route('product.detail', [
                'locale'  => app()->getLocale(),
                'product' => optional($package->product)->slug
            ])
            : '#'
    }}"
                        class="theme-btn btn-style-one large bg-purple">

                        <i class="fa fa-arrow-right"></i>
                        {{ Translation::getValue('go_to_product', $locale) ?? 'View Product' }}

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
                {{ $qualityEquipment->{'title_'.$locale} ?? 'High Quality Security Equipment' }}
            </h2>

            {{-- 17.1 — Qısa izah --}}
            <div class="text">
                {{ $qualityEquipment->{'description_'.$locale} 
        ?? 'Built with premium materials to ensure durability, accuracy, and long-term performance.' }}
            </div>
        </div>

        {{-- 18 — Hero image --}}
        <div class="device-img text-center">
            <figure class="image">
                <img
                    src="{{ 
        optional($qualityEquipment)->hero_image
            ? asset('storage/'.optional($qualityEquipment)->hero_image)
            : asset('assets/images/default/equipment-hero.png')
    }}"
                    alt="{{ 
        optional($qualityEquipment)->{'title_'.$locale} 
            ?? 'High Quality Security Equipment'
    }}">

            </figure>
        </div>

        {{-- 19 — CTA --}}
        @if(optional($qualityEquipment)->product)
        <div class="btn-box text-center">
            <a
                href="{{ route('product.detail', [
                'locale'  => $locale,
                'product' => $qualityEquipment->product->slug
            ]) }}"
                class="theme-btn btn-style-one large bg-purple">
                {{ Translation::getValue('go_to_product', $locale) ?? 'View Product' }}
            </a>
        </div>
        @endif


    </div>
</section>
<!-- End Quality Equipment -->


@php
$installBg = optional($installationService)->background_image
? asset('storage/'.optional($installationService)->background_image)
: asset('assets/images/default/installation-bg.jpg');

$installTitle = $installationService->{'title_'.$locale}
?? 'Professional Installation Service';

$installDesc = $installationService->{'description_'.$locale}
?? 'Our expert team ensures fast, secure, and professional installation for all security solutions.';

$installCta = optional($installationService)->cta_link ?? '#';
@endphp

<section class="installation-service">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay top-right"></div>

        <div class="cws-image-bg style-five"
            style="background-image: url('{{ $installBg }}');">
            <div class="cws-overlay-bg"></div>
            <div class="cws-triangle-overlay"></div>
        </div>
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="content-column col-md-6 col-sm-12 offset-6">
                <div class="inner-column">

                    <!-- Title -->
                    <div class="sec-title light install-title">
                        <h2>{{ $installTitle }}</h2>
                        <div class="text">{{ $installDesc }}</div>
                    </div>

                    <!-- Icons -->
                    <div class="services-icons row">
                        @forelse(optional($installationService)->icons ?? [] as $icon)
                        <div class="service-icon col-lg-3 col-md-3 col-sm-12">
                            <span class="icon {{ $icon->icon ?? 'fa fa-tools' }}"></span>
                        </div>
                        @empty
                        <div class="service-icon col-lg-3 col-md-3 col-sm-12">
                            <span class="icon fa fa-tools"></span>
                        </div>
                        <div class="service-icon col-lg-3 col-md-3 col-sm-12">
                            <span class="icon fa fa-cogs"></span>
                        </div>
                        <div class="service-icon col-lg-3 col-md-3 col-sm-12">
                            <span class="icon fa fa-shield"></span>
                        </div>
                        @endforelse
                    </div>

                    <!-- CTA -->
                    <div class="btn-box">
                        <a href="{{ $installCta }}"
                            class="theme-btn btn-style-one large bg-purple">
                            {{ Translation::getValue('go_to_product', $locale) ?? 'Learn More' }}
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@php
$psBg = optional($productShowcase)->image
? asset('storage/'.optional($productShowcase)->image)
: asset('assets/images/default/product-showcase-bg.jpg');

$psTitle = $productShowcase->{'title_'.$locale}
?? 'Why Customers Choose Our Solutions';

$psDesc = $productShowcase->{'description_'.$locale}
?? 'Smart design, reliable technology, and proven performance for modern security needs.';

$psButton = optional($productShowcase)->button_link ?? '#';

$icons = [
[
'img' => optional($productShowcase)->icon_1,
'text' => $productShowcase->{'icon_1_text_'.$locale} ?? 'Smart Technology',
],
[
'img' => optional($productShowcase)->icon_2,
'text' => $productShowcase->{'icon_2_text_'.$locale} ?? 'Reliable Protection',
],
[
'img' => optional($productShowcase)->icon_3,
'text' => $productShowcase->{'icon_3_text_'.$locale} ?? 'Easy Integration',
],
];
@endphp

<section class="why-choose-us product-showcase">

    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg style-six"
            style="background-image: url('{{ $psBg }}');">
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
                    <div class="sec-title light ps-title">
                        <h2>{{ $psTitle }}</h2>
                        <div class="text">{{ $psDesc }}</div>
                    </div>

                    <!-- ICON FEATURES -->
                    <div class="row pie-graphs">
                        @foreach($icons as $item)
                        <div class="pie-graph col-lg-4 col-md-4 col-sm-12">
                            <div class="graph-outer icon-box">
                            <span class="icon {{ $item['img'] ?? 'fa fa-tools' }}"></span>
                                
                            </div>
                            <h4>{{ $item['text'] }}</h4>
                        </div>
                        @endforeach
                    </div>

                    <!-- BUTTON -->
                    <div class="btn-box">
                        <a href="{{ $psButton }}"
                            class="theme-btn btn-style-one large">
                            {{ Translation::getValue('go_to_product', $locale) ?? 'View Product' }}
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>




@php
$appBg = optional($appProductSection)->image
? asset('storage/'.optional($appProductSection)->image)
: asset('assets/images/default/app-bg.jpg');

$appTitle = $appProductSection->{'title_'.$locale}
?? 'Smart Mobile Application';

$appDesc = $appProductSection->{'description_'.$locale}
?? 'Manage your system easily with our modern and user-friendly mobile application.';

$appBtn = optional($appProductSection)->button_link ?? '#';

$appIcons = [
optional($appProductSection)->icon_1 ?? 'fa fa-mobile',
optional($appProductSection)->icon_2 ?? 'fa fa-bell',
optional($appProductSection)->icon_3 ?? 'fa fa-lock',
];
@endphp

<!-- App Download -->
<section class="app-download">
    <div class="cws-background-image"
        style="background-image: url('{{ $appBg }}');"></div>

    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 offset-6 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title install-title">

                        <!-- Title -->
                        <h2>{{ $appTitle }}</h2>

                        <!-- Description -->
                        <div class="text">{{ $appDesc }}</div>

                        <!-- ICON FEATURES -->
                        <div class="row pie-graphs">
                            @foreach($appIcons as $icon)
                            <div class="pie-graph col-lg-4 col-md-4 col-sm-12">
                            <div class="graph-outer icon-box">
                            <span class="icon icon-black {{ $icon ?? 'fa fa-tools' }}"></span>
                                
                            </div>
                        </div>
                            @endforeach
                        </div>

                        <!-- BUTTON -->
                        <div class="btn-box">
                            <a href="{{ $appBtn }}"
                                class="theme-btn btn-style-one large">
                                {{ Translation::getValue('go_to_product', $locale) ?? 'View Product' }}
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End App Download -->

@endsection