<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @include('AdminTheme.themeAdmin.head')
    

    <body id="mimin" class="dashboard">

        @include('AdminTheme.themeAdmin.header')

        <div class="container-fluid mimin-wrapper">


            <!-- start: content -->
            <div id="content">

                <div class="col-md-12" style="padding:20px;">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-8 padding-0">
                            

                            @foreach($mesas as $mesa)
                            <div class="btn col-md-4">
                                <a href="{{ action('MesasController@edit', $mesa->idMesa) }}" class="col-md-12 padding-0">
                                    <div class="panel box-v2">
                                        <div class="panel-heading padding-0">
                                            <img src="asset/img/mesa.png" class="box-v2-cover img-responsive"/>
                                            <div class="box-v2-detail">
                                                <h4 style="color: black;">MESA: {{ $mesa->idMesa}}</h4>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                            
                            @endforeach
     
                        </div>
                    </div>
                </div>
                <!-- end: content -->
            </div>


            <!-- start: Javascript -->
            <script src="asset/js/jquery.min.js"></script>
            <script src="asset/js/jquery.ui.min.js"></script>
            <script src="asset/js/bootstrap.min.js"></script>


            <!-- plugins -->
            <script src="asset/js/plugins/moment.min.js"></script>
            <script src="asset/js/plugins/fullcalendar.min.js"></script>
            <script src="asset/js/plugins/jquery.nicescroll.js"></script>
            <script src="asset/js/plugins/jquery.vmap.min.js"></script>
            <script src="asset/js/plugins/maps/jquery.vmap.world.js"></script>
            <script src="asset/js/plugins/jquery.vmap.sampledata.js"></script>
            <script src="asset/js/plugins/chart.min.js"></script>


            @include('AdminTheme.themeAdmin.custom')

            <script>
                                                $(document).ready(function () {
                                                    $('[data-toggle="popover"]').popover();
                                                });
            </script>

    </body>
</html>