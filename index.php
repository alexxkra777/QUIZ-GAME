<?php
    session_start();
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
    <link rel="stylesheet" href="css/login.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!--my js-->
    <script language="JavaScript" type="text/javascript" src="js/js.js"></script>
    <title>Fuggilingo</title>
</head>
<body>
  <nav class="navbar bg-light" id="nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Fuggilingo
      </a>
    </div>
  </nav>
  <main>
    <div id="bg">
      <img src="img/first_bg.png" alt="">
    </div>
    <div id="ghost-center">
      <div id="btn">
        <a href="#" class="btn btn-primary btn-lg" id="login_btn">Sign in</a>
        <a href="#" class="btn btn-secondary btn-lg" id="regis_btn" tabindex="-1" role="button" aria-disabled="true">Registration</a>
        <i class="bi bi-x"></i>
      </div>

      <div id="login">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x closer_icon" viewBox="0 0 16 16">
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg>
        <form action="login_active.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
          </div>
          <br>
          <button type="submit" class="btn btn-primary" id="submit_login">Submit</button>
        </form>
      </div>

      <div id="regis">
        <form action="regis_active.php" method="post">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x closer_icon" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
          <div id="div_name">
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                <svg xmlns="http://www.w3.org/2000/svg" class="arrow_right" id="arrow_right_name" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
              </div>
          </div>

          <div id="div_surname">
            <div class="form-group">
              <input type="text" class="form-control" name="surname" id="surname" placeholder="Your surname">
              <svg xmlns="http://www.w3.org/2000/svg" class="arrow_left" id="arrow_left_surname" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg"  class="arrow_right" id="arrow_right_surname" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg>
            </div>
          </div>

          <div id="div_email">
            <div class="form-group">
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
              <svg xmlns="http://www.w3.org/2000/svg" class="arrow_left" id="arrow_left_email" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg"  class="arrow_right" id="arrow_right_email" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg>
            </div>
          </div>

          <div id="div_password">
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              <svg xmlns="http://www.w3.org/2000/svg" class="arrow_left" id="arrow_left_password" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
              <button type="submit" class="btn btn-primary" id="submit_regis">Submit</button>
            </div>
          </div>
        </form>

      </div>
    </div>
    <?php
      /////////if player fail register or login
        if(isset($_SESSION["fail"])){
            echo "<div id='fail'>";
                    echo "<p>Login/Registration failed</p>";
            echo "</div>";
        }
    ?>
  </main>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>