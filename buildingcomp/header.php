<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
	// if (isset($_SESSION['user_name'])) {
	// 	header("Location: profile.php");
	// }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   <div style="margin-left: 100px;"> <a class="navbar-brand" href="index.php">სამშენებლო კომპანია
</a> </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
     
    <!--     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="active">
          <a href="index.php">მთავარი</a>
        </li>
        <?php 
          if (isset($_SESSION['user_name'])) {
         ?>
        <li style="margin-right: 80px;">
          <a href="posts.php">პოსტები</a>
        </li >
      <?php } ?>
      <?php  
      if (isset($_SESSION['user_name'])){
        ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
      
            <?php echo " ".  $_SESSION['user_name'];  ?>
           <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">
              <i class="fas fa-user-edit"></i>შენი პროფილი</a>
            </li>
            <li>
              <a href="add_p.php">
                <i class="fas fa-plus-square"></i>
          დაამატე პოსტი
           </a>
          </li>
          <li>
              <form method="POST">
                <button type="submit" name="logout" class="btn btn-link"> 
                  <i class="fas fa-sign-out-alt text-danger"></i>
                </button>
              </form>
          </li>
          </ul>
        </li>

        <?php
      }else{
        ?>
        <li><a href="#" data-toggle="modal" data-target="#register">დარეგისტრირდი აქ</a></li>
        <?php
      }
      ?>
      </ul>
    </div>
  </div>
</nav>


 
<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
      </div>
      <div class="modal-body">
      	<div>
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#Register" aria-controls="Register" role="tab" data-toggle="tab">რეგისტრაცია</a></li>
		    <li role="presentation"><a href="#Login" aria-controls="Login" role="tab" data-toggle="tab">ავტორიზაცია</a></li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="Register">
		    		<fieldset>
						<legend>
							<h3>გაიარე რეგისტრაცია აქ</h3>
						</legend>
						<form action="register.php" method="POST">
							<input type="email" name="email" placeholder="მეილი"  class="form-control">
              <input type="text" name="username" placeholder="სახელი"  class="form-control">
							<input type="text" name="password" placeholder="პაროლი" class="form-control">
							<input type="submit"  class="btn btn-success" value="send data">
						</form>
					</fieldset>
		    </div>
		    <div role="tabpanel" class="tab-pane" id="Login">
		    		<fieldset>
						<legend>
							<h3>ავტორიზაცია</h3>
						</legend>
						<form action="login.php" method="GET">
							<input type="text" name="email" placeholder="მეილი"  class="form-control">
							<input type="password" name="password" placeholder="პაროლი" class="form-control">
							<input type="submit" class="btn btn-success" value="Log In">
						</form>
					</fieldset>
		    </div>
		  </div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<?php 
    if (isset($_POST['logout'])) {
      // echo "log out";
      session_unset();
      session_destroy();
      // header("location: index.php");
    }

 

?>