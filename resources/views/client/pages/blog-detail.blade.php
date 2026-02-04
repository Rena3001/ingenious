@extends('client.layout.master')
@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('blog_detail', $locale))
@section('content')

@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

<!-- Page Title -->
<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url('{{ asset('assets/images/background/37.jpg') }}')">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">

        <!-- PAGE TITLE -->
        <h1>{{ $blog->getTranslation('title', $locale) }}</h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home', ['locale' => $locale]) }}">
                    {{ Translation::getValue('breadcrumb_home', $locale) }}
                </a>
            </li>

            <li>
                <a href="{{ route('blog', ['locale' => $locale]) }}">
                    {{ Translation::getValue('blog_title', $locale) }}
                </a>
            </li>

            <li>{{ $blog->getTranslation('title', $locale) }}</li>
        </ul>

    </div>
</section>
<!-- End Page Title -->


<!-- Blog Single -->
<section class="blog-single">
    <div class="auto-container">

        <div class="news-block">
            <div class="inner-box">

                <!-- BLOG IMAGE -->
                <div class="image-column">
                    <div class="inner-column">
                        <figure class="image">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->getTranslation('title', $locale) }}">
                        </figure>
                    </div>
                </div>

                <!-- BLOG CONTENT -->
                <div class="content-column">
                    <div class="inner-column">

                        <!-- Meta info -->
                        <ul class="post-info">
                            <li>
                                <span class="icon fa fa-calendar"></span>
                                {{ $blog->created_at->format('F d, Y') }}
                            </li>
                        </ul>

                        <h2>{{ $blog->getTranslation('title', $locale) }}</h2>

                        <!-- BLOG DESCRIPTION (FULL) -->
                        <div class="blog-description">
                            {!! $blog->getTranslation('description', $locale) !!}
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Blog Single -->

@endsection
