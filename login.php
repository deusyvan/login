<?php 
session_start();
require 'config.php';

if (isset($_POST['email']) && empty($_POST['email']) == false){
    
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    
    $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
    
    if($sql->rowCount() > 0){
        
        $dado = $sql->fetch();
        
        $_SESSION['id'] = $dado['id'];
    }

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