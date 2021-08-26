<html>
    <header>
       <style>
           input {
               margin: 25px;
           }
       </style>
    </header>
    <form action="update.php" method = "POST" >
            Enter id to be deleted <input type="number" name = 'id'> <br>
            
            <input type="submit" value=" submit">
        </form>
    <?php
    $con = mysqli_connect("localhost","root"," ","sampledbb");

    $id = $_POST['id']

    $del_users = "DELETE FROM users WHERE id =$id";

    if (mysqli_query($con, $del_users)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
    
    mysqli_close($con);

    ?>
</html>