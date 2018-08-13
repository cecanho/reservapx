<?php
$xml = simplexml_load_file('../data/item.xml');
$id = count($xml->item) + 1;
$item = $xml->addChild('item');
$item->addAttribute('id',$id);
$id_item = $item->addChild('id_item',count($xml->item)+1);
$nome = $item->addChild('nome',$_POST['nome']);
$descricao = $item->addChild('descricao',$_POST['descricao']);
$item = $item->addChild('imagem',$_POST['imagem']);
file_put_contents('../data/item.xml', $xml->asXML());
header('Location:item.php');
?>