@php
  $idCo = 'hover:text-yellow-400 hover:underline'
@endphp
<nav>
    <div class="flex bg-gradient-to-r from-black via-slate-700 to-yellow-400 py-5">
        <div class="">
            <a href="/" class="text-yellow-400 font-extrabold ">Video Store</a>
        </div>
        <div class="text-black flex space-x-5 pl-[1150px] ">
            <a href="/" class="">Home</a>

        @guest
        <a class="{{ $idCo }}" href="{{ route('login')}}">Connexion</a>
        <a class="{{ $idCo }}" href="{{ route('register')}}">Inscription</a>
        @endguest
        @auth
        
        <li><a class="{{ $idCo }}" href="{{ route('dashboard')}}">Dashboard</a></li>
        <x-btn-logout />
        <span class="hover:underline">{{ Auth::user()->name }}</span>
        @endauth
        </div>
    </div>
</nav>