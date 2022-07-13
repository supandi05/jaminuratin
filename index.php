<?php include('header.php')  ?>
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="banner_content">
								<?php 
								include 'koneksi.php';
								$query = mysqli_query($con,"select * from profil");
								while($data = mysqli_fetch_array($query)){
								?>
								<h2><?php echo $data['nama_masjid']; ?></td></h2>
								<p><?php echo $data['visi']; ?></p>
								  <?php } ?>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="home_left_img">
								<img class="img-fluid" src="assets/img/masjid.jpg" alt="masjid">
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
      
<?php include('footer.php')  ?>