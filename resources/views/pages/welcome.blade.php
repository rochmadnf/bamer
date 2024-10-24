@extends('layouts.app')

@section('title', 'Beranda')

@php
    $sidebarVisibility = false;
@endphp

@section('content')
    <x-main-card>
        <div class="h-full w-full space-y-10">
            <div
                class="flex w-full flex-row justify-between rounded-2xl bg-rose-100 px-10 pb-3 pt-6 shadow shadow-rose-300/80">
                <div class="w-1/2">
                    <x-logo :transparent='true' />
                    <h1 class="mt-4 text-3xl font-bold">Halo, Farmers</h1>
                    <div class="mt-2.5 space-y-1.5">
                        <p class="text-xl font-semibold">Selamat Datang di Aplikasi Bamer Palu</p>
                        <p class="text-lg font-light text-gray-800">Pastikan Bawang Merahmu Berkualitas, Ayo Lakukan
                            Pengujian
                            Mutu
                            Sekarang.</p>
                    </div>
                </div>
                <img src="{{ asset('assets/illustration/asset-4.png') }}" class="block w-40 self-center"
                    alt="Welcome Character">
            </div>

            <div class="flex w-full flex-row gap-x-5">
                @foreach ($features as $feature)
                    <a href="{{ $feature['route'] }}"
                        class="{{ $feature['color']['bg']['primary'] }} flex h-full w-1/5 transform flex-col items-center overflow-hidden rounded-xl text-white transition-transform duration-300 hover:-translate-y-2">
                        <div class="flex items-center justify-center px-4 py-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-24 pointer-events-none"
                                viewBox="{{ $feature['icon']['source'] === 'fa' ? '0 0 512 512' : '0 0 256 256' }}">
                                {!! $feature['icon']['path'] !!}
                            </svg>
                        </div>
                        <div
                            class="{{ $feature['color']['bg']['secondary'] }} flex h-12 w-full items-center justify-center">
                            <h3 class="text-lg font-bold uppercase tracking-wide">{{ $feature['name'] }}
                            </h3>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </x-main-card>
@endsection
