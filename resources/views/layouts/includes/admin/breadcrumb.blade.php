@if (count($breadcrumbs))

    <nav class="mb-4">

        <ol class="flex flex-wrap">
            @foreach ($breadcrumbs as $item)

                <li class="text-sm leading-normal text-slate-700 pl-2">
                    @if (!$loop->first)
                        <span class="pr-2"> / </span>
                    @endif
                    @isset($item['url'])
                        <a href="{{$item['url']}}" class="opacity-50">
                            {{ $item['name'] }}
                        </a>
                    @else
                        {{ $item['name'] }}
                    @endisset
                </li>

            @endforeach

        </ol>

        @if (count($breadcrumbs) > 1)

            <h6 class="font-bold">
                {{ end($breadcrumbs)['name'] }}
            </h6>

        @endif
    </nav>

@endif
