<?php
session_cache_expire(60);
session_start();
include_once("./scripts/connector.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Zenitsu Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-33">
						Zenitsu Login
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="email" placeholder="Seu e-mail aqui">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1">
						<input class="input100" type="password" name="senha" placeholder="Sua senha aqui">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="#" class="txt2 hov1">
							Sign up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>

<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

if(isset($email) && isset($senha)){

$verifica_cadastros = $conexao_pdo->prepare('SELECT * FROM usuarios where email="'. $email .'" and senha="'.$senha.'"');
$verifica_cadastros->execute();
$number_registers = $verifica_cadastros->rowCount();
	
if($number_registers > 0){
	echo "<script>alert('Logado')</script>";
}
else{
	echo "<script>alert('Erro no login')</script>";
}
// Pra percorrer o resultado!
// while ($fetch = $stmt->fetch()) {

// }
}
?>