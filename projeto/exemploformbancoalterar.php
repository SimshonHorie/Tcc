<?php
	// alterando registro no banco
	$conexao = mysql_connect ("127.0.0.1", "root", "");
	mysql_select_db("bdcliente", $conexao);
	$codigo = $_GET['codigo'];
	
	//echo $codigo;
	
	$sqlbusca = "select  *  from cliente where codigo = '$codigo'";
	$resultado = mysql_query ($sqlbusca, $conexao);
	$dados = Mysql_fetch_array($resultado);
	$codigo = $dados['codigo'];
	$nome = $dados['nome'];
	$fone =$dados['telefone'];
	$email =$dados['email'];
	
	

echo "<html>
	 <head>
		<title>Exemplo de formulario com acesso ao banco de dados - PHP</title>
		<meta http-equiv ='Content-Type' content ='text/html; charset=UTF-8'>
	 </head>
	 <body bgcolor='#FFFF99'>
		<center><form name= 'usr' method = 'post' action='exemploformbancoalterar2.php'>
			<table border='0' cellpadding='5' cellspacing='5'> <!-- espaçamento -->
				<tr>
					<td colspan=2 height='30' bgcolor= '8CDAFF'>
					<center><b> CADASTRO DE  USUARIO <b></center>
					</td>
				</tr>
				<tr>
					<td colspan=2 height='30'>
					<font color= '0000A0'>
					<b> INFORME SEUS DADOS <b>
					</font>
					</td>
				</tr>
				<tr>
					<td width='25%' height='30'> Codigo:</td>
					<td height='30'>
						<input type='text' name='usr_codigo'  readonly='true' value = '$codigo' size='30'>
					</td>
				</tr>
				<tr>
					<td width='25%' height='30'> Nome:</td>
					<td height='30'>
						<input type='text' name='usr_nome' value = '$nome' size='30'>
					</td>
				</tr>
				<tr>
					<td width='10%' height='30' valign='top'> Telefone:</td>
					<td height='30'>
						<input type='text' name='usr_telefone' value = '$fone' size='30' ></textarea>
					</td>
				</tr>
				<tr>
					<td width='10%' height='30' valign='top'> E-mail:</td>
					<td height='30'>
						<input type='text' name='usr_email'value = '$email' size='30' ></textarea>
					</td>
				</tr>
						
				<tr height='60' valign='bottom'>
					<td width='20%'></td>
					<td height='30' valign='bottom'>
						<input type='submit' value='  OK  '>&nbsp;&nbsp;&nbsp;
						
					</td>
				</tr>
				<tr>
					<td width='10%' height='30' valign='top'> <a href ='exemploformbancopesq.php'>Registros banco</a> </td>
				</tr>	
			</table>
		</form></center>
	</body>
</html>";
?>