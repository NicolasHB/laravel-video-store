{{-- @include('layout.layout') --}}
<x-layouts.main-layout 
title="Accueil">
<div class=" text-center pr-20 pl-20">
    <p class="font-bold text-4xl pt-5">Video Store</p>
    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-3 pt-5">
        @forelse ($videos as $video )
            <a href="videos/{{$video->id}}">
                <x-cards.cardVideo :title="$video->title" :url_img="$video->url_img" :description="$video->description"/>
            </a>
        @empty
            <p class="text-red-500 text-center">post is not existing</p>
        @endforelse
    </div>
    
</div>
</x-layouts.main-layout>