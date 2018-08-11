<?php
session_start();

$xdia = $_SESSION['dia'];
$xhorario = $_SESSION['horario'];
$xprofessor = $_SESSION['nome'];
$xsala = $_SESSION['sala'];
$xobservacao = $_SESSION['observacao'];

$xml = simplexml_load_file('../data/reservas.xml');
$ixml = simplexml_load_file('../data/item.xml');
if(count($xml->reserva)!=0) {
    foreach ($xml->reserva as $reserva) {
        $id += $reserva->id;
    }
}else{
    $id = 1;
}

foreach($ixml->item as $item){
    if($item->id==$_GET['id']){
        $xnome_eqpt = $item->nome;
        $imagem = $item->imagem;
    }
}

$res = $xml->addChild('reserva');
$res->addAttribute('id',$id);
$id_eqpt = $res->addChild('id_eqpt',$_GET['id']);
$nome_eqpt = $res->addChild('nome',$xnome_eqpt);
$imagem= $res->addChild('imagem',$ximagem);
$professor = $res->addChild('professor',$xprofessor);
$dia = $res->addChild('dia',$xdia);
$horario = $res->addChild('horario',$xhorario);
$sala = $res->addChild('sala',$xsala);
$observacao = $res->addChild('observacao',$xobservacao);
file_put_contents('../data/reservas.xml', $xml->asXML());
header('Location:professor.php');