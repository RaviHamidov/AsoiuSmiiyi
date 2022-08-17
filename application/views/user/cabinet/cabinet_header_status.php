<?php if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_status'])) {
    $this->session->set_flashdata('err', "Diqqət! E-poçt və şifrə daxil edin!");
    redirect(base_url('login'));
} ?>

<?php $student = $this->db->select('s_name')->where('c_id', $_SESSION['user_id'])->get('items2')->row_array(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->

    <link rel="stylesheet" href="<?php echo base_url('assets/user/'); ?>css/bootstrap.min.css">
    <script src="<?php echo base_url('assets/user/'); ?>js/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/') ?>cabinet.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/') ?>reset.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/') ?>darkmode.css">
    <link rel="icon" href="<?php echo base_url('assets/user/images'); ?>/logo.png">
    <script src="<?php echo base_url('assets/user/js/') ?>cabinet.js"></script>
    <title>İstifadəçi paneli</title>
</head>

<body>
    <header class="header">
        <div class="topbar-cabinet container-fluid">
            <div class="item-1 logo-img">
                <a href="<?php echo base_url('index') ?>">
                    <img style="max-width:100px;" src="<?php echo base_url('assets/user/images/') ?>logo.png" alt="logo.png">
                </a>
            </div>

            <div class="hideme item-3" style="margin-left: auto; margin-right: 0;">
                <h4 class="pr-sm-5 ml-sm-5">Xoş gəldiniz! <?php echo $student['s_name']; ?></h4>
            </div>
            <div class="afterhide">
                <a href="<?php echo base_url('logout'); ?>">
                    <button type="button" class="btn btn-danger">Exit</button>
                </a>
            </div>
            <div class="pl-sm-5 mr-sm-1">
                <form action="<?php echo base_url('renewpass'); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                    <input type="hidden" name="std_id" value="<?= $_SESSION['user_id'] ?>" />
                    <button type="submit" class="btn btn-info btn-block" style="height: 60px;">Şifrənizi
                        yeniləyin</button>
                </form>
            </div>
        </div>
    </header>
    <style>
        .mediaQ {
            width: 100% !important;
            min-height: 100vh !important;
        }

        .a1 {
            height: 100% !important;
        }
    </style>