<?php $this->load->view('user/includes/header_style'); ?>
<?php $this->load->view('user/includes/header'); ?>

<style>
  p{
    letter-spacing: 1px;
    font-family: 'Source Serif Pro', 'Times New Roman', Times, serif;
    margin-bottom: 1em;
    font-size: 1.0625em;
    line-height: 1.52941176em;
    margin: 0 0 12px;
    overflow-wrap: break-word;
    box-sizing: border-box;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    color:black;
  }
  h4{
    font-family: 'Source Serif Pro', 'Times New Roman', Times, serif;
    padding: 10px;
    color: #002f62;
    font-family: 'Source Sans Pro', Arial, sans-serif;
    font-weight: 500;
    margin-top: 0.75em;
  }
  
  .kimg {
    object-fit: contain;
    width: 50% !important;
    padding: 0px 18px 1px 0px;
    margin-bottom:50px;
  }

  .uls {
    margin: 0;
    padding-left: 1.2rem;
    font-family: 'Source Serif Pro', 'Times New Roman', Times, serif;
  margin: 0;
  padding-left: 1.2rem;
  }

  .uls li {
    position: relative;
    list-style-type: none;
    padding-left: 2.5rem;
    margin-bottom: 0.5rem;
  }

  .uls li:before {
    content: '';
    display: block;
    position: absolute;
    left: 0;
    top: -2px;
    width: 5px;
    height: 11px;
    border-width: 0 2px 2px 0;
    border-style: solid;
    border-color: #00a8a8;
    transform-origin: bottom left;
    transform: rotate(45deg);
  }

  *,
  *:before,
  *:after {
    box-sizing: border-box;
  }
  #s img{
    height:4em; 
    width:4em!important; 
    margin-right:10px!important;
    margin-left:0px!important;
    padding-left:0px!important;
    float:left;
  }
</style>


<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('assets/user/images/'); ?>bg_12.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Müəllimlərimiz</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>">Əsas səhifə<i class="ion-ios-arrow-forward"></i></a></span></span></p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <h2 class="mb-3"><?php echo $teacher->t_name . " " . $teacher->t_surname; ?></h2>
        <img src="<?php echo base_url('upload/teachers/') . $teacher->t_profile_photo; ?>" alt="" class="img-fluid kimg">
        <h4>Təcrübə:</h4>
        <p >
          <?php
          $ad_description = $teacher->t_experience;

          $search = "<ul>";
          $replace = "<ul class = 'uls'>";

          $ad_description = str_replace($search, $replace, $ad_description);
          echo $ad_description ?>
        </p>
        <h4>Dil bilikləri:</h4>
        <p >
          <?php
          $ad_description = $teacher->t_language;

          $search = "<ul>";
          $replace = "<ul class = 'uls'>";

          $ad_description = str_replace($search, $replace, $ad_description);
          echo $ad_description ?>
        </p>

        <h4>İxtisas üzrə bacarıqlar:</h4>
        <p >
          <?php
          $ad_description = $teacher->t_skills;

          $search = "<ul>";
          $replace = "<ul class = 'uls'>";

          $ad_description = str_replace($search, $replace, $ad_description);
          echo $ad_description ?>
        </p>
        <br>
        <div id = "s">
        <?php if (!empty($teacher->t_facebook)) { ?>
          <a target="_blank" href="<?php echo $teacher->t_facebook; ?>"><img src="<?php echo base_url('assets/user/images/social/')."fb.jfif"?>"></a>
        <?php } else {
          
          echo "";
        } ?>

        <?php if (!empty($teacher->t_linkedin)) { ?>
          <a target="_blank" href="<?php echo $teacher->t_linkedin; ?>"><img src="<?php echo base_url('assets/user/images/social/')."lnk.png"?>"></a>
        <?php } else {
          echo "";
        } ?>

        <?php if (!empty($teacher->t_twitter)) { ?>
          <a target="_blank" href="<?php echo $teacher->t_twitter; ?>"><img src="<?php echo base_url('assets/user/images/social/')."twt.png"?>"></a>
        <?php } else {
          echo "";
        } ?>
         </div>
      </div>

      <?php $this->load->view('user/includes/right_side'); ?>
    </div>
  </div>
</section>

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footer_style'); ?>