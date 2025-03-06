<?php

include "connection.php";

$sqlstmnt = "SELECT * FROM users";
$requeststmnt = $con -> prepare($sqlstmnt);
$requeststmnt -> execute();

$listarray = array();

while($results = $requeststmnt->fetch()){
    array_push(
        $listarray, array(
            "id" => $results['id'],
            "name" => $results['name'],
            "address" => $results['address'],
            "birthday" => $results['birthday']
        )
        );
}

echo json_encode($listarray);


?>