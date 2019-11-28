<?php $this->load->view('partials/header'); ?>
<?php# echo $data?>

<?php
#foreach($data as $arra => $dt) {
	#echo $arra;
#	echo 'Test : '.$arra.'-----------<br>';
#	foreach ($dt as $datttta) {
		#foreach ($row as $key => $value) {
		#	echo '<option value="' . $row ;
			#echo $var;
#			echo "data : ".$datttta."<br>";
		#}
#	}
#}

#	foreach($data as $key=>$value) {
#				echo '<option value="' . $key ;
	#			echo $value;
		#}
?>



<section class="top-letest-product-section bg-gray">
	<div class="container">
		<div class="section-title-mid">
				<h2>Hasil Pencarian</h2>
				<br>
		</div>

		<!-- card -->
		<div class="row" >
		<?php for ($x = 0; $x <= sizeof($data)-1; $x++) : ?>
					<div class="col-lg-3" style="margin-bottom: 30px; cursor: pointer;">
											<div class="card">
													<img class="card-img-top" src="<?php echo base_url(); ?>assets/images/makanan/nasi_katsu.png">
													<div class="card-block">
															<h5 class="text-bold"><?php echo $data[$x]['nama']?></h5>
															<div class="rating">
										<?php for ($star = 0; $star <= ceil($data[$x]['rating'])-1; $star++) :?>
										<span class="fa fa-star checked"></span>
										<?php endfor; ?>
										<?php for ($star = 0; $star <= 5-ceil($data[$x]['rating'])-1; $star++) :?>
										<span class="fa fa-star checked " style="color:gray"></span>
										<?php endfor; ?>
															</div>
															<h5><?php echo 'Rp.'.$data[$x]['harga']?></h5>
													</div>
											</div>
							</div>
							<br>

		<?php endfor; ?>
						</div>
		<?php



		#foreach($data as $arra => $dt) {
			#echo $arra;
		#	echo 'Test : '.$arra.'-----------<br>';
		#	foreach ($dt as $datttta) {
				#foreach ($row as $key => $value) {
				#	echo '<option value="' . $row ;
					#echo $var;
		#			echo "data : ".$datttta."<br>";
				#}
		#	}
		#}

		#	foreach($data as $key=>$value) {
		#				echo '<option value="' . $key ;
			#			echo $value;
				#}
		?>

	</div>
</section>

<?php $this->load->view('partials/footer'); ?>
