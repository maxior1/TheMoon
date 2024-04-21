<?php
    session_start();
    if(empty($_SESSION ["aid"])){
        $link = "http://localhost/TheMoon-tem/admin/index.php";
        $linkText = "Click Me";
        echo"<h1> <i>Access denied...</i>&#129300;</h1> ";
        echo '<span>Please login here: </span><a href="' . $link . '">' . $linkText . '</a>';
        exit;
    }

?> 