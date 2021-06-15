<!-- Header -->

<header class="mb-5">
  {{ Route::currentRouteName()}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">COMIC BOOK STORE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link  @if(Route::currentRouteName() == 'home') active @endif"
                href="{{ route('home') }}">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  @if(Route::currentRouteName() == 'comics.index') active @endif"
                href="{{ route('comics.index') }}">COMICS</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>