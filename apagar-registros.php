<?php

if (isset($_POST['apagar-registros']))
{
	$csv_dir = './db/csv/';
	$manual_dir = './svg/manual/';
	$auto_dir = './svg/auto/';
	
	// Excluindo arquivos dentro do diretório ./db/csv/
	if ($handle = opendir($csv_dir)) {
	    while (false !== ($file = readdir($handle))) {
	        if ($file != "." && $file != "..") {
	            unlink($csv_dir . $file);
	        }
	    }
	    closedir($handle);
	}
	
	// Excluindo arquivos dentro do diretório ./svg/manual/
	if ($handle = opendir($manual_dir)) {
	    while (false !== ($file = readdir($handle))) {
	        if ($file != "." && $file != "..") {
	            unlink($manual_dir . $file);
	        }
	    }
	    closedir($handle);
	}
	
	// Excluindo arquivos dentro do diretório ./svg/auto/
	if ($handle = opendir($auto_dir)) {
	    while (false !== ($file = readdir($handle))) {
	        if ($file != "." && $file != "..") {
	            unlink($auto_dir . $file);
	        }
	    }
	    closedir($handle);
	}

	echo "<script>alert('Registros excluidos com sucesso!');window.location.href='index.php';</script>";
}
?>
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
							<h2 class="mb-4 text-center">Apagar Registros</h2>
							<p style="text-align:justify">
                            Este procedimento irá efetuar a exclusão dos QrCodes já gerados, 
							efetuando também a exclusão dos dados gerados na última importação 
							dos dados de forma automática.
                            </p>    
                            <form action="apagar-registros.php" method="post">
								<div class="row">
									<div class="d-grid gap-2 mt-4">
                                        <button type="submit" name="apagar-registros" class="btn btn-lg btn-danger shadow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16"><path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"></path></svg>
                                            APAGAR REGISTROS
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

