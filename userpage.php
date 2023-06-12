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
    <title>Userpage</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family:'Roboto',sans-serif;
        }
        .container{
          width:100%;
          height:100vh;
          background-image: linear-gradient(rgb(0,0,0,0.3),rgb(0,0,0,0.5)),url(kilimanjaro.jpg);
          background-position: 0% 38%;
          background-size: cover;
        }
         .card1{
            width: 190px;
            height: 210px;
            display: inline-block;
            border-radius: 10px;
            padding: 2px 5px;
            box-sizing:border-box;
            cursor: pointer;
            margin: 100px 10px 1px 120px;
            background-image: url(mama.jpg);
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
         }
         .card2{
            width: 190px;
            height: 210px;
            display: inline-block;
            border-radius: 10px;
            padding: 2px 5px;
            box-sizing:border-box;
            cursor: pointer;
            margin: 100px 10px 1px 10px;
            background-image: url(kichaka.jpg);
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
         }
         .card3{
            width: 190px;
            height: 210px;
            display: inline-block;
            border-radius: 10px;
            padding: 2px 5px;
            box-sizing:border-box;
            cursor: pointer;
            margin: 100px 10px 1px 10px;
            background-image: url(kijiji2.jpg);
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
         }
         .card4{
            width: 190px;
            height: 210px;
            display: inline-block;
            border-radius: 10px;
            padding: 2px 5px;
            box-sizing:border-box;
            cursor: pointer;
            margin: 100px 10px 1px 10px;
            background-image: url(mchezo.jpg);
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
         }
         .card5{
            width: 190px;
            height: 210px;
            display: inline-block;
            border-radius: 10px;
            padding: 2px 5px;
            box-sizing:border-box;
            cursor: pointer;
            margin: 100px 10px 1px 10px;
            background-image: url(kijiji3.jpg);
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
         }
         .card6{
            width: 190px;
            height: 210px;
            display: inline-block;
            border-radius: 10px;
            padding: 2px 5px;
            box-sizing:border-box;
            cursor: pointer;
            margin: 20px 10px 1px 120px;
            background-image: url(masai.jpg);
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
         }
         .card7{
            width: 190px;
            height: 210px;
            display: inline-block;
            border-radius: 10px;
            padding: 2px 5px;
            box-sizing:border-box;
            cursor: pointer;
            margin: 20px 10px 1px 10px;
            background-image: url(mwamama.jpg);
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
         }
         .card8{
            width: 190px;
            height: 210px;
            display: inline-block;
            border-radius: 10px;
            padding: 2px 5px;
            box-sizing:border-box;
            margin: 20px 10px 1px 10px;
            background-image: url(tembo1.jpg);
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
         }
         .card9{
            width: 190px;
            height: 210px;
            display: inline-block;
            border-radius: 10px;
            padding: 2px 5px;
            box-sizing:border-box;
            cursor: pointer;
            margin: 20px 10px 1px 10px;
            background-image: url(twiga.jpg);
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
         }
         .card10{
            width: 190px;
            height: 210px;
            display: inline-block;
            border-radius: 10px;
            padding: 2px 5px;
            box-sizing:border-box;
            cursor: pointer;
            margin: 20px 10px 1px 10px;
            background-image: url(vinyago.jpg);
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
         }
         .card1:hover{
          transform: translateY(-10px);
         }
         .card2:hover{
          transform: translateY(-10px);
         }
         .card3:hover{
          transform: translateY(-10px);
         }
         .card4:hover{
          transform: translateY(-10px);
         }
         .card5:hover{
          transform: translateY(-10px);
         }
         .card6:hover{
          transform: translateY(-10px);
         }
         .card7:hover{
          transform: translateY(-10px);
         }
         .card8:hover{
          transform: translateY(-10px);
         }
         .card9:hover{
          transform: translateY(-10px);
         }
         .card10:hover{
          transform: translateY(-10px);
         } 
      h1{
         text-align:center;
         font-family:'Roboto',serif;
         font-size:30px;
         color: #0f0;
         padding-top:10px
       }
       p{
         text-align:center;
         color:#0a0;
         font-family:'Roboto',serif;
       } 
       a{
         color:red;
       }
    </style>
</head>
<body>
    <div class="container">
      <?php echo $_SESSION["UserName"] ?><a href="logout.php">Logout</a>
        <h1>Welcome in Art Gallery</h1>
        <div class="card1">
           <h5>Women</h5>
        </div>
        <div class="card2">
           <h5>Forest</h5>
        </div>
        <div class="card3">
           <h5>Village</h5>
        </div>
        <div class="card4">
           <h5>Dance</h5>
        </div>
        <div class="card5">
           <h5>A girl</h5>
        </div>
        <div class="card6">
           <h5>Maasai</h5>
        </div>
        <div class="card7">
           <h5>Womens</h5>
        </div>
        <div class="card8">
           <h5>Elephants</h5>
        </div>
        <div class="card9">
           <h5>Giraffes</h5>
        </div>
        <div class="card10">
           <h5>Arts</h5>
        </div>
       <p> &copy 2023 Art Gallery. All rights reserved.</p>  
      </div>
</body>
</html>
