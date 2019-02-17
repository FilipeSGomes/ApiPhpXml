<?php
/* Configurações com Banco de dados */

mysql_connect('localhost', 'usario', 'senha') or die('Ero ao conectar com  servidor');
mysql_select_db('nome_do_banco') or die('erro ao selecionar o banco de dados');
?>