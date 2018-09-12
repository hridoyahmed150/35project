<div class="container">
	<div class="row">
		<div class="col-12 mar">
			<h2 class="slider-info">slider related all information</h2>
		</div>
	<div class="col-12">
		<form action="../functions.php" method="post" name="myForm"  enctype="multipart/form-data">
			<div class="col-12 mar">
				<div class="custom-file">
				    <input type="file" name="file" class="custom-file-input" id="file-upload">
				    <label class="custom-file-label" for="file-upload">Choose file</label>
				    <div id="message"></div>
			  	</div>
			</div>
			<div class="col-12 mar">
				<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text">write your slider content</span>
				  </div>
				  <textarea class="form-control" aria-label="With textarea" name="content"></textarea>
				</div>
			</div>
			<div class="col-12">
				<div class="input-group mb-3">
				  <input type="text" name="heading" class="form-control" placeholder="slider heading" aria-describedby="basic-addon1">
				</div>
			</div>
			<div class="col-12 text-center">
				<button type="submit" class="btn btn-outline-primary" id="slider-button">Submit</button>
			</div>
		</form>
	</div>
</div>