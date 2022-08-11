<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
    <link rel="icon" href="<?php echo base_url('assets/user/images');?>/logo.png">
    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/'); ?>/login.css" />
    <title>Smiiyi.Az | İstifadəçi Girişi</title>
  </head>
  <body>



    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          
  <?php if($this->session->flashdata('success')){ ?>
    <b><p style="color:green; text-align:center;"><?php echo $this->session->flashdata('success') ?></p></b>
  <?php } ?>


  <?php if($this->session->flashdata('err')){ ?>
    <b><p style="color:red; text-align:center;"><?php echo $this->session->flashdata('err') ?></p></b>
  <?php } ?>
          <form action="<?php echo base_url('login_act'); ?>" method="post" class="sign-in-form">
          <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />
            <h2 class="title">İstifadəçi Girişi</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" value="Daxil Ol" class="btn solid" />
          </form>
        
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <a href="<?php echo base_url('index') ?>"><button class="back-button">Ana Səhifə</button></a>
          </div>
          <img src="<?php echo base_url('assets/user/images/') ?>login.svg" class="image" alt="" />
        </div>
        
      </div>
    </div>

    <script src="<?php echo base_url('assets/user/js/') ?>login.js"></script>
  </body>
</html>
