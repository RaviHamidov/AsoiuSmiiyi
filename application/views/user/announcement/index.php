<?php $this->load->view('user/includes/header'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
<style>
    .date-and-button{
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 15px;
                    border-top: 1px solid #eaeaea
                  }
                  .date-and-button div ul{
                    list-style: none;
                    margin: 0 !important;
                    padding: 0;
                  }
                  .date-and-button .date{
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                  }
                  .date-and-button div button{
                    background-color: #012549;
                    padding: 5px 15px;
                    border: none;
                    border-radius: 5px;
                    color: #fff;
                  }
                  .date-and-button div button a{
                    color: white;
                  }
                  .date-and-button div button:hover{
                    background-color: #286090
                  }
</style>
<<<<<<< HEAD
=======
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
=======
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
                                    <img style="height: 250px; object-fit: cover;" src="<?php echo base_url('upload/events/'.$events['img']) ?>" 
                                    onerror="this.onerror=null; this.src='<?php echo base_url('upload/teachers/').'alt.png';?>'"
                                    alt="image not found" class="img-responsive">
                                    
<<<<<<< HEAD
=======
                                    <img style="height: 250px; object-fit: cover;" src="<?php echo base_url('upload/events/'.$events['img']) ?>" alt="image not found" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="<?php echo base_url('ann_detail_form/'.$events['id']); ?>" title=""><i class="flaticon-add"></i></a>
                                    </div>
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
=======
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
                                </div>
                                <div class="course-details" style = "height:200px!important;overflow: hidden!important;height: 3.6em;line-height: 1.2em;">
                                    <h5>
                                        <a href="<?php echo base_url('ann_detail_form/'.$events['id']); ?>" title=""><?php echo $events['title']; ?>
                                        </a>
                                    </h5>
                                    
                                   
                                </div>
<<<<<<< HEAD
<<<<<<< HEAD
                                <div class="date-and-button">
                                    <div class="date" >
                                        <ul >
                                            <li><i class="fa fa-clock-o"></i> <?php echo date('d-m-Y', strtotime($events['date']));?></li>
                                        </ul>
                                    </div>
                                    <div>
                                    <button><a href="<?php echo base_url('ann_detail_form/'.$events['id']); ?>" title="">Ətraflı</a></button>
                                    </div>
=======
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-clock-o"></i> <?php echo date('d-m-Y', strtotime($events['date']));?></li>
                                        </ul>
                                    </div>
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
=======
                                <div class="date-and-button">
                                    <div class="date" >
                                        <ul >
                                            <li><i class="fa fa-clock-o"></i> <?php echo date('d-m-Y', strtotime($events['date']));?></li>
                                        </ul>
                                    </div>
                                    <div>
                                    <button><a href="<?php echo base_url('ann_detail_form/'.$events['id']); ?>" title="">Ətraflı</a></button>
                                    </div>
>>>>>>> 76d0150b9f64b5553f25f3a82b3e49f837971a77
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
                
        </section>

        <?php $this->load->view('user/includes/footer'); ?> 