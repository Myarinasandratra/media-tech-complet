<?php
include 'framework/connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM `liste` WHERE id=$id";
    $result=mysqli_query($conne,$sql);
    if($result){
        header('location:../en tete/liste et activite/liste-et-activite.php ');
    }
    else{
        die(mysqli_error($conne));
    }
}
?>
