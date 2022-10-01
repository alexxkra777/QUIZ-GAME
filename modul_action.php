<?php
include_once "db.php";
session_start();
$ok = 0;

if (isset($_POST["hide"])) {
    $hide = $_POST['hide'];
}
switch ($hide) {
    case '1':
        if (isset($_POST["first"])) {
            $first = $_POST['first'];

            if (strlen($first) > 1){
                setcookie('first', $first, time()+3600);
                $ok = 1;
            }
        }else{
            $first = null;
        }   
        //////////////////////////////////////////////////////////////////set cookies
        if (isset($_POST["second"])) {
            $second = $_POST['second'];

            if (strlen($second) > 1){
                setcookie('second', $second, time()+3600);
                $ok = 1;
            }
        }else{
            $second = null;
        }   

        //////////////////////////////////////////////////////////////////set cookies
        if (isset($_POST["third"])) {
            $third = $_POST['third'];

            if (strlen($third) > 1){
                setcookie('third', $third, time()+3600);
                $ok = 1;
            }
        }else{
            $third = null;
        }  

        //////////////////////////////////////////////////////////////////set cookies
        if (isset($_POST["fourth"])) {
            $fourth = $_POST['fourth'];

            if (strlen($fourth) > 1){
                setcookie('fourth', $fourth, time()+3600);
                $ok = 1;
            }
        }else{
            $fourth = null;
        } 

        //////////////////////////////////////////////////////////////////set cookies and vertification
        if (isset($_POST["fifth"])) {
            $fifth = $_POST['fifth'];

            if (strlen($fifth) > 1){
                setcookie('fifth', $fifth, time()+3600);

                ///take the data from database for vertification 
                //id = 1
                $sql_one = "SELECT answer_right FROM fuggilingo_quiz_first where id='1'";
                $sql_command_one = $db->prepare($sql_one);
                $sql_command_one->execute();
                $data_one = $sql_command_one->fetchAll(PDO::FETCH_ASSOC);
                foreach($data_one as $value_one){
                    $value_one;
                }
                //id = 2
                $sql_two = "SELECT answer_right FROM fuggilingo_quiz_first where id='2'";
                $sql_command_two = $db->prepare($sql_two);
                $sql_command_two->execute();
                $data_two = $sql_command_two->fetchAll(PDO::FETCH_ASSOC);
                foreach($data_two as $value_two){
                    $value_two;
                }
                //id = 3
                $sql_three = "SELECT answer_right FROM fuggilingo_quiz_first where id='3'";
                $sql_command_three = $db->prepare($sql_three);
                $sql_command_three->execute();
                $data_three = $sql_command_three->fetchAll(PDO::FETCH_ASSOC);
                foreach($data_three as $value_three){
                    $value_three;
                }
                //id = 4
                $sql_four = "SELECT answer_right FROM fuggilingo_quiz_first where id='4'";
                $sql_command_four = $db->prepare($sql_four);
                $sql_command_four->execute();
                $data_four = $sql_command_four->fetchAll(PDO::FETCH_ASSOC);
                foreach($data_four as $value_four){
                    $value_four;
                }
                //id = 5
                $sql_five = "SELECT answer_right FROM fuggilingo_quiz_first where id='5'";
                $sql_command_five = $db->prepare($sql_five);
                $sql_command_five->execute();
                $data_five = $sql_command_five->fetchAll(PDO::FETCH_ASSOC);
                foreach($data_five as $value_five){
                    $value_five;
                }
                //first
                if($_COOKIE['first'] == $value_one['answer_right']){
                    $first_answer = "ok";
                }else{
                    $first_answer = "fail"; 
                }
                //second
                if($_COOKIE['second'] == $value_two['answer_right']){
                    $second_answer = "ok";
                }else{
                    $second_answer = "fail";
                }
                //third
                if($_COOKIE['third'] == $value_three['answer_right']){
                    $third_answer = "ok";
                }else{
                    $third_answer = "fail";
                }
                //fourth
                if($_COOKIE['fourth'] == $value_four['answer_right']){
                    $fourth_answer = "ok";
                }else{
                    $fourth_answer = "fail";
                }
                //fifth
                if($fifth == $value_five['answer_right']){
                    $fifth_answer = "ok";
                }else{
                    $fifth_answer = "fail";
                }

                if($first_answer == 'fail' || $second_answer == 'fail' || $third_answer == 'fail' || $fourth_answer == 'fail' || $fifth_answer == 'fail'){
                    header("location: https://krayual20.sps-prosek.cz/Fugilingo/modul.php?modul=answer_fail");
                }else{

                    //update player level
                    $data = array(
                        ':id' => $_SESSION["check_ID"]
                    );

                    $sql = "UPDATE fuggilingo_person SET level = 1 WHERE id = :id";
                    $sql_command = $db->prepare($sql);
                    $stav = $sql_command->execute($data);

                    header("location: https://krayual20.sps-prosek.cz/Fugilingo/modul.php?modul=answer_ok");
                }
            }
        }else{
            $fifth = null;
        } 
        ////////////////////////////////header
        if ($ok > 0){
            header("location: https://krayual20.sps-prosek.cz/Fugilingo/modul.php?modul=first");
        }


}
?>