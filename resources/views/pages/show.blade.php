<x-layouts.main-layout
:title="$video->title"
:years="$video->year_created"
:actor="$video->actors"
:nationality="$video->nationality"
>
<div class="pt-10 p-10  ">
    <img src="{{ asset('storage/'. $video->url_img) }}" alt="{{$video->title}}">
    <div class="pt-5">
        <p class="font-bold text-2xl">{{$video->title}}</p>
        <p class="pt-5">{!! nl2br(e($video->description))!!}</p>  
        <div class="flex gap-5 pt-10">    
            <p class=""> acteurs: {{ $video->actors}}</p>      
            <p class="">année: {{ $video->year_created}}</p>
            <p class="">Nationnalité: {{ $video->nationality}}</p>  
        </div> 
    </div>
    @auth
        @if(Auth::user())
            <div class="pt-5">
                <x-btn-delete :video="$video" />
                <a href="{{$video->id}}/edit" class="btn btn-success">Update</a>
            </div> 
        @endif
    @endauth
</div>
</x-layouts.main-layout>