@extends('client.layout.master')

@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('faq_title', $locale))

@section('content')
@php
use Illuminate\Support\Str;
@endphp

<!-- PAGE TITLE -->
<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image:url({{ asset('assets/images/background/37.jpg') }})">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1>{{ Translation::getValue('faq_title', $locale) }}</h1>
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ url('/') }}">
                    {{ Translation::getValue('breadcrumb_home', $locale) }}
                </a>
            </li>
            <li>{{ Translation::getValue('faq_title', $locale) }}</li>
        </ul>
    </div>
</section>
<!-- END PAGE TITLE -->

<!-- FAQ SECTION -->
<section class="blog-section">

    <div class="auto-container">
        @if($faqs->count() === 0)
        <div class="no-results" style="padding:40px;text-align:center;">
            <h3>{{ Translation::getValue('no_results', $locale) }}</h3>

            @if($search)
            <p>"{{ $search }}"</p>
            @endif
        </div>
        @endif

        @forelse($faqs as $faq)
        <div class="news-block {{ $faq->layout === 'style-two' ? 'style-two' : '' }}">
            <div class="inner-box row">

                {{-- MEDIA --}}
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        @if($faq->video_url)
                        <div class="video">
                            <iframe
                                src="{{ $faq->video_url }}"
                                loading="lazy"
                                allowfullscreen>
                            </iframe>
                        </div>
                        @endif

                        <div class="date">
                            <span>{{ $faq->created_at->format('d') }}</span>
                            {{ strtoupper($faq->created_at->format('M')) }}
                        </div>
                    </div>
                </div>

                {{-- CONTENT --}}
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <h3>{{ $faq->getQuestion($locale) }}</h3>

                        <ul class="post-info">
                            <li>
                                <span class="icon fa fa-tag"></span>
                                {{ $faq->category?->{'name_'.$locale} ?? $faq->category?->name_az ?? 'FAQ' }}

                            </li>
                        </ul>

                        <div class="text">
                            {{ Str::limit(strip_tags($faq->getAnswer($locale)), 220) }}
                        </div>

                        @if($faq->pdf_url)
                        <a href="{{ $faq->pdf_url }}"
                            target="_blank"
                            class="theme-btn btn-style-four more-link">
                            {{Translation::getValue('pdf_manual',$locale)}}
                        </a>
                        @endif

                    </div>
                </div>

            </div>
        </div>
        @empty
        <div class="text-center">
            <p>{{ Translation::getValue('no_faq_found',$locale)}}</p>
        </div>
        @endforelse

        <!-- PAGINATION -->
        <div class="styled-pagination text-center">
            {{ $faqs->links('vendor.pagination.bootstrap-4') }}
        </div>

    </div>
</section>
<!-- END FAQ SECTION -->

@endsection