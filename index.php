<?php


require_once('Xml.Class.php');
require_once('config.php');


$xml = new Xml();

$erro = 0;

$idProduto = $_GET['id'];

$xml->openTag("response");

if ($idProduto == '') {

    $erro = 1;
    $msgerro = 'Codigo Invalido';
} else {
    $rs = mysql_query("SELECT * FROM produto WHERE idprodtoo = $idProduto");
    if (mysql_num_rows($rs) > 0) {
        $reg = mysql_fetch_object($rs);
        $xml->addTag('nome_produto, ')
    }
}

$xml->closeTag("response");

?>