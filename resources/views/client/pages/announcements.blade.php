@extends('client.layout.master')
@section('page_title', __('Announcements & Campaigns'))
@section('content')

@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp


<!-- Page Title -->
<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{ asset('images/background/37.jpg') }})">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1>{{ Translation::getValue('announcements_campaigns', $locale) }}</h1>
        <ul class="page-breadcrumb">
            <li>
                <a href="/{{ $locale }}">
                    {{ Translation::getValue('home', $locale) }}
                </a>
            </li>
            <li>{{ Translation::getValue('announcements_campaigns', $locale) }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">

        @foreach($announcements as $announcement)
        <div class="row clearfix" style="margin-bottom:60px;">

            <!-- Content Side (Images) -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="portfolio-single-images">

                    @if($announcement->main_image)
                        <figure class="image">
                            <a href="{{ asset('storage/'.$announcement->main_image) }}"
                               class="lightbox-image"
                               data-fancybox="gallery-{{ $announcement->id }}">
                                <img src="{{ asset('storage/'.$announcement->main_image) }}" alt="">
                            </a>
                        </figure>
                    @endif

                    @if(!empty($announcement->gallery))
                        @foreach($announcement->gallery as $image)
                            <figure class="image">
                                <a href="{{ asset('storage/'.$image) }}"
                                   class="lightbox-image"
                                   data-fancybox="gallery-{{ $announcement->id }}">
                                    <img src="{{ asset('storage/'.$image) }}" alt="">
                                </a>
                            </figure>
                        @endforeach
                    @endif

                </div>
            </div>

            <!-- Sidebar Side (Text) -->
            <div class="sidebar-side sticky-container col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar theiaStickySidebar portfolio-single-sidebar">
                    <div class="sticky-sidebar">

                        <h3>{{ $announcement->title }}</h3>

                        <span class="cat">
                            {{ Translation::getValue($announcement->type, $locale) }}
                        </span>

                        @if($announcement->intro)
                            <p><strong>{{ $announcement->intro }}</strong></p>
                        @endif

                        <div class="text">
                            {!! $announcement->content !!}
                        </div>

                        @if($announcement->type === 'campaign' && ($announcement->start_date || $announcement->end_date))
                            <ul class="list-style-three" style="margin-top:20px;">
                                @if($announcement->start_date)
                                    <li>
                                        {{ Translation::getValue('start_date', $locale) }}:
                                        {{ $announcement->start_date->format('d M Y') }}
                                    </li>
                                @endif

                                @if($announcement->end_date)
                                    <li>
                                        {{ Translation::getValue('end_date', $locale) }}:
                                        {{ $announcement->end_date->format('d M Y') }}
                                    </li>
                                @endif
                            </ul>
                        @endif

                    </div>
                </aside>
            </div>

        </div>
        @endforeach

        <!-- Pagination -->
        

    </div>
</div>
<!-- End Sidebar Page Container -->
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
@endsection