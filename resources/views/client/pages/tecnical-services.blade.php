@extends('client.layout.master')
@section('page_title', "__('Technical Services')")
@section('content')

    @php
    use App\Models\Translation;
    $locale = app()->getLocale();
    @endphp





@endsection