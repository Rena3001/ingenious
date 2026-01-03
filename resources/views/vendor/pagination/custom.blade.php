@if ($paginator->hasPages())
<ul class="clearfix">
    {{-- Previous --}}
    @if ($paginator->onFirstPage())
        <li class="disabled"><span>«</span></li>
    @else
        <li><a href="{{ $paginator->previousPageUrl() }}">«</a></li>
    @endif

    {{-- Pages --}}
    @foreach ($elements as $element)
        @if (is_string($element))
            <li class="disabled"><span>{{ $element }}</span></li>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li><span class="active">{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next --}}
    @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}">»</a></li>
    @else
        <li class="disabled"><span>»</span></li>
    @endif
</ul>
@endif
