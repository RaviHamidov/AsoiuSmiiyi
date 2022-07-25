<?php $this->load->view('user/includes/header'); ?>
<style>
    h5{
        font-size: 18px !important;
    }
    h3{
        font-weight: 600 !important;
    }
    .teacher-single{
        display: flex;
        gap: 30px;
        
    }
    .teacher-sidebar{
        width: 35%;
    }
    
    .img-responsive{
        margin: auto;
    }
    .about-teacher{
        width: 90%;
        margin: auto;
    }
    p{
        padding-left: 20px;
    }
    @media  screen and (max-width: 992px) {
        .teacher-single{
            flex-direction: column;
        }
        .teacher-sidebar{
            width: 100%;
        }
        .teacher-main{
            width: 90%;
            margin: auto;
        }
        h2{
            font-size: 26px;
        }
    }
</style>

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
                <div class="teacher-single">
                    <div class="teacher-sidebar">
                        <div class="teacher-photo">
                            <?php if (!empty($teacher1->t_profile_photo)){?> 
                               <img style ="height: 250px; object-fit: contain;" src="<?php echo base_url('upload/teachers/'.$teacher1->t_profile_photo);?>" 
                                        onerror="this.onerror=null; this.src='<?php echo base_url('upload/teachers/').'alt.png';?>'"
                                        alt="notFound" class="img-responsive img-rounded">
                            <?php }else{echo "";}?>
                        </div>
                        <hr>
                        <div class="about-teacher">
                            <h2 class="widget-title"><?php echo $teacher1->t_name.' '.$teacher1->t_surname; ?></h2>
                            <h5>Elmi dərəcə: <?php echo $teacher1->i_c3_name; ?></h5>
                            <?php if (!empty($teacher1->t_dob)){?>
                                <h5>Təvəllüd: <?php echo date('d.m.Y', strtotime($teacher1->t_dob)); ?></h5>
                            <?php }else{echo "";}?>
                            <h5 class="mt-0">E-mail: <?php echo $teacher1->t_e_mail; ?></h5>
                            <?php if (!empty($teacher1->t_phone)){?>
                                <h5 class="mt-0">Telefon: <?php echo $teacher1->t_phone; ?></h5>
                                <?php }else{echo "";}?>   
                                <?php if (!empty($teacher1->speciality_name)){?>
                                    <h5>SMİİYİ də tədris apardığı ixtisas:<br> <?php echo $teacher1->speciality_name; ?></h5>
                                <?php }else{echo "";}?>
                        </div>
                        <hr>
                    </div>

                    <div class="teacher-main">
                        <?php if (!empty($teacher1->t_skills)){?>
                            <h3 class="lead">Təhsil və ixtisas üzrə bacarıqlar</h3>
                                    <p><?php echo $teacher1->t_skills; ?></p>
                        <?php }else{echo "";}?>
                        <?php if (!empty($teacher1->t_experience)){?>
                        <h3 class="lead">İş təcrübəsi</h3>
                                <p><?php echo $teacher1->t_experience; ?></p>
                        <?php }else{echo "";}?>
                        <?php if (!empty($teacher1->t_language)){?>
                            <h3 class="lead">Dil bilikləri</h3>
                                    <p><?php echo $teacher1->t_language; ?></p>
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

                    </div>
               </div>
                   
                    
            </div>
        </div>
        
    </section>
    </div>
    <?php $this->load->view('user/includes/footer'); ?>