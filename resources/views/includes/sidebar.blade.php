<!-- Sidebar -->
<div id="sidebar" class="bg-light">
   
    <h4 class="ms-3 mb-4">My Sidebar</h4>
    
    {{-- <a href="#">Home</a> --}}
    <a href="{{ route('profil-view') }}">Profile</a>
    <a href="">Transaksi</a>
    <a href="{{ route('menu.index') }}">Menu</a>
    <a href="#">
        <form id="logout-form" action="{{ route('logout') }}" style="display: none;">
            @csrf
        </form>
        <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>                 
    </a>
</div>