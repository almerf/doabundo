<?php $this->load->view('partials/header'); ?>

	<section class="top-letest-product-section bg-gray">
		<div class="container">
			<div class="section-title-mid">
				<h2>Notifikasi</h2>
				<br>
			</div>
			<div class="col-lg-12">
				<button type="button" class="btn btn-outline-success active" id="topaket">Paket</button>
				<button type="button" class="btn btn-outline-success" id="tosatuan">Satuan</button>
			</div>
			<hr>
			<div class="col-lg-12 row d-flex justify-content-between">
				<div class="col-lg-4"><button type="button" class="btn btn-light btn-lg btn-block">Diproses(0)</button></div>
				<div class="col-lg-4"><button type="button" class="btn btn-light btn-lg btn-block">Dikirim(0)</button></div>
				<div class="col-lg-4"><button type="button" class="btn btn-light btn-lg btn-block active">Diterima(1)</button></div>
			</div>
			<!-- Satuan -->
			<br>
			<div class="col-lg-12 row d-flex justify-content-between bottom">
				<div class="col-lg-6 row satuan">
					<div class="col-lg-6">
						<img src="<?php echo base_url(); ?>assets/images/makanan/nasi_goreng.png">
					</div>
					<div class="col-lg-6">
						<ul>
							<li>Nasi Goreng</li>
							<li>Jumlah: 2 Porsi</li>
							<li>Tambahan: Jangan pake pedas</li>
							<li>Total: Rp. 24.000</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 row satuan">
					<div class="col-lg-6">
						<img src="<?php echo base_url(); ?>assets/images/makanan/nasi_katsu.png">
					</div>
					<div class="col-lg-6">
						<ul>
							<li>Nasi Katsu</li>
							<li>Jumlah: 2 Porsi</li>
							<li>Tambahan: Jangan pake pedas</li>
							<li>Total: Rp. 24.000</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 row satuan">
					<div class="col-lg-6">
						<img src="<?php echo base_url(); ?>assets/images/makanan/jus_jambu.png">
					</div>
					<div class="col-lg-6">
						<ul>
							<li>Jus Jambu</li>
							<li>Jumlah: 2 Porsi</li>
							<li>Tambahan: Jangan pake pedas</li>
							<li>Total: Rp. 24.000</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 row satuan">
					<div class="col-lg-6">
						<img src="<?php echo base_url(); ?>assets/images/makanan/jus_mangga.png">
					</div>
					<div class="col-lg-6">
						<ul>
							<li>Jus Mangga</li>
							<li>Jumlah: 2 Porsi</li>
							<li>Tambahan: Jangan pake pedas</li>
							<li>Total: Rp. 24.000</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Paket -->
			<div class="col-lg-12 row d-flex justify-content-between" id="m_paket">
				<div class="col-lg-12 row paket">
					<div class="col-lg-6">
						<img class="paket-size" src="<?php echo base_url(); ?>assets/images/paket_makanan.png">
					</div>
					<div class="col-lg-6">
						<div class="section-title-left">
							<h3>Paket Makanan Indonesia</h3>
						</div>
						<br>
						<ul>
							<li>Acara: Nikahan</li>
							<li>Tambahan:-</li>
							<li>Total: Rp.-</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-12 row paket">
					<div class="col-lg-6">
						<img class="paket-size" src="<?php echo base_url(); ?>assets/images/paket_makanan.png">
					</div>
					<div class="col-lg-6">
						<div class="section-title-left">
							<h3>Paket Makanan Indonesia</h3>
						</div>
						<br>
						<ul>
							<li>Acara: Nikahan</li>
							<li>Tambahan:-</li>
							<li>Total: Rp.-</li>
						</ul>
					</div>
				</div>
			</div>

			<section class='rating-widget'>
			  <br>
			  <div class="section-title-mid">
				<h5 class="rating"><strong>Berikan Rating Anda</strong></h5>
			  </div>
			  <div class='rating-stars text-center'>
			    <ul id='stars'>
			      <li class='star' title='Poor' data-value='1'>
			        <i class='fa fa-star fa-fw'></i>
			      </li>
			      <li class='star' title='Fair' data-value='2'>
			        <i class='fa fa-star fa-fw'></i>
			      </li>
			      <li class='star' title='Good' data-value='3'>
			        <i class='fa fa-star fa-fw'></i>
			      </li>
			      <li class='star' title='Excellent' data-value='4'>
			        <i class='fa fa-star fa-fw'></i>
			      </li>
			      <li class='star' title='WOW!!!' data-value='5'>
			        <i class='fa fa-star fa-fw'></i>
			      </li>
			    </ul>
			  </div>
			  <div class='success-box'>
			    <div class='clearfix'></div>
			    <img alt='tick image' width='32' src='data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0MjYuNjY3IDQyNi42NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQyNi42NjcgNDI2LjY2NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxwYXRoIHN0eWxlPSJmaWxsOiM2QUMyNTk7IiBkPSJNMjEzLjMzMywwQzk1LjUxOCwwLDAsOTUuNTE0LDAsMjEzLjMzM3M5NS41MTgsMjEzLjMzMywyMTMuMzMzLDIxMy4zMzMgIGMxMTcuODI4LDAsMjEzLjMzMy05NS41MTQsMjEzLjMzMy0yMTMuMzMzUzMzMS4xNTcsMCwyMTMuMzMzLDB6IE0xNzQuMTk5LDMyMi45MThsLTkzLjkzNS05My45MzFsMzEuMzA5LTMxLjMwOWw2Mi42MjYsNjIuNjIyICBsMTQwLjg5NC0xNDAuODk4bDMxLjMwOSwzMS4zMDlMMTc0LjE5OSwzMjIuOTE4eiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K'/>
			    <div class='text-message'></div>
			    <div class='clearfix'></div>
			  </div>

			  
			  <div class="col-lg-12 middle">
				<button type="button" class="btn btn-danger btn-lg active">Selesai</button>
			  </div>

			</section>

		</div>
	</section>


<?php $this->load->view('partials/footer'); ?>