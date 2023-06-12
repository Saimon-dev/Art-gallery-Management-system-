<?php
$link = mysqli_connect("localhost","root","","artgallery");
//captures the id value from adminpage.php
$id=$_GET['id'];
//SQL statement to delete row from a database
$query="delete from client where Id='$id'";

$result=mysqli_query($link,$query);

if ($result)
{
    //if $result is true re dirrect the page to adminpage.php
    header("location:adminpage.php");
}


?>
