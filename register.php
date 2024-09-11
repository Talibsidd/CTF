<?php

include_once './registration_code.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <title>BBE-ByteBattleEscape</title>
    <link rel="icon" href="./assets/images/byte.png" type="image/x-icon">

    <link rel="stylesheet" href="./assets/css/login.css">

    <script>
        function showFields() {
            var playMode = document.getElementById("playMode").value;
            var individualFields = document.getElementById("individualFields");
            var teamFields = document.getElementById("teamFields");

            // Hide all fields initially
            individualFields.style.display = "none";
            teamFields.style.display = "none";

            // Show fields based on the selected playing mode
            if (playMode == "individual") {
                individualFields.style.display = "block";
            } else if (playMode == "team") {
                teamFields.style.display = "block";
            }
        }
    </script>

</head>

<body>
    <?php

    if ($showsuccess) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Registration Successfull.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['team_name'] = $team_name;
        $_SESSION['single_name'] = $single_name;
        $_SESSION['name1'] = $name1;
        $_SESSION['name2'] = $name2;
        $_SESSION['token'] = $token;
        $_SESSION['password'] = $password;
        $_SESSION['playmode'] = $playmode;

        header("location: ./includes/modal.php");

    }
    if ($showerr) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="height:50px;">
                Signup Failed!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
    if ($showemail) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="height:50px;">
                Email Already exist!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
    if ($showcnferr) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="height:50px;">
                Password Does not Match!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }

    ?>
    <div id="container" class="container">
        <!-- FORM SECTION -->
        <div class="row">
            <!-- SIGN UP -->
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-up">
                        <form action="register.php" method="post">

                            <input type="hidden" name="form_type" value="registration">

                            <select class="form-select" id="playMode" name="playmode" onchange="showFields()">
                                <option selected disabled>Select playing Mode </option>
                                <option value="individual">Individual</option>
                                <option value="team">Team</option>
                            </select>

                            <div id="individualFields" style="display:none;" class="input-group">
                                <input type="text" class="form-control" id="single_name" name="single_name"
                                    placeholder="Name or Team_Name" style="width:100%;" required>
                            </div>


                            <div class="input-group" id="teamFields" style="display:none;">
                                <i class='bx bxs-user'></i>
                                <input type="text" class="form-control" id="team_name" name="team_name"
                                    placeholder="Team_Name" style="width:100%;" required>
                                <input type="text" class="form-control" id="name1" name="name1" placeholder="Person 1"
                                    style="width:100%;" required>
                                <input type="text" class="form-control" id="name2" name="name2" placeholder="Person 2"
                                    style="width:100%;" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bx-mail-send'></i>
                                <input type="email" class="form-control" id="email1" name="email"
                                    aria-describedby="emailHelp" placeholder="Type your university E-mail" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" class="form-control" id="password1" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" class="form-control" id="cnfpassword" name="cnfpassword"
                                    placeholder="Confirm Password">
                            </div>
                            <button type="submit" name="submit2" id="submit2">
                                Sign Up
                            </button>
                        </form>
                        <p>
                            <span>
                                Already have an account?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                Sign in here
                            </b>
                        </p>
                    </div>
                </div>

            </div>
            <!-- END SIGN UP -->

            <!-- SIGN IN -->
            <?php

            if ($showerror) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="height:50px;">
                Email does not exist!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }

            if ($showpasserr) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="height:50px;">
                Enter correct password!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }


            ?>
            <div class="col align-items-center flex-col sign-in">
                <div class="form-wrapper align-items-center">

                    <div class="form sign-in">
                        <form action="register.php" method="post">
                            <div class="input-group">

                                <i class='bx bxs-user'></i>
                                <input type="email" name="email" class="form-control" id="email2"
                                    placeholder="Enter Email">
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" class="form-control" id="password2" name="password"
                                    placeholder="Password">
                            </div>
                            <button type="submit" name="submit1" id="submit1">
                                Sign in
                            </button>

                        </form>
                        <p>
                            <b>
                                <small id="passwordreset" class="mt-3 form-text text-muted"> <a
                                        href="./includes/email.php">Forget
                                        Password?</a></small>

                            </b>
                        </p>
                        <p>
                            <span>
                                Don't have an account?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                Sign up here
                            </b>
                        </p>
                    </div>

                </div>
                <div class="form-wrapper">

                </div>
            </div>
            <!-- END SIGN IN -->
        </div>
        <!-- END FORM SECTION -->
        <!-- CONTENT SECTION -->
        <div class="row content-row">
            <!-- SIGN IN CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2 style="color:white;">
                        Welcome To BBE{ &#127988;}
                    </h2>

                </div>
                <div class="img sign-in">

                </div>
            </div>
            <!-- END SIGN IN CONTENT -->
            <!-- SIGN UP CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="img sign-up">

                </div>
                <div class="text sign-up">
                    <h2 style="color:white;">
                        Join with us
                        BBE{ &#127988; }
                    </h2>

                </div>
            </div>
            <!-- END SIGN UP CONTENT -->
        </div>
        <!-- END CONTENT SECTION -->
    </div>


    <script>



        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        let container = document.getElementById('container')

        toggle = () => {
            container.classList.toggle('sign-in')
            container.classList.toggle('sign-up')
        }

        setTimeout(() => {
            container.classList.add('sign-in')
        }, 200)
    </script>
</body>

</html>