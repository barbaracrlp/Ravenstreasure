<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src='{{ asset('images/iconoRaven.png') }}'alt="" width="30" height="24"
                class="d-inline-block align-text-top">
            Raven's Treasure
        </a>
        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <a class="navbar-brand" href="{{ route('designs.index') }}">Designs</a>
        <a class="navbar-brand" href="/admin">
            Log in
              </a>
    </div>
</nav>
