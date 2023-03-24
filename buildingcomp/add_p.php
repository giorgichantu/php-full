<?php 
	include "header.php";
 ?>
<div class="container">
	<h1>დაამატე შენი საკუთრება</h1>
	<p>აქ შეიყვანე შენი სახლის ან ბინის მონაცემები რომ დაიდოს გასაყიდად
</p>
	<div class="row">
		<div class="col-md-6">
			<form action="upload.php" method="POST" enctype="multipart/form-data">

			    <div class="form-group">
			    	<label for="">პროექტის სახელი:</label>
			    	<input type="text" name="project_name" placeholder="პროექტის სახელი" class="form-control">
			    </div> 
			    <div class="form-group">
			    	<label for="">ბინის შესახებ:</label>
			    	<textarea name="content" placeholder="ბინის შესახებ" class="form-control"></textarea>
			    </div>
			    <div class="form-group">
			    	<label for="">სართულების რაოდენობა:</label>
			    	<input type="text" name="floors_quantity" placeholder="სართულების რაოდენობა" class="form-control">
			    </div> 
			    <div class="form-group">
			    	<label for="">მისამართი:</label>
			    	<input type="text" name="address" placeholder="მისამართი" class="form-control">
			    </div>  
			    <div class="form-group">
			    	<label for="">ბინების რაოდენობა:</label>
			    	<input type="text" name="apartments_quantity" placeholder="ბინების რაოდენობა" class="form-control">
			    </div>
			    <div class="form-group">	
			    	<label for="">ოფისების რაოდენობა :</label>
			    	<input type="text" name="office_quantity" placeholder="ოფისების რაოდენობა " class="form-control">
			    </div> 
			    <div class="form-group">	
			    	<label for="">პროექტის პასი:</label>
			    	<input type="text" name="project_price" placeholder="პროექტის პასი" class="form-control">
			    </div>		
			    <div class="form-group">
			   		<label for="fileToUpload">ფოტოები:</label>
			    	<input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
			   	</div>  
			    <input type="submit" value="Add News" name="submit" class="btn btn-success">
			</form>
		</div>
	</div>
</div>




