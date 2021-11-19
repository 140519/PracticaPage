<!DOCTYPE html>
<?php
require_once('../consultas/user.php');
?>
<html lang="en">
  <head>
       <?php include_once('menuAdmin.php');?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>Registrar Usuarios</title>

    <!-- Icons font CSS-->
    <link href="../css/cs/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../css/cs/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../css/cs/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../css/cs/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/cs/css/main.css" rel="stylesheet" media="all">
  </head>
<body>
    
      <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <form method="POST">
                        <div class="row row-space">          
                 <div class="col-2">
                         <div class="input-group">
                      <label style="color: #282424;"><p>Nombre de Usuario</p></label>
                      <input type="text" name="Username" class="input--style-4" requiered placeholder="Nombre de Usuario" />
                    </div>
                      </div>
                <div class="col-2">
                    <div class="input-group">
                  <label style="color: #282424;"><p>Ingrese Contrase&ntilde;a</p></label>
                  <input type="password" name="Password" class="input--style-4" requiered placeholder="Ingresa contraseña"  />
                </div>
                     </div>
                    <div class="col-2">
                        <div class="input-group">
                  <label style="color: #282424;"><p>Confirmar Contrase&ntilde;a</p></label>
                  <input type="password" name="rpass" class="input--style-4" required placeholder="Confirma contraseña" />
                </div>
                     </div>
            <div class="col-2">
                        <div class="input-group">
                  <label style="color: #282424;"><p>Ingrese Nombre Del Usuario</p></label>
                  <input type="text" name="Name" class="input--style-4"  required placeholder="Nombre"/>
                </div>
                </div>
                        </div>
            <div class="input-group">
      <label  class="label" style="color: #282424;" requiered><p>Seleccione El Tipo de Usuario</p></label>
                 <div class="rs-select2 js-select-simple select--no-search">
                    <select name="Status">
                        <option disabled="disabled" selected="selected">Elije una opci&oacute;n</option>
                        <option>ADMIN</option>
                        <option>USER</option>
                    </select>
                      <div class="select-dropdown"></div>
                </div>
                </div>
             <div class="p-t-15">
            <input style="background-color: " class="btn btn-primary" type="submit" name="submit" value="Registrar"/>
            </div>
                            
                            </form>
                        
            </div>
        </div>
    </div>
<?php
		if(isset($_POST['submit'])){
			require("../consultas/registro.php");
		}
	?>
	    <script src="../css/cs/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../css/cs/vendor/select2/select2.min.js"></script>
    <script src="../css/cs/vendor/datepicker/moment.min.js"></script>
    <script src="../css/cs/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../css/cs/js/global.js"></script>


	  </body>
</html>