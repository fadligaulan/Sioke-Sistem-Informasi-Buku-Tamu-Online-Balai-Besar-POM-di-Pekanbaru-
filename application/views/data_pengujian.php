<!-- <h1>WebcamJS Test Page</h1>
	<h3>Demonstrates simple capture &amp; display with a shutter sound effect</h3>
	<h3>(Note: Sound implemented using HTML5 Audio, not part of WebcamJS)</h3> -->
<form action="" id="form-data" method="post" enctype="multipart/form-data">
    <div class="panel panel-widget forms-panel">
        <div class="form-title">
            <h4>Silahkan isi biodata untuk layanan pengujian...</h4>
        </div>
        <br>
        <div class="col-md-11">
            <?php if ($message = $this->session->flashdata('message')) : ?>
            <div class="alert alert-dismissible alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?>">
                <?php echo $message['message']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?><br>
        </div>
        <div class="form-body">
            <input type="hidden" name="id_layanan" value="1">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap"
                    required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Pangkat/NRP/NIP</label>
                <input type="text" name="pangkat" class="form-control" id="exampleInputEmail1" placeholder="Pangkat/NIP/NRP"
                    required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" placeholder="Jabatan"
                    required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kantor/Instansi</label>
                <input type="text" name="instansi" class="form-control" id="exampleInputEmail1" placeholder="Nama Instansi"
                    required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telp/HP</label>
                <input type="text" name="hp" class="form-control" id="exampleInputEmail1" placeholder="Telp/HP"
                    required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">No.Surat/Tgl Surat</label>
                <input type="text" name="tgl_surat" class="form-control" id="exampleInputEmail1" placeholder="No.Surat/Tgl Surat"
                    required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Sampel</label>
                <input type="text" name="sampel" class="form-control" id="exampleInputEmail1" placeholder="Nama Sampel"
                    required="">
            </div>
            <button type="submit" name="submit" value="true" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>