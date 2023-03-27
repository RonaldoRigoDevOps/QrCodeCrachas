<?php
include("environment.php");

?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>QR Code</title>
		<meta charset="UTF-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
		<?php include("cabecalho.php") ?>
	<head>
	<body>
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card border-0 shadow">
						<div class="card-body p-4">
							<h2 class="mb-4 text-center">Gerar QR Code</h2>
							<form action="gerar-qr-manual.php" method="post" class="validate-form">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group mb-3 validate-input">
											<label for="nome" class="form-label">Nome completo</label>
											<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" name="nome_completo" placeholder="" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group mb-3 validate-input">
											<label for="cargo" class="form-label">Cargo</label>
											<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" name="cargo" placeholder="" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group mb-3 validate-input">
											<label for="cargo" class="form-label">Departamento</label>
											<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" name="departamento" placeholder="" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group mb-3 validate-input">
											<label for="email" class="form-label">E-mail</label>
											<input type="email" class="form-control form-control-lg border-0 shadow-sm bg-light" name="email" placeholder="usuario@cercena.com.br" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group mb-3 validate-input">
											<label for="telefone" class="form-label">Celular</label>
											<input type="tel" class="form-control form-control-lg border-0 shadow-sm bg-light" name="celular" placeholder="+55 x xxxxx xxxx " required>
										</div>
									</div>
									<div class="col-md-2">
											<div class="form-group mb-3 validate-input">
												<label for="numero" class="form-label">Ramal</label>
												<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" name="ramal" value="" placeholder="" required>
											</div>
										</div>
									<div class="col-md-12">
										<div class="form-group mb-3 validate-input">
											<label for="empresa" class="form-label">Empresa</label>
											<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" id="empresa" value="<?php echo"$company"?>" placeholder="" required>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group mb-3 validate-input">
												<label for="rua" class="form-label">Rua</label>
												<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" id="rua" value="<?php echo"$street"?>" placeholder="" required>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group mb-3 validate-input">
												<label for="numero" class="form-label">Número</label>
												<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" id="numero" value="<?php echo"$number"?>" placeholder="" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group mb-3 validate-input">
												<label for="bairro" class="form-label">Bairro</label>
												<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" id="bairro" value="<?php echo"$neighborhood"?>" placeholder="" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group mb-3 validate-input">
												<label for="cidade" class="form-label">Cidade</label>
												<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" id="cidade" value="<?php echo"$city"?>" placeholder="" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group mb-3 validate-input">
												<label for="estado" class="form-label">Estado</label>
												<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" id="estado" value="<?php echo"$state"?>" placeholder="" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group mb-3 validate-input">
												<label for="pais" class="form-label">País</label>
												<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" id="pais" value="<?php echo"$country"?>" placeholder="" required>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group mb-3 validate-input">
												<label for="site" class="form-label">CEP</label>
												<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" id="site" value="<?php echo"$postalcode"?>" placeholder="" required>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group mb-3 validate-input">
												<label for="site" class="form-label">Site</label>
												<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" id="site" value="<?php echo"$website"?>" placeholder="" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group mb-3 validate-input">
												<label for="pais" class="form-label">Telefone</label>
												<input type="text" class="form-control form-control-lg border-0 shadow-sm bg-light" id="telefone" value="<?php echo"$numberWork"?>" placeholder="" required>
											</div>
										</div>
									</div>
									<div class="d-grid gap-4 mt-4">
										<button type="submit" name="gerar_qr" class="btn btn-lg btn-primary shadow"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16"><path d="M2 2h2v2H2V2Z"></path><path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"></path><path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"></path><path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"></path><path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"></path></svg> 
											Gerar 
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>

