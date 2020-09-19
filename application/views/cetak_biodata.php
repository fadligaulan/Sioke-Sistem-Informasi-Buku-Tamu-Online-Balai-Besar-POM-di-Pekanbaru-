<table width="100%">
    <tr>
        <td width=100 align="left">
            <center><strong>BADAN PENGAWAS OBAT DAN MAKANAN R.I<br>BALAI BESAR POM DI PEKANBARU</strong></center>
        </td>
    </tr>
</table>
<table width="100%" class="table1" border=1 cellspacing=1 cellpadding=1>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Pekerjaan</th>
            <th>Keperluan</th>
            <th>Tanggal</th>
            <th>Penerima</th>
            <th>Penjawab</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;
        foreach ($biodata as $row) : ?>
        <tr>
            <td><?php echo ++$no; ?></td>
            <td><?php echo ucwords($row->nama); ?></td>
            <td><?php echo ucwords($row->jenis_kelamin); ?></td>
            <td><?php echo ucwords($row->umur); ?></td>
            <td><?php echo ucwords($row->alamat); ?></td>
            <td><?php echo ucwords($row->no_hp); ?></td>
            <td><?php echo ucwords($row->pekerjaan); ?></td>
            <td><?php echo ucwords($row->keperluan); ?></td>
            <td><?php echo tgl_indo($row->tanggal); ?></td>
            <td><?php echo ucwords($row->nama_penerima); ?></td>
            <td><?php echo ucwords($row->nama_penjawab); ?></td>
            <td><?php echo ucwords($row->status); ?></td>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>