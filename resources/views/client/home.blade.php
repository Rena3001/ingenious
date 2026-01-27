@extends('client.layout.master')
@section('page_title', 'Ingenious')

@section('content')
@php
use App\Models\Translation;
$locale = app()->getLocale();
$icons = $services->icons ?? []; // artıq array-dir
@endphp

<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>

                @foreach($sliders as $slider)
                @php
                $title = $slider->getTitle($locale);
                $description = $slider->getDescription($locale);
                $button_url = $slider->button_url;
                $bg_image = asset('storage/' . $slider->image);
                @endphp

                <li
                    data-index="rs-{{ $loop->iteration }}"
                    data-transition="zoomout"
                    data-masterspeed="850"
                    data-delay="6000"
                    data-title="Slide"
                    class="rev-slide">

                    <!-- BACKGROUND -->
                    <img
                        src="{{ $bg_image }}"
                        alt="{{ $title }}"
                        class="rev-slidebg"
                        data-bgfit="cover"
                        data-bgposition="center center"
                        data-bgrepeat="no-repeat">

                    <!-- DARK OVERLAY -->
                    <div class="tp-caption tp-resizeme"
                        data-x="center"
                        data-y="center"
                        data-width="['full-proportional','full-proportional','full-proportional','full-proportional']"
                        data-height="['full-proportional','full-proportional','full-proportional','full-proportional']"
                        data-type="image"
                        data-basealign="slide"
                        data-responsive_offset="on"
                        data-frames='[
                            {"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;"},
                            {"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;"}
                        ]'
                        style="
                            z-index:5;
                            background: linear-gradient(
                                135deg,
                                rgba(10,61,98,0.85) 0%,
                                rgba(27,94,138,0.75) 40%,
                                rgba(58,137,201,0.55) 100%
                            );
                        ">
                        <img src="{{ asset('assets/images/main-slider/pattern/1.png') }}"
                            alt=""
                            data-ww="full-proportional"
                            data-hh="full-proportional"
                            width="1920"
                            height="1080"
                            data-no-retina>
                    </div>

                    <!-- TITLE -->
                    @if($title)
                    @php
                    $words = explode(' ', $title);
                    $half = ceil(count($words) / 2);
                    $line1 = implode(' ', array_slice($words, 0, $half));
                    $line2 = implode(' ', array_slice($words, $half));
                    @endphp
                    <div class="tp-caption tp-resizeme"
                        data-x="center"
                        data-y="center"
                        data-voffset="['-160','-130','-110','-90']"
                        data-width="['900','800','620','340']"
                        data-fontsize="['64','52','42','30']"
                        data-lineheight="['74','62','52','38']"
                        data-textalign="['center','center','center','center']"
                        data-frames='[
       {"delay":300,"speed":600,"frame":"0","from":"opacity:0;y:20;","to":"o:1;y:0;"}
     ]'
                        style="z-index:6;font-weight:800;color:#fff;text-transform:uppercase;">
                        {{ $line1 }}<br>
                        {{ $line2 }}
                    </div>

                    @endif

                    <!-- DESCRIPTION -->
                    @if($description)
                    @php
                    $words = explode(' ', $description);

                    // mobil üçün təhlükəsiz limit
                    $perLine = 5; // istəsən 6 edə bilərsən

                    $line1 = implode(' ', array_slice($words, 0, $perLine));
                    $line2 = implode(' ', array_slice($words, $perLine, $perLine));
                    $line3 = implode(' ', array_slice($words, $perLine * 2, $perLine));
                    $line4 = implode(' ', array_slice($words, $perLine * 3, $perLine));
                    @endphp


                    <div class="tp-caption tp-resizeme"
                        data-x="center"
                        data-y="center"
                        data-voffset="['-20','0','20','30']"
                        data-width="['640','600','480','320']"
                        data-fontsize="['18','17','16','14']"
                        data-lineheight="['30','28','26','22']"
                        data-padding="[
       '16px 40px 16px 40px',
       '16px 36px 16px 36px',
       '14px 28px 14px 28px',
       '12px 20px 12px 20px'
     ]"
                        data-textalign="['center','center','center','center']"
                        data-frames='[
       {"delay":450,"speed":600,"frame":"0","from":"opacity:0;y:20;","to":"o:1;y:0;"}
     ]'
                        style="z-index:7;color:#fff;">
                        {{ $line1 }}<br>
                        {{ $line2 }}<br>
                        {{ $line3 }}
                    </div>


                    @endif

                    <!-- BUTTON -->
                    <a href="{{ $button_url }}">
                        <div class="tp-caption rev-btn"
                            data-x="center"
                            data-y="center"
                            data-voffset="['140','160','180','190']"
                            data-padding="[
           '14px 36px',
           '14px 34px',
           '12px 30px',
           '12px 28px'
         ]"
                            data-fontsize="['16','16','15','14']"
                            data-frames='[
           {"delay":600,"speed":500,"frame":"0","from":"opacity:0;y:20;","to":"o:1;y:0;"}
         ]'
                            style="z-index:8;background:#ff6c3a;color:#fff;border-radius:30px;font-weight:700;">
                            {{ Translation::getValue('read_more',$locale) }}
                        </div>
                    </a>


                </li>
                @endforeach

            </ul>
        </div>
    </div>
</section>

<!--End Main Slider-->



<!-- About Section -->
<section class="about-section">

    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay"></div>

        <div class="cws-image-bg"
            style="background-image: url('{{ 
                $homeAbout->background_image 
                ? asset('storage/' . $homeAbout->background_image) 
                : asset('assets/images/background/1.jpg') 
            }}')">
        </div>
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 col-md-12">

                <div class="sec-title">
                    <h2>{{ $homeAbout->getTitle($locale) }}</h2>


                    <div class="text">
                        {{Translation::getValue('home_about_desc', $locale)}}
                    </div>

                </div>

                <div class="row">
                    @foreach($missionItems as $item)
                    <!-- Feature Block -->
                    <div class="feature-block col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-box">

                            <div class="icon-box">
                                @if(Str::contains($item->icon, '<svg'))
                                    {!! $item->icon !!}
                                    @else
                                    <i class="{{ $item->icon }}"></i>
                                    @endif
                            </div>

                            <h5>{!! $item->getTitle($locale) !!}</h5>

                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Btn Box -->

                <div class="btn-box">
                    <a href="{{ route('about', ['locale' => $locale]) }}"
                        class="theme-btn large btn-style-one">
                        {{ Translation::getValue('why_bamoone',$locale) }}
                    </a>
                </div>


            </div>
        </div>
    </div>

</section>



<!-- End About Section -->

<!-- Products Section -->
@if(isset($products) && count($products) > 0)
<section class="portfolio-section">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-triangle-overlay top-left"></div>
        <div class="cws-triangle-overlay top-right"></div>

        <div class="cws-image-bg style-two"
            style="background-image: url('{{ asset('assets/images/background/2.jpg') }}')">
            <div class="cws-overlay-bg bg-blue"></div>
        </div>

        <div class="cws-triangle-overlay bottom-left"></div>
    </div>

    <div class="container-fluid">

        <!-- SECTION TITLE -->
        <div class="sec-title text-center light">
            <h2>{{ Translation::getValue('home_products_title', $locale) }}</h2>

            <div class="text">
                {!! Translation::getValue('home_products_desc', $locale) !!}
            </div>
        </div>

        <div class="carousel-outer">
            <div class="portfolio-carousel owl-carousel owl-theme default-dots">

                @foreach($products as $product)
                <!-- Product Block -->
                <div class="portfolio-block">
                    <div class="inner-box">

                        <div class="image-box">
                            <figure class="image">
                                <img src="{{ asset('storage/' . $product->image) }}"
                                    alt="{{ $product->getTranslation('name', $locale) }}">
                            </figure>

                            <div class="overlay">
                                <a href="{{ route('product.detail', ['locale' => $locale, 'product' => $product->id]) }}"
                                    class="lightbox-image" target="_blank">
                                </a>
                            </div>
                        </div>

                        <div class="lower-content">
                            <h4>
                                <a href="{{ route('product.detail', ['locale' => $locale, 'product' => $product->id]) }}"
                                    target="_blank">
                                    {{ $product->getTranslation('name', $locale) }}
                                </a>
                            </h4>

                            <div class="cat">
                                <a href="{{ route('product.detail', ['locale' => $locale, 'product' => $product->id]) }}">{{ $product->getTranslation('category_name', $locale) }}</a>
                            </div>

                            <div class="text">
                                {!! \Illuminate\Support\Str::limit(strip_tags($product->getTranslation('description', $locale)), 90) !!}
                            </div>

                        </div>

                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
</section>
@endif
<!-- End Products Section -->

<!-- Development Roadmap Section -->
@if(isset($roadmap) && count($roadmap) > 0)
<section class="services-section"> {{-- İNKİŞAF XƏRİTƏSİ --}}
    <div class="cws-background-image"
        style="background-image: url('{{ asset('assets/images/background/3.jpg') }}')"></div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>{{ Translation::getValue('roadmap_title', $locale) }}</h2>
            <div class="text">
                {!! Translation::getValue('roadmap_desc', $locale) !!}
            </div>
        </div>

        <div class="row">

            @foreach($roadmap as $item)
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">

                    <div class="image-box">
                        <div class="icon-box">
                            @if(Str::contains($item->icon, '<svg'))
                                {!! $item->icon !!}
                                @else
                                <span class="icon {{ $item->icon }}"></span>
                                @endif
                        </div>

                        <figure class="image">
                            <img src="{{ asset('storage/' . $item->image) }}"
                                alt="{{ $item->getTranslation('title', $locale) }}">
                        </figure>

                        <div class="overlay">
                            <div class="desc">
                                {!! $item->getTranslation('title', $locale) !!}
                            </div>
                        </div>
                    </div>

                    <div class="lower-content">
                        <h4>{{ $item->getTranslation('title', $locale) }}</h4>
                        <div class="text">{{ $item->getTranslation('subtitle', $locale)}}</div>

                        <div class="btn-box">
                            <a href="{{ url($locale . '/' . $item->button_link) }}"
                                class="theme-btn btn-style-two">
                                {{ $item->getButtonText($locale) }}
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endif

<!-- End Development Roadmap Section -->


<!-- How to Use -->
<section class="how-to-use">
    <div class="background-layers">
        <div class="cws-triangle-overlay top-right"></div>

        <div class="cws-image-bg style-three"
            style="background-image: url('{{ 
                $homeAbout->background_image 
                ? asset('storage/'.$homeAbout->background_image) 
                : asset('assets/images/background/sample-bg.jpg') 
             }}')">
            <div class="cws-overlay-bg bg-blue half-left"></div>
        </div>

        <div class="cws-triangle-overlay bottom-right"></div>
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-6 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light text-right">
                        <h2>
                            {{ Translation::getValue('why_bamoone',$locale) }}

                        </h2>


                    </div>
                </div>
            </div>
        </div>

        <figure class="control-image">
            <img src="{{ 
                $homeAbout->image 
                ? asset('storage/'.$homeAbout->image) 
                : asset('assets/images/sample/how-to-use.png') 
            }}" alt="">
        </figure>
    </div>
</section>
<!-- End How to Use -->





<!-- Callback Section -->
@include('components.callback')

<!--End Reservation Section -->

<!--Clients Section-->
@include('components.client')
<!--End Clients Section-->

@endsection