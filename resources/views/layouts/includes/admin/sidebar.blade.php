@php
    $links = [
        [
            'name'  => 'Dashboard',
            'icon'  => 'tabler-dashboard-f',
            'url'   => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'),
            'badge' => null
        ],
        [
            'header'    => 'Management',
        ],
        [
            'name'   => 'Dashboard',
            'icon'   => 'tabler-dashboard-f',
            'url'    => route('admin.dashboard'),
            'active' => false,
            'badge'  => null,
            'submenu'=> [
                [
                    'name'   => 'Submenu 1',
                    'icon'   => 'tabler-circle',
                    'url'    => '#',
                    'active' => false,
                    'badge'  => null,
                ],
                [
                    'name'   => 'Submenu 2',
                    'icon'   => 'tabler-circle',
                    'url'    => '#',
                    'active' => false,
                    'badge'  => null,
                ],
            ],
        ],
    ];
@endphp

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">

            @foreach($links as $link)

                <li>
                    @isset($link['header'])

                        <div class="px-2 py-2 text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">
                            {{ $link['header'] }}
                        </div>

                        @else

                            @isset($link['submenu'])

                                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                    @svg( $link['icon'], 'w8- h-8 text-gray-500')
                                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{ $link['name'] }}</span>
                                    @svg( 'tabler-chevron-down', 'w-6 h-6 text-gray-500')
                                </button>
                                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                                    @foreach($link['submenu'] as $sublink)
                                        <li>
                                            <a href="{{ $sublink['url'] }}" class="flex items-center justify-between w-full p-2 text-gray-900 rounded-lg pl-4 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                                <span class="flex items-center">
                                                    @svg($sublink['icon'], 'w-6 h-6 text-gray-500')
                                                </span>
                                                <span class="ms-3 flex-1 text-right whitespace-nowrap">{{ $sublink['name'] }}</span>
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>

                                @else

                        <a href="{{ $link['url'] }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ $link['active'] }} ? 'bg-gray-100 dark:bg-gray-700' : ''">
                            @svg( $link['icon'], 'w8- h-8 text-gray-500')
                            <span class="flex-1 ms-3 whitespace-nowrap">{{ $link['name'] }}</span>
                        </a>

                        @endisset

                    @endisset

                </li>

            @endforeach

        </ul>
    </div>
</aside>
