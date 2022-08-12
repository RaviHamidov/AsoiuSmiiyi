<?php $this->load->view('user/includes/header_style');?>
<?php $this->load->view('user/includes/header');?>
  
    <section class="home-slider owl-carousel">
		<?php foreach($slides as $sl){?>
      <div class="slider-item" style="background-image:url(<?php echo base_url('upload/slider/').$sl['sl_img'];?>);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="ftco-animate">
            <h1 class="mb-4"><?php echo $sl['title']?></h1>
            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
            <a  href="<?php echo base_url('blog_single/').$sl['id'];?>"><button class="btneal btn btn-primary px-4 py-3 mt-3">Elana get</button></a>
          </div>
        </div>
        </div>
      </div>
		<?php }?>
    </section>
    <section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Professor-müəllim heyəti</h3>
                <p>Müəllimlərimiz ölkənin qabaqcıl universitetlərindən olan ADNSU-nun əməkdaşlarıdır. </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Təkrar təhsil</h3>
                <p>Kariyeranızda böyük addım ataraq yeni ixtisasa yiyələnmək istəyirsinizsə, təkrar təhsil sizin üçündür..</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Kitab &amp; Kitabxana</h3>
                <p>SMİİYİ tələbəsi olaraq ADNSU-nun kitabxanasından istifadə edə bilərsiniz.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Diplom</h3>
                <p>Öz bilik və bacarıqlarınızı ADNSU diplomu ilə təsdiqləmək sizin əlinizdədir.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
		<style>
			.hvr:hover{
				color:lightblue;
			}
		</style>
		<section class="ftco-section bg-light">
			<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
            		<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4 clickme"><span>Ən son</span> 
						<a class="hvr" href = "<?php echo base_url('blog');?>"> > <u>Elanlar</u></a> </h2>
          			</div>
        		</div>
				<div class="row">

        <?php foreach($event as $events){?>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry" >
              <a href="<?php echo base_url('blog_single/'.$events['id']); ?>" class="block-20 d-flex align-items-end" 
              style="background-image: url('<?php echo base_url('upload/events/'.$events['img']); ?>');">
								<div class="meta-date text-center p-2">
                  <span class="day"><?php echo date('d', strtotime($events['date']));?></span>
                  <span class="mos"><?php 
                  $arr = ["yanv.","fevr.","mart","apr.","may","iyun","iyul","avq.","sent.","okty.","noy.","dek."];
                  echo $arr[(int)date('m', strtotime($events['date']))];?></span>
                  <span class="yr"><?php echo date('Y', strtotime($events['date']));?></span>
                </div> 
              </a>
              <div class="text bg-white p-1" style ="min-height:100px">
                <h3 class="heading"><a href="<?php echo base_url('blog_single/'.$events['id']); ?>"></a></h3>
                <p class ="keep-scrolling">
				<?php if(strlen($events['title']) > 80){
					echo mb_substr(($events['title']),0,80,'UTF-8').'...';
				}else{
					echo $events['title'];
				}  ?>
				</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-3"><a href="<?php echo base_url('blog_single/'.$events['id']); ?>" class="btn btn-primary">Ətraflı oxu <span class="ion-ios-arrow-round-forward"></span></a></p>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
		
			<!-- <div style = "margin-right:auto;margin-left:auto;margin-top:-60px;" >
				<a href = "">
					<button class="btn btn-primary py-3 px-4 mt-5">Daha çox Elan</button>
				</a>
		</div> -->
		</div>
			</div>
		</section>

		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image:url(<?php echo base_url('assets/user/');?>images/offer.jpeg); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">Sizə təklif edirik</h2>
						<p>Biz gənclərin yüksək səviyyədə təhsilə yiyələnmələrini təmin etmək məqsədi ilə fəaliyyət göstəririk.</p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div class="text pl-3">
										<h3>15 ixtisas</h3>
										<p>Arzuladığınız ixisası seçib bizə müraciət edə bilərsiniz. İnstitutumuzda 15 ixtisas üzrə tərdis aparılır.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
									<div class="text pl-3">
										<h3>Faydalılıq</h3>
										<p>Universitetimiz xalqımıza və bütün dünyaya fayda verəcək, inkişafı sürətləndirəcək araşdırma imkanı və təhsili təmin etməklə fəaliyyətini davam etdirir.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
									<div class="text pl-3">
										<h3>Savadlı müəllimlər</h3>
										<p>Dərslərimiz ADNSU-nun professor-müəllim heyəti tərəfindən aparılır.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text pl-3">
										<h3>Vacib dərslər</h3>
										<p>Semestr ərzində sizə iş mühitində lazım olacaq biliklərə uyğun fənnlər üzrə təhsil alacaqsınız.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
									<div class="text pl-3">
										<h3>Daha tez məzun olmaq imkanı</h3>
										<p>Növbəti semestrlərin dərslərini indidən götürüb daha sürətli şəkildə təhsilinizi tamamlaya bilərsiniz.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
									<div class="text pl-3">
										<h3>İdman və kitabxana</h3>
										<p>Universitetimizin futbol, basketbol komandalarına qoşula və ya böyük kitabxanamızda araşdırmalar apara bilərsiniz.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image:url(<?php echo base_url('assets/user/');?>images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="">
    					<div class="video justify-content-center">
						<video style = "width:100%;" controls="controls"> 
							<source src="<?php echo base_url('assets/user/');?>images/ADNSU.mp4" type="video/mp4"> 
						</video> 
							</div>
    				</div>
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">ADNSU SMİİYİ</h2>
        <p>
		ADNSU-nun tərkibində fəaliyyət göstərən SMİİY intitutu tədris, təlim tərbiyə hissəsinin sturuktur bölməsidir.
		İnstitut 1996-cı il tarixdən hal-hazıra kimi ADNSU-nun tərkibində qanunvericiliyin tələblərinə uyğun, onun sturuktur bölməsi kimi fəaliyyət göstərir. 
		Qanunvericiliyin dəyişməsi ilə əlaqədar institutun fəaliyyətində ona uyğunlaşdırlır.
		İnstitutun əsasnaməsi yenidən işlənib ADNSU-nın elmi şurasında qəbul edilərək universitetin Rektoru tərəfindən təsdiq edilmişdir.
		Əgər siz də institutda təhsil almaq istəyirsinizsə, əlaqə bölməsinə keçərək məlumat əldə edə və ya aşağıdaki formanı dolduraraq bir başa müraciət edə bilərsiniz
		<p><a style="background:#fd5f00;"href="<?php echo base_url('qeydiyyat')?>" class="btn btn-primary">Elektron Qeydiyyat</a></p>
		</p>    
		</div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="56">0</strong>
		                <span>Müəllimlər</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="1201">0</strong>
		                <span>Tələbələr</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="15">0</strong>
		                <span>İxtisaslar</span>
		              </div>
		            </div>
		          </div>
		         
	          </div>
          </div>
        </div>
    	</div>
    </section>


	
    <section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Rəhbərlik</h2>
            <!-- <p>Rəhbərliyimiz</p> -->
          </div>
        </div>	
				<div class="row">
				<?php foreach($adm as $tech){?> 
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="staff">
								<div class="img-wrap d-flex align-items-stretch">
									<div class="img align-self-stretch" style="background-image: url(<?php echo base_url('upload/administrator/'.$tech['ad_img']);?>);"></div>
								</div>
								<div class="text pt-3 text-center">
								<a href="<?php echo base_url("team_single/").$tech['ad_id']?>" title="">
								<h3><?php echo $tech['ad_name']. " " .$tech['ad_surname'];?></h3></a>
									<span class="position mb-2"> <?php echo $tech['duty'];?></span>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</section>

		<section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Müəllimlərimiz</h2>
            <p>Professor-müəllim heyəti haqqında ətraflı məlumat üçün müəllimlər böməsinə daxil ola bilərsiniz </p>
          </div>
        </div>	
				<div class="row">
				<?php foreach($teachers as $tech){?> 
						<div class="col-md-6 col-lg-3 ftco-animate">
							<div class="staff">
								<div class="img-wrap d-flex align-items-stretch">
									<div class="img align-self-stretch" style="background-image: url(<?php echo base_url('upload/teachers/'.$tech['t_profile_photo']);?>);"></div>
								</div>
								<div class="text pt-3 text-center">
								<a href="<?php echo base_url("tech_single/").$tech['t_id']?>" title="">
								<h3><?php echo $tech['t_name']. " " .$tech['t_surname'];?></h3></a>
									<span class="position mb-2"> <?php echo $tech['i_c3_name'];?></span>
									<div class="faded">
										<ul class="ftco-social text-center">
							<li>
								<p style="text-shadow: 0 0 5px #000000;"><a style="color:white!important;" href="mailto:<?php echo $tech['t_e_mail'];?>"><?php echo $tech['t_e_mail'];?></a></p></li>
						</ul>
					</div>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container-fluid pb-4 ">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Bizim</span> İxtisaslar</h2>
            <p>SMİİYİ ilə özünüzə uyğun ixtisası seçərək arzuladığınız kariyeraya bizimlə addımlaya bilərsiniz.
				Bütün ixtisaslarımızla tanış olmaq üçün Təkrar təhsil bölməsindən ixtisaslara keçid edə bilərsiniz
			</p>
          </div>
        </div>	
				<div class="row" style="min-height:620px">
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image:url(<?php echo base_url('assets/user/');?>images/course-1.jfif);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>SMİİYİ</span>
								<span><i class="icon-table mr-2"></i>20+ tələbə</span>
								<span><i class="icon-calendar mr-2"></i>3-4 İL</span>
							</p>
							<h3><a href="#">Neft-Qaz mühəndisliyi</a></h3>
							<p>
							Neft və qaz mühəndisliyi xam neft və ya təbii qaz kimi hidrokarbonların hasilatı ilə bağlı fəaliyyətlərlə məşğul olan mühəndisliyin növüdür.
							<div style="bottom: 0px;"><p><a href="<?php echo base_url('qeydiyyat')?>" class="btn btn-primary">Müraciət et</a></p></div>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image:url(<?php echo base_url('assets/user/');?>images/course-2.jfif);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>SMİİYİ</span>
								<span><i class="icon-table mr-2"></i>20+ tələbə</span>
								<span><i class="icon-calendar mr-2"></i>3-4 İL</span>
							</p>
							<h3><a href="#">Menecment</a></h3>
							<p>
							Menecment ixtisası biznes, biznesin idarə edilməsi, uğurlu biznes menecerinin yetişdirilməsi məsələlərini özündə birləşdirir.
							</p>
							<div style="bottom: 0px;"><p><a href="<?php echo base_url('qeydiyyat')?>" class="btn btn-primary">Müraciət et</a></p></div>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image:url(<?php echo base_url('assets/user/');?>images/course-3.jpg);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>SMİİYİ</span>
								<span><i class="icon-table mr-2"></i>20+ tələbə</span>
								<span><i class="icon-calendar mr-2"></i>3-4 İL</span>
							</p>
							<h3><a href="#">Kimya mühəndisliyi</a></h3>
							<p>
							Kimya mühəndisliyi ixtisası istehsal olunacaq maddələrin fiziki-kimyəvi proseslərini müşahidə edilməsini
							 və istehsalın texnoloji inkişafda daha səmərəli olmasının yollarını öyrənir.
							 <div style="bottom: 0px;"><p><a href="<?php echo base_url('qeydiyyat')?>" class="btn btn-primary">Müraciət et</a></p></div>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image:url(<?php echo base_url('assets/user/');?>images/course-4.jpg);"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>SMİİYİ</span>
								<span><i class="icon-table mr-2"></i>20+ tələbə</span>
								<span><i class="icon-calendar mr-2"></i>3-4 İL</span>
							</p>
							<h3><a href="#">Materialşünaslıq</a></h3>
							<p>Materialşünaslıq - materialların həm bərk, həm də maye halında xassələrinin müxtəlif amillərin təsiri altında dəyişməsini öyrənən elmdir. </p>
							<div style="bottom: 0px;"><p><a href="<?php echo base_url('qeydiyyat')?>" class="btn btn-primary">Müraciət et</a></p></div>
						</div>
					</div>
				</div>
			</div>
		</section>




	<?php $this->load->view('user/includes/footer');?>
	<?php $this->load->view('user/includes/footer_style');?>