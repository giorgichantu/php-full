<?php 
	include "header.php";
	include "function.php";
	include "conn.php";
 ?>

 <!-- 
 <div  style="width: 1000px;margin: auto;margin-top: 100px;border:solid 2px;border-radius: 5px; ">
 <div class="posts-list">	
 	<h1 style="text-align: center;">aq aris siaxle</h1>
</div>
</div> -->

<div class="container-fluid">
	<div class="row page-title">
		<h1 style="text-align: center;">აქ არის მოცემული ყველა პოსტი</h1>
		<h3></h3>
	</div>
	<div class="row" style="margin-top: 70px;">
		<?php  fetch_12_news("starting_projects", $con); ?>
	</div>
</div>
	



<?php 
 ?>

