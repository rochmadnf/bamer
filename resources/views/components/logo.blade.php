@props(['transparent' => false])

<div class="{{ $transparent ? '' : 'bg-white py-2 px-4' }} flex w-fit flex-row items-center gap-x-2 rounded-xl">
    <img src="{{ asset('favicon.png') }}" alt="Logo Bamer Palu" class="w-12">
    <span class="mt-1.5 font-display text-2xl uppercase">Bamer Palu</span>
</div>
