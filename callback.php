<?php 
require 'fb.php';
	// Recebe o código passado pelo login no facebook
$helper = $fb->getRedirectLoginHelper();

	// Valida o código e salva na sessão
try {
	// As vezes vem informações no formato não string por isso é preciso transformar em string
	$_SESSION['fb_access_token'] = (string) $helper->getAccessToken();
	// Usar o Exception no padrão que o facebook pede segue
} catch (Facebook\Exception\FacebookResponseException $e) {
	echo "ERRO: ".$e->getMessage();
} catch(Facebook\Exception\FacebookSDKException $e){
	echo "ERRO SDK: ".$e->getMessage();
	exit;
}
	// Após pegar os dados e adicionar na sessão ele retorna pra index
header("Location: index.php");