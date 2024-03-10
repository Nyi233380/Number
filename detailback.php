<?php 
    if (isset($_POST["backto"])){
        echo $_SERVER['HTTP_REFERER'];
        $localdi = $_SERVER['HTTP_REFERER'];
        header("Location: $localdi");
    }
?>