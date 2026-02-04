@extends('client.layout.master')
@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('products_title', $locale))
@section('content')

<!--Page Title-->
<section class="page-title">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url('{{ asset('assets/images/background/37.jpg') }}')">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1>
            @isset($currentCategory)
            {{ $currentCategory->{'name_'.$locale} ?? $currentCategory->name_az }}
            @else
            {{ Translation::getValue('shop_items_title', $locale) }}
            @endisset
        </h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home',['locale' => $locale]) }}">
                    {{ Translation::getValue('breadcrumb_home', $locale) }}
                </a>
            </li>
            <li>
                @isset($currentCategory)
            {{ $currentCategory->{'name_'.$locale} ?? $currentCategory->name_az }}
            @else
            {{ Translation::getValue('shop_items_title', $locale) }}
            @endisset
            </li>
        </ul>
    </div>
</section>

<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- CONTENT SIDE -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="our-shop no-padding style-two">

                    <!-- TOP BAR -->
                    <div class="shop-upper-box clearfix">
                        <div class="items-label">
                            {{ Translation::getValue('shop_showing_results', $locale) }}
                            <br>
                            <small class="text-muted">
                                {{ Translation::getValue('amazon_only_note', $locale) }}
                            </small>
                        </div>

                        <div class="orderby">
                            <form method="GET">
                                @foreach(request()->except('orderby') as $key => $value)
                                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                                @endforeach

                                <select name="orderby" class="sortby-select" onchange="this.form.submit()">
                                    <option value="date" {{ request('orderby') == 'date' ? 'selected' : '' }}>
                                        {{ Translation::getValue('shop_sort_newness', $locale) }}
                                    </option>
                                    <option value="price" {{ request('orderby') == 'price' ? 'selected' : '' }}>
                                        {{ Translation::getValue('shop_sort_price_low_to_high', $locale) }}
                                    </option>
                                    <option value="price-desc" {{ request('orderby') == 'price-desc' ? 'selected' : '' }}>
                                        {{ Translation::getValue('shop_sort_price_high_to_low', $locale) }}
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>

                    <!-- PRODUCTS GRID -->
                    <div class="row clearfix">

                        @if($products->count() === 0)
                        <div class="no-results text-center p-5">
                            <h3>{{ Translation::getValue('no_results', $locale) }}</h3>
                        </div>
                        @endif

                        @foreach($products as $product)
                        <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">

                                <!-- IMAGE -->
                                <div class="image-box">

                                    {{-- BADGES --}}
                                    @if($product->is_new)
                                    <span class="badge badge-new">New</span>
                                    @endif
                                    @if($product->is_top_seller)
                                    <span class="badge badge-top">Top Seller</span>
                                    @endif

                                    <figure class="image">
                                        <img
                                            src="{{ asset('storage/' . $product->image) }}"
                                            alt="{{ $product->getTranslation('name', $locale) }}">
                                    </figure>

                                    <!-- AMAZON OVERLAY -->
                                    <div class="hover-overlay">
                                        <a href="{{ $product->amazon_link }}" target="_blank" class="buy-now">
                                            {{ Translation::getValue('buy_on_amazon', $locale) }}
                                        </a>
                                    </div>
                                </div>

                                <!-- CONTENT -->
                                <div class="lower-content">
                                    <h4 class="name">
                                        <a href="{{ route('product.detail', ['locale' => $locale, 'product' => $product->slug]) }}">
                                            {{ $product->getTranslation('name', $locale) }}
                                        </a>
                                    </h4>

                                    <div class="model-code">
                                        {{ $product->model_code }}
                                    </div>

                                    <div class="price">
                                        ${{ $product->amazon_price ?? $product->price }}
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- SIDEBAR -->
            <div class="sidebar-side sticky-container col-lg-3 col-md-12 col-sm-12">
                <aside class="sidebar theiaStickySidebar">
                    <div class="sticky-sidebar">

                        <!-- CATEGORIES -->
                        <div class="sidebar-widget category-widget">
                            <h3 class="widget-title">
                                {{ Translation::getValue('categories_title', $locale) }}
                            </h3>

                            <ul class="categories-list">

                                {{-- RESET --}}
                                <li>
                                    <a href="{{ route('products', ['locale' => $locale]) }}">
                                        {{ Translation::getValue('all_products', $locale) }}
                                    </a>
                                </li>

                                @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('products.byCategory', ['locale' => $locale, 'category' => $category->id]) }}">
                                        {{ $category->getTranslation('name', $locale) }}
                                        <span>({{ $category->products_count }})</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- PRICE FILTER -->
                        <div class="sidebar-widget rangeslider-widget">
                            <h3 class="widget-title">
                                {{ Translation::getValue('price_filter', $locale) }}
                            </h3>

                            <form method="GET">
                                <input type="number" name="min_price" placeholder="Min" value="{{ request('min_price') }}">
                                <input type="number" name="max_price" placeholder="Max" value="{{ request('max_price') }}">

                                <button class="theme-btn mt-2">
                                    {{ Translation::getValue('filter', $locale) }}
                                </button>
                            </form>
                        </div>

                    </div>
                </aside>
            </div>

        </div>
    </div>
</div>

@endsection