<?php
require_once('../consultas/user.php');
?>
<head>
<title>Inicio Administrador</title>
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
   
    <style>
        a{
            color: #1C2833;
            font-size: 160%;
            
        }
    </style>
</head>
<body>
    <?php include_once('menuAdmin.php');?>
 <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680" style="max-width: 880px;">
            <div class="card card-4">
                <div class="card-body">
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
        <a href="registrar.php"  style="color:#1C2833;font-size=4;" class="input--style-4">Agregar otro usuario </a>
		<h4 style="color:#1C2833;" class="input--style-4">Tabla de Usuarios</h4>
                          
		



			<?php

				   require_once('../conexion/conexion.php');
            $sql =  ("SELECT * FROM member");
            $stmt = sqlsrv_query( $conn, $sql );
           
            
               
				echo "<table class='input--style-4';>";
					echo"<tr class='input--style-4'>";
						echo "<td class='input--style-4'>ID</td>";
						echo "<td class='input--style-4'>Usuarios</td>";
						echo "<td class='input--style-4'>Contraseña</td>";
                        echo "<td class='input--style-4'>Nombre</td>";
						echo "<td class='input--style-4'>Status</td>";
						echo "<td class='input--style-4'>Editar</td>";
						echo "<td class='input--style-4'>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
             if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
            }
				while( $row1 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC)){

				  	echo "<tr class='input--style-4'>";
				    	echo "<td class='input--style-4'>$row1[0]</td>";
				    	echo "<td class='input--style-4'>$row1[1]</td>";
				    	echo "<td class='input--style-4'>$row1[2]</td>";
				    	echo "<td class='input--style-4'>$row1[3]</td>";
                        echo "<td class='input--style-4'>$row1[4]</td>";

				    	echo "<td> <a href='actualizar.php?id=$row1[0]'><img src='../../proyecto1/images/usuario.png' title='Modificar este usuario' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$row1[0]&idborrar=2'><img src='../../proyecto1/images/borrar.png'  title='Borrar este usuario' class='img-rounded'/></a></td>";
						


						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		                  $sql1 =  "DELETE FROM member WHERE UserID=$id";
                        $stmt1 = sqlsrv_query( $conn, $sql1 );
                        if( $stmt1 === false) {
                            die( print_r( sqlsrv_errors(), true) );
                        }
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

			?>
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
