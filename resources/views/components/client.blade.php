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
                    <figure class="image-box">
                        <a href="{{ $client->url}}" target="_blank">
                            <img src="{{ asset('storage/' . $client->image) }}" alt="client logo">
                        </a>
                    </figure>
                </li>
            @endforeach

        </ul>
    </div>
</section>
