<?php
include_once "db.php";
session_start();

if(!isset($_SESSION["check_ID"])){
header("location: https://krayual20.sps-prosek.cz/Fugilingo");
}
?>
<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- style.CSS -->
    <link rel="stylesheet" href="css/modul_style.css">
    <title>Fuggilingo</title>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- cookies-->
    <script src="https://pagecdn.io/lib/jquery-cookie/v1.4.1/jquery.cookie.js" integrity="sha256-uEFhyfv3UgzRTnAZ+SEgvYepKKB0FW6RqZLrqfyUNug=" crossorigin="anonymous"></script>
    <!-- my js-->
    <script language="JavaScript" type="text/javascript" src="js/modul_js.js"></script>
</head>
<body>
<?php
//////////////////////////////////////////////////////////////////////



/// get parameter
if(isset($_GET['modul'])){
    switch ($_GET['modul']) {
        case 'first':
            ///take the data from database for quiz 

            //id = 1
            $sql_one = "SELECT * FROM fuggilingo_quiz_first where id='1'";
            $sql_command_one = $db->prepare($sql_one);
            $sql_command_one->execute();
            $data_one = $sql_command_one->fetchAll(PDO::FETCH_ASSOC);
            foreach($data_one as $value_one){
                $value_one;
            }
            //id = 2
            $sql_two = "SELECT * FROM fuggilingo_quiz_first where id='2'";
            $sql_command_two = $db->prepare($sql_two);
            $sql_command_two->execute();
            $data_two = $sql_command_two->fetchAll(PDO::FETCH_ASSOC);
            foreach($data_two as $value_two){
                $value_two;
            }
            //id = 3
            $sql_three = "SELECT * FROM fuggilingo_quiz_first where id='3'";
            $sql_command_three = $db->prepare($sql_three);
            $sql_command_three->execute();
            $data_three = $sql_command_three->fetchAll(PDO::FETCH_ASSOC);
            foreach($data_three as $value_three){
                $value_three;
            }
            //id = 4
            $sql_four = "SELECT * FROM fuggilingo_quiz_first where id='4'";
            $sql_command_four = $db->prepare($sql_four);
            $sql_command_four->execute();
            $data_four = $sql_command_four->fetchAll(PDO::FETCH_ASSOC);
            foreach($data_four as $value_four){
                $value_four;
            }
            //id = 5
            $sql_five = "SELECT * FROM fuggilingo_quiz_first where id='5'";
            $sql_command_five = $db->prepare($sql_five);
            $sql_command_five->execute();
            $data_five = $sql_command_five->fetchAll(PDO::FETCH_ASSOC);
            foreach($data_five as $value_five){
                $value_five;
            }

            echo "<a href='learn.php'><svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-x closer_icon' viewBox='0 0 16 16'>";
                echo "<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>";
            echo "</svg></a>";


            echo "<h1>HTML Quiz</h1>";


            echo "<div id='quiz_div'>";
                echo "<h2 class='first_question'>".$value_one['question']."</h2>";
                echo "<br>";
                echo "<form action='modul_action.php' method='post'>";
                    echo "<input type='radio' class='form-check-input first_question' name='first' value='".$value_one['answer_right']."' checked>";
                    echo "<label class='first_question'>&nbsp;".$value_one['answer_right']."</label><br>";
                    echo "<input type='radio' class='form-check-input first_question' name='first' value='".$value_one['answer_false_one']."'>";
                    echo "<label class='first_question'>&nbsp;".$value_one['answer_false_one']."</label><br>";
                    echo "<input type='radio' class='form-check-input first_question' name='first' value='".$value_one['answer_false_two']."'>";
                    echo "<label class='first_question'>&nbsp;".$value_one['answer_false_two']."</label><br><br>";
                    echo "<input type='hidden' name='hide' value='1'>";
                    echo "<button type='submit' class='btn btn-primary next_btn first_question' name='sbm_first' id='next_first'>NEXT</button>";
                echo "</form>";

                echo "<div id='second_div'>";
                    echo "<h2 class='second_question'>".$value_two['question']."</h2>";
                    echo "<br>";
                    echo "<form action='modul_action.php' method='post'>";
                        echo "<input type='radio' class='form-check-input second_question' name='second' value='".$value_two['answer_right']."' checked>";
                        echo "<label class='second_question'>&nbsp;".$value_two['answer_right']."</label><br>";
                        echo "<input type='radio' class='form-check-input second_question' name='second' value='".$value_two['answer_false_one']."'>";
                        echo "<label class='second_question'>&nbsp;".$value_two['answer_false_one']."</label><br>";
                        echo "<input type='radio' class='form-check-input second_question' name='second' value='".$value_two['answer_false_two']."'>";
                        echo "<label class='second_question'>&nbsp;".$value_two['answer_false_two']."</label><br><br>";
                        echo "<input type='hidden' name='hide' value='1'>";
                        echo "<button type='submit' class='btn btn-primary next_btn second_question' id='next_second'>NEXT</button>";
                    echo "</form>";
                echo "</div>";

                echo "<div id='third_div'>";
                    echo "<h2 class='third_question'>".$value_three['question']."</h2>";
                    echo "<br>";
                    echo "<form action='modul_action.php' method='post'>";
                        echo "<input type='radio' class='form-check-input third_question' name='third' value='".$value_three['answer_right']."' checked>";
                        echo "<label class='third_question'>&nbsp;".$value_three['answer_right']."</label><br>";
                        echo "<input type='radio' class='form-check-input third_question' name='third' value='".$value_three['answer_false_one']."'>";
                        echo "<label class='third_question'>&nbsp;".$value_three['answer_false_one']."</label><br>";
                        echo "<input type='radio' class='form-check-input third_question' name='third' value='".$value_three['answer_false_two']."'>";
                        echo "<label class='third_question'>&nbsp;".$value_three['answer_false_two']."</label><br><br>";
                        echo "<input type='hidden' name='hide' value='1'>";
                        echo "<button type='submit' class='btn btn-primary next_btn third_question' id='next_third'>NEXT</button>";
                    echo "</form>";
                echo "</div>";

                echo "<div id='fourth_div'>";
                    echo "<h2 class='fourth_question'>".$value_four['question']."</h2>";
                    echo "<br>";
                    echo "<form action='modul_action.php' method='post'>";
                        echo "<input type='radio' class='form-check-input fourth_question' name='fourth' value='".$value_four['answer_false_one']."' checked>";
                        echo "<label class='fourth_question'>&nbsp;".$value_four['answer_false_one']."</label><br>";
                        echo "<input type='radio' class='form-check-input fourth_question' name='fourth' value='".$value_four['answer_right']."'>";
                        echo "<label class='fourth_question'>&nbsp;".$value_four['answer_right']."</label><br>";
                        echo "<input type='radio' class='form-check-input fourth_question' name='fourth' value='".$value_four['answer_false_two']."'>";
                        echo "<label class='fourth_question'>&nbsp;".$value_four['answer_false_two']."</label><br><br>";
                        echo "<input type='hidden' name='hide' value='1'>";
                        echo "<button type='submit' class='btn btn-primary next_btn fourth_question' id='next_fourth'>NEXT</button>";
                    echo "</form>";
                echo "</div>";

                echo "<div id='fifth_div'>"; 
                    echo "<h2 class='fifth_question'>".$value_five['question']."</h2>";
                    echo "<br>";
                    echo "<form action='modul_action.php' method='post'>";
                        echo "<input type='radio' class='form-check-input fifth_question' name='fifth' value='".$value_five['answer_false_one']."' checked>";
                        echo "<label class='fifth_question'>&nbsp;".$value_five['answer_false_two']."</label><br>";
                        echo "<input type='radio' class='form-check-input fifth_question' name='fifth' value='".$value_five['answer_false_two']."'>";
                        echo "<label class='fifth_question'>&nbsp;".$value_five['answer_false_one']."</label><br>";
                        echo "<input type='radio' class='form-check-input fifth_question' name='fifth' value='".$value_five['answer_right']."'>";
                        echo "<label class='fifth_question'>&nbsp;".$value_five['answer_right']."</label><br><br>";
                        echo "<input type='hidden' name='hide' value='1'>";
                        echo "<button type='submit' class='btn btn-primary next_btn fifth_question' id='next_fifth'>NEXT</button>";
                    echo "</form>";
                echo "</div>";

            echo "</div>";

            

            break;
        case 'second':
            echo "<a href='learn.php'><svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-x closer_icon' viewBox='0 0 16 16'>";
                echo "<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>";
            echo "</svg></a>";

            echo "<div id='quiz_div'>";
                echo "<h2>The game is being worked on</h2>";
            echo "</div>";
            break;
        case 'third':
            echo "<a href='learn.php'><svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-x closer_icon' viewBox='0 0 16 16'>";
                echo "<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>";
            echo "</svg></a>";

            echo "<div id='quiz_div'>";
                echo "<h2>The game is being worked on</h2>";
            echo "</div>";
            break;
        case 'fourth':
            echo "<a href='learn.php'><svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-x closer_icon' viewBox='0 0 16 16'>";
                echo "<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>";
            echo "</svg></a>";
            
            echo "<div id='quiz_div'>";
                echo "<h2>The game is being worked on</h2>";
            echo "</div>";
            break;
        case 'fifth':
            echo "<a href='learn.php'><svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-x closer_icon' viewBox='0 0 16 16'>";
                echo "<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>";
            echo "</svg></a>"; 

            echo "<div id='quiz_div'>";
                echo "<h2>The game is being worked on</h2>";
            echo "</div>";
            break;
        case 'answer_ok':
            echo "<a href='learn.php'><svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-x closer_icon' viewBox='0 0 16 16'>";
                echo "<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>";
            echo "</svg></a>"; 

            echo "<div id='quiz_div'>";
                echo "<h2>Congratulations, you made it</h2>";
                echo "<a class='btn btn-primary cookies_btn' id='end_btn' href='learn.php' role='button'>END</a>";
            echo "</div>";
            break;
        case 'answer_fail':
            echo "<a href='learn.php'><svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-x closer_icon' viewBox='0 0 16 16'>";
                echo "<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>";
            echo "</svg></a>";

            echo "<div id='quiz_div'>";
                echo "<h2>Unfortunately, you didn't give it</h2>";
                echo "<a class='btn btn-primary cookies_btn' id='repeat_btn' href='modul.php?modul=first' role='button'>REPEAT</a>";
                echo "<a class='btn btn-primary cookies_btn' id='end_btn_fail'href='learn.php' role='button'>END</a>";
            echo "</div>";
            break;
    }
}    
?>
</body>
<!-- JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>