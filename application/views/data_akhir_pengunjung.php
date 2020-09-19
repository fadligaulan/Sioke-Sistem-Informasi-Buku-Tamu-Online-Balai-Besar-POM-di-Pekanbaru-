<?php if ($this->session->userdata('nama_user') === 'pengujian') : ?>
<div class="panel panel-widget">
    <div class="form-body">
        <a href="<?php echo site_url('Exportdata/export/'); ?>" type="button"
            class="btn btn_5 btn-lg btn-warning warning_11">Export Excel</a>
        <a href="<?php echo site_url('biodata/cetak'); ?>" type="button"
            class="btn btn_5 btn-lg btn-warning warning_11">Cetak PDF</a>
    </div>
    <div class="tables table-responsive">
        <h4>Daftar Buku Tamu:</h4>
        <table class="table table-hover">
            <thead>
                <tr class="info">
                    <th>No</th>
                    <th>Nama </th>
                    <th>Jenis kelamin</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Pekerjaan</th>
                    <th>Keperluan</th>
                    <th>Jam</th>
                    <th>Tanggal</th>
                    <th>Foto</th>
                    <th>Nama penerima</th>
                    <th>Nama penjawab</th>
                    <th>View</th>
                    <th>Cetak Surat Permohonan</th>
                    <th>Berita Acara</th>
                    <th>Hasil UJI</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                    foreach ($biodata as $row) : ?>
                <tr class="success">
                    <td width="3%"><?php echo ++$no; ?></td>
                    <td><?php echo ucwords($row->nama); ?></td>
                    <td><?php echo ucwords($row->jenis_kelamin); ?></td>
                    <td><?php echo ucwords($row->umur); ?></td>
                    <td><?php echo ucwords($row->alamat); ?></td>
                    <td><?php echo ucwords($row->no_hp); ?></td>
                    <td><?php echo ucwords($row->pekerjaan); ?></td>
                    <td><?php echo ucwords($row->keperluan); ?></td>
                    <td><?php echo ucwords($row->jam); ?></td>
                    <td><?php echo tgl_indo($row->tanggal); ?></td>
                    <td><img src="<?php echo base_url('assets/images/foto/' . $row->foto) ?>" width="50px" high="50px">
                    </td>
                    <td><?php echo $row->nama_penerima; ?></td>
                    <td><?php echo $row->nama_penjawab; ?></td>
                    <td>
                        <a href="<?php echo site_url('Biodata/update_pengujian/' . $row->id_biodata); ?>" type="button"
                            class="btn btn-sm btn-warning warning_33">View</a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('biodata/cetak_permohonan_uji/' . $row->id_biodata); ?>"
                            type="button" class="btn btn_5 btn-sm btn-warning warning_11">Cetak Surat Permohonan</a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('biodata/cetak_berita_acara/' . $row->id_biodata); ?>"
                            type="button" class="btn btn_5 btn-sm btn-warning warning_11">Berita Acara</a>
                    </td>
                    <td>
                        <a href="<?php echo site_url('biodata/cetak_ba/' . $row->id_biodata); ?>" type="button"
                            class="btn btn_5 btn-sm btn-warning warning_11">Hasil UJI</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif ?>
<?php if ($this->session->userdata('nama_user') != 'pengujian') : ?>
<div class="panel panel-widget">
    <div class="form-body">
        <div class="row">
            <form action="<?php echo base_url() . 'index.php/biodata/print_periode' ?>" method="post">
                <div class="col-md-6">
                    <label for="exampleInputEmail1">Dari Tanggal</label>
                    <input type="date" name="tanggal1" class="form-control" id="exampleInputEmail1"
                        placeholder="Dari Tanggal" required="">
                    <label for="exampleInputEmail1">Sampai Tanggal</label>
                    <input type="date" name="tanggal2" class="form-control" id="exampleInputEmail1"
                        placeholder="Sampai Tanggal" required=""><br>
                    <button type="submit" class="btn btn_5 btn-lg btn-warning warning_11" name="submit">Cetak
                        PDF</button>
                </div><br>
                <div class="col-md-6">
                    <a href="<?php echo site_url('Exportdata/export/'); ?>" type="button"
                        class="btn btn_5 btn-lg btn-warning warning_11">Export Excel</a>
                </div>
            </form>
        </div><br><br>
        <div class="tables table-responsive">
            <h4>Data Buku Tamu:</h4>
            <table class="table table-hover">
                <thead>
                    <tr class="info">
                        <th>No</th>
                        <th>Nama </th>
                        <th>Jenis kelamin</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Pekerjaan</th>
                        <th>Keperluan</th>
                        <th>Jam</th>
                        <th>Tanggal</th>
                        <th>Foto</th>
                        <th>Nama penerima</th>
                        <th>Nama penjawab</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($this->session->userdata('level') === '1') : ?>
                    <?php $no = 0;
                            foreach ($biodata as $row) : ?>
                    <tr class="success">
                        <td width="3%"><?php echo ++$no; ?></td>
                        <td><?php echo ucwords($row->nama); ?></td>
                        <td><?php echo ucwords($row->jenis_kelamin); ?></td>
                        <td><?php echo ucwords($row->umur); ?></td>
                        <td><?php echo ucwords($row->alamat); ?></td>
                        <td><?php echo ucwords($row->no_hp); ?></td>
                        <td><?php echo ucwords($row->pekerjaan); ?></td>
                        <td><?php echo ucwords($row->keperluan); ?></td>
                        <td><?php echo ucwords($row->jam); ?></td>
                        <td><?php echo tgl_indo($row->tanggal); ?></td>
                        <td><img src="<?php echo base_url('assets/images/foto/' . $row->foto) ?>" width="50px"
                                high="50px">
                        </td>
                        <td><?php echo $row->nama_penerima; ?></td>
                        <td><?php echo $row->nama_penjawab; ?></td>
                        <td><a href="<?php echo site_url('biodata/cetak_by_id/' . $row->id_biodata); ?>" type="button"
                                class="btn btn_5 btn-sm btn-warning warning_11">Cetak </a>
                            <a href="<?php echo site_url('Biodata/update/' . $row->id_biodata); ?>" type="button"
                                class="btn btn-sm btn-warning warning_33">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif ?>
                    <?php if ($this->session->userdata('level') != '1') : ?>
                    <?php $no = 0;
                            foreach ($admin as $row) : ?>
                    <tr class="success">
                        <td width="3%"><?php echo ++$no; ?></td>
                        <td><?php echo ucwords($row->nama); ?></td>
                        <td><?php echo ucwords($row->jenis_kelamin); ?></td>
                        <td><?php echo ucwords($row->umur); ?></td>
                        <td><?php echo ucwords($row->alamat); ?></td>
                        <td><?php echo ucwords($row->no_hp); ?></td>
                        <td><?php echo ucwords($row->pekerjaan); ?></td>
                        <td><?php echo ucwords($row->keperluan); ?></td>
                        <td><?php echo ucwords($row->jam); ?></td>
                        <td><?php echo ucwords($row->tanggal); ?></td>
                        <td><img src="<?php echo base_url('assets/images/foto/' . $row->foto) ?>" width="50px"
                                high="50px">
                        </td>
                        <td><?php echo ucwords($row->nama_penerima); ?></td>
                        <td><?php echo ucwords($row->nama_penjawab); ?></td>
                        <td><a href="<?php echo site_url('biodata/cetak_by_id/' . $row->id_biodata); ?>" type="button"
                                class="btn btn_5 btn-sm btn-warning warning_11">Cetak </a>
                            <a href="<?php echo site_url('Biodata/update/' . $row->id_biodata); ?>" type="button"
                                class="btn btn-sm btn-warning warning_33">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif ?>