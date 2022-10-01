<?php
  session_start();
  include_once "db.php";

  ////////if palyer not logged in, he go back
  if(!isset($_SESSION["check_ID"])){
    header("location: https://krayual20.sps-prosek.cz/Fugilingo");
  }
  ///////////checked player player for front-end
  $array = array(
      ':id' => $_SESSION["check_ID"]
  );
  $level_check = "SELECT level FROM fuggilingo_person WHERE id = :id";

  $sql_command = $db->prepare($level_check);
  $sql_command->execute($array);
  $data = $sql_command->fetchAll(PDO::FETCH_ASSOC);
  foreach ($data as $key => $value) {
      $value["level"];
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
    <link rel="stylesheet" href="css/style.css">
    <title>Fuggilingo</title>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!--my js-->
    <script language="JavaScript" type="text/javascript" src="js/learn_js.js"></script>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="learn.php">
            <img src="img/logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Fuggilingo
          </a>
          <ul class='navbar-nav'>
            <li class='nav-item light-hover'>
              <div class='nav-link fs-3' id="acc">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                <div class="dropdown-content">
                  <?php
                    echo "<a href='out_active.php?id_out=".$_SESSION["check_ID"]."'".">Sign out</a>";
                  ?>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <main>
        <div id="header"><h1>MODULE 1 HTML</h1></div>
          <div id="first"></div>
          <div class="play_div" id="play_div_first">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x closer_icon" viewBox="0 0 16 16">
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            <a class="btn btn-primary btn_play" href="modul.php?modul=first" role="button">PLAY</a>
          </div>

          <?php
            ////if player level is > 1 he can play second level
            if($value['level'] > 0){
              echo "<div id='second'></div>";
              echo "<div class='play_div' id='play_div_second'>";
                echo "<svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-x closer_icon' viewBox='0 0 16 16'>";
                  echo "<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>";
                echo "</svg>";
                echo "<a class='btn btn-primary btn_play' href='modul.php?modul=second' role='button'>PLAY</a>";
              echo "</div>";
            }else{
              echo "<div id='second_deactivated'></div>";
            }

            ////if player level is > 2 he can play third level
            if($value['level'] > 1){
              echo "<div id='third'></div>";
              echo "<div class='play_div' id='play_div_third'>";
                echo "<svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-x closer_icon' viewBox='0 0 16 16'>";
                  echo "<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>";
                echo "</svg>";
                echo "<a class='btn btn-primary btn_play' href='modul.php?modul=third' role='button'>PLAY</a>";
              echo "</div>";   
            }else{
              echo "<div id='third_deactivated'></div>";
            }
            ////if player level is > 3 he can play fourth level
            if($value['level'] > 2){
              echo "<div id='fourth'></div>";
              echo "<div class='play_div' id='play_div_fourth'>";
                echo "<svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-x closer_icon' viewBox='0 0 16 16'>";
                  echo "<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>";
                echo "</svg>";
                echo "<a class='btn btn-primary btn_play' href='modul.php?modul=fourth' role='button'>PLAY</a>";
              echo "</div>";
            }else{
              echo "<div id='fourth_deactivated'></div>";
            }
            ////if player level is > 4 he can play fifth level
            if($value['level'] > 2){
              echo "<div id='fifth'></div>";
              echo "<div class='play_div' id='play_div_fifth'>";
                echo "<svg xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-x closer_icon' viewBox='0 0 16 16'>";
                  echo "<path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>";
                echo "</svg>";
                echo "<a class='btn btn-primary btn_play' href='modul.php?modul=fifth' role='button'>PLAY</a>";
              echo "</div>";
            }else{
              echo "<div id='fifth_deactivated'></div>";
            }
            
          ?>
        

      </main>
</body>
<!-- JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>


