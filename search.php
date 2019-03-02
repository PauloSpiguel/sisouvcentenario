<?php
use \NewTech\DB\Sql;

$dtpassword = $_POST['dtpassword'];

public static function searchDate($dtpassword){

    $sql = new Sql();

    $results = $sql->select("SELECT COUNT(*) FROM tb_demands WHERE dtpassword = :dtpassword", array(":dtpassword" => $dtpassword
));

    if($results > 0){

        $counts['passDelivery'] = true;

    }else {

        $counts['passDelivery'] = false;
    }
}

header('Content-type: application/json')
echo json_encode(true);

?>