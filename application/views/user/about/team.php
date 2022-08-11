<?php $this->load->view('user/includes/header_style');?>
<?php $this->load->view('user/includes/header');?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('assets/user/'); ?>images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Rəhbərlik</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>">Əsas səhifə <i class="ion-ios-arrow-forward"></i></a></span> <span>Rəhbər <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    
	<section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row">
				<?php foreach($adm as $tech){?> 
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="staff">
								<div class="img-wrap d-flex align-items-stretch">
									<div class="img align-self-stretch" style="background-image: url(<?php echo base_url('upload/administrator/'.$tech['ad_img']);?>);"></div>
								</div>
								<div class="text pt-3 text-center">
								<a href="<?php echo base_url("team_single/").$tech['ad_id']?>" title="">
								<h3><?php echo $tech['ad_name']. " " .$tech['ad_surname'];?></h3></a>
									<span class="position mb-2"> <?php echo $tech['i_c3_name'];?></span>
									<div class="faded">
										<?php if(isset($tech['ad_mail'])){?>
												<p><?php echo $tech['ad_mail'];?></p>
											<?php }?>
										
					</div>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</section>

		
		<?php $this->load->view('user/includes/footer');?>
	<?php $this->load->view('user/includes/footer_style');?>