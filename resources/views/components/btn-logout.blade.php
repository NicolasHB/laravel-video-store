<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button  type="submit" class="btn-primary">Déconnexion</button>
</form> 