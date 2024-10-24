<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rochmad Nurul Fahmi" />
    <meta name="description"
        content="{{ env('APP_NAME') }} &mdash; merupakan aplikasi yang dibuat dengan tujuan mempermudah petani atau masyarakat umum untuk mengecek Standar Mutu dari Bawang Merah yang hasilkan saat panen." />

    <title>{{ env('APP_NAME') }}</title>

    <link rel="shortcut icon" href="{{ asset('logo-onion.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('vite_resource')
</head>

<body class="antialiased text-gray-900">
    <main class="min-h-screen w-full flex items-center justify-center md:mt-0">
        <section class="relative flex flex-col justify-center w-screen md:w-[380px] bg-slate-50">
            <div class="p-4">
                <h1 class="text-center font-bold text-xl border-b-2 border-b-slate-700 pb-1 mb-6 uppercase">
                    {{ $pageTitle }}
                </h1>
                <div role="contentinfo" class="space-y-6">
                    @yield('content')
                </div>
            </div>
        </section>
    </main>

</body>

</html>
