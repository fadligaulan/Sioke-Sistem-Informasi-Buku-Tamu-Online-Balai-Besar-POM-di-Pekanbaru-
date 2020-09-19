


	<!-- <h1>WebcamJS Test Page</h1>
	<h3>Demonstrates simple capture &amp; display with a shutter sound effect</h3>
	<h3>(Note: Sound implemented using HTML5 Audio, not part of WebcamJS)</h3> -->
	 <form action="<?php echo base_url().'index.php/Biodata/insert'?>"  id="form-data" method="post">
		<div class="panel panel-widget forms-panel">
			<div class="form-title">
				<h4>Silahkan isi biodata untuk layanan sertifikasi...</h4>
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
			<div class="col-md-12 table-responsive">
			<center>
				<div id="my_camera"></div>
				<div class="form-body">
				<input type=button value="Take Snapshot" class="btn btn-default" onClick="take_snapshot()">
				</div>
				<div id="results">Your captured image will appear here...</div>
			</center>
			</div>
			<div class="form-body">
				<input type="hidden" name="id_layanan" value="3">
				<div class="form-group"> 
					<label for="exampleInputEmail1">Nama Lengkap</label> 
					<input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" required=""> 
				</div> 
				<div class="form-group">
					<label for="exampleInputEmail1">Jenis kelamin</label>
					<select name="jenis_kelamin" id="selector1" class="form-control1" required="">
						<option>Pilih jenis kelamin</option>
						<option value="Pria">Pria</option>
						<option value="Wanita">Wanita</option>
					</select>
				</div>
				<div class="form-group"> 
					<label for="exampleInputEmail1">Umur</label> 
					<input type="text" name="umur" class="form-control" id="exampleInputEmail1" placeholder="Umur" required=""> 
				</div>
				<div class="form-group"> 
					<label for="exampleInputEmail1">Alamat</label> 
					<input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Alamat" required=""> 
				</div>
				<div class="form-group"> 
					<label for="exampleInputEmail1">No TLP</label> 
					<input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" placeholder="No HP" required=""> 
				</div>
				<div class="form-group"> 
					<label for="exampleInputEmail1">Pekerjaan</label> 
					<input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan" required=""> 
				</div>
				<div class="form-group"> 
					<label for="exampleInputEmail1">Keperluan</label> 
					<input type="text" name="keperluan" class="form-control" id="exampleInputEmail1" placeholder="Keperluan" required=""> 
				</div>
				<div class="form-group">
				<input type="hidden" name="foto" class="image-tag">
				</div>
				<button type="submit" name="submit" value="true" class="btn btn-default">Submit</button> 
			</div>
		</div>
	</form>
	
	<!-- First, include the Webcam.js JavaScript Library -->
	<script type="text/javascript" src="<?php echo base_url('assets/webcam/webcam.min.js'); ?>"></script>
	
	<!-- Configure a few settings and attach camera -->
	<script language="JavaScript">
		Webcam.set({
			width: 1200,
			height: 720,
			image_format: 'jpeg',
			jpeg_quality: 90,
			constraints: {
				width: { exact: 1200 },
				height: { exact: 720 }
			}
		});
		Webcam.attach( '#my_camera' );
	</script>
	
	<!-- A button for taking snaps -->
	

	
	
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		// preload shutter audio clip
		var shutter = new Audio();
		shutter.autoplay = false;
		shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : '<?php echo base_url('assets/webcam/demos/shutter.mp3')?>';
		
		function take_snapshot() {
			// play sound effect
			shutter.play();
			
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				$(".image-tag").val(data_uri);
				// display results in page
				document.getElementById('results').innerHTML = 
				'<h2>Here is your image:</h2>' + 
				'<img src="'+data_uri+'"/>';
			} );
		}
	</script>