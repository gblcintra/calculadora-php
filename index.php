<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<title>Calculadora PHP</title>
		<link rel="icon" href="imagens/favicon.png"/>

		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="estilo.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		<div class="container">
			<form method="post" action="calcular.php">

				<div class="form-group row">
					<div class="col-sm-4">

					</div>
					<div class="col-sm-4">
						<div class="form-group row">
							<div class="form-group row">
								<label for="numero1">	Primeiro número:</label>
								<div class="col-sm-12">
									<input class="form-control input-sm" id="numero1" type="number" name="numero1" required/>
								</div>
							</div>
							<br/>
							<div class="form-group row">
								<label for="numero2">Segundo número:</label>
								<div class="col-sm-12">
									<input class="form-control input-sm"id="numero2" type="number" name="numero2" required/>
								</div>
								<br/><hr>
								<label>Operação:</label><br/>
							</div>
							<div class="col-sm-3">
								<input class="form-check-input" type="radio" name="operacao" value="somar" checked>Somar</input>
							</div>
							<div class="col-sm-3">
								<input class="form-check-input" type="radio" name="operacao" value="subtrair">Subtrair</input>
							</div>
							<div class="col-sm-3">
								<input class="form-check-input" type="radio" name="operacao" value="multiplicar">Multip.</input>
							</div>
							<div class="col-sm-3">
								<input class="form-check-input" type="radio" name="operacao" value="dividir">Dividir</input>
							</div>
							<hr><br>
							<div class="form-group row">

								<div class="col-sm-4"></div>
								<div class="col-sm-4">
									<input class="btn btn-success" type="submit" value="Calcular"/>
								</div>
								<div class="col-sm-4"></div>

							</div>
						</div>
					</div>

				</div>
			</form>
		</div>
	</body>
</html>
