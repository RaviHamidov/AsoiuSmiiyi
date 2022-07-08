<?php $this->load->view('user/includes/header'); ?>
        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Elanlar</h3>
                            <ul class="breadcrumb">
                                <li><a href="<?php echo base_url('index');?>">Ana Səhifə</a></li>
                                <li class="active">Elanlar</li>
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
                        
                    
                    <?php foreach($event as $events){ ?>
                        
                        <div class="col-md-4">
                       
                            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img style="height: 250px; object-fit: cover;" src="<?php echo base_url('upload/events/'.$events['img']) ?>" alt="image not found" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="<?php echo base_url('ann_detail_form/'.$events['id']); ?>" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <div class="course-details">
                                    <h4>

                                        <a href="<?php echo base_url('ann_detail_form/'.$events['id']); ?>" title=""><?php echo $events['title']; ?>
                                        </a>
                                    </h4>
                                    <p><?php echo $events['description']; ?></p>
                                </div>
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-clock-o"></i> <?php echo date('d-m-Y', strtotime($events['date']));?></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <?php } ?>
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