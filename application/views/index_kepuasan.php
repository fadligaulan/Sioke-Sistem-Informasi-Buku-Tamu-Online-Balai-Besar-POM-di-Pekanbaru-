<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?php echo $pageTitle; ?></title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url('assets/src/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/src/css/font-awesome.min.css'); ?>">
  <link href="<?php echo base_url('assets/src/css/style.css'); ?>" rel="stylesheet" />
  <!--//Metis Menu -->
  <link href="<?php echo base_url('assets/css/demo-page.css'); ?>" rel="stylesheet" media="all">
  <link href="<?php echo base_url('assets/css/hover.css'); ?>" rel="stylesheet" media="all">
  <link rel="stylesheet" href="<?php echo base_url('assets/sweet_alert2/vendors/css/extensions/sweetalert.css'); ?>">
 

  <!-- =======================================================
    Theme Name: ComingSoon
    Theme URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
    <div class="title">
      <div class="container">
        <div class="col-lg-12 welcome">
          <marquee><h1><font style=font-size:23pt face="Arial" color=#ffffff><b>SELAMAT DATANG DI BALAI BESAR POM DI PEKANBARU</b></font></h1></marquee>
          <h3><font style=font-size:23pt face="Arial" color=#ffffff>Bagaimana penilaian anda terhadap pelayanan kami?</font></h3>
        </div>
      </div>
    </div>
    <br>
    <div class="title">
      <div class="col-md-6 col-md-offset-3">
        <?php if($message = $this->session->flashdata('message')): ?>
          <script type='text/javascript'>
            setTimeout(function () {
              swal({
                title: 'Done',
                text:  '<?php echo $message['message']; ?>',
                imageUrl: '<?php echo base_url('assets/smile/SP.png'); ?>',
                imageWidth: 600,
                imageHeight: 300,
                type: 'success',
                timer: 2000,
                showConfirmButton: true
              });
            },10);
            window.setTimeout(function(){    
              window.location.replace('<?php echo base_url('Kepuasan'); ?>')
            },1000);
          </script>";    
        </div>    
        <?php endif; ?><br>
      </div>
    </div>
  <form action="<?php echo base_url().'index.php/Kepuasan/survei'?>"  id="formdata" method="post">
    <div class="title">
      <div class="container">
        <div class="col-md-6 col-md-offset-3">
         <div class="form-group">
          <font style=font-size:12pt face="Arial" color=#ffffff><label>Silahkan pilih nama petugas</label></font>
          <select class="form-control" name="id_petugas" style="width: 100%;" required="">
            <option value="">--Pilih Petugas--</option>
            <?php $no = 0; foreach ($survei as $row): ?>
            <option value="<?php echo $row->id_petugas; ?>"><?php echo $row->nama_petugas; ?></option>
          <?php endforeach; ?>
          </select>
          </div>
        </div>
      </div>
    </div>
    <div class="timer">
      <div class="container">
        <div class="col-md-12">
          <div class="text-center">
            <!-- Countdown dashboard start -->
            <div id="countdown_dashboard">
              <div class="countDown">
               <figure class="col-xs-3 .col-sm-3 .col-lg-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <button type="submit" name="sangat_puas" value="sangat_puas" class="hvr-pulse-shrink">
                  <img class="img-thumbnail img-fluid rounded-circle" src="<?php echo base_url('assets/smile/SP.png'); ?>" itemprop="thumbnail" alt="Image description" />
                </button>
                <span><h1><font style=font-size:23pt face="Arial" color=#ffffff><b>SANGAT PUAS</b></font><h1></span> 
                </figure>

                <figure class="col-xs-3 .col-sm-3 .col-lg-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <button type="submit" name="puas" value="puas" class="hvr-pulse-shrink">
                  <img class="img-thumbnail img-fluid rounded-circle" src="<?php echo base_url('assets/smile/P.png'); ?>" itemprop="thumbnail" alt="Image description" />
                </button>
                <span><h1><font style=font-size:23pt face="Arial" color=#ffffff><b>PUAS</b></font><h1></span>
                </figure>

                <figure class="col-xs-3 .col-sm-3 .col-lg-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                 <button type="submit" name="cukup_puas" value="cukup_puas" class="hvr-bob">
                  <img class="img-thumbnail img-fluid rounded-circle" src="<?php echo base_url('assets/smile/CP.png'); ?>" itemprop="thumbnail" alt="Image description" />
                </button>
                <span><h1><font style=font-size:23pt face="Arial" color=#ffffff><b>CUKUP PUAS</b></font><h1></span>
                </figure>

                <figure class="col-xs-3 .col-sm-3 .col-lg-4" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <button type="submit" name="kurang_puas" value="kurang_puas" class="hvr-buzz">
                  <img class="img-thumbnail img-fluid rounded-circle" src="<?php echo base_url('assets/smile/TP.png'); ?>" itemprop="thumbnail" alt="Image description" />
                </button>
                <span><h1><font style=font-size:23pt face="Arial" color=#ffffff><b>KURANG PUAS</b></font></h1></span>
                </figure>
              </div>
            </div>
            <!-- Countdown dashboard end -->
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- <div class="container">
    <div class="col-lg-12">
      <form class="form-horizontal">
        <div class="text-center">
          <div class="subscribe">
            <select name="id_petugas" class="form-control">  
              <?php $no = 0; foreach ($survei as $row): ?>
              <option value="<?php echo $row->id_petugas; ?>"><?php echo $row->nama_petugas; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
    </div>
  </div> -->


  <div class="social-icon">
    <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <div class="text-center">
          <ul class="social-network">
            <li><a href="<?php echo site_url('dashboard'); ?>" class="fb tool-tip" title="Dashboard"><i class="fa fa-home"></i></a></li>
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            <li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer start here -->
  <footer>
    <div class="col-md-6 col-md-offset-3">
      <div class="text-center">
        <div class="copyright">
          &copy; IT Balai Besar POM di Pekanbaru
          <div class="credits">
            Silahkan pilih salah satu emot icon pada gambar di atas.
            <a href="https://bootstrapmade.com/">kunjungi kami</a>
          </div>
        </div>
      </div>
    </div>
  </footer>



  <!-- Modal -->
  <div class="modal fade" id="sangat_puas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <form action="<?php echo base_url().'index.php/Kepuasan/sangat_puas'?>"  id="form-data" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Silahkan pilih petugas yang akan di beri sangat puas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group <?=form_error('id_pangkat') ? 'has-error' : null?>">
              <label>Nama Petugas</label>
              <select class="form-control" name="id_petugas" style="width: 100%;" required="">
                <option value="">--Pilih Petugas--</option>
                <?php $no = 0; foreach ($survei as $row): ?>
                <option value="<?php echo $row->id_petugas; ?>"><?php echo $row->nama_petugas; ?></option>
              <?php endforeach; ?>
            </select>
            <?=form_error('id_pangkat')?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" value="true" class="btn btn-success sweet-12">OK</button>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Modal -->
<div class="modal fade" id="puas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <form action="<?php echo base_url().'index.php/Kepuasan/puas'?>"  id="form-data" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Silahkan pilih petugas yang akan di beri icon puas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group <?=form_error('id_pangkat') ? 'has-error' : null?>">
            <label>Nama Petugas</label>
            <select class="form-control" name="id_petugas" style="width: 100%;" required="">
              <option value="">--Pilih Petugas--</option>
              <?php $no = 0; foreach ($survei as $row): ?>
              <option value="<?php echo $row->id_petugas; ?>"><?php echo $row->nama_petugas; ?></option>
            <?php endforeach; ?>
          </select>
          <?=form_error('id_pangkat')?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="submit" value="true">OK</button>
      </div>
    </div>
  </div>
</form>
</div>

<!-- Modal -->
<div class="modal fade" id="cukup_puas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <form action="<?php echo base_url().'index.php/Kepuasan/cukup_puas'?>"  id="form-data" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Silahkan pilih petugas yang akan di beri icon cukup puas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group <?=form_error('id_pangkat') ? 'has-error' : null?>">
            <label>Nama Petugas</label>
            <select class="form-control" name="id_petugas" style="width: 100%;" required="">
              <option value="">--Pilih Petugas--</option>
              <?php $no = 0; foreach ($survei as $row): ?>
              <option value="<?php echo $row->id_petugas; ?>"><?php echo $row->nama_petugas; ?></option>
            <?php endforeach; ?>
          </select>
          <?=form_error('id_pangkat')?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="submit" value="true">OK</button>
      </div>
    </div>
  </div>
</form>
</div>

<!-- Modal -->
<div class="modal fade" id="kurang_puas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <form action="<?php echo base_url().'index.php/Kepuasan/kurang_puas'?>"  id="form-data" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Silahkan pilih petugas yang akan di beri icon kurang puas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group <?=form_error('id_pangkat') ? 'has-error' : null?>">
            <label>Nama Petugas</label>
            <select class="form-control" name="id_petugas" style="width: 100%;" required="">
              <option value="">--Pilih Petugas--</option>
              <?php $no = 0; foreach ($survei as $row): ?>
              <option value="<?php echo $row->id_petugas; ?>"><?php echo $row->nama_petugas; ?></option>
            <?php endforeach; ?>
          </select>
          <?=form_error('id_pangkat')?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="submit" value="true">OK</button>
      </div>
    </div>
  </div>
</form>
</div>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets/src/js/jquery-2.1.1.min.js'); ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('assets/src/js/bootstrap.min.js'); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url('assets/src/js/jquery.lwtCountdown-1.0.js'); ?>"></script>
<script language="Javascript" type="text/javascript" src="<?php echo base_url('assets/src/js/misc.js'); ?>"></script>
<script src="<?php echo base_url('assets/src/js/functions.js'); ?>"></script>
<!-- <script src="<?= base_url(); ?>assets/sweet_alert/js/sweetalert2.all.min.js"></script> -->
<script src="<?php echo base_url('assets/sweet_alert2/vendors/js/extensions/sweetalert.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/sweet_alert2/js/scripts/extensions/sweet-alerts.min.js'); ?>" type="text/javascript"></script>



</body>
</html>



