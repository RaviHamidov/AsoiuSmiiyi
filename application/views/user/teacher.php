<?php $this->load->view('user/includes/header_style'); ?>
<?php $this->load->view('user/includes/header'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('assets/user/'); ?>images/bg_125.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread"><?php echo $spec->speciality_name; ?></h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>">Əsas səhifə</a></span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container-fluid px-4">
		<div class="row">
			<?php foreach ($teacher as $tech) { ?>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(<?php echo base_url('upload/teachers/' . $tech['t_profile_photo']); ?>);"></div>
						</div>
						<div class="text pt-3 text-center">
							<a href="<?php echo base_url("tech_single/") . $tech['t_id'] ?>" title="">
								<h3><?php echo $tech['t_name'] . " " . $tech['t_surname']; ?></h3>
							</a>
							<span class="position mb-2"> <?php echo $tech['i_c3_name']; ?></span>
							<div class="faded">
								<p><?php echo $tech['t_e_mail']; ?></p>

								<ul class="ftco-social text-center">

									<?php if (!empty($tech['t_facebook'])) { ?>
										<li class="ftco-animate"><a target="_blank" href="<?php echo $tech['t_facebook']; ?>"><span class="olchu icon-facebook"></span></a></li>
									<?php } else {

										echo "";
									} ?>

									<?php if (!empty($tech['t_linkedin'])) { ?>
										<li class="ftco-animate"><a target="_blank" href="<?php echo $tech['t_linkedin']; ?>"><span class="icon-linkedin"></span></a></li>
									<?php } else {
										echo "";
									} ?>

									<?php if (!empty($tech['t_twitter'])) { ?>
										<li class="ftco-animate"><a target="_blank" href="<?php echo $tech['t_twitter']; ?>"><span class="icon-twitter"></span></a></li>
									<?php } else {
										echo "";
									} ?>

								</ul>
							</div>

						</div>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
</section>



<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footer_style'); ?>