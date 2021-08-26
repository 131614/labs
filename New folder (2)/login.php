
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action='' method="post">
    <label for="username">username</label>
     <input type="text" name="username">
     <br>
     <label for="password">password</label>
    <input type="password" name="password">
    <br>
   <input type="submit" name="login">
</form>
<?php
$con = mysqli_connect("localhost","root","","sampledbb");

if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($con, "select * from users where username='$username' AND password='$password'");
    $count = mysqli_num_rows($query);

        if ($count>0) {
                echo "<script>alert('user has been logged in sucessfully')</script>";
                echo "<script>window.open('index.php','_self')</script>";
        }
    }
        
    // $sql = "SELECT  username,password FROM sampledbb";
    // $result = mysqli_query($con, $sql);

    // if (mysqli_num_rows($result) > 0) {
    //     // output data of each row
    //     while($row = mysqli_fetch_assoc($result)) {

    //          if ($username==$row["username"] ." " AND $password==$row["password"]) {
    //              $ret = index.php;

            
                
    //          } 
    //     }
    //   } else {
    //     echo "wrong username or password";
    //   }
      
    //   mysqli_close($con);
?>
</html>