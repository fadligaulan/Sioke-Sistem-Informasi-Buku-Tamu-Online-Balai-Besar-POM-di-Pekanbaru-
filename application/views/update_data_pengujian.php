<!-- <h1>WebcamJS Test Page</h1>
	<h3>Demonstrates simple capture &amp; display with a shutter sound effect</h3>
	<h3>(Note: Sound implemented using HTML5 Audio, not part of WebcamJS)</h3> -->
<form action="<?php echo base_url() . 'index.php/Biodata/update_pengujian' ?>" id="form-data" method="post">
    <div class="panel panel-widget">
        <div class="chute chute-center">
            <div class="row mb40">
                <div class="form-title">
                    <h4>Silahkan isi biodata untuk layanan pengujian...</h4>
                </div>
                <br>
                <div class="col-md-11">
                    <?php if ($message = $this->session->flashdata('message')) : ?>
                    <div
                        class="alert alert-dismissible alert-<?php echo ($message['status']) ? 'success' : 'danger'; ?>">
                        <?php echo $message['message']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?><br>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="id" value="<?php echo $biodata->id_biodata; ?>">
                    <input type="hidden" name="id_layanan" value="<?php echo $biodata->id_layanan; ?>">
                    <div class="form-group">
                        <img src="<?php echo base_url('assets/images/foto/' . $biodata->foto) ?>" width="300"
                            high="400">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Surat </label>
                        <input type="text" name="no_surat" value="<?php echo $biodata->no_surat; ?>"
                            class="form-control" id="exampleInputEmail1" placeholder="Nomor surat" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama lengkap</label>
                        <input type="text" name="nama" value="<?php echo $biodata->nama; ?>" class="form-control"
                            id="exampleInputEmail1" placeholder="Nama Lengkap" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP</label>
                        <input type="text" name="NIP" value="<?php echo $biodata->NIP; ?>" class="form-control"
                            id="exampleInputEmail1" placeholder="NIP" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pangkat</label>
                        <input type="text" name="pangkat" value="<?php echo $biodata->pangkat; ?>" class="form-control"
                            id="exampleInputEmail1" placeholder="Pangkat" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <input type="text" name="jabatan" value="<?php echo $biodata->jabatan; ?>" class="form-control"
                            id="exampleInputEmail1" placeholder="Jabatan" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Instansi</label>
                        <input type="text" name="instansi" value="<?php echo $biodata->instansi; ?>"
                            class="form-control" id="exampleInputEmail1" placeholder="Instansi" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sampel</label>
                        <input type="text" name="sampel" value="<?php echo $biodata->sampel; ?>" class="form-control"
                            id="exampleInputEmail1" placeholder="Sampel" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis kelamin</label>
                        <select name="jenis_kelamin" id="selector1" class="form-control1" required="">
                            <option value="<?php echo $biodata->jenis_kelamin; ?>">
                                <?php echo $biodata->jenis_kelamin; ?></option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Umur</label>
                        <input type="text" name="umur" value="<?php echo $biodata->umur; ?>" class="form-control"
                            id="exampleInputEmail1" placeholder="Umur" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $biodata->alamat; ?>" class="form-control"
                            id="exampleInputEmail1" placeholder="Alamat" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No TLP</label>
                        <input type="text" name="no_hp" value="<?php echo $biodata->no_hp; ?>" class="form-control"
                            id="exampleInputEmail1" placeholder="No HP" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pekerjaan</label>
                        <input type="text" name="pekerjaan" value="<?php echo $biodata->pekerjaan; ?>"
                            class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keperluan</label>
                        <input type="text" name="keperluan" value="<?php echo $biodata->keperluan; ?>"
                            class="form-control" id="exampleInputEmail1" placeholder="Keperluan" required="">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="foto" value="<?php echo $biodata->foto; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama petugas yang menerima </label>
                        <input type="text" name="nama_penerima" value="<?php echo $biodata->nama_penerima; ?>"
                            class="form-control" id="exampleInputEmail1" placeholder="Nama Penerima" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama petugas yang menjawab </label>
                        <input type="text" name="nama_penjawab" value="<?php echo $biodata->nama_penjawab; ?>"
                            class="form-control" id="exampleInputEmail1" placeholder="Nama Penjawab" required="">
                    </div>
                    <button type="submit" name="submit" value="true" class="btn btn-default">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- First, include the Webcam.js JavaScript Library -->