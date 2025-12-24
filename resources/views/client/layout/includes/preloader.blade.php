@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

<div class="preloader">
        <div class="cws_loader">
            <span>{{Translation::getValue('loading', $locale)}}...</span>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
            <div class="hex"></div>
        </div>
    </div>