@props([
    'url_img',
    'title',
    'description',
])

<div class=" ">
    <img src="{{ $url_img }}" alt="{{$title}}">
    <p class="font-bold text-xl">{{ $title }}</p>
    <p class="">{{Str::words($description, 120, '...' )}}</p>

</div>