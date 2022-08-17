<?php $_SESSION['user_id'] = $std['c_id']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>İstifadəçi paneli</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/') ?>passrenew.css">
</head>

<body>

    <div class="logos">
        <a href="<?php echo base_url('index') ?>">
            <img src="<?php echo base_url('assets/user/images/') ?>logo.png" alt="logo.png">
        </a>
    </div>

    <form action="<?php echo base_url('renewpass_act'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />


        <div class="tab-content">
            <a href="<?php echo base_url('cabinet'); ?>">
               < Geri</a>
            <div class="divin">
                <label for="current">Cari şifrənizi daxil edin</label>
                <br>
                <input type="password" name="current" id="taze" class="form-control" placeholder="cari şifrə">
                <!-- form validation start display show -->
                <?php if (isset($form_error)) { ?>
                    <small class="form_error_style"><?php echo form_error("cari"); ?></small>
                <?php } ?>
                <!-- form validation end display show -->
            </div>
            <div class="divin">
                <label for="new1">Yeni şifrənizi daxil edin</label>
                <br>
                <input type="password" name="new1" id="taze" class="form-control" placeholder="yeni şifrə">
                <!-- form validation start display show -->
                <?php if (isset($form_error)) { ?>
                    <small class="form_error_style"><?php echo form_error("new1"); ?></small>
                <?php } ?>
                <!-- form validation end display show -->

            </div>
            <div class="divin">
                <label for="new2">Yeni şifrənizi təkrar daxil edin</label>
                <br>
                <input type="password" name="new2" id="taze" class="form-control" placeholder="yeni şifrə təkrar">
                <!-- form validation start display show -->
                <?php if (isset($form_error)) { ?>
                    <small class="form_error_style"><?php echo form_error("new2"); ?></small>
                <?php } ?>
                <!-- form validation end display show -->
                <p>
                    *Şifrənizin daxilində ən az bir böyük hərf və ! @ # tipli simvollardan istifadə etməyiniz
                    təhlükəsizilinizin artması üçün vacibdir.
                </p>
            </div>
            <div class="row">

                <button type="submit" class="btn btn-info btn-block" style="margin-top: 23px; height: 40px;">Təsdiqlə</button>
            </div>
        </div>
        <?php if ($this->session->flashdata('success')) { ?>
            <b>
                <p style="color:green; text-align:center;"><?php echo $this->session->flashdata('success') ?>
                </p>
            </b>
        <?php } ?>


        <?php if ($this->session->flashdata('err')) { ?>
            <b>
                <p style="color:red; text-align:center;"><?php echo $this->session->flashdata('err') ?></p>
            </b>
        <?php } ?>



        </div>

    </form>

</body>

</html>