@php
  $idCo = 'hover:text-yellow-400 hover:underline block pb-3 pl-5'
@endphp
<x-layouts.main-layout title="Dashboard">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <h1 class="text-center text-4xl font-bold pt-5">Welcome <span class="text-blue-500"> {{ Auth::user()->name }} </span> to the Dashboard</h1>

        <div class="py-12 ">
            @if(Auth::user())

                <a href="{{ route('videos.create') }}" class="{{ $idCo }}">New post</a>


                {{-- <a href="{{ route('categories.home') }}" class="{{ $idCo }}">Gérer les catégories</a> --}}
            </div>
            <div class="mt-5">
                <a href="/" class="{{ $idCo }}">Modifier mon profil</a>
                <a href="/" class="{{ $idCo }}">FAQ</a>
                <a href="/" class="{{ $idCo }}">Nous Contacter</a>
            </div>
            @endif
        </div>
</x-layouts.main-layout>