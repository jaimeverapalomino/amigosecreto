<?php
if(!isset($_SESSION)){
	session_start();
}

include __DIR__ . '/amigosecreto/amigosecreto.php';
include __DIR__ . '/amigosecreto/amigo.php';
include __DIR__ . '/amigosecreto/secreto.php';

if(isset($_POST['btn_enviar'])) {
	foreach($_POST as $campo => $valor) {
        $_SESSION['form'][$campo] = $valor;
	}
}

if(isset($_POST['btn_sortear'])) {
	foreach($_POST as $campo => $valor) {
        $_SESSION['form2'][$campo] = $valor;
	}

	//genero clase amigo
	$tot_part=$_SESSION['form']['numInt'];

	for ($i=1; $i <= $tot_part; $i++) {
		${"jugador_" . $i} = new Amigo($_SESSION["form"]["nombre_".$i], $_SESSION["form"]["correo_".$i], $_SESSION["form"]["excluir_".$i]);
	}

	$juego = new AmigoSecreto();
	for ($i=1; $i <= $tot_part; $i++) {
		$juego->addPlayer(${"jugador_" . $i});
	}

	$result = $juego->letsPlay();

	foreach ($result as $secret) {
		echo $secret->Confess().'<br />';
	}

	//html para enviar por correo con sorteo



}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
	<link rel="icon" type="image/png" href="../img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Amigo Secreto</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/material-kit.css" rel="stylesheet" type="text/css"/>
	
</head>


<body class="profile-page">
	<div class="wrapper">
		<div class="header header-filter" style="background-image: url('../assets/img/city.jpg');"></div>
		<div class="main main-raised">
				<div class="profile-content">
					<div class="container" id="container">
						<div class="row">
							<div class="profile">
								<div class="name">
									<h3 class="title">Paso 2: Lugar de Encuentro</h3>
								</div>
							</div>
						</div>
							
						<div class="row">
							<form class="form" method="post" action="" id="">	
									<div class="col-md-8 col-md-offset-2">
										<div class="form-group" id="contenedor_inputs">
											<div class="content" id="content_1">
												<div class="col-xs-4">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">date_range</i>
														</span>
														<input class="form-control" id="dp3" name="dp3" type="text" placeholder="Fecha" required/>
	
													</div>
												</div>
												<div class="col-xs-4">
													<div class="input-group">
														<span class="input-group-addon">
																<i class="material-icons">place</i>
														</span>
														<input type="text" id="Lugar" name="Lugar" class="form-control" placeholder="Lugar" required>
													</div>
												</div>
												<div class="col-xs-4">
													<div class="input-group">
														<span class="input-group-addon">
																<i class="material-icons">attach_money</i>
														</span>
														<input type="number" id="Presupuesto" name="Presupuesto" class="form-control" placeholder="Presupuesto" required>
													</div>
												</div>																
											</div>	
										</div>

										<div class="footer col-xs-12">
											<div class="text-right">
												<button class="btn btn-info btn-sm" onclick="history.back()" id="btn_iniciar">Volver a Empezar</button>
												<button class="btn btn-info btn-sm" name="btn_sortear" id="btn_sortear">Sortear</button>
											</div>
										</div>
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</div>		

<footer class="footer">
    <div class="container text-center">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="https://github.com/jaimeverapalomino" target="_blank">
                        GIT Repository
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</footer>


<script src="assets/js/jquery.min.js"></script>

<!--   Core JS Files   -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Datepicker, full documentation here: 	/ --> 
<script src="assets/js/bootstrap-datepicker.js"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js"></script>

<script>
	 $(document).ready(function(){
		$('#dp3').datepicker({
			format: 'dd/mm/yyyy',
			weekStart: 1
		});

		$('#dp3').on('changeDate', function(ev){
    		$(this).datepicker('hide');
		});

		
	});


</script>

</body>
</html>