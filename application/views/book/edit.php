
	<h3>Edit Blog</h3>
	<a href="<?php echo base_url('book/index'); ?>" class="btn btn-default">Back</a>
	<form action="<?php echo base_url('book/update') ?>" method="post" class="form-horizontal">
		<input type="hidden" name="txt_hidden" value="<?php echo $books->id; ?>">
		<div class="form-group">
			<label for="title" class="col-md-2 text-right">Name</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $books->name; ?>" name="txt_name" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="intro" class="col-md-2 text-right">Mini Introduction</label>
			<div class="col-md-10">
				<textarea name="txt_intro" class="form-control"  rows="20"><?php echo $books->intro; ?></textarea>
			</div>
		</div>

		<div class="form-group">
			<label for="selling" class="col-md-2 text-right">Selliing Price</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $books->selling_price; ?>" name="txt_selling" class="form-control" required>
			</div>

		


		<div class ="form-group">
			<label for="image" class="col-md-2 text-right">Cover Image</label>
			<div class="col-md-10">
			<input type = "file"  name="userfile" size="20">
		</div>


		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
			</div>
		</div>
	</form>
	
