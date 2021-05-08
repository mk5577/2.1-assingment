<?php
   include("dbconn.php") ;
    session_start();
   if(isset($_POST['save'])){
       $name=$_POST['name'];
       $password=$_POST['password'];
       $gender=$_POST['gender'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
   }

   $postData=[
    "name"=>$name,
    "password"=>$password,
    "gender"=>$gender,
    "email"=>$email,
    "phone"=>$phone

   ];
   $ref_table="megna-form";

   $postRef = $database->getReference($ref_table)->push($postData);

?>

<a href="/megna/index.php">Data</a>