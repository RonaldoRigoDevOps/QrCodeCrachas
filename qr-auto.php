<?php

/*f (isset($_POST['gerar-qr-auto'])) {
	$nomedoArquivo  = $_FILES['csv_file']['name'];
	$caminhoArquivo = $_FILES['csv_file']['tmp_name'];
	$novoNome       = 'Lista.csv';
	$caminhoSalvar  = './db/csv/'.$novoNome;
	if (move_uploaded_file($caminhoArquivo, $caminhoSalvar))
	{
	  rename($nomedoArquivo, $novoNome);
		  header('Location:gerar-qr-auto.php');
	} 
}*/

if(isset($_FILES['csv_file'])) {
	$errors = array();
  
	// Define a pasta onde o arquivo será salvo
	$target_dir = "./db/csv/";
  
	// Define o nome do arquivo
	$target_file = $target_dir . "Lista.csv";
  /*
	// Verifica se o arquivo já existe
	if (file_exists($target_file)) {
	  $errors[] = "O arquivo já existe.";
	}
  */
	// Verifica o tipo de arquivo
	$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if($fileType != "csv") {
	  $errors[] = "Apenas arquivos CSV são permitidos.";
	}
  
	// Verifica o tamanho do arquivo (50MB)
	if ($_FILES["csv_file"]["size"] > 50000000) {
	  $errors[] = "O arquivo é muito grande. Tamanho máximo permitido: 50MB.";
	}
  
	// Se não houver erros, faz o upload do arquivo
	if (count($errors) == 0) {
	  if (move_uploaded_file($_FILES["csv_file"]["tmp_name"], $target_file)) {
		//echo "O arquivo foi salvo como Lista.csv na pasta ./db/csv/";
		header('Location: gerar-qr-auto.php');
	  } else {
		echo "Houve um erro ao fazer upload do arquivo.";
	  }
	} else {
	  // Mostra os erros, se houverem
	  foreach ($errors as $error) {
		echo $error . "<br>";
	  }
	}
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
							<h2 class="mb-4 text-center">Importar Arquivo</h2>
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="container mt-4">
										<p style="text-align:justify">
											Para gerar o arquivo de importação, acesse o PowerShell e execute o seguinte comando:
										</p>
										<div class="form-group">
											<code>
												<textarea class="form-control" rows="7" disabled>
													Get-ADObject -SearchBase "OU=Cercena,DC=cercena,DC=com,DC=br" -LDAPFilter "(&(!objectClass=Computer)(!userAccountControl:1.2.840.113556.1.4.803:=2)(objectClass=user))" -Properties DisplayName,Title,Department,Mail, Mobile, TelephoneNumber | select DisplayName,Title,Department,Mail, Mobile, TelephoneNumber | Export-CSV -Path C:\Lista.csv
												</textarea>
											</code>
										</div>
									</div>
									<div class="validate-input">
										<label for="formFileLg" class="form-label">Escolha o arquivo para gerar automaticamente os QR Codes. </label>
										<input class="form-control form-control-lg" id="csv_file" name="csv_file" type="file" accept=".csv" required>
									  </div>
									<div class="d-grid gap-2 mt-4">
										<button type="submit" name="gerar-qr-auto" class="btn btn-lg btn-primary shadow"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16"><path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z"></path><path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"></path></svg>                
											IMPORTAR E GERAR
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

