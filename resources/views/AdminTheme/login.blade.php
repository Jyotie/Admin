<!DOCTYPE html>
<?php
  session_start();
?>
<?php require_once("includes/connection.php"); ?>
<?php
  if(isset($_SESSION["session_username"])){
    // echo "Session is set"; // for testing purposes
    header("Location: intropage.php");
    }
    if(isset($_POST["login"])){
    if(!empty($_POST[‘username’]) && !empty($_POST[‘password’])) {
      $username=$_POST[‘username’];
      $password=$_POST[‘password’];
      $query =mysql_query("SELECT * FROM usertbl WHERE username=’".$username."’ AND password=’".$password."’");
      $numrows=mysql_num_rows($query);
      if($numrows!=0){
        while($row=mysql_fetch_assoc($query)){
          $dbusername=$row[‘username’];
          $dbpassword=$row[‘password’];
        }
        if($username == $dbusername && $password == $dbpassword){
          $_SESSION[‘session_username’]=$username;
          /* Redirect browser */
          header("Location: intropage.php");
        }
      } else {
        $message = "Nombre de usuario ó contraseña invalida!";
      }
    } else {
      $message = "Todos los campos son requeridos!";
    }
  }
?>
<html lang="{{ app()->getLocale() }}">
    @include('AdminTheme.themeAdmin.head')

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form class="form-signin" method="POST" action="{{ route('login') }}">
          <div class="panel periodic-login">
              <div class="panel-body text-center">
                  <h1>LA QARMITA</h1>
                  <p class="atomic-mass"> </p>
                  <p class="element-name">Login Usuario</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="nombre" class="form-text" required>
                    <span class="bar"></span>
                    <label>Usuario</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Contraseña</label>
                  </div>
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Recordarme
                  </label>
                  <input type="submit" class="btn col-md-12" value="Acceder"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="forgotpass.html">Olvidé mi contraseña </a>
                    <a href="reg.html">| Registrarme </a>
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
     
     <?php 
      if (!empty($message)) {
        echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";
      } 
      ?>
   </body>
   </html>

