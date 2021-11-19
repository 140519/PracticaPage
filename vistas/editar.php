<?php 
require_once('../consultas/user.php');

	include "../conexion/conexion.php";
	$fecha = date("Y-m");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href="../css/css1/bootstrap.min.css" rel="stylesheet"/>
    <link href="../css/estilosA.css" rel="stylesheet"/>
       <title>Modificaciones</title>
     <link rel="stylesheet" href="../css/css1/editar.css">
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
<?php include_once('menuA.php');?>
 <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
<form action="../consultas/editar.php" method="POST" enctype="multipart/form-data">
    <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
    <?php
                require_once('../conexion/conexion.php');
            $sql =  "SELECT fecha FROM dbo.[documentos]where id_documentos = '".$_GET['id']."';";
            $stmt = sqlsrv_query( $conn, $sql );
            if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
            }
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
            ?>
                                   
        <label>Fecha:</label><br>
			<label><input type="text" name="fecha" class="input--style-4"  value="<?php echo $row['fecha']?>" readonly /></label>
    <?php } ?>
                                </div>
        </div>
        <div class="col-2">
                                <div class="input-group">
    <input type="hidden" class="input--style-4" name="id" value=<?php echo '"'.$_GET['id'].'"'; ?> />
            </div>
        </div>
	<div class="col-2">
                                <div class="input-group">
	<input type="file" class="input--style-4" name="archivo"/>
        </div>
        </div>
    </div>
    <div class="col-2">
                                <div class="input-group">
	<input type="submit" value="Guardar cambios" class="btn btn-primary" title="Guardar los cambios"/>
        </div>
        </div>

                    </form>
                </div>
            </div>
     </div>
    </div>
     <script src="../css/cs/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../css/cs/vendor/select2/select2.min.js"></script>
    <script src="../css/cs/vendor/datepicker/moment.min.js"></script>
    <script src="../css/cs/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../css/cs/js/global.js"></script>
</body>
</html>