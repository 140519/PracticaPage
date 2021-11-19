
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="css/css1/main1.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="/text/css" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/formato.css">
    <link rel=stylesheet href="css/menud.css">
<script  type="text/javascript">

    
function elige(envio) {
         var lista = document.formulario3.buscar
        var cod = document.getElementById("buscar").value;
         if (cod != 0 || cod === 0) { 
              envio.disabled=true; envio.value='Enviando...'; envio.form.submit()
              location.href = '../proyecto1/vistas/pdf.php?fecha='+ cod;
            }else{ 
            alert('Debe ingresar una fecha');
            }		
         }
    
    
</script>
    
</head>
<h1><img src"images/logoGEA.JPG" style="position: absolute; top: 0; left: 0;" > </h1>
 <div class="lol">
<!--<div class="card-body" style="width: 900px;margin: auto;border: 1px solid blue;padding: 120px;" >-->
<td>
 <main>
        <section id="banner">
           <div class="slider">
              <ul>    
            <li><img src="images/secretariasp.jpg"></li>
             <li><img src="images/pj.JPG" alt=""></li>
             <li><img src="images/secretariasp.jpg"></li>
             <li><img src="images/pj.JPG"></li>
              </ul> 
           </div>
        </section>
         <div class="lol">
               </div>
             <section id="bienvenidos">
        <div class="cont">
            <h2>BIENVENIDOS A LAS ESTAD&Iacute;STICAS DE LA DIRECCI&Oacute;N GENERAL DE REINSERCI&Oacute;N SOCIAL </h2>
        </div>
        </section>
               <div class="lol">
               </div>
        <section id="">
     
   
<form  class="form-inline" name="formulario3" onsubmit="return elige(this);"  method="post"  style="margin:0"> 
    <div class="hola">
    <table>
        <h2>Selecciona la fecha deseada</h2>
        
    <?php
            
            require_once('conexion/conexion.php');
            $sql =  "SELECT * FROM dbo.[documentos]";     
            $sq =  "SELECT fecha FROM dbo.[documentos] Order By fecha desc";
            $stmt = sqlsrv_query( $conn, $sql );
            if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
            }
            if( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
            $s = sqlsrv_query( $conn, $sq );
            if( $stmt === false) {
                die( print_r( sqlsrv_errors(), true) );
            }
                if( $r = sqlsrv_fetch_array( $s, SQLSRV_FETCH_ASSOC) ) {
                if($row['fecha']==0){ ?>
             <p>NO tiene archivos</p>
                <?php }else{ ?>
            <input  type="month"  name="buscar" id="buscar" placeholder="Buscar:" value="<?php echo $row['fecha']?>" min="<?php echo $row['fecha']?>" max="<?php echo $r['fecha'];?>">

<?php
             }}}

?>
    <input type="submit" value="Enviar" onclick="return elige(this);"   />
       
        
    </table>
        </div>
</form>
     </section>
             <section id="info">
            <h3 class="icon-location-outline">Nuestra ubicaci&oacute;n</h3>
            <div class="info-sh">
                <iframe src="https://www.google.com/maps/d/embed?mid=1DzuzPSVdzx0SiGkinWqzc72E8W4tzc67&hl=es-419" width="600" height="350"></iframe>
            </div>
        </section>
     <footer>
        <div class="cont" id="red">
            <p class="super">Todos los derechos reservados &copy; 2019</p>
            <a class="icon-whatsapp" href="tel:4499718403">449 971 84 03</a>
            <a class="icon-whatsapp" href="tel:9102145">910 21 45 Ext. 6602</a>
        </div>
    </footer>
    </main>
    
    </td>
     </div>
 