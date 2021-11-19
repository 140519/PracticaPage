<html>
    <head>
        <meta charset="UTF-8">
        <title>Documentos</title>
        <link rel=stylesheet href="../css/css1/pdf.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icons/icons8-documentos-50.png"/>
       
        
    </head>
    <body style="">
        <?php
        include_once('view.php');
        ?>
        <br>
        <br>
        <div class="fondo1" >
        <?php
           include '../conexion/conexion.php';
            
            $fecha = $_GET['fecha'];
            if(!empty($fecha) || $fecha =="" || $fecha =''){
            $ant = strtoupper(urldecode(stripslashes($fecha)));
            $fec =strtoupper($ant);
                $sq =  "SELECT nombre_documento,fecha,tipo FROM dbo.[documentos]";
            $stm = sqlsrv_query( $conn, $sq );
            if( $stm === false) {
                die( print_r( sqlsrv_errors(), true) );
            }
            if( $row = sqlsrv_fetch_array( $stm, SQLSRV_FETCH_ASSOC) ) {
                 $sql =  "SELECT nombre_documento,fecha,tipo FROM dbo.[documentos] WHERE[fecha]='".$fecha."'";
            $stmt = sqlsrv_query( $conn, $sql );
            if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
            }
            if( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                 $row_count = sqlsrv_num_rows( $stmt );
                if(isset($row['fecha'])){?>
         <aside class="fondo2">
        <iframe style="position: absolute;left: 0;top: 0;" class="fondo2" src="../archivos/<?php echo $row['nombre_documento']; ?>"  width="100%" height="100%"></iframe>
        </aside> 
       <?PHP }} else { echo "<script type=\"text/javascript\">alert(\"La fecha no esta disponible.\");</script>";
                        echo "<script>location.href='../index.php'</script>";?>
           
               
       
                <?php  }}}?>
        </div>
    </body>
</html>