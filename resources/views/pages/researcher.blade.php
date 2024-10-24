@extends('layouts.app')

@section('title', 'Peneliti')

@section('content')
    <x-main-card>
        <div class="h-full w-full space-y-10">
            <div class="flex h-full w-full items-center justify-center gap-x-6">
                <div class="flex h-[540px] w-1/2 flex-col items-center justify-between gap-y-10 rounded-xl bg-rose-100 py-6">
                    <x-logo />

                    <img src="{{ asset('assets/illustration/asset-1.png') }}" class="w-72" alt="Map">

                    <h1 class="select-none border-b-4 border-b-gray-900 text-3xl font-bold uppercase tracking-wide">Peneliti
                    </h1>
                </div>

                <div class="h-[540px] w-1/2 overflow-y-auto rounded-xl border border-slate-200 px-8 pb-4 pt-8">
                    @foreach ($researchers as $researcher)
                        <div
                            class="mb-4 flex flex-col items-center justify-center rounded-md bg-slate-50/30 p-4 shadow-0 shadow-slate-300">
                            <div class="mb-4">
                                <img class="h-24 w-24 rounded-full border-2 border-rose-500 p-0.5"
                                    src="{{ asset('assets/researchers/' . $researcher['avatar']) }}"
                                    alt="Avatar {{ $researcher['name'] }}">
                            </div>
                            <h2 class="text-md font-bold">{{ $researcher['name'] }}</h2>
                            <h3 class="text-sm">{{ $researcher['expertise'] }}</h3>

                            {{-- scholar link --}}
                            <a class="mt-2 flex items-center justify-center transition duration-150 hover:text-blue-500"
                                href="{{ $researcher['google_scholar'] }}">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Google_Scholar_logo.svg"
                                    alt="scholar" class="mr-2 h-6 w-6">
                                <span class="text-sm">Google Scholar</span>
                            </a>

                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </x-main-card>
@endsection
