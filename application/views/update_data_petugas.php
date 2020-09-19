


	<!-- <h1>WebcamJS Test Page</h1>
	<h3>Demonstrates simple capture &amp; display with a shutter sound effect</h3>
	<h3>(Note: Sound implemented using HTML5 Audio, not part of WebcamJS)</h3> -->
	<form action=""  id="form-data" method="post" enctype="multipart/form-data">
		<div class="panel panel-widget">
			<div class="chute chute-center">
				<div class="row mb40">
					<div class="form-title">
						<h4><marquee>Update data petugas</marquee></h4>
					</div>
					<br>
					<div class="col-md-11">
						<?php if($message = $this->session->flashdata('message')): ?>
							<div class="alert alert-dismissible alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?>"><?php echo $message['message']; ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>    
						<?php endif; ?><br>
					</div>
					<div class="col-md-6">
						<input type="hidden" name="id" value="<?php echo $petugas->id_petugas; ?>">
						<div class="form-group"> 
							<label for="exampleInputEmail1">Nama Petugas</label> 
							<input type="text" name="nama_petugas" value="<?php echo $petugas->nama_petugas; ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" required=""> 
						</div> 
						<div class="form-group">
							<label for="exampleInputEmail1">Layanan</label>
							<select name="id_layanan" id="selector1" class="form-control1" required="">
								<option value="<?php echo $petugas->id_layanan; ?>"><?php echo $petugas->nama_layanan; ?></option>
								<?php foreach ($layanan as $row):?>
								<option value="<?php echo $row->id_layanan; ?>"><?php echo $row->nama_layanan; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<button type="submit" name="submit" value="true" class="btn btn-default">Submit</button>
					</div>
				</div> 
			</div>
		</div>
	</form>
	
	<!-- First, include the Webcam.js JavaScript Library -->