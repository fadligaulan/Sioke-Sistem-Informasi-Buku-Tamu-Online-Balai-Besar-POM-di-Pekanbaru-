


	<!-- <h1>WebcamJS Test Page</h1>
	<h3>Demonstrates simple capture &amp; display with a shutter sound effect</h3>
	<h3>(Note: Sound implemented using HTML5 Audio, not part of WebcamJS)</h3> -->
	<form action=""  id="form-data" method="post" enctype="multipart/form-data">
		<div class="panel panel-widget">
			<div class="chute chute-center">
				<div class="row mb40">
					<div class="form-title">
						<h4><marquee>Update data user</marquee></h4>
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
						<input type="hidden" name="id" value="<?php echo $user->id_user; ?>">
						<div class="form-group"> 
							<label for="exampleInputEmail1">Nama User</label> 
							<input type="text" name="nama_user" value="<?php echo $user->nama_user; ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" required=""> 
						</div> 
						<div class="form-group">
							<label for="exampleInputEmail1">Jenis Layanan</label>
							<select name="id_layanan" id="selector1" class="form-control1" required="">
								<option value="<?php echo $user->id_layanan; ?>"><?php echo $user->nama_layanan; ?></option>
								<?php foreach ($layanan as $row):?>
								<option value="<?php echo $row->id_layanan; ?>"><?php echo $row->nama_layanan; ?></option>
								<?php endforeach; ?>
								<option value="5">Super Admin</option>
							</select>
						</div>
						<div class="form-group"> 
							<label for="exampleInputEmail1">Username</label> 
							<input type="text" name="username" value="<?php echo $user->username; ?>" class="form-control" id="exampleInputEmail1" placeholder="Username" required=""> 
						</div>
						<div class="form-group"> 
							<label for="exampleInputEmail1">Password</label> 
							<input type="password" name="password" value="<?php echo $user->password; ?>" class="form-control" id="exampleInputEmail1" placeholder="Password" required=""> 
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Status</label>
							<select name="aktif" id="selector1" class="form-control1" required="">
								<option value="<?php echo $user->aktif; ?>"><?php echo $user->aktif; ?></option>
								<option value="Y">Aktif</option>
								<option value="T">Non Aktif</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Level</label>
							<select name="level" id="selector1" class="form-control1" required="">
								<option value="<?php echo $user->level; ?>"><?php echo $user->level; ?></option>
								<option value="1">Admin</option>
								<option value="2">Super Admin</option>
							</select>
						</div>
						<button type="submit" name="submit" value="true" class="btn btn-default">Submit</button>
					</div>
				</div> 
			</div>
		</div>
	</form>
	
	<!-- First, include the Webcam.js JavaScript Library -->