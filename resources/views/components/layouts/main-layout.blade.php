@props([
    'title'
])
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Video Store | {{ $title }}</title>
    {{-- import Tailwin --}}
    @vite('resources/css/app.css')
</head>

<body>
@include('components.nav.navbar')
@include(('partials._session'))

    {{ $slot }}
{{-- @vite('resources/js/app.js') --}}
    
</body>
</html>