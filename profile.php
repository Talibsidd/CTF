<?php include('layout/header.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-content">

        <!-- ***** Banner Start ***** -->
        <div class="row">
          <div class="col-lg-12">
            <div class="main-profile " id="profile_banner">
              <div class="row">
                <div class=" main-info col-lg-4">
                  <span style="background-color:green;">Online</span>
                  <h4>
                    <?php echo $name; ?>
                  </h4>
                  <p>“If you spend more on coffee than on IT security, you will be hacked.”</p>
                  <div class="main-border-button">
                    <a href="challenges.php">Start challenges</a>
                  </div>

                </div>
                <div class="col-lg-4 align-self-center">

                </div>
                <div class="col-lg-4 align-self-center" id="profile_detail">
                  <ul>
                    <li>Name <span>
                        <?php echo $name; ?>
                      </span></li>
                    <?php
                    if (!empty($rows['person1']) && !empty($rows['person2'])) {
                      $person1 = $rows['person1'];
                      $person2 = $rows['person2'];

                      echo '<li>Player 1 <span>' . $person1 . '</span></li>';
                      echo '<li>Player 2 <span>' . $person2 . '</span></li>';
                    }
                    ?>
                    <li>Email <span>
                        <?php echo $email; ?>
                      </span></li>
                    <li>Total Score <span>
                        <?php echo $Total_score = $rows['Total_Score']; ?>
                      </span></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Score Card -->
        <h4 class=" text-center" style=" font-size:55px; font-family: 'PhelixBoomgartner' !important;">SCORE CARD</h4>

        <div class="main-profile mt-3" style="background-color:#5c778538;">
          <div class="row">

            <!-- Web Score card -->
            <div class="col-lg-4 align-self-center">
              <ul>
                <h4>General_Skills</h4>
                <li class="mt-2">
                  <h5>Level 1 </h5> <br>
                  Score <span>
                    <?php echo isset($GS_level1_score) ? $GS_level1_score : '---'; ?>
                  </span> <br>
                  Time <span>
                    <?php echo isset($GS_level1_time) ? $GS_level1_time : '---'; ?>
                  </span>
                </li>
                <li class="mt-3">
                  <h5>Level 2 </h5> <br>
                  Score <span>
                    <?php echo isset($GS_level2_score) ? $GS_level2_score : '---'; ?>
                  </span> <br>
                  Time <span>
                    <?php echo isset($GS_level2_time) ? $GS_level2_time : '---'; ?>
                  </span>
                </li>
                <li class="mt-3">
                  <h5>Level 3 </h5> <br>
                  Score <span>
                    ---
                  </span> <br>
                  Time <span>
                    ---
                  </span>
                </li>
              </ul>
            </div>

            <!-- Web Score card -->
            <div class="col-lg-4 align-self-center">
              <ul>
                <h4>Web_Exploaition</h4>
                <li class="mt-2">
                  <h5>Level 1 </h5> <br>
                  Score <span>
                    ---
                  </span> <br>
                  Time <span>
                    ---
                  </span>
                </li>
                <li class="mt-3">
                  <h5>Level 2 </h5> <br>
                  Score <span>
                    ---
                  </span> <br>
                  Time <span>
                    ---
                  </span>
                </li>
                <li class="mt-3">
                  <h5>Level 3</h5> <br>
                  Score <span>
                    ---
                  </span> <br>
                  Time <span>
                    ---
                  </span>
                </li>
              </ul>
            </div>


            <!-- Reverse card -->
            <div class="col-lg-4 align-self-center">

              <ul>
                <h4>Reverse_Engenerring </h4>
                <li class="mt-2">
                  <h5>Level 1 </h5> <br>
                  Score <span>
                    ---
                  </span> <br>
                  Time <span>
                    ---
                  </span>
                </li>
                <li class="mt-3">
                  <h5>Level 2 </h5> <br>
                  Score <span>
                    ---
                  </span> <br>
                  Time <span>
                    ---
                  </span>
                </li>
                <li class="mt-3">
                  <h5>Level 3 </h5> <br>
                  Score <span>
                    ---
                  </span> <br>
                  Time <span>
                    ---
                  </span>
                </li>
              </ul>
            </div>
          </div>
          <div class="clips">
            <div class="main-button">
              <p class=" hackerFont lead mb-5">
                Don't Forget To Share Your feedback!
              </p>
              <a target="_blank" href="https://forms.gle/HSxNHxWD5DgFeXLK8">
                FEEDBACK<span class="vim-caret">&nbsp;</span>
              </a>
              <a href="includes/logout.php">LOGOUT</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ***** Banner End ***** -->


  </div>
</div>


<?php include('layout/footer.php'); ?>