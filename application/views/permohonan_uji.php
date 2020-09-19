<table width="100%" border="1" cellspacing=0 cellpadding=0>
    <tr>
        <td>
            <table>
                <tr>
                    <td width=50% align="left">
                        Laboratorium Pengujian Balai Besar POM di Pekanbaru
                    </td>
                    <td width=50% align="right">
                        BBPOM-PKU .Form.02.P.4.4-01
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table width="100%" border="0" cellspacing=0 cellpadding=0>
    <tr>
        <td>
            <table width="100%" border="1" cellspacing=0 cellpadding=0>
                <tr>
                    <td width=20% align="left">
                        <img src="<?php echo base_url('assets/images/logo/badan_pom.png') ?>" width="120px">
                    </td>
                    <td width=80%>
                        <center><strong>SURAT PERMOHONAN UJI LABORATORIUM</strong></center>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table width="100%" class="table1" border="1" cellspacing=0 cellpadding=0>
    <tr height="100%">
        <td>
            <table width="100%" border="0" cellspacing=0 cellpadding=0>
                <tr>
                    <td width=50% align="left">
                        <table>
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td><?php echo $biodata['no_surat']; ?></td>
                            </tr>
                            <tr>
                                <td>Lampiran</td>
                                <td>:</td>
                                <td>.........Lembar</td>
                            </tr>
                            <tr>
                                <td>Perihal</td>
                                <td>:</td>
                                <td>Permintaan Uji</td>
                            </tr>
                        </table>
                    </td>
                    <td valign="top" width=50% align="right">
                        Pekanbaru, <?php $tanggal_st = date('Y-m-d'); ?><?php echo tgl_indo($tanggal_st); ?>
                    </td>
                </tr>
                <br>
                <br>
                <br>
                <br>
                <br>
                <tr>
                    <td>Kepada Yth.</td>
                </tr>
                <tr>
                    <td>Kepala Balai Besar POM di Pekanbaru</td>
                </tr>
                <tr>
                    <td>Dengan Hormat,</td>
                </tr>
                <tr>
                    <td>Yang bertanda tangan di bawah ini:</td>
                </tr>
                <br>
                <br>
                <tr>
                    <td width=50% align="left">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?php echo ucwords($biodata['nama']); ?></td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td>:</td>
                                <td><?php echo $biodata['NIP']; ?></td>
                            </tr>
                            <tr>
                                <td>Pangkat</td>
                                <td>:</td>
                                <td><?php echo ucwords($biodata['pangkat']); ?></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td><?php echo ucwords($biodata['jabatan']); ?></td>
                            </tr>
                            <tr>
                                <td>Nama Kantor/Instansi/Pribadi</td>
                                <td>:</td>
                                <td><?php echo ucwords($biodata['instansi']); ?></td>
                            </tr>
                            <tr>
                                <td>Telp/HP</td>
                                <td>:</td>
                                <td><?php echo ucwords($biodata['no_hp']); ?></td>
                            </tr>
                            <tr>
                                <td>No.Surat/Tgl Surat</td>
                                <td>:</td>
                                <td><?php echo ucwords($biodata['tgl_surat']); ?></td>
                            </tr>
                            <tr>
                                <td>Nama Sampel</td>
                                <td>:</td>
                                <td><?php echo ucwords($biodata['sampel']); ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table><br><br><br>
<table border=0 cellspacing=0 cellpadding=0 width="100%">
    <tr>
        <td valign="top" width="80%" align=right bgcolor=#ffffff>
        </td>
        <td valign="top" width="20%" align=right bgcolor=#ffffff>
            <center>Hormat Kami</center>
        </td>
    </tr>
    <br><br><br><br><br>
    <tr>
        <td valign="top" width="80%" align=right bgcolor=#ffffff>
        </td>
        <td valign="top" width="20%" align=right bgcolor=#ffffff>
            <center><?php echo ucwords($biodata['nama']); ?></center>
        </td>
    </tr>
</table>