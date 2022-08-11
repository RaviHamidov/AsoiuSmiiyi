<?php $this->load->view('user/includes/header_style'); ?>
<?php $this->load->view('user/includes/header'); ?>
<style>
	.hed2 {
		font-size: 2.5em;
		color: #6c80d6;
		font-weight: 300;
	}

	#about-stats {
		background: #1a265c;
		min-height: 350px;
		color: #fff;
		text-align: center;
		box-sizing: border-box;
		padding: 15px;
		margin: 25px 0px;
	}

	.col-mds-6 {
		position: relative;
		min-height: 1px;
		padding-left: 15px;
		padding-right: 15px;
		padding-bottom: 10px;
		margin: auto;
	}

	.col-mds-4 {
		float: left;
		width: 33.3333333333%;
	}

	.boxing {
		width: 50%;
		height: inherit;
		margin: 5px 0px !important;
		position: relative;
	}

	.perde {
		position: absolute;
		width: 170px;
		height: 100%;
		background: lightgray;
		opacity: 0.7;
		border-radius: 50%;
		filter: invert(1);
		transition: 0.5s;
	}

	.perde:hover {
		opacity: 0;
	}

	.text-center img {
		width: 100%;
	}

	.boxing img {
		width: 170px;
		height: 170px;
	}

	.stats {
		text-align: center;
	}

	.colorwhite {
		color: white !important;
	}

	.hed3 {
		text-align: center;
		padding-bottom: 15px;
		border-bottom: 1px solid gray;
		display: inline-block;
		color: #fff;
		font-size: 20px;
	}

	@media (min-width: 992px) {
		.col-mds-6 {
			float: left;
		}

		.col-mds-4 {
			float: left;
			width: 33.3333333333%;
		}

		#about-top-major {
			max-height: 500px;
		}

		.rows {
			margin: 30px 10px;
		}


	}
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('assets/user/images/') ?>asoiu.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Azərbaycan Dövlət Neft və Sənaye Universiteti</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>">Əsas səhifə <i class="ion-ios-arrow-forward"></i></a></span></p>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 ftco-animate">
				<div class="row" id="about-boxes">
					<div class="container">
						<h1>FAKÜLTƏLƏR</h1>
						<div class="col-xs-6 col-md-4  col-mds-4 box boxing">
							<a href="http://fct.asoiu.edu.az/" class="boximg">
								<div class="perde"></div>
								<img src="http://asoiu.edu.az/newabout/ktf.png" alt="">
							</a>
						</div>
						<div class="col-xs-6 col-md-4 col-mds-4 box boxing">
							<a href="http://fpe.asoiu.edu.az/" class="boximg">
								<div class="perde"></div>
								<img src="http://asoiu.edu.az/newabout/ef.png" alt="">
							</a>
						</div>
						<div class="col-xs-6 col-md-4 col-mds-4 box boxing">
							<a href="http://fge.asoiu.edu.az/" class="boximg">
								<div class="perde"></div>

								<img src="http://asoiu.edu.az/newabout/gkf.png" alt="">
							</a>
						</div>
						<div class="col-xs-6 col-md-4 col-mds-4 box boxing">
							<a href="http://fem.asoiu.edu.az/" class="boximg">
								<div class="perde"></div>
								<img src="http://asoiu.edu.az/newabout/imf.png" alt="">
							</a>
						</div>
						<div class="col-xs-6 col-md-4 col-mds-4 box boxing">
							<a href="http://fome.asoiu.edu.az/" class="boximg">
								<div class="perde"></div>
								<img src="http://asoiu.edu.az/newabout/nmf.png" alt="">
							</a>
						</div>
						<div class="col-xs-6 col-md-4 col-mds-4 box boxing">
							<a href="http://fogp.asoiu.edu.az/" class="boximg">
								<div class="perde"></div>
								<img src="http://asoiu.edu.az/newabout/qnmf.png" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="row" id="about-stats">
					<div class="container">
						<h1 class="colorwhite">QƏBUL</h1>
						<p style="text-align: justify!important;">
							Bizim tələbələr savadlı və inkişafa meyllidirlər. Biz onların hər uğurunu dəstəkləyir və bundan məmnunluq duyuruq. Tələbələrimiz üçün həm universitet daxilində həvəsləndirici təhsil şəraitinin yaradılmasını əldə etmək, həm də kənar fəaliyyətlərində faydalı vaxt keçirmələrini təmin etmək məqsədi ilə bütün imkanlarımızla xidmət göstəririk.
						</p>
						<div class="col-md-4 col-mds-4 stats ">
							<h2 class="colorwhite">16183</h2>
							<p>Ümumi tələbə sayı</p>
						</div>
						<div class="col-md-4 col-mds-4 stats">
							<h2 class="colorwhite">539</h2>
							<p>500+ bal toplayan tələbələr</p>
						</div>
						<div class="col-md-4 col-mds-4 stats">
							<h2 class="colorwhite">90.7%</h2>
							<p>Qəbul planı</p>
						</div>
					</div>
				</div>
				<div class="row" id="about-icons">
					<div class="container">
						<h1>LAYİHƏLƏRİMİZ</h1>
						<div class="col-md-4 col-mds-4 text-center">

							<img src="<?php echo base_url('assets/user/images/'); ?>karyera.jpg">

						</div>
						<div class="col-md-4 col-mds-4 text-center">
							<img src="<?php echo base_url('assets/user/images/'); ?>ITclub.png">
						</div>
						<div class="col-md-4 col-mds-4 text-center">
							<img src="<?php echo base_url('assets/user/images/'); ?>eazistart.png">
						</div>
					</div>
				</div>

				<div class="row rows" id="about-top-major" style="height: 800px;text-align: center;background-color: #1a265c;">
					<div class="container">
						<h1 style="padding: .5em;color: #fff;text-align: center;">TOP 10 İXTİSASLAR</h1>
						<div class="col-md-6 col-mds-6">
							<h3 class="hed3">Kimya mühəndisliyi</h3>
						</div>
						<div class="col-md-6 col-mds-6">
							<h3 class="hed3">Kompüter mühəndisliyi</h3>
						</div>
						<div class="col-md-6 col-mds-6">
							<h3 class="hed3">Kimya-texnologiya</h3>
						</div>
						<div class="col-md-6 col-mds-6">
							<h3 class="hed3">Neft-qaz mühəndisliyi</h3>
						</div>
						<div class="col-md-6 col-mds-6">
							<h3 class="hed3">Ekologiya mühəndisliyi</h3>
						</div>
						<div class="col-md-6 col-mds-6">
							<h3 class="hed3">Elektroenergetika mühəndisliyi</h3>
						</div>
						<div class="col-md-6 col-mds-6">
							<h3 class="hed3">Mexanika mühəndisliyi</h3>
						</div>
						<div class="col-md-6 col-mds-6">
							<h3 class="hed3">Geologiya mühəndisliyi</h3>
						</div>
						<div class="col-md-6 col-mds-6">
							<h3 class="hed3">Kimya-texnologiya</h3>
						</div>
						<div class="col-md-6 col-mds-6">
							<h3 class="hed3">Cihazqayırma mühəndisliyi</h3>
						</div>
					</div>
				</div>
				<div class="row" id="about-mission">
					<div class="container">
						<div class="col-md-6 col-mds-6 noMar">
							<h1>BİZ NƏ EDİRİK?</h1>
							<p>Biz gənclərin yüksək səviyyədə təhsilə yiyələnmələrini təmin etmək məqsədi ilə fəaliyyət göstəririk. Biz hər zaman tələbələrimizdən tənqidi yanaşmağı, məntiqi düşünməyi, yaradıcı fəaliyyət göstərməyi və mədəni şəkildə yaşamağı tələb edirik. Universitetimiz xalqımıza və bütün dünyaya fayda verəcək, inkişafı sürətləndirəcək, iqtisadiyyatı gücləndirəcək səviyyədə araşdırma imkanı və təhsili təmin etməklə fəaliyyətini davam etdirir.</P>
						</div>
						<div class="col-md-6 col-mds-6 noMar">
							<img width="100%" src="<?php echo base_url('assets/user/images/'); ?>about.jpg">
						</div>
					</div>
				</div>
				<div class="row" id="about-charts" style="height: auto;background-color: #1a265c;text-align: center;padding: 15px 15px;">
					<div class="container">
						<h1 style="color: #fff;padding: .5em;">BİZ KİMİK?</h1>
						<p style="text-align: justify;font-size: 1em;color: #fff;">Tələbələrimiz, fakültələrimiz və işçi heyətimiz həyatın hər sahəsini, bir-birindən fərqli düşüncələri, ölkəmizin və dünyanın müxtəlif yerlərini təmsil edirlər. Çünki böyük bir universitetdə olmağın ən gözəl tərəflərindən biri təhsil almaq, işləmək, əylənmək, yeniliklərlə tanış olmaq, fikir alış-verişi etmək və heç vaxt olmadığın yerlərdən gələn insanlarla ünsiyyət qurmaq şansına sahib olmaqdır. Universitetimiz müxtəlifliklərimizlə bərabər ortaq yönlərimizin tapılması və bir-birimizdən öyrənərək birlikdə gələcəyimizi daha parlaq etməyin marağındadır.</p>
						<img style="width:100%" src="<?php echo base_url('assets/user/images/'); ?>chart.png">
					</div>
				</div>
				<div class="row" id="about-final">
					<div class="container">
						<h1>TARİX</h1>
						<p>10 noyabr 1887-ci ildə Bakı şəhər duması tərəfindən Bakıda texniki məktəbin yaradılması haqqında qərar çıxarılıb.
							1896-cı ildə texniki məktəb “Bakı aşağı səviyyəli texniki məktəb”ə çevrilib. 1896-1905-ci illər ərzində bu məktəbin
							mexanika şöbəsi üzrə 50 nəfər, inşaat şöbəsi üzrə isə 55 nəfər məzun buraxılışı olub.</p>
						<a href="http://asoiu.edu.az/az/page/1-adnsu-haqqinda" class="button">DAHA ƏTRAFLI</a>
					</div>
				</div>
			</div>

			<?php $this->load->view('user/includes/right_side'); ?>
		</div>
	</div>
</section>


<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footer_style'); ?>