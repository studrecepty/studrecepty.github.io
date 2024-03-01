<?php
$conn = mysqli_connect('localhost', 'root', '', 'komenty');
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>