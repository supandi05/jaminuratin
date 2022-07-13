<?php include('header.php')  ?>

 <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Data Jema'ah</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="jemaah.php">Jema'ah</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->



<div class="section-top-border">
						<h3 class="mb-30 title_color">Data Jema'ah</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">No</div>
									<div class="country">Nama</div>
									<div class="visit">Alamat</div>
									<div class="percentage">Titik Kordinat</div>
								</div>
								<?php 
						include 'koneksi.php';
						$no = 1;
						$query = mysqli_query($con,"select * from data_jemaah");
						while($data = mysqli_fetch_array($query)){
						?>
								<div class="table-row">
									<div class="serial"><?php echo $no++; ?></div>
									<div class="country"><?php echo $data['nama_jemaah']; ?></div>
									<div class="visit"><?php echo $data['alamat_jemaah']; ?></td></div>
									<div class="visit"><?php echo $data['titik_kordinat']; ?></td></div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>



 <?php include('footer.php')  ?>