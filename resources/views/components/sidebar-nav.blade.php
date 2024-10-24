@php
    use App\Traits\NavigationTrait;
    $menus = NavigationTrait::navItem();
@endphp

@if ($visibility)
    <div class="w-16 rounded-xl bg-white shadow-md shadow-slate-300">
        <ul class="flex flex-col items-center gap-y-4 px-2 py-4">
            @foreach ($menus as $menu)
                <li>
                    <a href="{{ $menu['route'] }}"
                        class="{{ request()->fullUrlIs($menu['route']) ? 'bg-red-400 text-white' : 'bg-slate-300 text-slate-500 transition-colors duration-300 hover:bg-red-400 hover:text-white' }} inline-flex items-center justify-center rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-6 pointer-events-none"
                            viewBox="{{ $menu['icon']['source'] === 'fa' ? '0 0 512 512' : '0 0 256 256' }}">
                            {!! $menu['icon']['path'] !!}
                        </svg>
                        <span class="sr-only">{{ $menu['name'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif
