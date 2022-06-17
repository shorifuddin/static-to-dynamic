<?php

require_once('function/function.php');
login();
$id=$_GET['delet'];
$del="DELETE FROM user_info WHERE user_id='$id'";
// $q=mysqli_query($con,$del);

if (mysqli_query($con,$del)) {
    header('Location:alluser.php');
}else{
    echo "Delete Failed";
}




?>