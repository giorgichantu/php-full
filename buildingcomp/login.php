<?php 
  session_start();
 ?>
<link rel="stylesheet" href="style.css">
<?php 
  include "conn.php";

  $email =  $_GET['email'];    
  $pass  =  $_GET['password']; 
  $new_password=md5($pass);

  $check_email = "SELECT * FROM `user`  WHERE email = '$email' OR username ='$email'";
  $check_res = mysqli_query($con, $check_email);
  if ($check_res) {
    if (mysqli_num_rows($check_res)  == 1 ) {
    $check_data = "SELECT * FROM `user`  WHERE (email = '$email' OR username ='$email') AND password = '$new_password'";
    $check_data = mysqli_query($con, $check_email);
    if ($check_data) {
      if (mysqli_num_rows($check_data) == 1 ){
        $user = mysqli_fetch_assoc($check_data);
        print_r($user);

        $_SESSION['user_name'] = $user['username'];
      }
    }
    }else{
      echo mysqli_error($con);
    }

  }

?>

   <h1 style="text-align: center;margin-top: 50px;"> <a href="index.php" style="text-decoration: none;"> გადადით მთავარ გვერდზე
</a> </h1>

