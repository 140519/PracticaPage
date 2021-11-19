<html>
<head>
<title>Inicio de Sesi&oacute;n</title>
    	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/295128.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../css/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../css/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/css1/util.css">
	<link rel="stylesheet" type="text/css" href="../css/css1/main.css">
<style>
    
    .limiter,.wrap-login100 p-t-50 p-b-90{
        background-image: url(../images/ssp.png);
        background-size: 50% 100%;
    }
    </style>
</head>
    <?php include('view.php');?>
<body>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
    <form name="form1" method="post"  lass="login100-form validate-form flex-sb flex-w"  action="return false" onsubmit="return false;validateform(this);">
    <span class="login100-form-title p-b-51">
						Iniciar Sesi&oacute;n
					</span>
  
    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
          <input class="input100" name="txtUsername" type="text" id="txtUsername" placeholder="Usuario">
        <span class="focus-input100"></span>
    </div>
       
    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
        <input class="input100" name="txtPassword" type="password" id="txtPassword" placeholder="Contraseña">
    	<span class="focus-input100"></span>
    </div>
        <div id="resultado"></div>
    <div class="container-login100-form-btn m-t-17">
  <input class="login100-form-btn" type="submit" name="Submit" value="Entrar"  onclick="Validar(document.getElementById('txtUsername').value, document.getElementById('txtPassword').value);">
        </div>
    </form>
    </div>
        </div>
        <script>
 
        function Validar(user, pass)
        {
            var txtUsername=document.form1.txtUsername.value;  
            var txtPassword=document.form1.txtPassword.value;
            
            if (txtUsername==null || txtUsername==""){  
              alert("Completa el usuario");  
              return false;  
            }else if(txtPassword==""){  
              alert("Completa la contraseña");  
              return false;  
              }else  if(txtPassword.length<6 ){
                  alert("Alarga el texto a 6 o más caracteres");  
                return false;  
              }  
            $.ajax({
                url: "../../proyecto1/consultas/check_login.php",
                type: "POST",
                data: "txtUsername="+user+"&txtPassword="+pass,
                success: function(resp){
                $('#resultado').html(resp)
                }       
            });
        }
        </script>
    </div>
    <script>  
function validateform(){  
var txtUsername=document.form1.txtUsername.value;  
var txtPassword=document.form1.txtPassword.value;  
  
if (txtUsername==null || txtUsername==""){  
  alert("Completa el usuario");  
  return false;  
}else if(txtPassword==""){  
  alert("Completa la contraseña");  
  return false;  
  }else  if(txtPassword.length<6 ){
      alert("Alarga el texto a 6 o más caracteres");  
    return false;  
  }  
}  
</script>
    <div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../css/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../css/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../css/vendor/bootstrap/js/popper.js"></script>
	<script src="../css/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../css/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../css/vendor/daterangepicker/moment.min.js"></script>
	<script src="../css/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../css/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../jquery/js/main.js"></script>
</body>
</html>