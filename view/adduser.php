<?php
$xml = simplexml_load_file('../data/usuario.xml');
$id = count($xml->usuario) + 1;
$usuario = $xml->addChild('usuario');
$usuario->addAttribute('id',$id);
$nome = $usuario->addChild('nome',$_POST['nome']);
$login = $usuario->addChild('login',$_POST['login']);
$senha = $usuario->addChild('senha',$_POST['senha']);
file_put_contents('../data/usuario.xml', $xml->asXML());
header('Location:usuario.php');
?>