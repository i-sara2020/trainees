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
    <a href="login.php">دخول</a>
    <a href="sign_up_trainess.html">تسجيل متدربين</a>
    <a href="prosend.html">تسجل مقدم ورش عمل </a>
  </div>
  
  <div class="content">
    <?php
     // session_start();
    //require("includes/sign_up_trainess.html");
    if(isset($_POST)&& !empty($_POST))
    {
      $username=$_POST['username'];
      $email=$_POST['email'];
     

    $user='root';
    $pass='';
    $db='tadreeb';
    $mysql= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );

    $query_e=" SELECT * FROM trainess WHERE email ='$email'";
    $query_n=" SELECT * FROM trainess  WHERE username =' $username'";

    $result_e=$mysql->query($query_e) or die($mysql->error);
    $result_n=$mysql->query($query_n) or die($mysql->error);

    $num_e=$result_e->num_rows;
    $num_n=$result_n->num_rows;

    if( $num_e>0 OR $num_n>0)
    {
      if( $num_e>0 AND $num_n>0)
      {
        echo "<script> 
        alert('عذراً يبدو أن  اسم المستخدم او البريد الالكتروني  مستخدم سابقاً');
        window.location='sign_up_trainess.html';
        </script>";
        $mysql->close();
      }

      if( $num_e>0)
      {
        echo "<script> 
        alert('عذراً يبدو أن  اسم المستخدم او البريد الالكتروني  مستخدم سابقاً');
        window.location='sign_up_trainess.html';
        </script>";
        $mysql->close();
      }

      if( $num_n>0)
      {
        echo "<script> 
        alert('عذراً يبدو أن  اسم المستخدم او البريد الالكتروني  مستخدم سابقاً');
        window.location='sign_up_trainess.html';
        </script>";
        $mysql->close();
      }


    }else{
      $username=$_POST['username'];
      $fullname=$_POST['fullname'];
      $password=$_POST['password'];
      $password2=$_POST['password2'];
      $email=$_POST['email'];
      $phoneNo=$_POST['phoneNo'];

      $sql = "INSERT INTO trainess (username,fullname,password,email,phoneNo)  VALUES ('$username', '$fullname','$password', '$email', '$phoneNo')";
    
      

    

      if( $mysql->query($sql) === TRUE) {
       

        echo "<script> 
        alert('تم التسجيل بنجاح');
        window.location='home.html';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $mysql->error;
       
    }
   


      $mysql->close();

    }
      

    }

    
    
    ?>
  </div>
  
  <div class="footer">
    <p>Footer</p>
  </div>
</body>
</html>