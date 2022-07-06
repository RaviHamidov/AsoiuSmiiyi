
<?php $this->load->view('user/includes/header'); ?>
      <section class="section mar" style="padding-top: 2rem !important">
        <div class="container">
          <div
            id="carousel-example-generic"
            class="carousel slide"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                data-target="#carousel-example-generic"
                data-slide-to="0"
                class="active"
              ></li>
              <li
                data-target="#carousel-example-generic"
                data-slide-to="1"
              ></li>
              <li
                data-target="#carousel-example-generic"
                data-slide-to="2"
              ></li>
              <li
                data-target="#carousel-example-generic"
                data-slide-to="3"
              ></li>
              <li
                data-target="#carousel-example-generic"
                data-slide-to="4"
              ></li>
            </ol>

            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img
                  src="<?php echo base_url('assets/user/img/') ?>Clio_2020-Blog_Image-Programming_for_Lawyers.png"
                />
              </div>
              <div class="item">
                <img src="https://unsplash.it/1400/600?image=62" />
              </div>
              <div class="item">
                <img src="https://unsplash.it/1400/600?image=315" />
              </div>
              <div class="item">
                <img src="https://unsplash.it/1400/600?image=622" />
              </div>
              <div class="item">
                <img src="https://unsplash.it/1400/600?image=401" />
              </div>
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
                <a href="./about/rector.html" class="readmore">Ətraflı</a>
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
                />
                <h4>Hamlet Hüseynov</h4>
                <p>
                  Pedaqoji elmləri namizədi, dosent Sənaye Müəssisələri
                  İşçilərinin İxtisasartırma və Yenidənhazırlama İnstitutunun
                  direktoru
                </p>
                <a href="./about/director.html" class="readmore">Ətraflı</a>
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
                <h4>Lorem ipsum dolor sit.</h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Provident, blanditiis!
                </p>
                <a href="./about/smiiyi.html" class="readmore">Ətraflı</a>
              </div>
            </div>
          </div>
          <hr class="invis" />
        </div>
      </section>
      <section class="section db">
        <div class="container">
          <div class="row text-center">
            <div class="col-lg-4 col-md-4">
              <div class="stat-count">
                <h4 class="stat-timer">50</h4>
                <h3><i class="flaticon-online-course"></i> İxtisaslar</h3>
                <p>Ümumi İxtisas Sayı</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-4">
              <div class="stat-count">
                <h4 class="stat-timer">1000</h4>
                <h3>
                  <i
                    class="flaticon-black-graduation-cap-tool-of-university-student-for-head"
                  ></i>
                  Tələbələr
                </h3>
                <p>Ümumi Tələbə Sayı</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-4">
              <div class="stat-count">
                <h4 class="stat-timer">120</h4>
                <h3><i class="flaticon-online-course"></i> Müəllimlər</h3>
                <p>Ümumi Müəllim Sayı</p>
              </div>
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
            <div class="caro-item">
              <div class="course-box">
                <div class="image-wrap entry">
                  <img
                    src="<?php echo base_url('assets/user/img/upload/') ?>elan-1-2.jpeg"
                    alt=""
                    class="img-responsive"
                  />
                  <div class="magnifier">
                    <a href="./announcement/ann.html" title=""
                      ><i class="flaticon-add"></i
                    ></a>
                  </div>
                </div>
                <div class="course-details">
                  <h4>
                    <a href="./announcement/ann.html" title=""
                      >Azərbaycan-Fransız Universitetində Məzun günü</a
                    >
                  </h4>
                  <p>
                    İyunun 28-də Azərbaycan Dövlət Neft və Sənaye
                    Universitetinin (ADNSU) nəzdində fəaliyyət göstərən
                    Azərbaycan-Fransız Universitetində (UFAZ) Məzun Günü
                    keçirilib.
                  </p>
                </div>
                <div class="course-footer clearfix">
                  <div class="pull-left">
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> 15/06/2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="caro-item">
              <div class="course-box">
                <div class="image-wrap entry">
                  <img
                    src="<?php echo base_url('assets/user/img/upload/') ?>elan-1-2.jpeg"
                    alt=""
                    class="img-responsive"
                  />
                  <div class="magnifier">
                    <a href="./announcement/ann.html" title=""
                      ><i class="flaticon-add"></i
                    ></a>
                  </div>
                </div>
                <div class="course-details">
                  <h4>
                    <a href="./announcement/ann.html" title=""
                      >Azərbaycan-Fransız Universitetində Məzun günü</a
                    >
                  </h4>
                  <p>
                    İyunun 28-də Azərbaycan Dövlət Neft və Sənaye
                    Universitetinin (ADNSU) nəzdində fəaliyyət göstərən
                    Azərbaycan-Fransız Universitetində (UFAZ) Məzun Günü
                    keçirilib.
                  </p>
                </div>
                <div class="course-footer clearfix">
                  <div class="pull-left">
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> 15/06/2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="caro-item">
              <div class="course-box">
                <div class="image-wrap entry">
                  <img
                    src="<?php echo base_url('assets/user/img/upload/') ?>elan-1-2.jpeg"
                    alt=""
                    class="img-responsive"
                  />
                  <div class="magnifier">
                    <a href="#" title=""><i class="flaticon-add"></i></a>
                  </div>
                </div>
                <div class="course-details">
                  <h4>
                    <a href="#" title=""
                      >Azərbaycan-Fransız Universitetində Məzun günü</a
                    >
                  </h4>
                  <p>
                    İyunun 28-də Azərbaycan Dövlət Neft və Sənaye
                    Universitetinin (ADNSU) nəzdində fəaliyyət göstərən
                    Azərbaycan-Fransız Universitetində (UFAZ) Məzun Günü
                    keçirilib.
                  </p>
                </div>
                <div class="course-footer clearfix">
                  <div class="pull-left">
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> 15/06/2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="caro-item">
              <div class="course-box">
                <div class="image-wrap entry">
                  <img
                    src="<?php echo base_url('assets/user/img/upload/') ?>elan-1-2.jpeg"
                    alt=""
                    class="img-responsive"
                  />
                  <div class="magnifier">
                    <a href="#" title=""><i class="flaticon-add"></i></a>
                  </div>
                </div>
                <div class="course-details">
                  <h4>
                    <a href="#" title=""
                      >Azərbaycan-Fransız Universitetində Məzun günü</a
                    >
                  </h4>
                  <p>
                    İyunun 28-də Azərbaycan Dövlət Neft və Sənaye
                    Universitetinin (ADNSU) nəzdində fəaliyyət göstərən
                    Azərbaycan-Fransız Universitetində (UFAZ) Məzun Günü
                    keçirilib.
                  </p>
                </div>
                <div class="course-footer clearfix">
                  <div class="pull-left">
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> 15/06/2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="caro-item">
              <div class="course-box">
                <div class="image-wrap entry">
                  <img
                    src="<?php echo base_url('assets/user/img/upload/') ?>elan-1-2.jpeg"
                    alt=""
                    class="img-responsive"
                  />
                  <div class="magnifier">
                    <a href="#" title=""><i class="flaticon-add"></i></a>
                  </div>
                </div>
                <div class="course-details">
                  <h4>
                    <a href="#" title=""
                      >Azərbaycan-Fransız Universitetində Məzun günü</a
                    >
                  </h4>
                  <p>
                    İyunun 28-də Azərbaycan Dövlət Neft və Sənaye
                    Universitetinin (ADNSU) nəzdində fəaliyyət göstərən
                    Azərbaycan-Fransız Universitetində (UFAZ) Məzun Günü
                    keçirilib.
                  </p>
                </div>
                <div class="course-footer clearfix">
                  <div class="pull-left">
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> 15/06/2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="caro-item">
              <div class="course-box">
                <div class="image-wrap entry">
                  <img
                    src="<?php echo base_url('assets/user/img/upload/') ?>elan-1-2.jpeg"
                    alt=""
                    class="img-responsive"
                  />
                  <div class="magnifier">
                    <a href="#" title=""><i class="flaticon-add"></i></a>
                  </div>
                </div>
                <div class="course-details">
                  <h4>
                    <a href="#" title=""
                      >Azərbaycan-Fransız Universitetində Məzun günü</a
                    >
                  </h4>
                  <p>
                    İyunun 28-də Azərbaycan Dövlət Neft və Sənaye
                    Universitetinin (ADNSU) nəzdində fəaliyyət göstərən
                    Azərbaycan-Fransız Universitetində (UFAZ) Məzun Günü
                    keçirilib.
                  </p>
                </div>
                <div class="course-footer clearfix">
                  <div class="pull-left">
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> 15/06/2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="caro-item">
              <div class="course-box">
                <div class="image-wrap entry">
                  <img
                    src="<?php echo base_url('assets/user/img/upload/') ?>elan-1-2.jpeg"
                    alt=""
                    class="img-responsive"
                  />
                  <div class="magnifier">
                    <a href="#" title=""><i class="flaticon-add"></i></a>
                  </div>
                </div>
                <div class="course-details">
                  <h4>
                    <a href="#" title=""
                      >Azərbaycan-Fransız Universitetində Məzun günü</a
                    >
                  </h4>
                  <p>
                    İyunun 28-də Azərbaycan Dövlət Neft və Sənaye
                    Universitetinin (ADNSU) nəzdində fəaliyyət göstərən
                    Azərbaycan-Fransız Universitetində (UFAZ) Məzun Günü
                    keçirilib.
                  </p>
                </div>
                <div class="course-footer clearfix">
                  <div class="pull-left">
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> 15/06/2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="caro-item">
              <div class="course-box">
                <div class="image-wrap entry">
                  <img
                    src="<?php echo base_url('assets/user/img/upload/') ?>elan-1-2.jpeg"
                    alt=""
                    class="img-responsive"
                  />
                  <div class="magnifier">
                    <a href="#" title=""><i class="flaticon-add"></i></a>
                  </div>
                </div>
                <div class="course-details">
                  <h4>
                    <a href="#" title=""
                      >Azərbaycan-Fransız Universitetində Məzun günü</a
                    >
                  </h4>
                  <p>
                    İyunun 28-də Azərbaycan Dövlət Neft və Sənaye
                    Universitetinin (ADNSU) nəzdində fəaliyyət göstərən
                    Azərbaycan-Fransız Universitetində (UFAZ) Məzun Günü
                    keçirilib.
                  </p>
                </div>
                <div class="course-footer clearfix">
                  <div class="pull-left">
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> 15/06/2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="caro-item">
              <div class="course-box">
                <div class="image-wrap entry">
                  <img
                    src="<?php echo base_url('assets/user/img/upload/') ?>elan-1-2.jpeg"
                    alt=""
                    class="img-responsive"
                  />
                  <div class="magnifier">
                    <a href="#" title=""><i class="flaticon-add"></i></a>
                  </div>
                </div>
                <div class="course-details">
                  <h4>
                    <a href="#" title=""
                      >Azərbaycan-Fransız Universitetində Məzun günü</a
                    >
                  </h4>
                  <p>
                    İyunun 28-də Azərbaycan Dövlət Neft və Sənaye
                    Universitetinin (ADNSU) nəzdində fəaliyyət göstərən
                    Azərbaycan-Fransız Universitetində (UFAZ) Məzun Günü
                    keçirilib.
                  </p>
                </div>
                <div class="course-footer clearfix">
                  <div class="pull-left">
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> 15/06/2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="caro-item">
              <div class="course-box">
                <div class="image-wrap entry">
                  <img
                    src="<?php echo base_url('assets/user/img/upload/') ?>elan-1-2.jpeg"
                    alt=""
                    class="img-responsive"
                  />
                  <div class="magnifier">
                    <a href="./announcement/ann.html" title=""
                      ><i class="flaticon-add"></i
                    ></a>
                  </div>
                </div>
                <div class="course-details">
                  <h4>
                    <a href="./announcement/ann.html" title=""
                      >Azərbaycan-Fransız Universitetində Məzun günü</a
                    >
                  </h4>
                  <p>
                    İyunun 28-də Azərbaycan Dövlət Neft və Sənaye
                    Universitetinin (ADNSU) nəzdində fəaliyyət göstərən
                    Azərbaycan-Fransız Universitetində (UFAZ) Məzun Günü
                    keçirilib.
                  </p>
                </div>
                <div class="course-footer clearfix">
                  <div class="pull-left">
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> 15/06/2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr class="invis" />

          <div class="section-button text-center">
            <a href="./announcement/" class="btn btn-primary">Bütün Elanlar</a>
          </div>
        </div>
        <div class="dark-light fabs">
            <i class='bx bx-moon moon fab'></i>
            <i class='bx bx-sun sun fab'></i>
        </div>
      </section>

<?php $this->load->view('user/includes/footer'); ?>