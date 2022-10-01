<?php

include_once "db.php";
session_start();
/// isset post 
if (isset($_POST["name"])) {
    $name = $_POST["name"];
}
else
{
    $name = null;
};
if (isset($_POST["surname"])) {
    $surname = $_POST["surname"];
}
else
{
    $surname = null;
};
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
if (!preg_match("/[a-zA-Z]/", $name)) {
    $error++;
}
if (!preg_match("/[a-zA-Z]/", $surname)) {
    $error++;
}
if (!preg_match("/[a-zA-Z]/", $email)) {
    $error++;
}
if (!preg_match("/[a-zA-Z]/", $password)) {
    $error++;
}

if (!strlen($name) > 2 AND !strlen($name) < 100) {
    $error++;
};
if (!strlen($surname) > 2 AND !strlen($surname) < 100) {
    $error++;
};
if (!strlen($email) > 6 AND !strlen($email) < 100) {
    $error++;
};

if (!strlen($password) > 8 AND !strlen($password) < 100) {
    $error++;
};

echo $error;

///if fail -> header back	
if ($error > 0) {
    $_SESSION["fail"] = "Fail";

    header("location: https://krayual20.sps-prosek.cz/Fugilingo");
}
else
{
    /// verified data with database 
	$email_check = "SELECT email FROM fuggilingo_person WHERE email = '$email' LIMIT 0,1";

	$sql_command = $db->prepare($email_check);
	$sql_command->execute();
	$data_email = $sql_command->fetchAll(PDO::FETCH_ASSOC);

	$finish_email_check = count($data_email);
	$hashed = password_hash($password, PASSWORD_DEFAULT);
    ////if email is not use 
	if ($finish_email_check == 0) {			
		//// add to database
		$array = array(
			':insert_name' => $name,
			':insert_surname' => $surname,
			':insert_email' => $email, 
			':insert_password' => $hashed
		);
		$sql = "INSERT INTO fuggilingo_person (name, surname, email, password) VALUES (:insert_name, :insert_surname, :insert_email, :insert_password)";
		$sql_prov = $db->prepare($sql);
		$sql_prov->execute($array);

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
    }
    else
    {
        header("location: https://krayual20.sps-prosek.cz/Fugilingo");
        $_SESSION["fail"] = "Fail";
    }
}


