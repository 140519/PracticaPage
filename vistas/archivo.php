
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel=stylesheet href="../css/css1/pdf.css">
       
        
    </head>
    <body>
        <?php
        include_once('menuA.php');
        ?>
        <div class="fondo1" >
        <?php
            include_once('../conexion/conexion.php');
            $id = $_GET['id'];
            if(!empty($id) || $fecha ==""){
            $ant = strtoupper(urldecode(stripslashes($id)));
            $fec =strtoupper($ant);
            $sql =  "SELECT*FROM dbo.[documentos]WHERE[id_documentos]='".$id."'";
            $stmt = sqlsrv_query( $conn, $sql );
            if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
            }
            if( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                $row_count = sqlsrv_num_rows( $stmt );
                if($row['id_documentos']!=""){?>
        <br>
         <aside class="fondo2">
        <iframe  style="position: absolute;left: 0;top: 0;" src="../archivos/<?php echo $row['nombre_documento']; ?>"  width="100%" height="100%"></iframe>
        </aside>
                <?php }}else{ echo "<script type=\"text/javascript\">alert(\"La fecha no esta disponible.\");</script>";
                        echo "<script>location.href='./lista_doc.php'</script>"; ?>
             ?>

       
                <?php  }}?>
        </div>
    </body>
</html>