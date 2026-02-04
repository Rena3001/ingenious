@extends('client.layout.master')
@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('news_detail', $locale))
@section('content')



<!-- Page Title -->
<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image:url({{ asset('images/background/37.jpg') }})">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1>{{ $news->title }}</h1>
        <ul class="page-breadcrumb">
            <li><a href="/">{{ Translation::getValue('home', $locale) }}</a></li>
            <li><a href="{{ route('news',['locale' => $locale]) }}">{{ Translation::getValue('news', $locale) }}</a></li>
            <li>{{ $news->title }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- News Detail -->
<section class="blog-single">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-single-content">

                    <!-- Main Image -->
                    @if($news->main_image)
                        <figure class="image">
                            <img src="{{ asset('storage/'.$news->main_image) }}" alt="{{ $news->title }}">
                        </figure>
                    @endif

                    <!-- Meta -->
                    <div class="post-meta">
                        <span>
                            <i class="fa fa-calendar"></i>
                            {{ $news->published_at?->format('d M Y') }}
                        </span>

                        <span>
                            <i class="fa fa-tag"></i>
                            {{ Translation::getValue($news->category, $locale) }}
                        </span>

                        @if($news->category === 'events' && $news->event_location)
                            <span>
                                <i class="fa fa-map-marker-alt"></i>
                                {{ $news->event_location }}
                            </span>
                        @endif
                    </div>

                    <!-- Short description -->
                    @if($news->short_description)
                        <p class="lead">
                            {{ $news->short_description }}
                        </p>
                    @endif

                    <!-- Full Content -->
                    <div class="text">
                        {!! $news->content !!}
                    </div>

                    <!-- Gallery -->
                    @if(!empty($news->gallery))
                        <div class="news-gallery row">
                            @foreach($news->gallery as $image)
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <figure class="image">
                                        <a href="{{ asset('storage/'.$image) }}" class="lightbox-image" data-fancybox="gallery">
                                            <img src="{{ asset('storage/'.$image) }}" alt="">
                                        </a>
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- Video -->
                    @if($news->video_url)
                        <div class="news-video">
                            <iframe width="100%" height="420"
                                src="{{ $news->video_url }}"
                                frameborder="0"
                                allowfullscreen>
                            </iframe>
                        </div>
                    @endif

     

                </div>
            </div>

            <!-- Sidebar -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">

                    <div class="sidebar-widget">
                        <h4>{{ Translation::getValue('latest_news', $locale) }}</h4>

                        @foreach($latestNews as $item)
                            <div class="news-widget-item">
                                <a href="{{ route('news-detail', ['locale' => $locale, 'slug' => $item->slug]) }}">
                                    {{ $item->title }}
                                </a>
                                <span class="date">
                                    {{ $item->published_at?->format('d M Y') }}
                                </span>
                            </div>
                        @endforeach
                    </div>

                </aside>
            </div>

        </div>
    </div>
</section>
<!-- End News Detail -->

@endsection