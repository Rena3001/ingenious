@extends('client.layout.master')
@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('news_title', $locale))
@section('content')





<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image:url({{ asset('assets/images/background/37.jpg') }})">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1>{{ Translation::getValue('news', $locale) }}</h1>
        <ul class="page-breadcrumb">
            <li><a href="/">{{ Translation::getValue('home', $locale) }}</a></li>
            <li>{{ Translation::getValue('news', $locale) }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- News Grid -->
<section class="portfolio-section portfolio-three-col">
    <div class="auto-container">
        <div class="mixitup-gallery">

            <!-- Filter Tabs -->
            <ul class="filter-tabs filter-btns clearfix">
                <li class="filter active" data-filter="all">
                    {{ Translation::getValue('all', $locale) }}
                </li> 
                <li class="filter" data-filter=".news">
                    {{ Translation::getValue('news_title', $locale) }}
                </li>
                <li class="filter" data-filter=".press">
                    {{ Translation::getValue('press', $locale) }}
                </li>
                <li class="filter" data-filter=".events">
                    {{ Translation::getValue('events', $locale) }}
                </li>
            </ul>

            <!-- Grid -->
            <div class="filter-list row mid-spacing">

                @foreach($news as $item)
                <div class="portfolio-block-two mix {{ $item->category }} col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">

                        <div class="image-box">
                            <figure class="image news-image">
                                <img src="{{ asset('storage/'.$item->main_image) }}" alt="{{ $item->title }}">
                            </figure>
                            <div class="overlay">
                                <a href="{{ route('news-detail', ['locale' => $locale, 'slug' => $item->slug]) }}">
                                    <span class="icon fa fa-link"></span>
                                </a>
                            </div>
                        </div>

                        <div class="lower-content">
                            <h4>
                                <a href="{{ route('news-detail', ['locale' => $locale, 'slug' => $item->slug]) }}">
                                    {{ $item->title }}
                                </a>
                            </h4>

                            <div class="cat">
                                {{ Translation::getValue($item->category, $locale) }}
                            </div>

                            <div class="text">
                                {{ Str::limit($item->short_description, 120) }}
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper text-center">
                {{ $news->links() }}
            </div>

        </div>
    </div>
</section>
<!-- End News Grid -->





@endsection