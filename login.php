<style>
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
			justify-content: center;
			height: 100vh;
			gap: 10px;
			margin-top: 10px;
			font-family: Arial, Helvetica, sans-serif;
			background-color: #cccccc;
		}
		button, input {
			margin-top: 20px;
		</style>
<?php
session_start();
    $usuario= $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if($usuario=== 'admin'&& $senha === '123') {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tema'] = $_POST['tema'];
        echo"Login bem-sucedido! <a href='produtos.php'>Ir para produtos</a>";
       
    } else{
        echo"Usuário ou senha incorretos. <a href='index.php'>Tentar novamente</a>";
    }

?>
