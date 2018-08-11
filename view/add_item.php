<?php
$xml = simplexml_load_file('../data/item.xml');
$item = $xml->addChild('item');
$item->addAttribute('id',$_POST['id']);
$nome = $item->addChild('nome',$_POST['nome']);
$descricao = $item->addChild('descricao',$_POST['descricao']);
$item = $item->addChild('imagem',$_POST['imagem']);
file_put_contents('../data/item.xml', $xml->asXML());
header('Location:item.php');
?>