<!-- start: Header -->
<nav class="navbar navbar-default header navbar-fixed-top">
  <div class="col-md-12 nav-wrapper">
    <div class="navbar-header" style="width:100%;">
      <div class="opener-left-menu is-open">
        <span class="top"></span>
          <span class="middle"></span>
          <span class="bottom"></span>
      </div>
      <a href="/" class="navbar-brand"> 
        <b>LA QARMITA</b>
      </a>
        
      <ul class="nav navbar-nav search-nav">
        <li>
          <div class="search">
            <span class="fa fa-search icon-search" style="font-size:23px;"></span>
            <div class="form-group form-animate-text">
              <input type="text" class="form-text" required>
              <span class="bar"></span>
              <label class="label-search">Escribe aquí para <b>Buscar</b> </label>
            </div>
          </div>
        </li>
      </ul>

      <nav class="nav navbar-nav navbar-right user-nav">
          
        @guest
            <a class="nav-link ml-auto" href="{{ route('login') }}">Acceder</a>
            <a class="nav-link" href="{{ route('register') }}">Registro</a>      
                @else
                  <a class="nav-link ml-auto" href="{{ route('login') }}">{{ Auth::user()->name }}</a>
                  <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Desconectarse          
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
        @endguest

      </nav>
    </div>
  </div>
</nav>
<!-- end: Header -->