<?php include 'layout/header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-content">

        <!-- ***** HACKERBOARD Start ***** -->

        <div class="heading-section" style="text-align: center;">
          <h4 style=" font-size:55px; font-family: 'PhelixBoomgartner' !important;"><em>HACKER</em>BOARD</h4>

        </div>
        <div class="gaming-library" style="margin-top: 10px;">
          <div class="table-responsive">
            <table class="table " id="mytabel" style="color: aliceblue;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">GS_Basic Time</th>
                  <th scope="col">GS_Basic Score</th>
                  <th scope="col">GS_Intermediate Time</th>
                  <th scope="col">GS_Intermediate Score</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'dbconnect.php';


                $sql = "SELECT * FROM students ORDER BY GS_level2_score, GS_level2_time desc";
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
                          <td>' . $rows['email'] . '</td>
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
      </div>
      <!-- ***** HACKERBOARD End ***** -->
    </div>
  </div>
</div>
</div>

<?php include 'layout/footer.php'; ?>