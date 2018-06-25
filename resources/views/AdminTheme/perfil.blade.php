<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('AdminTheme.themeAdmin.head')

    <body id="mimin" class="dashboard">
        @include('AdminTheme.themeAdmin.header')

        <div class="container-fluid mimin-wrapper">

            @include('AdminTheme.themeAdmin.menu')


            <!-- start: Content -->
            <div id="content" class="profile-v1">
                <div class="col-md-12 col-sm-12 profile-v1-wrapper">
                    <div class="col-md-12  profile-v1-cover-wrap" style="padding-right:0px;">
                        <div class="profile-v1-pp">
                            <img src="asset/img/avatar.jpg"/>
                            <h2>Usuario: {{ Auth::user()->name }}</h2>
                        </div>
                        <div class="col-md-12 profile-v1-cover">
                            <img src="asset/img/bg2.jpg" class="img-responsive">
                        </div>
                    </div>

                </div>
            </div>

            <!-- Edición de Perfil -->
            <div id="content">
                <div class="col-md-12 padding-0">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-12 padding-0">
                            <div class="panel box-shadow-none content-header">
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <h3 class="animated fadeInLeft">Edita tu perfil:</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" style="justify-content: center;">
                            <div class="box-v5 panel">
                                <div class="panel-body">


                                    <form  action="" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                        
                                        <div class="form-group">
                                            <label for="Nombre">Nombre:</label>
                                            <input type="text" class="form-control" name="name" id="name" value="">

                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" name="email" id="email">
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Contraseña:</label>
                                            <input type="password" class="form-control" name="password" id="password">
                                        </div>

                                        <br>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <input type="submit"  value="Guardar" class="btn btn-success btn-primary">
                                            <button type="reset" class="btn btn-info btn-primary" >Cancelar</button>
                                        </div>	

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
            <!-- Edición de Perfil -->

        </div>
        <!-- end: content -->

    </div>



    <!-- start: Javascript -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>


    <!-- plugins -->
    <script src="asset/js/plugins/icheck.min.js"></script>
    <script src="asset/js/plugins/moment.min.js"></script>
    <script src="asset/js/plugins/mediaelement-and-player.min.js"></script>
    <script src="asset/js/plugins/jquery.nicescroll.js"></script>


    <!-- custom -->
    <script src="asset/js/main.js"></script>
    <script type="text/javascript">
$(document).ready(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_flat-red',
        radioClass: 'iradio_flat-red'
    });
    $('video,audio').mediaelementplayer({
        alwaysShowControls: true,
        videoVolume: 'vertical',
        features: ['playpause', 'progress', 'volume', 'fullscreen']
    });
});
    </script>
    <!-- end: Javascript -->
</body>
</html>