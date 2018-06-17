@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        @include('backpack::inc.sidebar_user_panel')

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          
          <!-- ======================================= -->
          {{-- <li class="header">Otros Menús</li> --}}

          <li><a href="/qarmitapp/public/"><i class="fa fa-home"></i> <span>Menú Principal</span></a></li>
<!--
          <li><a href="{{ backpack_url('encuestas') }}"><i class="fa fa-comments"></i> <span>Encuestas</span></a></li>
          <li><a href="{{ backpack_url('encargadosoporte') }}"><i class="fa fa-male"></i> <span>Encargados de Soporte</span></a></li>
          <li><a href="{{ backpack_url('versionesls') }}"><i class="fa fa-tag"></i> <span>Versiones LS</span></a></li>
-->
          <!--<li><a href="{{ backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Gestionar Tags</span></a></li>-->

          <!-- File manager (Diego 07-03-2018) -->
          <!--<li><a href="{{  backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>-->
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif