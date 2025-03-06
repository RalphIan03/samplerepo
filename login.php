<?php

include "connection.php";

$username = "jan";
$password = "111111";

$sql= "SELECT * FROM users WHERE name = :name AND password = :password";
$stmt = $con -> prepare($sql);
$stmt -> execute([
    "name" => $username,
    "password" => $password
]);

$count = $stmt->rowCount();

if($count<1){
    echo("Incorrect Password and username");
}else{
    echo("Login Successfully");
}


?>