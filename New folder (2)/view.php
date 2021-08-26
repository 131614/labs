
    <?php 
          
       
          $con = mysqli_connect("localhost","root","","sampledbb");

          $get_users = "select * from users";
          
          $run_users = mysqli_query($con,$get_users);

          while($row_users=mysqli_fetch_array($run_users)){
              
             $user_id = $row_users["Id"]; 
                echo $user_id.'     ';
              
             $user_name = $row_users["username"];
                echo $user_name.'         ';

             $user_password = $row_users["password"];
                echo $user_password.'   <br>';
              
          }
    
          

   
      ?>