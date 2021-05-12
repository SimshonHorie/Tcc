<html>
	<head>
		<title>Exemplo de formulario com acesso ao banco de dados - PHP</title>
		<meta http-equiv ="Content-Type" content ="text/html; charset=UTF-8">
	</head>
	<body bgcolor="#FFFF99">
		
		<?php
		
			$nome = $_POST['nome'];
			$rua = $_POST['rua'];
			$bairro = $_POST['ba'];
			$cidade = $_POST['cid'];
			$uf = $_POST['uf'];
			$cep = $_POST['cep'];
			$cpf = $_POST['cpf'];
			$rg = $_POST['rg'];
			$email = $_POST['ema'];
			$telefone = $_POST['tele'];
			if (($nome == null)or ($rua == null)or ($bairro == null)or ($cidade == null)or ($uf == null)or ($cep == null)or ($cpf == null)or ($rg == null)or($email == null)or ($telefone == null)){
			echo "<br><br><center>Todos os campos devem se preenchidos!!";
			}else{
					
			
		?>
		<center><a href ="phpa.php">Retornar ao formulario</a></center>
	</body>
</html>