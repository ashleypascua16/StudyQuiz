<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Study Quiz</a></p>
        </div>
            <a href="Lesson.php">Lesson</button> </a> 
            <a href="Subject.html">Quiz</button> </a>
            <a href="Contact3.html">Contact Us</button> </a>
            <a href="About us.html">About Us</button> </a>
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
</body>
</html>