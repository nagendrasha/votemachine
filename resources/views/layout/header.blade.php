@if (Route::has('login'))
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">VoteIndia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
</ul>
@auth
<a
    href="{{ url('/dashboard') }}"
    class="btn btn-dark text-light"
>
    Dashboard
</a>
@else

<a
    href="{{ route('login') }}"
    class="btn btn-primary text-light me-2"
>
    Log in
</a>

@if (Route::has('register'))
<a
    href="{{ route('register') }}"
    class="btn btn-primary text-light"
>
    Register
</a>
</div>
</div>
    @endif @endauth
</nav>
@endif
