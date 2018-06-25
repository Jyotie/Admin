<!-- start: Header -->
<nav class="navbar navbar-default header navbar-fixed-top">
  <div class="col-md-12 nav-wrapper">
    <div class="navbar-header" style="width:100%;">
      <div class="opener-left-menu is-open">
        <span class="top"></span>
          <span class="middle"></span>
          <span class="bottom"></span>
      </div>
      <a href="{{ route('main.index') }}" class="navbar-brand"> 
        <b>LA QARMITA</b>
      </a>
        
      <ul class="nav navbar-nav search-nav">
        <li>
          <div class="search">
              <a title="Botón de ayuda para el usuario" href="ayuda"> <span class="glyphicon glyphicon-exclamation-sign" style="font-size:23px;"></span></a>
              
          </div>
        </li>
      </ul>

      <nav class="nav navbar-nav navbar-right user-nav">
          
        @guest
            <a class="nav-link ml-auto" href="{{ route('login') }}">Acceder   | </a>
            <a class="nav-link" href="{{ route('register') }}">Registro</a>      
                @else
                  <a class="nav-link ml-auto" href="{{ route('login') }}">{{ Auth::user()->name }}</a>
                  <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <span class="glyphicon glyphicon-off"></span>          
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