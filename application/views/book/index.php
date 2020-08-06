
	<h3>Book list</h3>

	<?php
		if($this->session->flashdata('success_msg')){
	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('success_msg'); ?>
		</div>
	<?php		
		}
	?>


	<?php
		if($this->session->flashdata('error_msg')){
	?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('error_msg'); ?>
		</div>
	<?php		
		}
	?>

	<a href="<?php echo base_url('book/add'); ?>" class="btn btn-primary">Add New</a>
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Mini Intro</th>
				<th>Selling Price</th>
				<th>Cover</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			if($books){
				foreach($books as $book){
		?>
			<tr>
				<td><?php echo $book->id; ?></td>
				<td><?php echo $book->name; ?></td>
				<td><?php echo $book->intro; ?></td>
				<td><?php echo $book->selling_price; ?></td>
				<td><img class="thumbnail" style="height: 200px; width: 140px;" src="<?php echo base_url() ?>assets/images/<?php echo $book->cover ?>"></td>
				<td>
					<a href="<?php echo base_url('book/edit/'.$book->id); ?>" class="btn btn-info">Edit</a>
					<a href="<?php echo base_url('book/delete/'.$book->id); ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete this record?');">Delete</a>
				</td>
			</tr>

			
		<?php
				}
			}
		?>
		</tbody>
	</table>
	<div style="text-align:center">
       <p><?php echo $links; ?></p>
</div>
