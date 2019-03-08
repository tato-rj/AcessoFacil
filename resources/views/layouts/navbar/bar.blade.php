<nav class="navbar animated animation-fast navbar-expand-lg navbar-light position-absolute w-100 z-20 py-4">
  <a class="navbar-brand ml-2" href="/"><img src="{{asset('images/brand/logo.svg')}}" width="200"></a>
  <button class="navbar-toggler z-10 hamburger hamburger--squeeze" style="top: 10px; right: 14px;" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>

  <div class="collapse navbar-collapse" id="navbar-menu">
    <ul class="navbar-nav ml-auto">

        @include('layouts.navbar.link', ['title' => 'Os seus direitos', 'url' => '/os-seus-direitos'])
        @include('layouts.navbar.link', ['title' => 'Quem somos', 'url' => '/quem-somos'])
        @include('layouts.navbar.link', ['title' => 'Contato', 'url' => '/contato'])

    </ul>
    @guest
    {{-- LOGIN --}}
    @else
    {{-- USER MENU --}}
    @endguest
  </div>
</nav>
