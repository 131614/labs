<?php 
$con = mysqli_connect("localhost","root","","sampledbb");

if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $insert_users = "insert into users(username,password) values ('$username',' $password')";
    
    $run_users = mysqli_query($con,$insert_users);
    
    if($run_users){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php,'_self')</script>";
        
    }
    
}

?>