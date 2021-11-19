<!DOCTYPE html>
<?php
require_once('../consultas/user.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de archivos</title>
         <link rel="stylesheet" href="../css/css1/lista_doc.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/css1/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="../css/estilosA.css">
        <link rel="icon" type="image/png" href="../images/icons/icons8-explorador-de-archivos-es-48.png"/>
    </head>
    <body>
        <?php include_once('menuA.php');?>
        <br>
        <br>
        <br>
       <form>
           
    		<center><table width="96%">
            <tr>
                <th width="116">Fecha</th>
                <th width="112">Archivo</th>
                <th width="150">Acciones</th>
                
             
            </tr>
            <?php
                require_once('../conexion/conexion.php');
            $sql =  "SELECT*FROM dbo.[documentos]";
            $stmt = sqlsrv_query( $conn, $sql );
            if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
            }
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
            ?>
                  <tr>
                <td><?php echo $row['fecha']; ?></td>
                <td><a href="archivo.php?id=<?php echo $row['id_documentos']?>"><?php echo $row['nombre_documento']; ?></a></td>
               	<td><a  class="myButton" title="Aquí para nuevas modificaciones" href="editar.php?id=<?php echo $row['id_documentos']?>">Editar</a>
               	<a  class="myButton" title="Eliminar toda esta línea" href="../consultas/eliminar.php?id=<?php echo $row['id_documentos']?>">Eliminar</a></td>

            </tr>
                
          <?php  } ?>
        </table>
               
    </form>
    </body>
</html>
