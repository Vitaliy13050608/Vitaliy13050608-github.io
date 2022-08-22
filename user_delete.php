<?php
$ids = $_POST['id'];
$mysql = new mysqli("localhost","root","","php-mysql");
if(is_array($ids)){
   foreach($ids as $id){
      if (!$id) {
         echo "{status: false, error:true, message: id doesn't exist}";
         die();
       }
      $query = $mysql->query("DELETE FROM `users` WHERE `users`.`id` = '$id'");
      if(!$query){
         echo "{status: false, error:true, message: query is wrong}";
         die();
       }
   }
}else{
   if (!$ids) {
      echo "{status: false, error:true, message: id doesn't exist}";
      die();
    }
    $query = $mysql->query("DELETE FROM `users` WHERE `users`.`id` = '$ids'");
    if(!$query){
      echo "{status: false, error:true, message: query is wrong}";
      die();
    }
}
$mysql->close(); 
echo "{status: true, error:false, message: users are deleted}";
?>