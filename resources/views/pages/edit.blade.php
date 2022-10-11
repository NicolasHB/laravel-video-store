<x-layouts.main-layout
title="update"
> 
<div class="container">
    <h1 class="font-bold text-4xl pb-10 py-10 text-center">update movie</h1>
    <form class="" action="{{ route('videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="">
            {{-- Title --}}
            <input class="block w-full rounded-lg border border-gray-400" type="text" name="title" id="" placeholder="Titre du film" value="{{ old('title') }}">
            <x-error-msg name="title" />
            {{-- category --}}
            {{-- <div class="">
                <select class="select select-bordered w-full max-w-xs" name="category">
                    <option disabled selected>Choose your category </option>
                    @forelse ($categories as $category)
                        
                        <option value="{{ $category->categroy }}">{{ $category->category}}</option>
                    @empty
                        
                        <option>pas de categories selectionner</option>
                    @endforelse
                </select>
                <x-error-msg name="category" />
            </div> --}}
            {{-- description --}}
            <textarea name="description" id="" cols="30" rows="10" class="mt-5 block w-full rounded-lg border border-gray-400" placeholder="Enter to the text">{{ old('description')}}</textarea>
            <x-error-msg name="description" />
            {{-- IMG --}}
            <div class="">
                <label for="">choose to picture</label>
                <input type="file" name="url_img" id="" class="block w-full rounded-lg border border-gray-400 mt-5">
            <x-error-msg name="url_img" />
            </div>
            <div class="flex pt-10 gap-5 ">
                {{-- nationality --}}
                <div class="">
                    <input type="text" name="nationality" id="" class="block w-full rounded-lg border border-gray-400 mt-5" placeholder="nationalité">
                </div>
                {{-- years of creation --}}
                <div class="">
                    <input type="text" name="year_created" id="" class="block w-full rounded-lg border border-gray-400 mt-5" placeholder="année de tournage">
                </div>
                {{-- actors --}}
                <div class="">
                    <input type="text" name="actors" id="" class="block w-full rounded-lg border border-gray-400 mt-5" placeholder="acteur">
                </div>
            </div>
            {{-- <input type="text" name="url_img" id="" class="block w-full rounded-lg border border-gray-400 mt-5" placeholder="insérer votre image" value="https://source.unsplash.com/640x480/?person?/1"> --}}
            <div class="pt-5">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</x-layouts.main-layout>