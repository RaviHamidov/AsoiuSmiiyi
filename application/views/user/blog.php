<?php $this->load->view('user/includes/header_style');?>
<?php $this->load->view('user/includes/header');?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('assets/user/');?>images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Certified Teacher</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Teacher <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">

        <?php foreach($event as $events){?>
          <div class="col-md-6 col-lg-4 ftco-animate" >
            <div class="blog-entry" >
              <a href="<?php echo base_url('blog_single/'.$events['id']); ?>" class="block-20 d-flex align-items-end" 
              style="background-image: url('<?php echo base_url('upload/events/'.$events['img']); ?>');">
								<div class="meta-date text-center p-2">
                  <span class="day"><?php echo date('d', strtotime($events['date']));?></span>
                  <span class="mos"><?php 
                  $arr = ["yanv.","fevr.","mart","apr.","may","iyun","iyul","avq.","sent.","okty.","noy.","dek."];
                  echo $arr[(int)date('m', strtotime($events['date']))];?></span>
                  <span class="yr"><?php echo date('Y', strtotime($events['date']));?></span>
                </div> 
              </a>
              <div class="text bg-white p-4" style ="height:200px">
                <h3 class="heading"><a href="<?php echo base_url('blog_single/'.$events['id']); ?>"></a></h3>
                <p class ="keep-scrolling"><?php echo $events['title']; ?></p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="<?php echo base_url('blog_single/'.$events['id']); ?>" class="btn btn-primary">Ətraflı oxu <span class="ion-ios-arrow-round-forward"></span></a></p>
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