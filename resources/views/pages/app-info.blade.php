@extends('layouts.app')

@section('title', 'Info Aplikasi')

@section('content')
    <x-main-card>
        <div class="h-full w-full space-y-10">
            <div class="flex h-full w-full items-center justify-center gap-x-6">
                <div class="flex h-[540px] w-1/2 flex-col items-center justify-between gap-y-10 rounded-xl bg-rose-100 py-6">
                    <x-logo />

                    <img src="{{ asset('assets/illustration/asset-2.png') }}" class="w-40" alt="Map">

                    <h1 class="select-none border-b-4 border-b-gray-900 text-3xl font-bold uppercase tracking-wide">Info
                        Aplikasi
                    </h1>
                </div>

                <div class="h-[540px] w-1/2 space-y-4 overflow-y-auto rounded-xl border border-slate-200 px-6">
                    <article class="prose prose-slate prose-p:text-justify prose-a:font-medium prose-a:text-blue-500">
                        <h6 class="text-lg font-bold"></h6>
                        <p>
                            <b>{{ config('app.name') }}</b> merupakan aplikasi yang dibuat dengan tujuan untuk mempermudah
                            petani
                            atau
                            masyarakat umum dalam mengecek <a href="{{ route('mutu-standard') }}">Standar Mutu</a> dari
                            <b>Bawang
                                Merah</b>
                            yang hasilkan saat panen.
                        </p>

                        <p>
                            Aplikasi ini dipelopori oleh <a href="{{ route('researcher') }}">Tim
                                Peneliti</a> terbaik dari Program Studi Matematika Jurusan Matematika Fakultas Matematika
                            dan Ilmu
                            Pengetahuan Alam Universitas Tadulako.
                        </p>
                    </article>

                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold">Credit</h3>
                        <ul class="flex flex-row gap-4">
                            @foreach ($credits as $credit)
                                <li>
                                    <a href="{{ $credit['url']['site'] }}"
                                        class="size-20 flex items-center justify-center rounded-xl bg-rose-300 shadow-md shadow-rose-400 transition-transform duration-200 hover:-translate-y-2">
                                        <img src="{{ $credit['url']['img'] }}" class="size-14 pointer-events-none rounded"
                                            alt="Gambar Credit">
                                        <span class="sr-only">{{ $credit['name'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </x-main-card>
@endsection
