<?php
 
define('DIR',dirname(__DIR__));
require_once(DIR."/classes/Numbers.php");

$data = json_decode(file_get_contents('php://input'));
$final = [];

    $len = $data->len;
    $offset = $data->offset;
    $limit = $data->limit;



$rndnumber=new Numbers($len,$offset,$limit);

$final[] = [
    "array" => $rndnumber->getArrNmbs(),
    "existnum"  => $rndnumber->getExNmb(),
    "firstoddnumber"=>$rndnumber->getFirstOddNmbs(),
    "sumevennumber"=>$rndnumber->getSumEvenNumber()
];
echo json_encode($final);
?>