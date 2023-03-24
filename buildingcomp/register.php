<?php 
	include "conn.php";
	$email =  $_POST['email'];
	$pass  =  $_POST['password'];
	$username =$_POST['username'];
	$new_p = md5($pass);
	var_dump($new_p);
	$check_email = "SELECT * FROM `user`  WHERE email = '$email'";
	$check_res = mysqli_query($con, $check_email);
	if ($check_res) {
		if (mysqli_num_rows($check_res) > 0) {
			echo  $email . "  უკვე დაკავებულია!! <br> გთხოვთ აირჩიოთ სხვა ემაილი.";
		}else{

			$sql = "INSERT INTO `user`  (`email`, `password`,`username`) 
					VALUES ('$email', '$new_p','$username')";
			$result  = mysqli_query($con, $sql);
			if ($result) {
				?>
				<p class="success">
					yes <a href="index.php">tqven gaiaret registracia</a>				
				</p>
				<?php
			}else{
				echo mysqli_error($con);
				?>
				<p class="error">
				no	 <a href="index.php">ver gaiaret registracia</a>
				</p>
				<?php
			} 
		}
	}
 ?>
	

	<p class="">
	</p>



