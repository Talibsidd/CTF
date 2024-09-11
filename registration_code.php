<?php


$showerror = false;
$showpasserr = false;
if (isset($_POST['submit1'])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    include './dbconnect.php';

    $sql = "SELECT * FROM students WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $showlogin = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("location: instructions.php");
            } else {
                $showpasserr = true;
            }
        }

    } else {
        $showerror = true;
    }

}


$showerr = false;
$showsuccess = false;
$showemail = false;
$showcnferr = false;



if (isset($_POST['submit2'])) {


    $verification_otp = random_int(100000, 999999);

    $str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    $token = substr(str_shuffle($str), 0, 7);


    $email = $_POST["email"];
    $team_name = $_POST["team_name"];
    $single_name = $_POST["single_name"];
    $name1 = $_POST["name1"];
    $name2 = $_POST["name2"];
    $password = $_POST["password"];
    $cnfpassword = $_POST["cnfpassword"];
    $playmode = $_POST["playmode"];

    include './dbconnect.php';


    $nameErr = $emailErr = "";

    if (empty($_POST["email"]) && empty($_POST["password"]) && empty($_POST["name"])) {
        $nameErr = $emailErr = "REQUIRED";
    } else {

        $exists = "SELECT * FROM `students` WHERE email='$email'";
        $resultesists = mysqli_query($conn, $exists);
        $exnum = mysqli_num_rows($resultesists);

        if ($exnum > 0) {
            $showemail = true;
        } else {

            if ($password == $cnfpassword) {

                require './registrationmail.php';

                $existingOtpQuery = "SELECT * FROM `otp` WHERE email='$email'";
                $existingOtpResult = mysqli_query($conn, $existingOtpQuery);
                $existingOtpNum = mysqli_num_rows($existingOtpResult);

                if ($existingOtpNum > 0) {
                    
                    $regsql = "UPDATE `otp` SET `otp`='$verification_otp' WHERE `email`='$email'";

                } else {

                    $regsql = "INSERT INTO `otp` ( `email`, `otp`) VALUES ( '$email', '$verification_otp')";

                }

                $regresult = mysqli_query($conn, $regsql);

                if ($regresult) {

                    $showsuccess = true;

                } else {
                    $showerr = true;
                }

            } else {
                $showcnferr = true;
            }


        }


    }


}


?>