   
   <?php
   $link = mysqli_connect("localhost","root","","artgallery");
   //capture id value from select.php
   $id=$_GET['Id'];
   //SQLstatement for selecting a row that you need to edit/update
   $query="select * from client where Id='$id'";
   $result=mysqli_query($link,$query);
   $row=mysqli_fetch_array($result);
?>
        
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Statement</title>
    </head>
    <body style="background-color: brown;">
        <center>
        <br><br>
        <h1>Updating Form</h1>
        <br><br>
        <div style="background-color: bisque; width: 500px; border-radius: 12px;">
        <br><br> <br>

        <form method="post">
       <div>
        <label>UserName</label>
        <input type="text" name="UserName" value="<?php echo $row['UserNme'];?>">
       </div>
       <br><br>

       <div>
        <label>Email</label>
        <input type="text" name="Email" value="<?php echo $row['Email'];?>">
       </div>
       <br><br>
         
       <div>
        <label>Password</label>
        <input type="password" name="Password" value="<?php echo $row['Password'];?>">
       </div>
       <br>

       <div>
        <label>UserType</label>
        <input type="text" name="UserType" placeholder="Enter only 'User'" value="<?php echo $row['UserType'];?>">
       </div>
       <br><br>

       <div>
        <input type="submit" name="submit" value="Update Details">
        </div>
        <!-- <h5>Already have an account?</h5><a href="login.php">Sign In</a> -->
       </form>
       <br><br>
        </div>
          </center>
          
  <?php
          if (isset($_POST['submit'])) { 
   //captures the form data
  $UserName=$_POST['UserName'];
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $UserType=$_POST['UserType'];
  
  //validate data captured from the form
  if ($UserName!="" && $Email!="" && $Password!="" && $UserType!=""){
      //write SQL statement to update data into database
      $query="Update client set Username='$UserName', Email=' $Email', Password='$Password'"." UserType='$UserType' where id='$id'";
      $result=mysqli_query($link,$query); //function  execute query
      if ($result){ //also writen if($result==true){code to execute}
        header("location:adminpage.php"); 
        echo "Data updated Succesfully!";  
      } else {
          echo mysqli_error($link); //displaying MySQL error message
      }
  } else {
      echo "Please fill in both fields";
  }
  }    
  ?>
  </body>   
</html>
  






