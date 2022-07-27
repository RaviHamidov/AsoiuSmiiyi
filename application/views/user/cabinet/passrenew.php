<?php $_SESSION['user_id'] = $std['c_id'];?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--jQuery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!--Fontwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/') ?>cabinet.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/') ?>reset.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/') ?>darkmode.css">
    <script src="<?php echo base_url('assets/user/js/') ?>cabinet.js"></script>
    <title>İstifadəçi paneli</title>
</head>
<body>

    

<div class = "h-100 d-flex align-items-center justify-content-center">
    <div class="main-card card m-5 " style = "width:30%;">
<div class = "py-4 px-4 my-1 mx-1">

  <form action="<?php echo base_url('renewpass_act'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />

                   
                    <div id="aze" class="tab-content current">
                        <label for="current">Cari şifrənizi daxil edin</label>
                        <input type="password" name="current" id="taze" class="form-control" placeholder="cari şifrə">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("cari"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>

                        <label for="new1">Yeni şifrənizi daxil edin</label>
                        <input type="password" name="new1" id="taze" class="form-control" placeholder="yeni şifrə">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("new1"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>

                        <label for="new2">Yeni şifrənizi təkrar daxil edin</label>
                        <input type="password" name="new2" id="taze" class="form-control" placeholder="yeni şifrə təkrar">
                        <!-- form validation start display show -->
                        <?php if(isset($form_error)){ ?>
                            <small class="form_error_style"><?php echo form_error("new2"); ?></small>
                        <?php } ?>
                        <!-- form validation end display show -->
                        <br>
                        
                    </div>
                    <?php if($this->session->flashdata('success')){ ?>
    <b><p style="color:green; text-align:center;"><?php echo $this->session->flashdata('success') ?></p></b>
  <?php } ?>


  <?php if($this->session->flashdata('err')){ ?>
    <b><p style="color:red; text-align:center;"><?php echo $this->session->flashdata('err') ?></p></b>
  <?php } ?>
                    
                        <div class="row">

                            <button type="submit" class="btn btn-info btn-block" style="margin-top: 23px; height: 40px;">Təsdiqlə</button>
                        </div>
                    
                        </div>
         
                </form>
                        </div></div>
               
                        </body>
                        </html>