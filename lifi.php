<!DOCTYPE html>
<html>
<head>
    <title>Secure LFI Challenge</title>
</head>
<body>

<div id="content">
    <?php
    // Define the allowed file
    $allowed_file = '/etc/ctf/fliflag';

    // Check if a page is requested and validate it
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        // Validate if the requested page is the allowed file
        if ($page === $allowed_file && file_exists($allowed_file)) {
            include($page);
        } else {
            echo "Invalid request.";
        }
    } else {
        // Load the default page (home)
        include('home.php');
    }
    ?>
</div>

<div id="navigation">
    <ul>
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=<?php echo urlencode($allowed_file); ?>">Flag</a></li>
    </ul>
</div>

</body>
</html>