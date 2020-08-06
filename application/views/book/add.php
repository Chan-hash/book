
	<h3>Add Blog</h3>
	<a href="<?php echo base_url('book/index'); ?>" class="btn btn-default">Back</a>
	
	<form action="<?php echo base_url('book/submit') ?>" method="post" class="form-horizontal">

		<div class="form-group">
			<label for="name" class="col-md-2 text-right">Name</label>
			<div class="col-md-10">
				<input type="text" name="txt_name" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="intro" class="col-md-2 text-right">Mini Introduction</label>
			<div class="col-md-10">
				<textarea name="txt_intro" class="form-control"></textarea>
			</div>
		</div>

		<div class="form-group">
			<label for="selling" class="col-md-2 text-right">Selling Price</label>
			<div class="col-md-10">
				<textarea name="txt_selling" class="form-control"></textarea>
			</div>
		</div>

		<div class ="form-group">
			<label for="image" class="col-md-2 text-right">Cover Image</label>
			<div class="col-md-10">
			<input type = "file" name="userfile" size="20">
		</div>

		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnSave" class="btn btn-primary" value="Save">
			</div>
		</div>
	
	</form>
	
