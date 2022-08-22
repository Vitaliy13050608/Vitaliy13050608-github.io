<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$role = $_POST["role"];
$activation = $_POST["activation"];

if($activation != 'on'){
    $activation = 'off';
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
$query = $mysql->query("INSERT INTO `users` (`firstname`,`lastname`,`role`,`activation`)  VALUES('$firstname','$lastname','$role','$activation')"); 
if($query){
    echo "{status: true, error:null, user {firstname: $firstname, lastname: $lastname, role: $role, activation: $activation} }";
}else{
    echo "{status: false, error:true, message: query is wrong}";
}
$mysql->close(); 
?>