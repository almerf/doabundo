
	<?php #echo $this->session->userdata('user'); ?>
	<?php
	#	$userdata = $this->User_Profile_Model->getBiodata('cecep');
		#echo $userdata['username'];

	?>

	<?php
		foreach($_SESSION as $key=>$value) {
			$tem_arr = $value;
			$userdata = $this->User_Profile_Model->getBiodata($value['username']);
					#echo $valuee;
			}


	?>

	<!-- Header section end -->
  <div class="container h-100">
      <div class="row align-items-center h-100">
          <div class="col-10 mx-auto">
              <div class="jumbotron">
                <div class="row">
                  <div class="col-3 mx-auto">
                    <div class="row align-items-center h-100">
											<div class="col-5 align-items-center">
												<img src="<?= base_url()?>assets/img/profile_pict/<?= $userdata['foto_profil']?>" alt="Foto Profil">
												<b>Profil</b>
											</div>
										</div>
                  </div>
                  <div class="col-5 mx-auto">
                    <div class="row">
                    	<b>Biodata</b>
                    </div>
										<div class="row">
											<div class="col-5">
												Nama
											</div>
											<div class="col-6">
												<?php echo $userdata['username']; ?>
											</div>
										</div>
										<div class="row">
											<div class="col-5">
												Alamat
											</div>
											<div class="col-6">
												<?php echo $userdata['alamat']; ?>
											</div>
										</div>
										<div class="row">
											<div class="col-5">
												Jenis Kelamin
											</div>
											<div class="col-6">
												<?php echo $userdata['jenis_kelamin']; ?>
											</div>
										</div>
										<div class="row">
											<b>Kontak</b>
										</div>
										<div class="row">
											<div class="col-5">
												No Telp
											</div>
											<div class="col-6">
												<?php echo $userdata['kontak']; ?>
											</div>
										</div>
										<div class="row">
											<div class="col-5">
												Email
											</div>
											<div class="col-6">
												<?php echo $userdata['e-mail']; ?>
											</div>
										</div>



                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
	<!-- Footer section end -->
