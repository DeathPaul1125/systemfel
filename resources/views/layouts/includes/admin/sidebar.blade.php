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
            'name' => 'Kanban',
            'icon' => 'tabler-kanban',
            'url' => '#',
            'badge' => 'Pro'
        ],
        [
            'name' => 'Inbox',
            'icon' => 'tabler-inbox',
            'url' => '#',
            'badge' => '3'
        ],
        ['name' => 'Users',
        'icon' => 'tabler-users',
        'url' => '#',
        'badge' => null
        ],
    ];
@endphp

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">

            @foreach($links as $link)

                <li>
                    <a href="{{ $link['url'] }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        @svg( $link['icon'], 'w8- h-8 text-gray-500')
                        <span class="flex-1 ms-3 whitespace-nowrap">{{ $link['name'] }}</span>
                    </a>
                </li>

            @endforeach

        </ul>
    </div>
</aside>
