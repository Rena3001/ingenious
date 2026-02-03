@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

<div class="preloader">
        <div class="cws_loader">
            <img src="{{asset('assets/images/icons/bamoone.png')}}" alt="">
            <span>{{Translation::getValue('loading', $locale)}}...</span>
        </div>
    </div>