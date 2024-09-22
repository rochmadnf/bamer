@props(['name' => 'Tab', 'id' => null, 'route' => '#'])

@php
    $active = request()->fullUrlIs($route);
@endphp

<a href="{{ $route }}"
    class="text-sm {{ $active ? 'border-0 border-b-4 border-red-800 bg-red-500 text-white' : 'border-2 border-b-2 border-gray-400' }} w-full py-1.5 px-1 inline-flex items-center hover:bg-red-500 hover:text-white hover:border-red-800 rounded-md transition duration-300">
    <x-icon-square-half class="h-5 w-5 mr-1" />
    {{ $name }}
</a>
