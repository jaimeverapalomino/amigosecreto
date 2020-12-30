<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
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
									<h3 class="title">Paso 1: Ingrese Integrantes</h3>
								</div>
							</div>
						</div>	

						<div class="row">
							<form class="form" method="post" action="sortear.php" id="main_form">	
								<input type="hidden" id="numInt" name="numInt" value="<?php echo ($_POST['numInt'] > 2 ? $_POST['numInt'] : 3) ?>">
									<div class="col-md-5 col-md-offset-3">
										<div class="form-group" id="contenedor_inputs">
											<div class="content" id="content_1">  
												<div class="col-xs-1">
													<span class="label">1</span>
												</div>													
												<div class="col-xs-4" >
													<input type="text" value="" placeholder="Nombre" class="form-control" maxlength="100" id="nombre_1" name="nombre_1" required>
												</div>
												<div class="col-xs-4">
													<input type="email" value="" placeholder="Correo" class="form-control" maxlength="100" id="correo_1" name="correo_1" required>
												</div>
												<div class="col-xs-3">
													<input type="text" value="" placeholder="Excluir" class="form-control" maxlength="40" id="excluir_1" name="excluir_1">
												</div>
											</div>
											<div class="content" id="content_2">  
												<div class="col-xs-1"> 
													<span class="label">2</span>
												</div>														
												<div class="col-xs-4">
													<input type="text" value="" placeholder="Nombre" class="form-control" maxlength="100" id="nombre_2" name="nombre_2" required>
												</div>
												
												<div class="col-xs-4">
													<input type="email" value="" placeholder="Correo" class="form-control" maxlength="100" id="correo_2" name="correo_2" required>
												</div>
												<div class="col-xs-3">
													<input type="text" value="" placeholder="Excluir" class="form-control" maxlength="40" id="excluir_2" name="excluir_2">
												</div>				
											</div>
											<div class="content" id="content_3">  
												<div class="col-xs-1"> 
													<span class="label">3</span>
												</div>															
												<div class="col-xs-4">
													<input type="text" value="" placeholder="Nombre" class="form-control" maxlength="100" id="nombre_3" name="nombre_3" required>
												</div>
												
												<div class="col-xs-4">
													<input type="email" value="" placeholder="Correo" class="form-control" maxlength="100" id="correo_3" name="correo_3" required>
												</div>
												<div class="col-xs-3">
													<input type="text" value="" placeholder="Excluir" class="form-control" maxlength="40" id="excluir_3" name="excluir_3">
												</div>				
											</div>														
										</div>
										
										<div class="footer col-xs-12">
											<div class="text-right">
												<button class="btn btn-info btn-sm" id="btn_iniciar">Volver a Empezar</button>
												<button class="btn btn-info btn-sm" name="btn_enviar" id="btn_enviar">Siguiente Paso</button>
											</div>
										</div>
									</div>
									<div class="content">
										<div class="text-left">
											<button class="btn btn-success btn-xs" id="btn_agregar">Agregar</button>
										</div>
										<div class="text-left">
											<button class="btn btn-danger btn-xs" id="btn_quitar">Quitar</button>
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

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!--   Core JS Files   -->
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/material.min.js"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="/assets/js/material-kit.js"></script>


<script>
	$(document).ready(function(){
		var nums = $('#numInt').val();

		$("#btn_agregar").click(function(e){

			e.preventDefault();

			var nums = $('#numInt').val();
			nums = parseInt(nums) 
			if(nums > 29){					
				alert("Debe ingresar máximo 30 amigos");
				return false;
			} else {
				nums = nums + 1;
				$('#numInt').val(nums);	

			}

			for(var i=nums;i<=nums;i++){
				var new_input = '<div class="content" id="content_'+i+'">';
				new_input = new_input + '<div class="col-xs-1">';
				new_input = new_input + '<span class="label">'+i+'</span>';
				new_input = new_input + '</div>';
				new_input = new_input + '<div class="col-xs-4">';
				new_input = new_input + '<input type="text" value="" placeholder="Nombre" class="form-control" maxlength="100" id="nombre_'+i+'" name="nombre_'+i+'" required>';
				new_input = new_input + '</div>';
				new_input = new_input + '<div class="col-xs-4">';
				new_input = new_input + '<input type="email" value="" placeholder="Correo" class="form-control" maxlength="100" id="correo_'+i+'" name="correo_'+i+'" required>';
				new_input = new_input + '</div>';
				new_input = new_input + '<div class="col-xs-3">';
				new_input = new_input + '<input type="text" value="" placeholder="Excluir" class="form-control" maxlength="40" id="excluir_'+i+'" name="excluir_'+i+'">';
				new_input = new_input + '</div>';
				new_input = new_input + '</div>';

				$('#contenedor_inputs').append(new_input); //Agrego los inputs en contenedor id = "contenedor_inputs"
			}
		});	
		
	
		$("#btn_quitar").click(function(e){
			e.preventDefault();
			var nums = $('#numInt').val();
			nums = parseInt(nums);
			var del_input = '#content_'+nums;

			$(del_input).remove(); 

			nums = nums - 1;
			$('#numInt').val(nums);	
		});

		$("#btn_enviar").click(function(){
			var nums = $('#numInt').val();
			if(nums < 3){			
				alert("Debe ingresar al menos 3 amigos");
				return false;
			} else if (nums >30) {
				alert("Debe ingresar máximo 30 amigos");
				return false;
			}
			$('.numero').hide();
		});

		//restart
		$('#btn_iniciar').click(function(){
			$('#numInt').val(3);	
			$('input').val("");
		});
	});
</script>

</body>
</html>