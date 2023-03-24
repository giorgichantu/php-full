<?php  
	function fetch_comments( $con, $post_id, $table_name="comments"){
		$sq = "SELECT * FROM `comments` WHERE post_id = '". $post_id. "'";
		$ress = mysqli_query($con, $sq);
		if ($ress) {
			while ($com = mysqli_fetch_array($ress)) {
				?><div style="width: 700px;border:solid 1px;border-color: gray;border-radius: 5px; margin-left:10px; margin-top: 10px;">
					<p><?php echo $com['content']; ?> </p>

					</div><?php
			}
		}
	}
	function fetch_12_news($table_name, $con){
		$sql = "SELECT * FROM " . $table_name;
		$res = mysqli_query($con, $sql);
		if ($res) {
			if (mysqli_num_rows($res)>0) {
				while ($post = mysqli_fetch_array($res)) {  ?>
				    <div class="post" style="width: 800px;background-color: #FFFFFF; height: 1050px; border:solid 1px;border-radius: 5px; margin: auto; margin-top: 30px;">
				    	<h1 style="text-align: center; height: 50px;"><?php echo $post['title']; ?></h1>
				    	<div class="desc">
				    		<p style="font-size: 20px; height: 80px;margin-top: 30px;width: 780px;margin: auto;">
				    			<?= $post['content']; ?>
				    		</p>
				    	</div>
				    	<div class="img-bg" style="background-image: url('../uploads/<?php echo $post['poster']; ?>');margin-top: 10px;">
				    	</div>
					   <div class="comments-area">
							<h3 class="" style="text-align: center;">Comments</h3>
							<div class="form-group">
								<form method="POST" action="add_comment.php">
									<textarea name="msg" placeholder="add comment there.." class="" style="width: 600px; margin-left: 25px;float: left;border-radius: 10px;"></textarea>
									<input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
									<input type="submit" name="add_comment" value="Add" class="" style="width: 100px; text-align: center;height:42px; padding-left: 10px;border-radius: 10px; border-color: green;  ">	
								</form>
							</div>
							<div class="comment-list" style="border:solid 1px;border-radius: 5px;overflow: auto; width: 750px;height: 220px; margin: auto;">
							 <?php fetch_comments($con, $post['id'], "comments"); ?>
							</div>
						</div>
					</div>
				  
				    <?php
				}
			}else{
				echo "no";
			}
		}else{
			echo mysqli_error($con);
		}
	}
	?>