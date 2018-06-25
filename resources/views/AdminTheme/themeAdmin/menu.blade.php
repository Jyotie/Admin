<!-- start:Left Menu -->
<div id="left-menu">
        <div class="sub-left-menu scroll">
          <ul class="nav nav-list">
              <li><div class="left-bg"></div></li>
              <li class="time">
                <h1 class="animated fadeInLeft">  </h1>
                <p class="animated fadeInRight">  </p>
              </li>
              <li class="active ripple">
                <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Menú Principal 
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="{{ route('main.index') }}">Menú Principal</a></li>
                </ul>
              </li>
              <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-diamond fa"></span> Administración
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                  <li><a href="{{ route('productos.index') }}">Gestión de Productos</a></li>
                  <li><a href="{{ route('mesas.index') }}">Gestión de Mesas</a></li>
                  <li><a href="adminComandas">Gestión de Comandas</a></li>
                  <li><a href="{{ route('eventos.index') }}">Gestión de Eventos</a></li>
                </ul>
              </li>
              <li class="ripple">
                <a class="tree-toggle nav-header">
                  <span class="fa-area-chart fa"></span> Estadísticas
                  <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                  <li><a href="estadisticas">Ver Estadísticas</a></li>
                  <!--<li><a href="morris.html">Morris</a></li>
                  <li><a href="flot.html">Flot</a></li>
                  <li><a href="sparkline.html">SparkLine</a></li>-->
                </ul>
              </li>
              
              
              
              <li class="ripple"><a href="calendario"><span class="fa fa-calendar-o"></span>Calendario</a></li></li>
              
              <li><a href="creditos">Créditos</a></li>
            </ul>
          </div>
      </div>
    <!-- end: Left Menu -->
    
    
    
    
    