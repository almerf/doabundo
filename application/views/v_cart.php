<?php $this->load->view('partials/header'); ?>

	<section class="top-letest-product-section bg-gray">
		<div class="container">
			<div class="section-title-mid">
				<h2>Cart</h2>
				<br>
			</div>
			<div class="col-lg-12">
				<button type="button" class="btn btn-outline-success active" id="topaket">Paket</button>
				<button type="button" class="btn btn-outline-success" id="tosatuan">Satuan</button>
			</div>
			<hr>
			<br>

			<!-- Satuan -->
			<div class="col-lg-12 row d-flex justify-content-between">
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
							<li>Nasi Goreng</li>
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


			<br>
			<div class="col-lg-12 bayar">
				<div class="section-title-left total">
					<h4>Total: Rp.65.000</h4>
				</div>
				<br>
				<div class="col-lg-12">
					<div class="input-field col-lg-3">
						Metode Pembayaran
					    <select>
					      <option value="" disabled selected>Choose your option</option>
					      <option value="1">Bank BCA</option>
					      <option value="2">Bank Mandiri</option>
					      <option value="3">Bank BJB</option>
					    </select>
					  </div>
					  <br>
					<div class="col-lg-1">
						<button type="button" class="btn btn-danger active">Order</button>
					</div>
				</div>
			</div>

		</div>
		
	</section>

<?php $this->load->view('partials/footer'); ?>