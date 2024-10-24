@extends('layouts.app')

@section('title', 'Peta Kluster')

@section('content')
    <x-main-card>
        <div class="h-full w-full space-y-10">
            <div class="flex h-full w-full items-center justify-center gap-x-6">
                <div class="flex h-[540px] w-1/2 flex-col items-center justify-between gap-y-10 rounded-xl bg-rose-100 py-6">
                    <x-logo />

                    <img src="{{ asset('assets/illustration/asset-5.png') }}" class="w-72" alt="Map">

                    <h1 class="select-none border-b-4 border-b-gray-900 text-3xl font-bold uppercase tracking-wide">Peta
                        Kluster
                    </h1>
                </div>

                <div class="flex h-[540px] w-1/2 flex-col gap-y-2 rounded-xl border border-slate-200 p-4">
                    <div class="h-[80px] w-full border-b border-slate-200">
                        <h6 class="text-lg font-bold">Keterangan:</h6>
                        <div class="ml-2 flex items-center justify-start gap-x-2">
                            <span class="h-2 w-8 bg-[#EA1522]"></span>
                            <p class="font-medium">Kelompok Daerah Bermutu I</p>
                        </div>
                        <div class="ml-2 flex items-center justify-start gap-x-2">
                            <span class="h-2 w-8 bg-[#B7E523]"></span>
                            <p class="font-medium">Kelompok Daerah Bermutu II</p>
                        </div>
                    </div>
                    <div class="w-full grow overflow-y-auto">
                        <img src="{{ asset('assets/cluster-map.jpg') }}" alt="Peta Kluster"
                            class="rounded-md shadow-md shadow-gray-200">
                    </div>
                </div>

            </div>
        </div>
    </x-main-card>
@endsection
