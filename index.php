<?php include('layout/guest-header.php'); ?>

<div class="container" id="main">

  <div class="row">
    <div class="col-lg-12">
      <div class="page-content">

        <div class="scrollerdiv">

          <h2><em>BYTEBATTLE</em>ESCAPE <br>
            <em>BBE{CTF}</em>
          </h2>

        </div>

        <!-- ***** Banner Start ***** -->

        <div class="main-banner">
          <div class="row">
            <div class="col-lg-15">

              <h6>Hacking Is..</h6>
              <div class="scroller">
                <span>
                  COOL<br />
                  ART<br />
                  Intruiging<br />
                  Challenging
                </span>
              </div>

              <div class="main-button" style="margin-top: 90px;">
                <a href="register.php">Hack Now</a>
              </div>

            </div>
          </div>
        </div>
      </div>



      <!-- ************** Presented by ************  -->
      <div class="gaming-library" data-aos="fade-up">
        <div class="col-lg-12">
          <div class="heading-section">
            <img class="float-end" src="./assets/images/iul1.png" alt="" style="width: 312px; height: 52px;">
            <h4><em>BBE CTF </em> Presented By:- </h4>

            <h3> <a target="_blank" href="https://www.iul.ac.in/">Integral University</a> Lucknow</h3> <br>

          </div>
          <p>Integral University, a seat of educational excellence, is a premier university in Lucknow, the capital
            city of the state of Uttar Pradesh, India. It was established under Act Number 9 of 2004 by the State
            Government. The University is duly approved by the University Grants Commission (UGC) under sections
            2(f) and 12B of the UGC Act, 1956, Medical Council of India, Pharmacy Council of India, Indian Nursing
            Council, Council of Architecture, Bar Council of India, Indian Association of Physiotherapists, National
            Council for Teacher Education, UP State Medical Faculty.
            Integral University is accredited by NAAC and recognized as a Scientific & Industrial Research
            Organisation (SIRO) by the Department of Scientific & Industrial Research, Ministry of Science &
            Technology, Government of India.</p>
        </div>
        <div class="col-lg-12">
          <div class="main-button">
            <a target="_blank" href="https://www.iul.ac.in/">Integral University</a>
          </div>
        </div>
      </div>

      <!-- ***** Most Popular Challenges***** -->
      <div class="most-popular">
        <div class="row" style="text-align:center;">
          <div class="col-lg-12">
            <div class="heading-section">
              <h4><em>Most Popular</em> Challenge</h4>
            </div>
            <div class="row" >
              <div class="col-lg-3 col-sm-6"  data-aos="fade-up">
                <div class="item">
                  <img src="assets/images/game-01.png" alt="">
                  <h4><a href="challenges.php">General_Skills</a><br></h4>

                </div>
              </div>
              <div class="col-lg-3 col-sm-6"  data-aos="fade-up">
                <div class="item">
                  <img src="assets/images/game-04.png" alt="">
                  <h4><a href="challenges.php">Web_Exploitation</a></h4>

                </div>
              </div>
              <div class="col-lg-3 col-sm-6"  data-aos="fade-up">
                <div class="item">
                  <img src="assets/images/game-02.png" alt="">
                  <h4> <a href="challenges.php">Reverse_Engineering</a></h4>

                </div>
              </div>
              <div class="col-lg-3 col-sm-6"  data-aos="fade-up">
                <div class="item">
                  <img src="assets/images/game-03.png" alt="">
                  <h4> <a href="challenges.php">Cryptography</a></h4>

                </div>
              </div>

              <div class="col-lg-12">
                <div class="main-button">
                  <a href="challenges.php">Discover More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ***** Top Winners ***** -->
      <div class="gaming-library" data-aos="fade-up">
        <div class="col-lg-12">
          <div class="heading-section">
            <h4><em>Top</em> Winners</h4>
          </div>
          <div class="table-responsive" data-aos="fade-up">

            <table class="table" style="color: aliceblue;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name / Team_Name </th>
                  <th scope="col">GS_Basic Time</th>
                  <th scope="col">GS_Basic Score</th>
                  <th scope="col">GS_Intermediate Time</th>
                  <th scope="col">GS_Intermediate Score</th>

                </tr>
              </thead>
              <tbody>
                <?php


                include 'dbconnect.php';
                $sql = "SELECT * FROM students ORDER BY GS_level2_score, GS_level2_time desc LIMIT 3";
                $result = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($result);
                $sno = 0;
                if ($num > 0) {
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $sno = $sno + 1;

                    echo '
                           <tr>
                           <th scope="row">' . $sno . '</th>
                           <td>' . $rows['name'] . '</td>
                          <td>' . $rows['GS_level1_time'] . '</td>
                          <td>' . $rows['GS_level1_score'] . '</td>
                          <td>' . $rows['GS_level2_time'] . '</td>
                          <td>' . $rows['GS_level2_score'] . '</td>
                          </tr>';
                  }
                }

                ?>


              </tbody>
            </table>
          </div>


        </div>
        <div class="col-lg-12">
          <div class="main-button">
            <a href="hackerboard.php">Hackerboard</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
</div>

<?php include('layout/guest-footer.php'); ?>