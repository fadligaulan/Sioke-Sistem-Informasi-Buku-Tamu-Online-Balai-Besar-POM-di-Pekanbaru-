<div class="panel panel-widget">
	<div class="tables">
		<div class="title">
			<a href="<?php echo site_url('user/insert/'); ?>" type="button" class="btn btn-sm btn-warning warning_33">Tambah User</a>
		</div><br>
		<h4>Daftar data user:</h4>
		<div class="col-md-11">
			<?php if($message = $this->session->flashdata('message')): ?>
				<div class="alert alert-dismissible alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?>"><?php echo $message['message']; ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>    
			<?php endif; ?><br>
		</div>
		<table class="table table-hover"> 
			<thead> 
				<tr class="info"> 
					<th>No</th> 
					<th>Nama User</th>
					<th>Username</th> 
					<th>Password</th>
					<th>Aksi</th> 
				</tr> 
			</thead> 
			<tbody>
				<?php $no = 0; foreach($user as $row): ?> 
				<tr class="success"> 
					<td width="3%"><?php echo ++$no; ?></td> 
					<td><?php echo $row->nama_user; ?></td> 
					<td><?php echo $row->username; ?></td>
					<td><?php echo $row->password; ?></td> 
					<td><a href="<?php echo site_url('user/update/'. $row->id_user); ?>" type="button" class="btn btn-sm btn-warning warning_33">Update</a>
						<a href="<?php echo site_url('user/delete/'. $row->id_user); ?>" type="button" class="btn btn-sm btn-warning warning_33">Delete</a></td>
				</tr>
			<?php endforeach; ?> 
			</tbody>
			<!-- <tfoot>
				<tr class="danger">
					<th></th>
					<td>Total</td>
					<td></td>
					<td>Total</td>
					<td>Total</td>
					<td>Total</td>
				</tr>
			</tfoot> -->
		</table> 
	</div>
</div>