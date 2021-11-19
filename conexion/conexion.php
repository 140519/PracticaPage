<?php
$serverName = "DESKTOP-SMENN7G\SQLEXPRESS";
$connectionInfo = array( "Database"=>"subirpdf", "UID"=>"admin", "PWD"=>"123");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
?>