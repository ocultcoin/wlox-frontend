<?php
chdir('..');
include '../cfg/cfg.php';

$currency1 = preg_replace("/[^a-zA-Z]/", "",$_REQUEST['currency']);
$type1 = preg_replace("/[^0-9]/", "",$_REQUEST['type']);
$order_by1 = preg_replace("/[^a-z]/", "",$_REQUEST['order_by']);
$page1 = preg_replace("/[^0-9]/", "",$_REQUEST['page']);

API::add('Transactions','get',array(0,$page1,30,$currency1,1,false,$type1,$order_by1,false));
$query = API::send();

$return = $query['Transactions']['get']['results'][0];
echo json_encode($return);