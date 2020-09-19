<div class="panel panel-widget">
	<div class="tables">
		<h4>Data survei sangat puas:</h4>
		<table class="table table-hover"> 
			<thead> 
				<tr class="info"> 
					<th><center>No</center></th> 
					<th><center>Nama Petugas</center></th> 
					<th><center>Jumlah Sangat Puas</center></th> 
				</tr> 
			</thead> 
			<tbody>
				<?php $no = 0; foreach($survei1 as $row): ?> 
				<tr class="success"> 
					<td width="2%"><center><?php echo ++$no; ?></center></td> 
					<td width="45%"><center><?php echo $row->nama_petugas; ?></center></td> 
					<td width="45%"><center><?php echo $row->jumlah_sangat_puas; ?></center></td> 
				</tr>
			<?php endforeach; ?> 
			</tbody>
		</table> 
		<h4>Data survei puas:</h4>
		<table class="table table-hover"> 
			<thead> 
				<tr class="info"> 
					<th>No</center></th> 
					<th><center>Nama Petugas</center></th> 
					<th><center>Jumlah Puas</center></th> 
				</tr> 
			</thead> 
			<tbody>
				<?php $no = 0; foreach($survei2 as $row): ?> 
				<tr class="success"> 
					<td width="2%"><?php echo ++$no; ?></td> 
					<td width="40%"><center><?php echo $row->nama_petugas; ?></center></td> 
					<td width="45%"><center><?php echo $row->jumlah_puas; ?></center></td> 
				</tr>
			<?php endforeach; ?> 
			</tbody>
		</table>
		<h4>Data survei cukup puas:</h4>
		<table class="table table-hover"> 
			<thead> 
				<tr class="info"> 
					<th>No</center></th> 
					<th><center>Nama Petugas</center></th> 
					<th><center>Jumlah Cukup Puas</center></th> 
				</tr> 
			</thead> 
			<tbody>
				<?php $no = 0; foreach($survei3 as $row): ?> 
				<tr class="success"> 
					<td width="2%"><?php echo ++$no; ?></td> 
					<td width="40%"><center><?php echo $row->nama_petugas; ?></center></td> 
					<td width="45%"><center><?php echo $row->jumlah_cukup_puas; ?></center></td> 
				</tr>
			<?php endforeach; ?> 
			</tbody>
		</table>
		<h4>Data survei kurang puas:</h4>
		<table class="table table-hover"> 
			<thead> 
				<tr class="info"> 
					<th>No</center></th> 
					<th><center>Nama Petugas</center></th> 
					<th><center>Jumlah Kurang Puas</center></th> 
				</tr> 
			</thead> 
			<tbody>
				<?php $no = 0; foreach($survei4 as $row): ?> 
				<tr class="success"> 
					<td width="2%"><?php echo ++$no; ?></td> 
					<td width="40%"><center><?php echo $row->nama_petugas; ?></center></td> 
					<td width="45%"><center><?php echo $row->jumlah_kurang_puas; ?></center></td> 
				</tr>
			<?php endforeach; ?> 
			</tbody>
		</table>
	</div>
</div>