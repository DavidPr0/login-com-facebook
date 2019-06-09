<?php

	require 'fb.php';

	if (isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_token'])) {

		$res = $fb->get('/me?fields=email,name,id,picture', $_SESSION['fb_access_token']);

		$r = json_decode($res->getBody());

		$img = $r->picture->data->url;

		echo "<img src='".$img."' border='0' >";

		echo "Meu nome é: ".$r->name."<br>";
		echo "Meu e-mail é: ".$r->email."<br>";
		echo "Meu Id é: ".$r->id."<br>";
		echo "<br><a href='sair.php'>Sair</a>";
	}else{
		header("Location: login.php");
	}