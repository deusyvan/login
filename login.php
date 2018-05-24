<?php 
session_start();
if (isset($_POST['email']) && empty($_POST['email']) == false){
    
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    
}

?>

Página de Login

<form method="POST">

	E-mail: <br/>
	<input type="text" name="email"/><br/><br/>
	
	Senha: <br/>
	<input type="password" name="senha"/><br/><br/>
	
	<input type="submit" value="Entrar"/>

</form>