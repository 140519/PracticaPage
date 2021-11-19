<?php
require_once('../consultas/user.php');
?>
<html>
<head>
<title>Inicio</title>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Icons font CSS-->
    <link href="../css/cs/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../css/cs/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="../css/user.css" type="text/css">
    <!-- Vendor CSS-->
    <link href="../css/cs/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../css/cs/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/cs/css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <?php include_once('menuA.php');?>
 <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680" style="max-width: 780px;">
            <div class="card card-4">
                <div class="card-body">
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2" style="width: auto;">
                                <div class="input-group">
                                    <img src="../images/user.png" style="display: block;margin-left: 305.813;margin-right: 50px;">
                    <P style="font-size: 14pt;margin-left: 85;" class="input--style-4">Bienvenido Administrador <?php echo $objResult["Name"];?></P>
                                </div>
                            </div>
                            
                        <div class="principal">
                            <div id="add" >
            <img src="../../proyecto1/images/listado%20(1).png"  onclick="window.open('lista_doc.php','_self');"  class="input--style-4">
            <p style="color:#1C2833;text-align:center;" class="input--style-4">Lista De Documentos</p>
                
                    </div>
                        </div>
                       
                         <div id="up">
                              
            <img src="../../proyecto1/images/archivo%20(3).png"  onclick="window.open('subir.php','_self')" class="input--style-4" >
            <p style="color:#1C2833;text-align:center;" class="input--style-4">Subir Documentos</p>
        </div>
                    </div>
                     </div>
                    </div>
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
<?php
	sqlsrv_close($objCon);
?>