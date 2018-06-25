<!DOCTYPE html>
<html lang="en">
    @include('AdminTheme.themeAdmin.head')

    <body id="mimin" class="dashboard">

        @include('AdminTheme.themeAdmin.header')


        <div class="container-fluid mimin-wrapper">

            @include('AdminTheme.themeAdmin.menu')

            <!-- start: Content -->
            <div id="content">
                <div class="col-md-12 padding-0">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-12 padding-0">
                            <div class="panel box-shadow-none content-header">
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <h3 class="animated fadeInLeft">Administración de Eventos - Edita eventos</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="box-v5 panel">
                                <div class="panel-body">
                                    <div class="panel-heading" style="text-align:center;">
                                        <br>
                                        @include('AdminTheme.themeAdmin.botonesAdministracion')
                                        <br>
                                    </div>

                                    <br>

                                    <form  action="{{ route('eventos.update', $eventos->idEvento )}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}

                                        <div class="form-group">
                                            <label for="Nombre">Nombre del evento:</label>
                                            <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ $eventos->Nombre }}">
                                        </div>


                                        <div class="form-group">
                                            <label for="Descripcion">Descripción del evento:</label>
                                            <input value="{{ $eventos->Descripcion }}" type="text" class="form-control" name="Descripcion" id="Descripcion">
                                        </div>

                                        <div class="form-group">
                                            <label for="FechaInicio">Fecha Inicio del evento:</label>
                                            <input value="{{ $eventos->FechaInicio }}" type="date" class="form-control" name="FechaInicio" id="FechaInicio" value="{{ $eventos->FechaInicio }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="FechaFin">Fecha fin del evento:</label>
                                            <input value="{{ $eventos->FechaFin }}" type="date" class="form-control" name="FechaFin" id="FechaFin" value="{{ $eventos->FechaFin }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="Lugar">Lugar:</label>
                                            <input type="text" class="form-control" name="Lugar" id="Lugar" value="{{ $eventos->Lugar }}">
                                        </div>

                                        <br>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit"  value="Guardar" class="btn btn-success btn-primary">
                                            <a href="{{ route('eventos.index') }}" class="btn btn-info btn-primary" >Atrás</a>
                                        </div>	

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Content -->      
            </div>


    </body>
    <!-- start: Javascript -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>


    <!-- plugins -->
    <script src="asset/js/plugins/moment.min.js"></script>
    <script src="asset/js/plugins/flot/jquery.flot.min.js"></script>
    <script src="asset/js/plugins/flot/jquery.flot.pie.min.js"></script>
    <script src="asset/js/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="asset/js/plugins/flot/jquery.flot.navigate.min.js"></script>
    <script src="asset/js/plugins/flot/jquery.flot.stack.min.js"></script>

    <script src="asset/js/plugins/jquery.nicescroll.js"></script>


    <!-- custom -->
    <script src="asset/js/main.js"></script>

    <!-- end: Javascript -->
</body>
</html>