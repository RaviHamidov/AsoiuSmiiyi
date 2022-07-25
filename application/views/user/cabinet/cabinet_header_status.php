
<?php if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_status'])){
    $this->session->set_flashdata('err',"Diqqət! E-poçt və şifrə daxil edin!");
    redirect(base_url('login'));
} ?>

<?php $student = $this->db->select('s_name')->where('c_id',$_SESSION['user_id'])->get('items2')->row_array(); ?>


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
<header class="header">
            <div class="topbar-cabinet container-fluid">
                <div class="item-1 logo-img">
                    <a href="<?php echo base_url('index') ?>">
                        <img src="<?php echo base_url('assets/user/img/') ?>logo.png" alt="logo.png">
                    </a>
                </div>
                <div class="item-2">
                    <h4>Xoş gəldiniz! <?php echo $student['s_name']; ?></h4>
                </div>
                <a href="<?php echo base_url('logout'); ?>">
                    <button type="button" class="btn btn-danger">Exit</button>
                </a>
                
        </div>
    </header>
