<?php
    $conne = new mysqli('localhost','root','','mediatech');

    if(!$conne){
        die(mysqli_error($conne));
    }
?>