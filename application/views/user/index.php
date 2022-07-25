
<?php $this->load->view('user/includes/header');?>

<style>
              .imgHeightSlider{
                width:100%!important;
<<<<<<< HEAD
                height: 550px!important;
=======
                height: 700px!important;
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
                object-fit:contain ;
              }

              @media screen and (max-width: 768px) {
                .imgHeightSlider {
                  height: 350px!important;
                }
              }
                   

              .parent {
                  position: relative;
                  }
                  .child {
                    font-weight: bold;
                  font-size: 17px;
                  padding: 16px 40px;
                  padding: 8px 40px;
                  border-width: 1px;
                  border-style: solid;
                  color: #fff;
                  background-color: #f7ca18;
                  border-color: #f7ca18;
                  position: absolute;
                  top: 90%;
                  left: 48%;
                  margin: -35px 0 0 -35px;
                  }
<<<<<<< HEAD
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
=======
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
            </style>

<section class="section mar" style="padding-top: 2rem !important">
        <div class="container-fluid">
         <div class="row">
         <div
            id="carousel-example-generic"
            class="carousel slide"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
          <?php $itemCount = 0;foreach ($items as $item){
            ?>
              <li
                data-target="#carousel-example-generic"
                data-slide-to="<?php echo $itemCount++; ?>"
                <?php if($item['sl_category'] == 1){echo 'class = "active"';}?>
              ></li>
              <?php }?>
            </ol>

            <div class="carousel-inner" role="listbox">
            <?php foreach ($items as $item){?>
              <div class="item parent  <?php if($item['sl_category'] == 1){echo 'active';}?>">
<<<<<<< HEAD
                <img class="imgHeightSlider" src="<?php echo base_url('upload/slider/'.$item['sl_img']); ?>"
                onerror="this.onerror=null; this.src='<?php echo base_url('upload/teachers/').'alt.png';?>'"/>
=======
                <img class="imgHeightSlider" src="<?php echo base_url('upload/slider/'.$item['sl_img']); ?>"/>
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
                <a href = "<?php echo base_url('ann_detail_form/'.$item['ann_id']); ?>"><div class = "child" id = "content-block">
                  ƏTRAFLI
                </div></a>
              </div>
              
              <?php }?>
            </div>

            <a
              class="left carousel-control"
              href="#carousel-example-generic"
              role="button"
              data-slide="prev"
            >
              <span
                class="glyphicon glyphicon-chevron-left"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Geri</span>
            </a>
            <a
              class="right carousel-control"
              href="#carousel-example-generic"
              role="button"
              data-slide="next"
            >
              <span
                class="glyphicon glyphicon-chevron-right"
                aria-hidden="true"
              ></span>
              <span class="sr-only">İrəli</span>
            </a>
          </div>
         </div>
        </div>
      </section>


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
<<<<<<< HEAD
                                    <img style="height: 250px; object-fit: cover;" src="<?php echo base_url('upload/events/'.$events['img']) ?>" 
                                    onerror="this.onerror=null; this.src='<?php echo base_url('upload/teachers/').'alt.png';?>'"
                                    alt="image not found" class="img-responsive">
                                    
=======
                                    <img style="height: 250px; object-fit: cover;" src="<?php echo base_url('upload/events/'.$events['img']) ?>" alt="image not found" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="<?php echo base_url('ann_detail_form/'.$events['id']); ?>" title=""><i class="flaticon-add"></i></a>
                                    </div>
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
                                </div>
                                <div class="course-details" style = "height:200px!important;overflow: hidden!important;height: 3.6em;line-height: 1.2em;">
                                    <h5>
                                        <a href="<?php echo base_url('ann_detail_form/'.$events['id']); ?>" title=""><?php echo $events['title']; ?>
                                        </a>
                                    </h5>
                                    
                                   
                                </div>
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
<<<<<<< HEAD
                  style = "object-fit:cover ;"
=======
                  object-fit:contain ;
>>>>>>> f4056484192eded866d6ef619ac442ba62e2ca1d
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
        <div class="dark-light fabs">
            <i class='bx bx-moon moon fab'></i>
            <i class='bx bx-sun sun fab'></i>
        </div>
      </section>

<?php $this->load->view('user/includes/footer'); ?>