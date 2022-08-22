<?php
$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$role = $_POST["role"];
$activation = $_POST["activation"];

if($activation != 'on'){
    $activation = 'off';
}

if (!$id) {
    echo "{status: false, error:true, message: id doesn't exist}";
    die();
}

if (! preg_match ("/^[a-zA-z]*$/", $firstname) ) {
    echo "{status: false, error:true, message: firstname '$firstname' is wrong}";
    die();
}

if (! preg_match ("/^[a-zA-z]*$/", $lastname) ) {
    echo "{status: false, error:true, message: lastname '$lastname' is wrong}";
    die();
}

$mysql = new mysqli("localhost","root","","php-mysql");
$query = $mysql->query("UPDATE `users` SET `users`.`firstname`='$firstname', `users`.`lastname`='$lastname', `users`.`role`='$role', `users`.`activation`='$activation' WHERE `users`.`id` = $id"); 
if($query){
    echo "{status: true, error:null, user {id: $id, firstname: $firstname, lastname: $lastname, role: $role, activation: $activation} }";
}else{
    echo "{status: false, error:true, message: query is wrong}";
}
$mysql->close(); 
?>