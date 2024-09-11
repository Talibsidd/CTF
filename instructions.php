<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // A past date

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: index.php");
  exit;
}
// $_SESSION['loggedin']=true;
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">


  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>BBE-ByteBattleEscape</title>
  <link rel="icon" href="./assets/images/byte.png" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/byte.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <ul class="nav">

              <img class="float-end" src="./assets/images/iul1.png" alt=""
                style="width: 312px; height: 52px; margin-top:30px;">
            </ul>
            <a class='menu-trigger'>
              <img class="float-end" src="./assets/images/iul1.png" alt=""
                style="width: 212px; height: 42px; margin-top:30px;">
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-xl-12">
                <h1 class="display-1  content__title text-center"
                  style="color: red; font-weight: bolder;  font-family: 'PhelixBoomgartner' !important;">INSTRUCTIONS
                </h1>
                <p class="text-grey text-spacey text-center hackerFont lead">
                  Now that you are a part of our community, you must know of some rules we follow around here.
                </p>
                <div class="row justify-content-center  ">
                  <div class="col-md-10" style="color: aliceblue;">
                    <h5 class="bold color_white pt-3" style="color: rgb(156, 0, 0);">
                      General Rules and Instructions
                    </h5>
                    <ul>
                      <li>When you start the CTF, 45 minutes will be alloted to complete the challenges.</li>
                      <li>Each question has some points to it depending upon the difficulty. Taking a hint will deduce
                        10% of the points associated with the question. </li>
                      <li>There is no particular order of solving the questions.</li>
                      <li>Judging of the round will be based on two parameters. The first is the score of the team and
                        second is the time required. </li>
                      <li>Ranks can be viewed on the leaderboard page. The leaderboard time is updated everytime a
                        submission is made.</li>
                      <li>Flags found are of the format <span class="vim-caret">lakshya_ctf{some_text}.</span> Some of
                        the files may contain just the inner text within the brackets. Make sure you submit it in the
                        format specified. Flag text is not
                        case sensitive.</li>
                      <li>This is a competitive environment with the aim of learning cyber security and ethical hacking.
                        Please do not share the flags & solutions with others.</li>
                      <li>Internet access is granted. Feel free to explore and read about the concept behind the
                        problem. </li>
                    </ul>
                    <h5 class="bold color_white pt-3" style="color: rgb(156, 0, 0);">
                      Special Rules and Instructions
                    </h5>
                    <ul>
                      <li>Dont try to hack anything apart from this CTF Network </li>
                      <li>Dont try to hack other members </li>
                      <li>Dont spoil! Dont share how you solved each challenge with other members. </li>
                      <li>Performing denial of service attacks on the server will lead to disqualification. You are
                        requested to play ethically.</li>
                      <li>Brute force attacks on the flag form is prohibited.</li>
                      <li>Remember, once the timer starts, it can't be paused. The timer will not resume if you logout
                        and log back in.</li>
                    </ul>
                    <div class="row text-center pt-5">
                      <div class="col-xl-12">
                        <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter"
                          onclick="(function(){window.location.href='challenges.php'})();">
                          <h4 style=" font-family: 'PhelixBoomgartner' !important;">LET THE HACKING BEGIN!</h4>
                        </button> <br>
                        <small id="registerHelp" class="mt-2 form-text text-muted">We expect each and every one of you
                          to comply by the rules. Failure to do so might result in a permanent ban.</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->
        </div>
      </div>
    </div>
  </div>

  <?php include('layout/footer.php'); ?>