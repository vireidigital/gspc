<html>
	<head>
		<title>Acesso ao sistema</title>
			<link type="text/css" href="gspc/css/estilos.css" rel="stylesheet" />
	</head>
<body class="login-body">
<table border="0" class="login-table">
	<form method="post" action="login_validacaoCliente.php" >
		<tr><td align="center"><center><img src="gspc/images/others/logo.png" class="login-logo" style="margin: 15px;"/></center></td></tr>
		<tr><td class="login-frase"><label >Seja bem-vindo! Por favor, realize a autentica&ccedil;&atilde;o</label></td></tr>
		<tr><td ><hr class="login-linha" /></td></tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td>
							<table>
								<tr><td><label class="login-labels">senha:</label></td></tr>
								<tr><td><input class="login-inputs" type="password" name="tec_senha" id="tec_senha" size="30px" maxlength="6" placeholder="Digite sua senha" /></td></tr>
							</table>
						</td>
						<td>
							<table>
								<tr>
									<td align="center">
										<input 
											class="bt-login" onmouseover="this.className='bt-loginOver'" onmouseout="this.className='bt-login'"
											type="submit" value="LOGIN"
										/>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>

		</tr>
		<tr><td align="center"><a href="index.php">Voltar</a></td></tr>
		<tr><td align="center"><label >&nbsp;</label></td></tr>
	</form>
</table>
</body>
</html>