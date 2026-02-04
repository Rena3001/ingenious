@extends('client.layout.master')
@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('about_title', $locale))

@section('content')

<!-- PAGE TITLE -->
<section class="page-title">
    <div class="cws-image-bg" style="background-image: url({{ asset('images/background/30.jpg') }})">
        <div class="cws-overlay-bg"></div>
    </div>

    <div class="auto-container">
        <h1>{{ $about->getTranslation('title', $locale) }}</h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home', ['locale' => $locale]) }}">
                    {{ __('Home') }}
                </a>
            </li>
            <li>{{ $about->getTranslation('title', $locale) }}</li>
        </ul>
    </div>
</section>
<!-- END PAGE TITLE -->


<!-- ABOUT CONTENT -->
<section class="portfolio-single-section">
    <div class="auto-container">

        <!-- GALLERY -->
        @if($about->galleries->count())
        <div class="gallery-images row mid-spacing">
            @foreach($about->galleries as $image)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <figure class="image">
                        <a href="{{ asset('storage/'.$image->image) }}"
                           class="lightbox-image"
                           data-fancybox="about-gallery">
                            <img src="{{ asset('storage/'.$image->image) }}" alt="">
                        </a>
                    </figure>
                </div>
            @endforeach
        </div>
        @endif


        <!-- MAIN TEXT -->
        <div class="portfolio-single">

            @if($about->getTranslation('subtitle', $locale))
                <h3>{{ $about->getTranslation('subtitle', $locale) }}</h3>
            @endif

            @if($about->getTranslation('intro', $locale))
                <p>
                    {!! nl2br(e($about->getTranslation('intro', $locale))) !!}
                </p>
            @endif


            <!-- CORE SECTIONS -->
            @foreach($about->sections as $section)

                <h4 class="mt-4">
                    {{ $section->getTranslation('title', $locale) }}
                </h4>

                <p>
                    {!! nl2br(e($section->getTranslation('content', $locale))) !!}
                </p>

            @endforeach

        </div>
    </div>
</section>
<!-- END ABOUT CONTENT -->


<!-- CEO MESSAGE --> 
@if($about->ceoMessage)
<section class="about-ceo-message">
    <div class="auto-container">

        <h3>
            {{ $about->ceoMessage->getTranslation('title', $locale) }}
        </h3>

        <p>
            {!! nl2br(e($about->ceoMessage->getTranslation('message', $locale))) !!}
        </p>

        @if($about->ceoMessage->signature)
            <strong class="d-block mt-3">
                {{ $about->ceoMessage->signature }}
            </strong>
        @endif

    </div>
</section>
@endif
<!-- END CEO MESSAGE -->
<!-- PRODUCTS -->
@if($products->count())
<section class="related-projects">
    <div class="auto-container">
        <div class="outer-box">
            <h3>{{ __('Our Products') }}</h3>

            <div class="row">
                @foreach($products as $product)
                    <div class="portfolio-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">

                                <figure class="image">
                                    <img
                                        src="{{ asset('storage/'.$product->image) }}"
                                        alt="{{ $product->getTranslation('name', $locale) }}"
                                    >
                                </figure>

                                <div class="overlay">
                                    <a href="{{ route('product.detail', [
                                        'locale' => $locale,
                                        'product' => $product->slug
                                    ]) }}">
                                        <span class="icon fa fa-link"></span>
                                    </a>
                                </div>

                            </div>

                            <div class="content-box text-center mt-3">
                                <h5>
                                    {{ $product->getTranslation('name', $locale) }}
                                </h5>

                                <span class="price">
                                    {{ number_format($product->price, 2) }}
                                    {{ $product->currency }}
                                </span>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endif
<!-- END PRODUCTS -->

@endsection
