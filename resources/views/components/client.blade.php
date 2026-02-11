@php
$clients = \App\Models\Client::where('is_active', 1)
->orderBy('sort')
->get();
@endphp

<section class="clients-section">
    <div class="auto-container">
        <ul class="sponsors-carousel owl-carousel owl-theme">

            @foreach($clients as $client)
            <li class="slide-item">
                <figure class="image-box" style="width: 300px;
    height: 170px;
    display: flex;
    justify-content: center;
    align-items: center;">
                    <a href="{{ $client->url}}" target="_blank">
                        @if(Str::contains($client->image, '<svg'))
                            {!! $client->image !!}
                            @else
                            <span class="icon {{ $client->image }}" style="font-size: 128px;"></span>
                            @endif
                    </a>
                </figure>
            </li>
            @endforeach

        </ul>
    </div>
</section>