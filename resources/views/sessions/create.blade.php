<!DOCTYPE html>
<html lang="en">
    @include('AdminTheme.themeAdmin.head')

    <body id="mimin" class="dashboard form-signin-wrapper">

        <div class="container">

            <form  method="post" action="../public/" class="form-signin">
                {{ csrf_field() }}
                <div class="panel periodic-login">
                    <div class="panel-body text-center">
                        <h1>La Qarmita</h1>
                        <p class="element-name">Registro de usuario</p>

                        <i class="icons icon-arrow-down"></i>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="Nombre" type="text" class="form-text" required>
                            <span class="bar"></span>
                            <label for="Nombre">Usuario</label>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="Nick" type="text" class="form-text" required>
                            <span class="bar"></span>
                            <label for="Nick">Nick de Usuario</label>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="email" type="text" class="form-text" required>
                            <span class="bar"></span>
                            <label for="email">Email</label>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="Password" type="password" class="form-text" required>
                            <span class="bar"></span>
                            <label for="Password">Contraseña</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="confirm_password" type="password" class="form-text" required>
                            <span class="bar"></span>
                            <label for="confirm_password">Confirmar Contraseña</label>
                        </div>
                        <input type="submit" class="btn col-md-12" value="Registrar"/>
                    </div>
                 
                    @include('layouts.errors')
                  
                    <div class="text-center" style="padding:5px;">
                        <a href="/login">¿Ya tienes cuenta?</a>
                    </div>

                </div>
            </form>
        </div>
        <!-- end: Content -->


      <!-- start: Javascript -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>