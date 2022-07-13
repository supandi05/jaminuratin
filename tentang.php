<?php include('header.php')  ?>

 <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Tentang</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="tentang.php">Tentang</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

<!-- Start Sample Area -->
			<section class="sample-text-area">
				<div class="container">
					<?php 
								include 'koneksi.php';
								$query = mysqli_query($con,"select * from profil");
								while($data = mysqli_fetch_array($query)){
								?>
					<h3 class="text-heading title_color"><?php echo $data['nama_masjid']; ?></h3>
					<p class="sample-text">
						Puji dan syukur kita panjatkan kehadirat Allah SWT berkat segala lindungan dan rahmatnya, penyusunan program kerja DKM Nur Atin Desa Mandalaherang tahun 2021 dapat terselesaikan mengacu kepada Surat Keputusan nomor 451/KEP.02-Des/2021 tentang Perubahan atas Keputusan Kepala Desa Mandalaherang Nomor 451/KEP.28-Des/2020 Tentang Pengukuhan Susunan Kepengurusan Dewan Kemakmuran Masjid (DKM) Nur Atin RW 08 Dusun Cicelot Desa Mandalaherang.</p>
						<p class="sample-text">
						Dalam pelaksanaannya, pengurus DKM mengharapkan bantuan serta dukungan seluruh tokoh/pemuka agama dan masyarakat yang berada dilingkungan Masjid Nur Atin pada khusus nya dalam bentuk moril maupun material yang akan sangat dibutuhkan untuk berjalannya program-program yang telah disusun. Untuk donasi melalui No rekening 7148631168 bank Syariah mandiri atas nama Masjid Nur Atin</p>
					 <?php } ?>
				</div>
			<br>
			
				<div class="container">
					<?php 
								include 'koneksi.php';
								$query = mysqli_query($con,"select * from profil");
								while($data = mysqli_fetch_array($query)){
								?>
					<h3 class="text-heading title_color">VISI</h3>
					<p class="sample-text"><?php echo $data['visi']; ?></p>
					 <?php } ?>
				</div>

				<br>
			
				<div class="container">
					<?php 
								include 'koneksi.php';
								$query = mysqli_query($con,"select * from profil");
								while($data = mysqli_fetch_array($query)){
								?>
					<h3 class="text-heading title_color">MISI</h3>
					<p class="sample-text"><?php echo $data['misi']; ?></p>
					 <?php } ?>
				</div>
			</section>
			<!-- End Sample Area -->
<?php include('footer.php')  ?>