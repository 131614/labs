

<html>
    <form action="update.php" method = "POST">
        Enter id to be updated <input type="number" name = 'id'> <br>
        Enter your name: <input type="text" name = "name"> <br>
        Enter passoword: <input type="password" name = "password"> <br>
        
        <input type="submit" value=" submit">
    </form>
    <?php
    $con = mysqli_connect("localhost","root","","sampledbb");
    $name = $_POST["name"];
    $id = $_POST['id'];
    $pwd = $_POST['password'];

    $up_users ="UPDATE users set username= '$name', password = '$pwd' WHERE Id='$id'";

    if(mysqli_query($con,$up_users)){

        echo "data is updated succesfully";
    }else{
        echo "error updating record: " . mysqli_error($con);

    }
    mysqli_close($con);
    ?>

</html>
