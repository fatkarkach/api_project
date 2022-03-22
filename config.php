<?php
$conn=mysqli_connect("localhost","root","","test");
if(mysqli_connect_errno())
{
    die("failed to connect mysqli:" . mysqli_connect_error());
}
?>