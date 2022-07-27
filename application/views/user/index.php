
<?php $this->load->view('user/includes/header');?>


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
                  .owl-theme .owl-nav{
                    display: block !important;
                  }
        .c{
            width: 100%;
            height: 500px!important;
            object-fit: contain!important;
        }

        .carousel-control.left{
            background-image: none;
        }

        .carousel-control.right{
            background-image: none;
        }

        #myCarousel{
            /* background: red; */
            margin-top:90px;
        }



        @media only screen and (max-width: 900px) , (max-width: 600px) {
            .c{
                height: 282px!important;
            }
        }

    </style>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <?php $itemCount = 0;foreach ($items as $item){?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $itemCount++; ?>" <?php if($item['sl_category'] == 1){echo 'class = "active"';}?>></li>
          <?php }?>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        <?php foreach ($items as $item){?>
          <div class="item <?php if($item['sl_category'] == 1){echo 'active';}?>">
          <a href = "<?php echo base_url('ann_detail_form/'.$item['ann_id']); ?>"> <img class="c" src="<?php echo base_url('upload/slider/'.$item['sl_img']); ?>"
            onerror="this.onerror=null; this.src='<?php echo base_url('upload/teachers/').'alt.png';?>'"/>
          </a>
        </div>
      
      <?php }?>
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <section class="section gb">
        <div class="container">
          <div class="section-title text-center">
            <h3>Elanlar</h3>
          </div>
          <!-- end title -->

          <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
          <?php foreach($event as $events){ ?>

            <div class="course-box">
                                <div class="image-wrap entry">
                                    <img style="height: 250px; object-fit: cover;" src="<?php echo base_url('upload/events/'.$events['img']) ?>" 
                                    onerror="this.onerror=null; this.src='<?php echo base_url('upload/teachers/').'alt.png';?>'"
                                    alt="image not found" class="img-responsive">
                                    
                                </div>
                                <div class="course-details" style = "height:200px!important;overflow: hidden!important;height: 3.6em;line-height: 1.2em;">
                                    <h5>
                                        <a href="<?php echo base_url('ann_detail_form/'.$events['id']); ?>" title=""><?php echo $events['title']; ?>
                                        </a>
                                    </h5>
                                    
                                   
                                </div>
                                <div class="date-and-button">
                                    <div class="date" >
                                        <ul >
                                            <li><i class="fa fa-clock-o"></i> <?php echo date('d-m-Y', strtotime($events['date']));?></li>
                                        </ul>
                                    </div>
                                    <div>
                                    <button><a href="<?php echo base_url('ann_detail_form/'.$events['id']); ?>" title="">Ətraflı</a></button>
                                    </div>
                                </div>
                            </div>
          
            <?php } ?>
          </div>
          <hr class="invis" />
          <div class="section-button text-center">
            <a href="./announcement/" class="btn btn-primary">Bütün Elanlar</a>
          </div>
        </div>
  
      </section>





  <section class="section gb nopadtop">
        <div class="container">
          <hr class="invis" />

          <div class="row">
            <div class="col-md-6">
              <div class="box">
                <h4>Rektor</h4>
                <img
                  src="<?php echo base_url('assets/user/img/') ?>Mustafa-Babanli (1).jpg"
                  alt=""
                  width="300"
                />
                <h4>Mustafa Babanlı</h4>
                <p>
                  Azərbaycan Dövlət Neft və Sənaye Universitetinin rektoru,
                  texnika elmləri doktoru, professor
                </p>
                <a href="<?php echo base_url('rector') ?>" class="readmore">Ətraflı</a>
              </div>
            </div>

            <div class="col-md-6">
              <div class="box">
                <h4>Direktor</h4>
                <img
                  src="<?php echo base_url('assets/user/img/') ?>hamlet6.jpg"
                  alt=""
                  width="300"
                  height="200"
                  style = "object-fit:cover ;"
                />
                <h4>Hamlet Hüseynov</h4>
                <p>
                  Pedaqoji elmləri namizədi, dosent Sənaye Müəssisələri
                  İşçilərinin İxtisasartırma və Yenidənhazırlama İnstitutunun
                  direktoru
                </p>
                <a href="<?php echo base_url('director') ?>" class="readmore">Ətraflı</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section db p120">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="tagline-message text-center">
                <h3>SMİİYİ Haqqında</h3>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section gb nopadtop">
        <div class="container">
          <div class="row about-smiiyi">
            <div class="col-md-10">
              <div class="box m30">
                <h4>Sənaye Müəssisələri İşçilərinin İxtisasartırma və Yenidənhazırlanma İnstitutu</h4>
                <p>
                ADNSU-nun tərkibində fəaliyyət göstərən SMİİY institutu tədris, təlim tərbiyə hissəsinin sturuktur bölməsidir. İnstitut 1996-cı il tarixdən hal-hazıra kimi ADNSU-nun tərkibində qanunvericiliyin tələblərinə uyğun, onun sturuktur bölməsi kimi fəaliyyət göstərir. Qanunvericiliyin dəyişməsi ilə əlaqədar institutun fəaliyyətində ona uyğunlaşdırlır.
                </p>
                <a href="<?php echo base_url('smiiyi');?>" class="readmore">Ətraflı</a>
              </div>
            </div>
          </div>
          <hr class="invis" />
        </div>
      </section>
       
      </section>

<?php $this->load->view('user/includes/footer'); ?>
<script>

</script>