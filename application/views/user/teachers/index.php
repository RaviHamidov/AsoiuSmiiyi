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
        <section class="section db p120 mar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Professor və Müəllim heyəti</h3>
                            <ul class="breadcrumb">
                                <li><a href="<?php echo base_url('index');?>">Ana Səhifə</a></li>
                                <li class="active">Professor və Müəllim heyəti</li>
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

                                    <img style ="height: 250px; object-fit: contain;" src="<?php echo base_url('upload/teachers/'.$tech['t_profile_photo']);?>" 
                                    onerror="this.onerror=null; this.src='<?php echo base_url('upload/teachers/').'alt.png';?>'"
                                    alt="notFound" class="img-responsive">

                                </div>
                                <div class="course-details">
                                    <h4>

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
                           </div>
                        </div>
                        <?php }?>

                        <hr class="invis">
                    </div>
                </div>
                
        </section>

        <?php $this->load->view('user/includes/footer'); ?>
