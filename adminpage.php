<?php
session_start();

if (!isset($_SESSION["UserName"])) 
{
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adminpage</title>
    <style>
    .container{
          width:100%;
          height:100vh;
          background-image: linear-gradient(rgb(0,0,0,0.3),rgb(0,0,0,0.5)),url(kilimanjaro.jpg);
          background-position: 0% 38%;
          background-size: cover;
        }
      #link-delete{
           color:aliceblue;
           background-color: red;
           text-decoration: none;
           padding-left: 12px;
           padding-right: 18px;
        }
        #link-edit{
           color:aliceblue;
           background-color: blue;
           text-decoration: none;
           padding-left: 12px;
           padding-right: 18px;
        }
        #link-logout{
           color:#181380;
           text-decoration: none;
           font-style: italic;
        }
        body{
            background-color: #ffd4e0;
            text-align: center;
        }
        h1{
            font-style: serif;
            font-style: bold;
            color: #0a0fa3;
            padding-top: 30pxr;

        }
        a{
         color:red;
       }
    </style>
</head>
<body class="container">

    <h1>Welcome Admin</h1><?php echo $_SESSION["UserName"]?>

    <a id='link-logout'href="logout.php">Log Out</a>
<?php
$link = mysqli_connect("localhost","root","","artgallery");
$query="select * from client ";
$result=mysqli_query($link, $query);
echo "<table border='1' style='text-align: center; margin: auto;'>";
echo "<tr style='background-color: #3feabc;;'><th>Id</th><th>UserName</th><th>Email</th><th>Password</th><th>UserType</th>"."<th colspan='2'>Action</th></tr>";
while ($row=mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$row['Id']."</td>";
    echo "<td>".$row['UserName']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td>".$row['Password']."</td>";
    // creates a variable id that transfet values/info from one page to another
    echo "<td><a id='link-delete'href='delete.php?id=".$row['Id']."'>Delete</a></td>";
    echo "<td><a id='link-edit'href='update.php?id=".$row['Id']."'>Edit</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>

