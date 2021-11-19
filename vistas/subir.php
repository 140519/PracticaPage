<?php
require_once('../consultas/user.php');
include '../consultas/subirarchivo.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Subir Archivos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../images/icons/icons8-subir-100.png"/>
        <link rel="stylesheet" type="text/css" href="../css/css1/bootstrap.min.css">
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
                     <form method="post" action="" enctype="multipart/form-data">
                        <p style="text-align: center;font-size: 14pt;" class="input--style-4">Subir Archivo</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                        
                                    <td colspan="2"><input type="file" name="archivo" class="input--style-4"></td>
                                    </div>
                                </div>
                            </div>
                       <input type="submit" value="Subir Archivo" name="subir" class="btn btn-primary">
                        <td><a href="lista_doc.php">Lista</a></td>
                                     
                                      <div id="resultado"><?php echo mostrar("salida"); ?></div>

                                   
                                
                
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

            
    </body>
</html>