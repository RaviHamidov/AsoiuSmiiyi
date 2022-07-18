<?php $this->load->view('user/includes/header'); 
?>
        <section class="section db p120 mar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>İxtisaslar üzrə Professor və Müəllim heyəti</h3>
                            <ul class="breadcrumb">
                                <li><a href="../index.html">Ana Səhifə</a></li>
                                <li class="active">İxtisaslar üzrə Professor və Müəllim heyəti</li>
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
                                    <img src="<?php echo base_url("upload/techers/").$tech['t_profile_photo']?>" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="./teacher-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <div class="course-details">
                                    <h4>

                                        <a href="./teacher-single.html" title=""><?php echo $tech['t_surname'].$tech['t_name']?></a>
                                    </h4>
                                    <p>Elmi adı: <?php echo $tech['t_scientific_level_id']?>
                                    </p>
                                    <p>
                                        E-posta: <?php echo $tech['t_e_mail']?>
                                    </p>                                </div>
                           </div>
                        </div>
                        <?php }?>

                        <hr class="invis">

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
                    </div>
                </div>
                <div class="dark-light fabs">
                    <i class='bx bx-moon moon fab'></i>
                    <i class='bx bx-sun sun fab'></i>
                </div>
        </section>

        <?php $this->load->view('user/includes/footer'); ?>
