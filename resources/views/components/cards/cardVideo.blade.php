@props([
    'url_img',
    'title',
    'description',
]);

<div class="">
    <img src="{{ $url_img }}" alt="{{$title}}">
    <p class="font-bold">{{ $title }}</p>
    <p class="">{{$description, 0, 120}}</p>

</div>