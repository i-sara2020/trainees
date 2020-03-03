

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
        <title>Document</title>
</head>
<body>
<div class="topnav">
  <form class="search">
    <input type="text" name="search" placeholder="Search..">
  </form>
    <img src="logo.png" alt="Simply Easy Learning" width="140" height="90" align="left">
	
	<?php
	session_start();


	if(!isset($_SESSION["UserName"]))
	{
		 // header("Location: SigninSignupPage.php");
		 echo "<script type='text/javascript'>window.top.location='login.php';</script>"; exit;
		 // exit(); 


	}
	else
	{
		echo "<br> Welcome :  <b>".$_SESSION["UserName"]."</b>";

	}	

	?>

    <a href="login.html">دخول</a>
    <a href="home.php">تسجيل متدربين</a>
    <a href="home.php">تسجل مقدم ورش عمل </a>
  </div>
  
  <div class="content">
    <h2>CSS Template</h2>
    <p>A topnav, content and a footer.</p>
  </div>
  
  <div class="footer">
    <p>Footer</p>
  </div>
</body>
</html>