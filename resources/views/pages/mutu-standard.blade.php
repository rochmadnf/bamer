@extends('layouts.app')

@section('title', 'Standar Mutu')

@section('content')
    <x-main-card>
        <div class="h-full w-full space-y-10">
            <div class="flex h-full w-full items-center justify-center gap-x-6">
                <div class="flex h-[540px] w-1/2 flex-col items-center justify-between gap-y-10 rounded-xl bg-rose-100 py-6">
                    <x-logo />

                    <img src="{{ asset('assets/illustration/asset-3.png') }}" class="w-56" alt="Map">

                    <h1 class="select-none border-b-4 border-b-gray-900 text-3xl font-bold uppercase tracking-wide">Standar
                        Mutu
                    </h1>
                </div>

                <div class="h-[540px] w-1/2 space-y-4 overflow-y-auto rounded-xl border border-slate-200 px-6 py-4">
                    <article
                        class="prose prose-slate prose-p:text-justify prose-tr:border prose-th:border prose-th:text-center prose-th:align-middle prose-td:border">
                        <p>
                            <strong>Standar Mutu</strong> &mdash; adalah kesepakatan yang telah disepakati bersama oleh
                            sekelompok orang
                            atau
                            organisasi
                            dan telah didokumentasikan yang terdiri dari spesifikasi teknis dan kriteria akurat yang
                            digunakan sebagai
                            peraturan, petunjuk atau definisi tertentu untuk menjamin kualitas suatu barang, produk, proses
                            atau jasa sesuai
                            dengan yang telah dinyatakan dan disepakati.
                        </p>

                        <p>
                            <strong>Pemerintah</strong> melalui
                            <strong>Badan Standardisasi Nasional</strong> mengeluarkan standar mutu untuk komoditas bawang
                            merah yang
                            tercantum pada
                            <strong>Standar Nasional Indonesia 01-3159-1992 </strong> sebagai berikut :
                        </p>

                        <table class="border">
                            <caption class="mb-1 caption-top">
                                Tabel Standar Mutu Bawang Merah
                            </caption>
                            <thead>
                                <tr>
                                    <th rowspan="2">Karakteristik</th>
                                    <th colspan="2">Syarat</th>
                                </tr>
                                <tr>
                                    <th>Mutu I</th>
                                    <th>Mutu II</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item[0] }}</td>
                                        <td>{{ $item[1] }}</td>
                                        <td>{{ $item[2] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <p>Berikut penjelasan dari karakteristik pada tabel diatas, yaitu : </p>
                        <ol class="-ml-2">
                            <li>
                                <b class="block">Kesamaan Sifat Varietas</b>
                                <span>
                                    Kesamaan Sifat Varietas dinyatakan seragam apabila bawang merah dalam satu slot
                                    seragam dalam bentuk umbi yang umum.
                                </span>
                            </li>

                            <li>
                                <b class="block">Ketuaan</b>
                                <span>
                                    Bawang merah dinyatakan tua, apabila bawang merah telah mencapai tingkat
                                    pertumbuhan fisiologis yang cukup tua, dimana umbinya padat dan tidak lunak.
                                </span>
                            </li>

                            <li>
                                <b class="block">
                                    Kekerasan
                                </b>
                                <span>
                                    Bawang merah setelah mengalami curing dengan baik cukup keras dan tidak lunak apabila
                                    ditekan dengan jari. Pengukuran kekerasan bawang merah bisa secara organoleptik
                                    maupun menggunakan alat penetrometer.
                                </span>
                            </li>

                            <li>
                                <b class="block">
                                    Diameter
                                </b>
                                <span>
                                    Diameter adalah dimensi terbesar diukur tegak lurus pada garis lurus sepanjang batang
                                    sampai akar. Pengukuran diameter menggunakan alat jangka sorong nst 0,05 mm.
                                    Rumus :
                                    <span
                                        class="block rounded-md bg-gray-400 p-1 text-[0.675rem] leading-[1rem] text-white">Skala
                                        utama +
                                        (banyaknya
                                        skala nonius
                                        ×
                                        nst)</span>
                                </span>
                            </li>

                            <li>
                                <b class="block">
                                    Kerusakan
                                </b>
                                <span>
                                    Bawang merah dinyatakan rusak apabila mengalami kerusakan atau cacat oleh sebab
                                    fisiologis, mekanis dan lain-lain yang terlihat pada permukaan.
                                </span>
                            </li>

                            <li>
                                <b class="block">
                                    Kebusukan
                                </b>
                                <span>
                                    Bawang merah dinyatakan busuk apabila mengalami pembusukan akibat kerusakan
                                    biologis.
                                </span>
                            </li>

                            <li>
                                <b class="block">
                                    Kotoran
                                </b>
                                <span>
                                    Yang dimaksud kotoran adalah semua bahan bukan bawang merah atau benda asing
                                    lainnya yang menempel atau berada dalam kemasan, yang mempengaruhi
                                    kenampakannya, bahan penyekat/pembungkus tidak dianggap sebagai kotoran.
                                </span>
                            </li>

                            <li>
                                <b class="block">
                                    Kekeringan
                                </b>
                                <span>
                                    Kekeringan pada bawang merah adalah berdasarkan pada lamanya masa penyimpanan.
                                </span>
                            </li>

                            <li>
                                <b class="block">
                                    Kadar Air
                                </b>
                                <span>
                                    Kadar air adalah banyaknya air yang terkandung dalam bahan yang dinyatakan dalam
                                    persen.Kadar air merupakan salah satu faktor yang memegang peranan penting pada bahan
                                    pangan karena dapat mempengaruhi kualitas pada bahan pangan.
                                </span>
                            </li>
                        </ol>

                    </article>
                </div>
            </div>

        </div>
        </div>
    </x-main-card>
@endsection
