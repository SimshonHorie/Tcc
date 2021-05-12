<html>
	<head>
		<title>Exemplo de formulario com acesso ao banco de dados - PHP</title>
		<meta http-equiv ="Content-Type" content ="text/html; charset=UTF-8">
	</head>
	<body bgcolor="#FFFF99">
	<center><h1> Registros do Banco de Dados</h1></center>
	<center><h2> Clientes</h2></center>
		<?php
			
		
			<center><table border= "1">
				<tr>
					<th>nome</th>
					<th>rua</th>
					<th>bairro</th>
					<th>cidade</th>
					<th>uf</th>
					<th>cep</th>
					<th>cpf</th>
					<th>rg</th>
					<th>email</th>
					<th>telefone</th>
				</tr>
				 while($dado = Mysql_fetch_array($resultado)){
				<tr>
					<td><?php echo $dado["nome"];?></td>
					<td><?php echo $dado["rua"];?></td>
					<td><?php echo $dado["bairro"];?></td>
					<td><?php echo $dado["cidade"];?></td>
					<td><?php echo $dado["uf"];?></td>
					<td><?php echo $dado["cep"];?></td>
					<td><?php echo $dado["cpf"];?></td>
					<td><?php echo $dado["rg"];?></td>
					<td><?php echo $dado["email"];?></td>
					<td><?php echo $dado["telefone"];?></td>
					<td><a href ="exemploformbancoalterar.php?codigo=<?php echo $dado["codigo"]; ?>">
					<img  src ="\exemplophpmysql\imagens\novo_16x16.png " />Editar</a> | 
						<a href ="exemploformbancoexcluir.php?codigo=<?php echo $dado["codigo"]; ?>">
					<img  src ="\exemplophpmysql\imagens\lixo_16x16.png " />Excluir</a></td>
				</tr>
				}?>
				
				
			</table></center><br><br>
			<center><img  src ="\exemplophpmysql\imagens\voltar_16x16.png " />
					  <a href ="phpa.php">Retornar ao formulario</a></center>
	</body>
</html>