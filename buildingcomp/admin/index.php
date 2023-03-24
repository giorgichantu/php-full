<?php 
	include "../header.php";
	include "function.php";
	include "../conn.php";
 ?>

<!-- <div  style="width: 1000px;margin: auto;margin-top: 100px;border:solid 2px; " >
	<div class="">
	
	</div>
</div>
 -->
 <div  style="width: 1000px;margin: auto;margin-top: 100px;border:solid 2px;border-radius: 5px; ">
 <div class="posts-list">	
 	<h1 style="text-align: center;">aq aris siaxle</h1>
		<?php  fetch_12_news("news", $con); ?>
</div>
</div>



<?php include "../footer.php"; ?>
