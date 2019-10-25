<?php $this->load->view('partials/header'); ?>
	<section class="top-letest-product-section bg-gray">
		<div class="container">
			<div class="section-title-mid">
				<h2>Detail Makanan & Minuman</h2>
			</div>
			<br>
			<div class="col-lg-12 row">
				<div class="col-lg-4">
					<img class="d-satuan" src="<?php echo base_url(); ?>assets/images/makanan/nasi_katsu.png" alt=""></div>
				<div class="col-lg-6">
					<h4>Nasi Katsu</h4>
					<div class="rating">
	                        	<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
	                </div>
	                <div>
	                	Harga: Rp.12.000
	                </div>
	                <!-- <div class="tersedia">
	                	Stock: <span style="color: green;">Tersedia</span>
	                </div> -->
	                <div class="tersedia">
	                	Stock: <span style="color: red;">Tidak Tersedia</span>
	                </div>
	                <div class="col-lg-12 row">
	                	<div class="col-lg-4 jumlah">
	                		<div class="input-group">
					          <span class="input-group-btn">
					              <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
					                <span><strong>-</strong></span>
					              </button>
					          </span>
					          <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
					          <span class="input-group-btn">
					              <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
					                  <span><strong>+</strong></span>
					              </button>
					          </span>
     						 </div>
	                	</div>
	                	<div class="col-lg-8">
	                		<div class="form-group">
						    <label for="exampleInputEmail1">Catatan Tambahan (Opsional)</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contoh: ayam tambah satu">
						  </div>
	                	</div>
	                </div>
	                <div class="col-lg-12">
	                	<button type="button" class="btn btn-danger active">Add to cart</button>
	                </div>
	                

				</div>

			</div>
			<br>
			<hr>
	        <br>

			<div class="col-lg-12 row d-flex justify-content-between">
				<div class="col-lg-4"><button type="button" class="btn btn-success btn-lg btn-block active" id="todeskripsi">Deskripsi</button></div>
				<div class="col-lg-4"><button type="button" class="btn btn-success btn-lg btn-block" id="tokomposisi">Komposisi</button></div>
				<div class="col-lg-4"><button type="button" class="btn btn-success btn-lg btn-block" id="togizi">Info Gizi</button></div>
			</div>

			<div class="col-lg-12 bg-white-2 d-flex justify-content-between">
				<p class="deskripsi">Dibuat dari daging ayam pilihan dan bahan serta rempah yang bukan kaleng kaleng, chicken katsu ini memiliki rasa yang mantap dan juga bumbu serta rempah yang dipilih dengan baik agar rasa dari chicken katsu ini menjadi istimewa.</p>
				<p class="komposisi">Ini Komposisi</p>
				<p class="gizi">Ini info gizi</p>
			</div>


		</div>
	</section>
<?php $this->load->view('partials/footer'); ?>