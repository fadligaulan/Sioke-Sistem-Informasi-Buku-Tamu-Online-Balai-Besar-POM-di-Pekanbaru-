<div class="panel panel-widget">
	<div class="tables">
		<div class="title">
			<a href="<?php echo site_url('petugas/insert/'); ?>" type="button" class="btn btn-sm btn-warning warning_33">Tambah petugas</a>
		</div><br>
		<h4>Daftar data petugas:</h4>
		<div class="col-md-12">
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
					<th>Nama petugas</th>
					<th>Layanan</th>
					<th>Aksi</th> 
				</tr> 
			</thead> 
			<tbody>
				<?php $no = 0; foreach($petugas as $row): ?> 
				<tr class="success"> 
					<td width="3%"><?php echo ++$no; ?></td> 
					<td><?php echo $row->nama_petugas; ?></td> 
					<td><?php echo $row->nama_layanan; ?></td>
					<td><a href="<?php echo site_url('petugas/update/'. $row->id_petugas); ?>" type="button" class="btn btn-sm btn-warning warning_33">Update</a>
						<a href="<?php echo site_url('petugas/delete/'. $row->id_petugas); ?>" type="button" class="btn btn-sm btn-warning warning_33">Delete</a></td>
				</tr>
			<?php endforeach; ?> 
			</tbody>
		</table> 
	</div>
</div>