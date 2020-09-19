<?php if ($this->session->userdata('nama_user') === 'admin') : ?>
<div class="panel panel-widget">
    <div class="tables table-responsive">
        <h4>Data Pengunjung:</h4>
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
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
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
                    <td><img src="<?php echo base_url('assets/images/foto/' . $row->foto) ?>" width="100" high="100">
                    </td>
                    <td><a href="<?php echo site_url('Biodata/update/' . $row->id_biodata); ?>" type="button"
                            class="btn btn-sm btn-warning warning_33">View</a></td>
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
<?php endif ?>
<?php if ($this->session->userdata('nama_user') != 'admin') : ?>
<div class="panel panel-widget">
    <div class="tables table-responsive">
        <h4>Data Pengunjung:</h4>
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
                    <th>View</th>
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
                    <td><?php echo ucwords($row->tanggal); ?></td>
                    <td><img src="<?php echo base_url('assets/images/foto/' . $row->foto) ?>" width="100" high="100">
                    </td>
                    <td><a href="<?php echo site_url('Biodata/update/' . $row->id_biodata); ?>" type="button"
                            class="btn btn-sm btn-warning warning_33">View</a></td>
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
<?php endif ?>