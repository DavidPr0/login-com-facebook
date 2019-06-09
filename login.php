<?php 
require 'fb.php';
	// Pega a url do facebook gerada no momento
$helper = $fb->getRedirectLoginHelper();
	// Variaveis que salvam as permissões dada para o login com facebook
$permissions = array('email');
	// Pegar url do facebook após o usuário da as permissões
$loginurl = $helper->getLoginUrl('http://localhost/login-facebook/callback.php',$permissions);
?>

<a href="<?php echo htmlspecialchars($loginurl); ?>">Fazer login com Facebook</a>