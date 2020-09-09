

@if ($paginator->hasPages())
        <nav class="navigation pagination" role="navigation">
            <div class="nav-links">

                @if ($paginator->onFirstPage())
                @else
                    <a class="next page-numbers disabled" href="{{ $paginator->previousPageUrl() }}">
                        <span class="lnr lnr-arrow-right"></span>
                    </a>
                @endif



                @foreach ($elements as $element)
                    @if (is_string($element))
                        <a class="page-numbers" disabled>{{ $element }}</a>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <a class="page-numbers current">{{ $page }}</a>
                            @else
                                <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach



                @if ($paginator->hasMorePages())
                    <a class="prev page-numbers" href="{{ $paginator->nextPageUrl() }}">
                        <span class="lnr lnr-arrow-left"></span>
                    </a>
                @else
                @endif


            </div>
        </nav>
@endif
