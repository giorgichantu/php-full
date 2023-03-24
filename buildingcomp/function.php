<?php 
	function fetch_12_news($table_name, $con)
	{

		$sql = "SELECT * FROM ";
		$sql .= $table_name;
		$sql .= "  ORDER BY add_at DESC LIMIT 12";

		$result = mysqli_query($con, $sql);
		if ($result) {
			if (mysqli_num_rows($result) > 0) {
				while ($post = mysqli_fetch_array($result)) {
				    ?>
					<div  style="height: 250px; width: 450px;	display: flex; justify-content: space-between;float: left;">
						<div class="news well" style="width: 400px;background-size: cover; background-image: url('uploads/<?php echo $post['poster']; ?>');">
							<div class="wrap" style="margin-left: 170px;margin-top: 100px; font-size: 25px;">
								<a href="single.php?news-id=<?php echo $post['id']; ?>" >
									<i class="fas fa-eye"></i>
								</a>
							</div>
							<div class="news-name" >
								<h3 style="color: white; text-align: center; margin-top: 43px;">
									<?php echo $post['project_name']; ?>
								</h3>
							</div>
						</div>
					</div>
				    <?php
				}
			}else{
				echo 'ბაზაში სიახლეები არ მოიძებნა...';
			}
		}else{
			echo mysqli_error($con);
		}

	}


 ?>
