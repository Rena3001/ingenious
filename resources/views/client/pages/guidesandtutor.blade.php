@extends('client.layout.master')

@section('page_title', __('Guides & Tutorials'))

@section('content')
@php
use Illuminate\Support\Str;
use App\Models\Translation;
$locale = app()->getLocale();
@endphp

<!-- Page Title -->
<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image:url({{ asset('assets/images/background/37.jpg') }})">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1>{{ Translation::getValue('guides_title', $locale) ?? 'Guides & Tutorials' }}</h1>
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ url('/') }}">
                    {{ Translation::getValue('breadcrumb_home', $locale) ?? 'Home' }}
                </a>
            </li>
            <li>{{ Translation::getValue('guides_title', $locale) ?? 'Guides & Tutorials' }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Guides & Tutorials Section -->
<section class="blog-section blog-masonry">
    <div class="container-fluid">

        {{-- NO RESULTS --}}
        @if($guides->count() === 0)
            <div class="no-results" style="padding:40px;text-align:center;">
                <h3>{{ Translation::getValue('no_results', $locale) ?? 'No results found' }}</h3>

                @if(!empty($search))
                    <p>"{{ $search }}"</p>
                @endif
            </div>
        @else

        <!-- GRID -->
        <div class="masonry-items-container row">

            @foreach($guides as $guide)
                <div class="news-block masonry-item col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">

                        <!-- MEDIA -->
                        <div class="image-column">
                            <div class="inner-column">

                                @if($guide->hasVideo())
                                <div class="video">
                                    <iframe
                                        src="{{ $guide->getEmbedUrl() }}"
                                        loading="lazy"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                @endif

                                @if($guide->published_at)
                                <div class="date">
                                    <span>{{ $guide->published_at->format('d') }}</span>
                                    {{ strtoupper($guide->published_at->format('M')) }}
                                </div>
                                @endif

                            </div>
                        </div>

                        <!-- CONTENT -->
                        <div class="content-column">
                            <div class="inner-column">

                                <h3>{{ $guide->getProductName($locale) }}</h3>

                                <div class="post-tags">
                                    <span>
                                        {{ $guide->category?->{'name_'.$locale}
                                            ?? $guide->category?->name_az
                                            ?? 'Guide' }}
                                    </span>
                                </div>

                                <div class="text">
                                    {{ Str::limit(strip_tags($guide->getDescription($locale)), 120) }}
                                </div>

                                @if($guide->getWatchUrl())
                                <a href="{{ $guide->getWatchUrl() }}"
                                   target="_blank"
                                   class="theme-btn btn-style-four">
                                    {{ Translation::getValue('watch_video', $locale) ?? 'Watch Video' }}
                                </a>
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

        <!-- PAGINATION -->
        <div class="styled-pagination text-center">
            {{ $guides->links('vendor.pagination.bootstrap-4') }}
        </div>

        @endif

    </div>
</section>
<!-- End Guides & Tutorials -->

@endsection
