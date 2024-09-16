@extends('app')

@section('content')
    <p class="text-sm text-justify text-gray-900 -mt-4">Silakan pilih metode untuk menguji
        <strong>Mutu Bawang Merah</strong>
        Anda.
    </p>

    <div class="flex flex-col justify-center mt-16 gap-4">
    <a href="{{route('check')}}/naive" role="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Naive Bayes</a>
    <a href="{{route('check')}}/knn" role="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">KNN</a>
    </div>
@endsection
