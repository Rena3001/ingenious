@extends('client.layout.master')
@section('page_title', __('Overview'))
@section('content')
@php
use App\Models\Translation;
$locale = app()->getLocale();
@endphp

<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url(images/background/37.jpg)">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">

        <h1>{{ Translation::getValue('overview_title', $locale) }}</h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home',['locale' => $locale]) }}">
                    {{ Translation::getValue('breadcrumb_home', $locale) }}
                </a>
            </li>
            <li>
                {{ Translation::getValue('breadcrumb_overview', $locale) }}
            </li>
        </ul>

    </div>
</section>

<section class="roadmap-full-slider overview-page">
    <div class="roadmap-carousel owl-carousel owl-theme">

        @foreach($items as $r)
        <div class="roadmap-slide">

            <div class="slide-bg"
                 style="background-image: url('{{ asset('storage/' . $r->image) }}')">
            </div>

            <div class="slide-overlay"></div>

            <div class="auto-container">
                <div class="content">

                    <h2>{{ $r->getTitle($locale) }}</h2>

                    @if($r->getSubtitle($locale))
                    <p class="subtitle">
                        {!! $r->getSubtitle($locale) !!}
                    </p>
                    @endif

                    <div class="desc">
                        {!! \Illuminate\Support\Str::limit(strip_tags($r->getDesc($locale)), 1200) !!}
                    </div>


                </div>
            </div>

        </div>
        @endforeach

    </div>
</section>

@endsection