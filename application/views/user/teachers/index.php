<<<<<<< HEAD
<?php $this->load->view('user/includes/header'); ?>
<style>
    .teachers-button{
        padding: 0  0 3rem 2rem;
    }
    .teachers-button button{
        padding: 5px 15px;
        border-radius: 5px;
        border: none;
        background-color: #012549;
        color: #fff;
    }
    .teachers-button button a{
        color: #fff;
    }
</style>
=======
<?php $this->load->view('user/includes/header'); 
?>
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
        <section class="section db p120 mar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
<<<<<<< HEAD
                            <h3>Professor və Müəllim heyəti</h3>
                            <ul class="breadcrumb">
                                <li><a href="<?php echo base_url('index');?>">Ana Səhifə</a></li>
                                <li class="active">Professor və Müəllim heyəti</li>
=======
                            <h3>İxtisaslar üzrə Professor və Müəllim heyəti</h3>
                            <ul class="breadcrumb">
                                <li><a href="../index.html">Ana Səhifə</a></li>
                                <li class="active">İxtisaslar üzrə Professor və Müəllim heyəti</li>
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                    <div class="row blog-grid">
                        
                        <?php foreach($teacher as $tech){?>
                        <div class="col-md-3">
                            <div class="course-box">
                                <div class="image-wrap entry">
<<<<<<< HEAD

                                    <img style ="height: 250px; object-fit: contain;" src="<?php echo base_url('upload/teachers/'.$tech['t_profile_photo']);?>" 
                                    onerror="this.onerror=null; this.src='<?php echo base_url('upload/teachers/').'alt.png';?>'"
                                    alt="notFound" class="img-responsive">

=======
                                    <img src="<?php echo base_url("upload/techers/").$tech['t_profile_photo']?>" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="./teacher-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
                                </div>
                                <div class="course-details">
                                    <h4>

<<<<<<< HEAD
                                        <a href="<?php echo base_url("tech_single/").$tech['t_id']?>" title=""><?php echo $tech['t_name']. " " .$tech['t_surname'];?></a>
                                    </h4>
                                    <p>Elmi adı: <?php echo $tech['i_c3_name'];?>
                                    </p>
                                    <p>
                                        E-posta:<br> <?php echo $tech['t_e_mail'];?>
                                    </p>                                
                                </div>
                                <div class="teachers-button">
                            <button><a href="<?php echo base_url("tech_single/").$tech['t_id']?>" title="">Ətraflı</a></button>
                           </div>
=======
                                        <a href="./teacher-single.html" title=""><?php echo $tech['t_surname'].$tech['t_name']?></a>
                                    </h4>
                                    <p>Elmi adı: <?php echo $tech['t_scientific_level_id']?>
                                    </p>
                                    <p>
                                        E-posta: <?php echo $tech['t_e_mail']?>
                                    </p>                                </div>
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
                           </div>
                        </div>
                        <?php }?>

                        <hr class="invis">
<<<<<<< HEAD
=======

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <ul class="pagination ">
                                    <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
                                    <li class="active"><a href="javascript:void(0)">1</a></li>
                                    <li><a href="javascript:void(0)">2</a></li>
                                    <li><a href="javascript:void(0)">3</a></li>
                                    <li><a href="javascript:void(0)">...</a></li>
                                    <li><a href="javascript:void(0)">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
                    </div>
                </div>
                <div class="dark-light fabs">
                    <i class='bx bx-moon moon fab'></i>
                    <i class='bx bx-sun sun fab'></i>
                </div>
        </section>

        <?php $this->load->view('user/includes/footer'); ?>
