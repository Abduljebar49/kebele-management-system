<?php 

$conn = new mysqli('localhost', 'root', '','kebele');
if(mysqli_connect_errno())
{
    die("Connection Failed!".mysqli_connect_error());
}

 ?>