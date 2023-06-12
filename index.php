<?php

session_start();

$link = mysqli_connect("localhost","root","","artgallery");

if($_SERVER["REQUEST_METHOD"]=="POST") {
    
    $UserName=$_POST["UserName"];
    $Password=$_POST["Password"];

    $sql="select * from client where UserName = '$UserName' AND Password = '$Password'";

    $result=mysqli_query($link, $sql);

    $row=mysqli_fetch_array($result);

    if ($row["UserType"]=="User") 
    {  
       $_SESSION["UserName"]=$UserName;

       header("location:userpage.php");
    }
     elseif($row["UserType"]=="Admin") 
    {
        $_SESSION["UserName"]=$UserName;
        
        header("location:adminpage.php");
    }
    else {
        echo "<h3> UserName Or Password is incorrect!.</h3>";
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Art Gallery Information</title>
        <link rel="stylesheet" href="style.css">
        <style>
          body{
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0% 0%;
            background-image: url(main.jpg);         
          }
          h1{
            color: red;
          }
          #input-text{
            border-radius: 4px;
            border: none;
            background-color: burlywood;
            height: 25px;
            
          }
          #input-bottom{
            border-radius: 5px;
            border: none;
            background-color: rgb(128, 110, 0);
            width: 90px;
            height: 26px;
            cursor: pointer;
        
         }
         #input-bottom:hover{
          opacity: 1;
         }
         footer{
            text-align: justify;
         }
         .cent{
          background-color: #a45fa5a8; 
          width: 500px; 
          border-radius: 12px;
         }
         h1{
                color: #0a0;
            }
        </style>
    </head>
    <body>
    <
        <center>
        <br><br>
        <div class="cent">
        <br><br><br>
        
        <form action="#" method="POST" autocomplete="off">
       <div>
        <label>UserName</label>
        <input id="input-text" type="text" name="UserName" >
       </div>
       <br><br>
         
       <div>
        <label>Password</label>
        <input id="input-text" type="password" name="Password">
       </div>
       <br>

       <div>
        <input id="input-bottom" type="submit"  value="Log In">
        </div>
        <h5>Don't have an account yet <a href="signup.php">Sign Up </a></h5>   
       </form>

       <br><br>
        </div>
        <!-- <footer>
          &copy; 2023 Art Gallery. All rights reserved.
        </footer> -->
        </center>
    </body>
</html>

