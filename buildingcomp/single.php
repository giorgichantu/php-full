<?php 
	include "header.php";
	if (isset($_GET['news-id']) && !empty($_GET['news-id'])) {
		// var_dump($_GET['news-id']);
		include "conn.php";
		$news_id = intval($_GET['news-id']);
		$sql =  "SELECT * FROM `news` WHERE id ='$news_id'";
		$res = mysqli_query($con, $sql);
		if ($res) {
			$post = mysqli_fetch_assoc($res);
			?>

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 content">
						<h1 style="text-align: center;"><?php echo $post['project_name']; ?></h1>
						<div class="p-cont" style="width: 950px;height: 200px;margin-top: 50px;">
							<p style="font-size: 20px;"><?php echo $post['content']; ?></p>
						</div>

					<p class="author">
						<b>სართულეის რაოდენობა:</b>  <span> <?= $post['floors_quantity']; ?> </span>
					</p>		
					<p class="time">
						<b>პოსტი დაიდო: </b>  <span> <?= $post['starting_date']; ?> </span>
						<b>პოსტი გაუქმდება: </b>  <span> <?= $post['ending_date']; ?> </span>
					</p>		
						<div>
							<p>
								<b style="float: left;">ბინების რაოდენობა </b> <span> <?= $post['apartments_quantity	']; ?> </span>
								<b>ოფისების რაოდენობა</b><span> <?= $post['office_quantity']; ?> </span>
							</p>
							<p><b>მისამართი</b><span> <?= $post['address']; ?> </span> </p>
						</div>
							

					</div>
					<div class="col-md-6">
						<img style="height: 700px; width: 900px;" src="uploads/<?php echo $post['poster']; ?> "class="single-img" alt="cover image">
					</div>
				</div>
		
				<a href="posts.php" class="see-all btn btn-info" style="margin-left: 900px;"> SEE ALL NEWS </a>


			</div>
				

			<?php
		}else {
			echo mysqli_error($con);
		}
	}


?>