<?php $this->load->view('user/includes/header_style'); ?>
<?php $this->load->view('user/includes/header'); ?>

<style>
  .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
  }

  .pagination a.active {
    background-color: dodgerblue;
    color: white;
  }

  .pagination a:hover:not(.active) {
    background-color: #ddd;
  }
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('assets/user/'); ?>images/bg_124.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Elanlar</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>">Əsas səhifə <i class="ion-ios-arrow-forward"></i></a></span><a href="<?php echo base_url('blog'); ?>"><span>Elanlar</span></p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section bg-light" style="position:relative;z-index:1;">
    <div class="container">
    
        <div>
            <span>
                <a href="<?php echo base_url('blog'); ?>"><button class="btnhysz">Bütün Elanlar</button></a>
            </span>
            <!-- #Duzeldilmeli => Demeli burdaki butonlara teyinatina uygun id verilmelidi -->

            <span class="allevents mb-1 mr-1">
                <a href="<?php echo base_url('blog'); ?>"><button>Komyuter Muhendisliyi</button></a>
            </span>
            <span class="allevents mb-1 mr-1">
                <a href="<?php echo base_url('blog'); ?>"><button>Neft-Qaz Muhendisliyi</button></a>
            </span>
            <span class="allevents mb-1 mr-1">
                <a href="<?php echo base_url('blog'); ?>"><button>Geofizika Muhendisliyi</button></a>
            </span>

        </div>
        <div class="row">
      <?php foreach ($event as $events) { ?>
        <div class="col-md-6 col-lg-4 ftco-animate blog-entry-parent" style="height:480px;">
          <div class="blog-entry">
            <a href="<?php echo base_url('blog_single/' . $events['id']); ?>" class="block-20 d-flex align-items-end" style="background-image: url('<?php echo base_url('upload/events/' . $events['img']); ?>');">
              <div class="meta-date text-center p-2">
                <span class="day"><?php echo date('d', strtotime($events['date'])); ?></span>
                <span class="mos"><?php
                                  $arr = ["yanv.", "fevr.", "mart", "apr.", "may", "iyun", "iyul", "avq.", "sent.", "okty.", "noy.", "dek."];
                                  echo $arr[(int)date('m', strtotime($events['date']))]; ?></span>

              </div>
            </a>
            <div class="text bg-white p-1">
              <h3 class="heading"><a href="<?php echo base_url('blog_single/' . $events['id']); ?>"></a></h3>
              <p class="keep-scrolling">
                <?php if (strlen($events['title']) > 80) {
                  echo mb_substr(($events['title']), 0, 80, 'UTF-8') . '...';
                } else {
                  echo $events['title'];
                }  ?>
              </p>
              <div class="align-items-center hr-btn-affect mt-4">
                <a href="<?php echo base_url('blog_single/' . $events['id']); ?>">
                  <button>Ətraflı oxu </button>
                </a>
              </div>

            </div>

          </div>

        </div>
      <?php } ?>

      <!-- <div style = "margin-right:auto;margin-left:auto;margin-top:-60px;" >
				<a href = "">
					<button class="btn btn-primary py-3 px-4 mt-5">Daha çox Elan</button>
				</a>
		</div> -->
    </div>

    <style>
      .pagination {
        margin-top: 30px !important;
        display: flex;
        justify-content: center;
      }
    </style>
    <div class="pagination">
      <?php if ($curr <= 0) { ?>
        <a href="<?php echo base_url('blog/' . ($curr)); ?>">&laquo;</a>
      <?php } else { ?>
        <a href="<?php echo base_url('blog/' . ($curr - 1)); ?>">&laquo;</a>
      <?php } ?>
      <?php //echo $pgcnt.' '.$curr;

      for ($i = 1; $i <= $pgcnt; $i++) {
      ?>

        <a <?php if ($i - 1 == $curr) {
              echo ' class="active" ';
            } ?> href="<?php echo base_url('blog/' . ($i - 1)); ?>"><?php echo $i; ?></a>

      <?php }
      if ($curr < $pgcnt - 1) { ?>
        <a href="<?php echo base_url('blog/' . ($curr + 1)); ?>">&raquo;</a>
      <?php } else { ?>
        <a href="<?php echo base_url('blog/' . ($curr)); ?>">&raquo;</a>
      <?php } ?>

    </div>


</section>


<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footer_style'); ?>