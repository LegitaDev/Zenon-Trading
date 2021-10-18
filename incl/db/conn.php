<?php

$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
if(!$conn){
    die("Connection Error" . mysqli_connect_error());
}

?>