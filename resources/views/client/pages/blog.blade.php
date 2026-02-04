@extends('client.layout.master')
@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('blog_title', $locale))
@section('content')

@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url('{{ asset('assets/images/background/37.jpg') }}')">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1>{{ Translation::getValue('blog_title', $locale) }}</h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home', ['locale' => $locale]) }}">
                    {{ Translation::getValue('breadcrumb_home', $locale) }}
                </a>
            </li>
            <li>{{ Translation::getValue('blog_title', $locale) }}</li>
        </ul>
    </div>
</section>

<section class="blog-section">
    <div class="auto-container">

        @foreach($blogs as $blog)
        <div class="news-block style-two">
            <div class="inner-box row">

                {{-- LEFT IMAGE / RIGHT TEXT --}}
                @if($blog->position === 'left')

                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <figure class="image">
                            <a href="{{ route('blog.detail', ['locale' => $locale, 'id' => $blog->id]) }}">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="">
                            </a>
                        </figure>
                    </div>

                    <div class="content-column col-lg-6 col-md-12 col-sm-12">

                        <h3>
                            <a href="{{ route('blog.detail', ['locale' => $locale, 'id' => $blog->id]) }}">
                                {{ $blog->getTranslation('title', $locale) }}
                            </a>
                        </h3>

                        <div class="text">
                            {{ Str::limit($blog->getTranslation('description', $locale), 180) }}
                        </div>

                        <a href="{{ route('blog.detail', ['locale' => $locale, 'id' => $blog->id]) }}"
                           class="theme-btn btn-style-four">
                            {{ Translation::getValue('read_more', $locale) }}
                        </a>

                    </div>

                @else
                {{-- RIGHT IMAGE / LEFT TEXT --}}

                    <div class="content-column col-lg-6 col-md-12 col-sm-12">

                        <h3>
                            <a href="{{ route('blog.detail', ['locale' => $locale, 'id' => $blog->id]) }}">
                                {{ $blog->getTranslation('title', $locale) }}
                            </a>
                        </h3>

                        <div class="text">
                            {{ Str::limit($blog->getTranslation('description', $locale), 180) }}
                        </div>

                        <a href="{{ route('blog.detail', ['locale' => $locale, 'id' => $blog->id]) }}"
                           class="theme-btn btn-style-four">
                            {{ Translation::getValue('read_more', $locale) }}
                        </a>

                    </div>

                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <figure class="image">
                            <a href="{{ route('blog.detail', ['locale' => $locale, 'id' => $blog->id]) }}">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="">
                            </a>
                        </figure>
                    </div>

                @endif

            </div>
        </div>
        @endforeach

    </div>
</section>

@endsection
