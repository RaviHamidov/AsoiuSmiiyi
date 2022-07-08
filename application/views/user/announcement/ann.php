
<?php $this->load->view('user/includes/header'); ?>


<section class="section db p120">
      <div class="container">
        <div class="row">
          <div class="col-md-32">
            <div class="tagline-message page-title text-center">
              <h3>Elanlar</h3>
              <ul class="breadcrumb">
                <li><a href="<?php echo base_url('announcement');?>">Elanlar</a></li>
                <li class="active">
               
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section gb nopadtop">
      <div class="container">
        <div class="boxed">
          <div class="row">
            <div class="col-md-32">
              <div class="content blog-list">
                <div class="blog-wrapper clearfix">
                  <div class="blog-meta">
                    <h3><?php echo $x->title;?></h3>
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> 29/06/2022</li>
                    </ul>
                  </div>
                  <div class="col-md-32 shop-media">
                    <div class="row">
                      <div class="col-md-32 shop-media">
                        <div class="img-responsive article-head-img">
                        <img src="<?php echo base_url('upload/events/'.$x->img) ?>" alt="image not found" class="img-responsive">
                          <div class="magnifier">
                            <a rel="prettyPhoto[inline]" href="../upload/elan-1-3.jpeg" title=""><i
                                class="flaticon-add"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="blog-desc-big mt-2">
                    <p>
                      <h3><?php echo $x->description;?></h3>
                    </p>
                    <hr class="invis" />
                    <div class="row">
                      <div class="col-md-3 col-sm-4 col-xs-4">
                        <div class="image-wrap entry">
                          <div class="magnifier">
                            <a rel="prettyPhoto[inline]" href="../upload/elan-1-2.jpeg" title=""><i
                                class="flaticon-add"></i></a>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
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