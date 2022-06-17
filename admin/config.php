<?php

$db_usname='root';
$db_pass='';
$db_host='localhost';
$db_name='pj1';

$con=mysqli_connect($db_host,$db_usname,$db_pass,$db_name);

if (!$con) {
    echo "DataBase not Found";
}else{
    echo "";
}


?>