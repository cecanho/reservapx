<?php
$xdia = $_COOKIE['dia'];
$xhorario = $_COOKIE['horario'];
$xprofessor = $_COOKIE['nome'];
$xsala = $_COOKIE['sala'];
$xobservacao = $_COOKIE['observacao'];
$xml = simplexml_load_file('../data/reservas.xml');
$ixml = simplexml_load_file('../data/item.xml');
$id = count($xml->reserva) + 1;
foreach($ixml->item as $item){
    if($item['id']==$_GET['id']){
        $xnome_eqpt = $item->nome;
        $ximagem = $item->imagem;
    }
}
$res = $xml->addChild('reserva');
$res->addAttribute('id',$id);
$id_eqpt = $res->addChild('id_item',$_GET['id']);
$nome_eqpt = $res->addChild('nome',$xnome_eqpt);
$imagem= $res->addChild('imagem',$ximagem);
$professor = $res->addChild('professor',$xprofessor);
$dia = $res->addChild('dia',$xdia);
$horario = $res->addChild('horario',$xhorario);
$sala = $res->addChild('sala',$xsala);
$observacao = $res->addChild('observacao',$xobservacao);
file_put_contents('../data/reservas.xml', $xml->asXML());
header('Location:professor.php');