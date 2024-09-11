
<?php
    include 'layout/header.php';


    include './includes/flags.php';

    if ($wrong) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Your Flag Is Incorrect!!.
            </div>';

       
    }
    if($timesubmit){
        echo '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Well done!</h4>
                <p>Aww yeah, you successfully completed General Skills Level 1.</p>
                <hr>
                <p class="mb-0">Now you can go to Level 2.</p>
              </div>';
    }

    $toggle = true;

    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <h4 style="margin-bottom: 5px; font-size:30px; font-family: 'PhelixBoomgartner' !important;">
                        <em>GENERAL SKILLS </em>
                        <em></em>
                    </h4>

                    <div class="col-xl-12  text-center">
                        <!-- <h1 class="display-1 bold color_white content__title">QUESTS<span class="vim-caret">&nbsp;</span></h1> -->
                        <p class="text-grey text-spacey hackerFont lead mb-5">
                            Its time to show the world what you can do!
                        </p>
                        <div class="float-left">
                            <h4 class="text-white-emphasis bold">GS_Intermediate Score: &nbsp;
                                <?php if (isset($GS_level2_score))
                                    echo $GS_level2_score; ?><br><br>
                            </h4>
                        </div>

                        <div class="float-right">
                        
                            <?php include_once './includes/timer_new.php'; ?>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <h4>LEVEL 2  (Intermediate) </h4>
                </div>

                <div class="row hackerFont my-3">

                    <div class="row">
                        <?php
                        // Include Questions.php
                        include './includes/Questions.php';

                        for ($i = 21; $i <= 40; $i++) {

                            echo '<div class="col-md-4 mb-3">
                                  <div class="card category_reversing">
                                  <div class="card-header" data-target="#problem_id_' . $i . '" id="p' . $i . '" aria-expanded="false" aria-controls="problem_id_' . $i . '">
                                  ' . $GS_level2_questionhead[$i - 21] . '<br>';

                            $sql = "SELECT * FROM general_skills WHERE `question_id`='problem$i' AND `email`='$email'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);

                            if (isset($row['solve_status'])) {
                                echo '<span class="badge text-bg-success">solved</span>';
                            }

                            echo '<span class="badge text-bg-info">50 points</span>
                                         </div>
                                         <div id="problem_id_' . $i . '" class="collapse card-body">
                                         <blockquote class="card-blockquote">
                                         <p>' . $GS_level2_question[$i - 21] . '</p>
                                         <a  target="_blank" href="'.$GS_level2_links[$i - 21].'" class="btn btn-outline-secondary btn-shadow"><span class="fa fa-download mr-2"></span>Redirect</a>
                                         <a href="#hint' . $i . '" data-toggle="modal" data-target="#hint' . $i . '" class="btn btn-outline-secondary btn-shadow"><span class="far fa-lightbulb mr-2"></span>Hint</a>
                           

                                       <form action="GS_level2.php" method="post" id="questForm">
                                       <div class="input-group mt-3">
                                       <input type="hidden" name="problem' . $i . '" value="problem' . $i . '">
                                      <input type="text" class="form-control" placeholder="BBE{FLAG}" aria-label="Enter Flag" aria-describedby="basic-addon2" id="flag' . $i . '" name="flag' . $i . '"';

                            if (isset($row['solve_status'])) {
                                echo 'disabled';
                            }

                            echo '>
                                        <div class="input-group-append">
                                        <button id="submit_p' . $i . '" name="submit_p' . $i . '" class="btn btn-outline-secondary" type="submit"';

                            if (isset($row['solve_status'])) {
                                echo 'disabled';
                            }

                            echo '>Go!</button>
                                 </div>
                              </div>
                            </form>
                        </blockquote>
                    </div>
                </div>
            </div>';
                        }
                        ?>
                    </div>


                    <div class="row hackerFont justify-content-center mt-5">
                        <div class="col-md-12">
                            <h3 class="p-3 text-decoration-none text-light bold">Challenge Types:</h3>
                            <span class="p-1" style="background-color:#ef121b94">Web</span>
                            <span class="p-1" style="background-color:#17b06b94">Reversing</span>
                            <span class="p-1" style="background-color:#f9751594">Steganography</span>
                            <span class="p-1" style="background-color:#36a2eb94">Pwning</span>
                            <span class="p-1" style="background-color:#9966FF94">Cryptography</span>
                            <span class="p-1" style="background-color:#ffce5694">Other</span>
                        </div>
                    </div>

                    <div class=" my-5 col-xl-12  text-center">
                        <p class="text-grey text-spacey hackerFont lead mb-5">
                            Don't Forget To Share Your feedback!
                            <a target="_blank" href="https://forms.gle/HSxNHxWD5DgFeXLK8"
                                class="p-3 text-decoration-none text-light bold">
                                FEEDBACK<span class="vim-caret">&nbsp;</span>
                            </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- .......HINTS...... -->


    <?php

    for ($i = 21; $i <= 40; $i++) {
        echo '<div class="modal fade" id="hint' . $i . '" tabindex="-1" role="dialog" aria-labelledby="hint label" style="display: none;"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        ' . $S_level2_hints[$i - 21] . '
                    </div>
                </div>
            </div>
        </div>';
    }

    ?>

    <?php include 'layout/footer.php'; ?>