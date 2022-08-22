<?php
$ids = $_POST['id'];

$mysql = new mysqli("localhost","root","","php-mysql");
foreach($ids as $id){
  if (!$id) {
    echo "{status: false, error:true, message: id doesn't exist}";
    die();
  }
  $query = $mysql->query("UPDATE `users` SET `users`.`activation`='on' WHERE `users`.`id` = $id");
  if(!$query){
    echo "{status: false, error:true, message: query is wrong}";
    die();
  }
}
$mysql->close(); 
echo "{status: true, error:false, message: users are activated}";
?>