<?php $this->load->view('user/includes/header'); ?>

    <section class="section db p120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tagline-message page-title text-center">
                        <h3><?php echo $teacher1->t_name.' '.$teacher1->t_surname; ?></h3>
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url('index'); ?>">Əsas səhifə</a></li>
                            <li class="active"><?php echo $teacher1->t_name; ?></li>
                        </ul>
                    </div>
                </div>
            </div><!-- end row -->
        </div>
    </section><!-- end section -->

    <section class="section gb nopadtop">
        <div class="container">
            <div class="boxed">
                <div class="row">

                    <div class="sidebar col-md-4">
                        <div class="widget clearfix">
                            <?php if (!empty($teacher1->t_profile_photo)){?>                         
                            <div class="banner-widget">
                                <img style ="height: 250px; object-fit: contain;" src="<?php echo base_url('upload/teachers/'.$teacher1->t_profile_photo);?>" 
                                    onerror="this.onerror=null; this.src='<?php echo base_url('upload/teachers/').'alt.png';?>'"
                                    alt="notFound" class="img-responsive img-rounded">
                            </div>
                             <?php }else{echo "";}?>
                        </div>

                        <div class="widget clearfix">
                            <h2 class="widget-title"><?php echo $teacher1->t_name.' '.$teacher1->t_surname; ?></h2>
                            <div class="post-widget">
                           
                                <div class="media">

                                    <div class="media-body">
                                        <h5>Elmi dərəcə: <?php echo $teacher1->i_c3_name; ?></h5>

                                    </div>
                                </div>
                                <?php if (!empty($teacher1->t_dob)){?>
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Təvəllüd: <?php echo date('d.m.Y', strtotime($teacher1->t_dob)); ?></h5>

                                    </div>
                                <?php }else{echo "";}?>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-0">E-mail: <?php echo $teacher1->t_e_mail; ?></h5>

                                    </div>
                                </div>
                                 <?php if (!empty($teacher1->t_phone)){?>   
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-0">Telefon: <?php echo $teacher1->t_phone; ?></h5>
                                    </div>
                                </div>
                                  <?php }else{echo "";}?>   
                                    <?php if (!empty($teacher1->speciality_name)){?>
                                <div class="media">
                                    <div class="media-body">
                                        <h5>SMİİYİ də tədris apardığı ixtisas:<br> <?php echo $teacher1->speciality_name; ?></h5>
                                    </div>
                                </div>
                                     <?php }else{echo "";}?>
                            </div><!-- end post-widget -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->

                    <div class="col-md-8">
                        <div class="content blog-list">
                                        <?php if (!empty($teacher1->t_skills)){?>
                            <div class="blog-wrapper clearfix">
                                <div class="blog-desc-big">
                                    <p class="lead">Təhsil və ixtisas üzrə bacarıqlar</p>
                                    <p><?php echo $teacher1->t_skills; ?></p>

                                </div><!-- end desc -->
                            </div>
                                         <?php }else{echo "";}?>
                            <?php if (!empty($teacher1->t_experience)){?>
                            <div class="blog-wrapper clearfix">
                                <div class="blog-desc-big">
                                    <p class="lead">İş təcrübəsi</p>
                                    <p><?php echo $teacher1->t_experience; ?>
                                    </p>
                             <?php }else{echo "";}?>
                                </div><!-- end desc -->
                            </div><!-- end blog -->
                            <?php if (!empty($teacher1->t_language)){?>
                            <div class="blog-wrapper clearfix">
                                <div class="blog-desc-big">
                                    <p class="lead">Dil bilikləri</p>
                                    <p><?php echo $teacher1->t_language; ?></p>
                                </div><!-- end desc -->
                            </div><!-- end blog -->
                             <?php }else{echo "";}?>
                            <br>
                            <?php if (!empty($teacher1->t_facebook)){?>
                            <a target = "_blank" href="<?php echo $teacher1->t_facebook; ?>" class="fa fa-facebook" style="font-size: 2.73em; margin-right:20px;"></a>
                            <?php }else{echo "";}?>
                            
                            <?php if (!empty($teacher1->t_linkedin)){?>
                            <a target = "_blank" href="<?php echo $teacher1->t_linkedin; ?>" class="fa fa-linkedin" style="font-size: 2.73em; margin-right:20px;"></a>
                            <?php }else{echo "";}?>

                            <?php if (!empty($teacher1->t_twitter)){?>
                            <a target = "_blank" href="<?php echo $teacher1->t_twitter; ?>" class="fa fa-twitter" style="font-size: 2.73em; margin-right:20px;"></a>
                            <?php }else{echo "";}?>
                        </div><!-- end content -->
                    </div>
                </div>
            </div>
        </div>
        <div class="dark-light fabs">
            <i class='bx bx-moon moon fab'></i>
            <i class='bx bx-sun sun fab'></i>
        </div>
    </section>
    </div>
    <?php $this->load->view('user/includes/footer'); ?>