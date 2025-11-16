<!DOCTYPE html>
<html lang="en">

<head>

    @include('client.layout.includes.head')

    <title>@yield('title', 'Ingenious')</title>

    {{-- Əlavə səhifəyə aid CSS faylları üçün yer --}}
    @stack('styles')

</head>

<body>
    <div class="page-wrapper">

        @include('client.layout.includes.preloader')

        <x-front-header-component />

        @yield('content')

        <x-front-footer-component />
    </div>   
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-alt-up"></span></div>

        @include('client.layout.includes.foot')

        {{-- Əlavə səhifəyə aid JS faylları üçün yer --}}
        @stack('scripts')
</body>

</html>