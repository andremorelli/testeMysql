<?php


require_once('db.class.php');

echo $_post['produto'];
echo'<br/>';
echo $_post['eletronico'];
echo '<br/>';
echo $_post['carburado'];

$objDb = new db();
$link = $objDb->concta_mysql();



?>
