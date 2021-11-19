<?php
require_once('../consultas/user.php');
?>
<head>
<meta charset="utf-8">
    <title>Edici&oacute;n de usuarios</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<body  >
    <?php include_once('menuAdmin.php');?>
   
		<?php
		extract($_GET);
		 require_once('../conexion/conexion.php');

		$sql="SELECT * FROM member WHERE UserID=$id";
         $stmt = sqlsrv_query( $conn, $sql );
		if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
            }
                while( $row1 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC)){
		    	$id=$row1[0];
		    	$user=$row1[1];
		    	$pass=$row1[2];
				$name=$row1[3];
				$status=$row1[4];
                }
                    sqlsrv_free_stmt( $stmt);
		    	
			?>	
		<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    
		<form action="../consultas/ejecutaactualizacion.php" method="post">
            <h4 style="color:#1C2833;">Edici&oacute;n de usuarios</h4>
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group">
                <p style="color:#1C2833;">Identificación</p><input type="text" name="id" class="input--style-4"  value= "<?php echo $id?>" readonly><br>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group">
				<p style="color:#1C2833;">Nombre de usuario</p> <input type="text" class="input--style-4" name="user" required value="<?php echo $user?>"><br>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group">
                <p style="color:#1C2833;">Clave</p><input type="text" class="input--style-4" name="pass" required value="<?php echo $pass?>"><br>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group">
                <p style="color:#1C2833;">Nombre</p><input type="text" class="input--style-4" name="name" required value="<?php echo $name?>"><br>
                        </div>
                    </div>
            </div>
                    
                <p style="color:#1C2833;">Status</p><div class="rs-select2 js-select-simple select--no-search"><select name="status"  required value="<?php echo $status?>">
                            <option disabled="disabled" selected="selected" value="<?php echo $status?>"><?php echo $status?></option>
                                <option>ADMIN</option>
                                <option>USER</option>
                        </select><br>
                        <div class="select-dropdown"></div>
                        </div>
                        
                    <div class="p-t-15">
                         <input type="submit" value="Guardar" class="btn btn-primary">
                    </div>

		  </form>
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
