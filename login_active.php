<?php
include_once "db.php";
session_start();
/// isset post 
if (isset($_POST["email"])) {
    $email = $_POST["email"];       
}
else
{
    $email = null;
};
if (isset($_POST["password"])) {
    $password = $_POST["password"];
}
else
{
    $password = null;
};


///verified data 

$error = 0;
if (!preg_match("/[a-zA-Z]/", $email)) {
    $error = 1;
}
if (!preg_match("/[a-zA-Z]/", $password)) {
    $error = 1;
}
if (!strlen($email) > 6 AND !strlen($email) < 100) {
    $error = 1;
};

if (!strlen($password) > 8 AND !strlen($password) < 100) {
    $error = 1;
};


///if fail -> header back	
if ($error > 0) {
    $_SESSION["fail"] = "Fail";

    header("location: https://krayual20.sps-prosek.cz/Fugilingo");
}
else
{
    /// verified data with database 
    $array_email = array(
        ':check_email' => $email
    );
    $sql = "SELECT password FROM fuggilingo_person WHERE email = :check_email";
    $sql_command = $db->prepare($sql);
    $sql_command->execute($array_email);
    $data = $sql_command->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $key => $value) {
        $value["password"];
    };
    $hash = password_verify($password, $value["password"]);
    
    ///if okey
    if ($hash == 1) {
      $array_ID = array(
        ':check_email' => $email
      );
      $ID_check = "SELECT ID FROM fuggilingo_person WHERE email = :check_email";
  
      $sql_command = $db->prepare($ID_check);
      $sql_command->execute($array_ID);
      
      $data_ID = $sql_command->fetchAll(PDO::FETCH_ASSOC);
      foreach ($data_ID as $key => $value) {
         $value["ID"];
      }
      $_SESSION["check_ID"] = $value["ID"];
      header("location: https://krayual20.sps-prosek.cz/Fugilingo/learn.php");
    }else{
        header("location: https://krayual20.sps-prosek.cz/Fugilingo");
        $_SESSION["fail"] = "Fail";
    };

   
}

