
<?php
       

       // connects PHP to MySQL
       $link = mysqli_connect("localhost","root","","artgallery");
       
       if (isset($_POST['submit'])) { 

       //captures the form data
       $UserName=$_POST['UserName'];
       $Email=$_POST['Email'];
       $Password=$_POST['Password'];
       $UserType=$_POST['UserType'];

       //validate data captured from the form
       if ($UserName!="" && $Email!="" && $Password!="" && $UserType!=""){
           //write SQL statement to insert data into database
        //   $query="insert into client values('$UserName','$Email','$Password')";
          $query="INSERT INTO `client` (`Id`, `UserName`, `Email`, `Password`, `UserType`) VALUES (NULL, '$UserName', '$Email', '$Password', '$UserType')";
           $result=mysqli_query($link,$query); //function  execute query
          
           if ($result){ //also writen if($result==true){code to execute}
            header("location:index.php");
              echo "Data Save Succesfully";   
           } else {
               echo mysqli_error($link); //displaying MySQL error message
           }
       } else {
           echo "Please fill in both fields";
       }
   }    
   ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Art Gallery Information</title>
        <style>
             body{
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0% 0%;
            background-image: url(main.jpg);         
           }
            .cent{
           background-color: #a45fa5a8;
            width: 400px; 
            border-radius: 12px;
            }
            h1{
                color: #0a0;
            }
        </style>
    </head>
    <body>
        <center>
    
        <h1>Create an account</h1>
        
        <div class="cent">
        <br><br> <br>

        <form action="#" method="POST" autocomplete="off">
       <div>
        <label>UserName</label>
        <input type="text" name="UserName" >
       </div>
       <br><br>

       <div>
        <label>Email</label>
        <input type="text" name="Email" >
       </div>
       <br><br>
         
       <div>
        <label>Password</label>
        <input type="password" name="Password" >
       </div>
       <br>

       <div>
        <label>UserType</label>
        <input type="text" name="UserType" placeholder="Enter only 'User'">
       </div>
       <br><br>

       <div>
        <input type="submit" name="submit" value="Sign Up">
        </div>
        <h5>Already have an account <a href="index.php">Log In</a></h5>    
       </form>

       <br><br>
        </div>
        </center>

    </body>
</html>

