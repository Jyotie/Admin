<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('AdminTheme.themeAdmin.head')

    <body id="mimin" class="dashboard">

        @include('AdminTheme.themeAdmin.header')

        <div class="container-fluid mimin-wrapper">

            @include('AdminTheme.themeAdmin.menu')


            <!-- start: Content -->
            <div id="content" class="article-v1">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Créditos</h3>
                            <p class="animated fadeInDown">
                                Menú Principal <span class="fa-angle-right fa"></span> Créditos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel">
                        <div class="pull-right article-v1-time">
                            <em> Administración La Qarmita V.1.0</em></div>
                        <div class="panel-body">
                            <div class="col-md-12 text-left article-v1-title">
                                <h2>Creado por: Daniel García & Julio García</h2>
                                <p> Proyecto final -->
                                    <a href="http://www.cescristorey.com">C.E.I.P. Cristo Rey.</<>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- end: Content -->
        <!-- start: Javascript -->
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/jquery.ui.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>


        <!-- plugins -->
        <script src="asset/js/plugins/moment.min.js"></script>
        <script src="asset/js/plugins/jquery.nicescroll.js"></script>


        <!-- custom -->
        <script src="asset/js/main.js"></script>
        <!-- end: Javascript -->
    </body>
</html>