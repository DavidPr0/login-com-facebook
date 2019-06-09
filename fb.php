<?php
session_start();

require 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '402771886988190',
	'app_secret' => 'ca2475c272579db1fa1459a6f14979b3',
	'default_graph_version' => 'v2.10'
]);