<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>QR Code</title>
		<meta charset="UTF-8">
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
							<h2 class="mb-4 text-center">Importar Arquivo</h2>
							<form class="validate-form">
								<div class="row">
									<div class="validate-input">
										<label for="formFileLg" class="form-label">Escolha o arquivo para gerar automaticamente os QR Codes. </label>
										<input class="form-control form-control-lg" id="formFileLg" type="file" accept=".csv" required>
									  </div>
									<div class="d-grid gap-2 mt-4">
										<button type="submit" class="btn btn-lg btn-primary shadow"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16"><path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z"></path><path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"></path></svg>                
											Importar
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

