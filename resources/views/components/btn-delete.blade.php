@props(['video'])
<div class="">
    <form action="{{ route('videos.destroy', $video->id)}}" method="POST" onsubmit="return confirm('You are sure ?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-error">Delete</button>
    </form>
</div>