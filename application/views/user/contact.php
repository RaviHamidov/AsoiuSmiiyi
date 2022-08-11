<?php $this->load->view('user/includes/header_style');?>
<?php $this->load->view('user/includes/header');?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('assets/user/');?>images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Əlaqə</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Əsas səhifə <i class="ion-ios-arrow-forward"></i></a></span> <span>Əlaqə <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <p class = "my-sm-5" style = "text-align:center; font-size:25px;">Xəritədə bax</p>
            <div class = "my-sm-5" style = "width:70%; margin:auto;">
              <iframe
                id="map"
                class="wow slideInUp"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.7625430627645!2d49.845678315705385!3d40.379678715815366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307da7c3a641cf%3A0x53a5c1e7cc11c36f!2zQXrJmXJiYXljYW4gRMO2dmzJmXQgTmVmdCB2yZkgU8mZbmF5ZSBVbml2ZXJzaXRldGk!5e1!3m2!1sen!2sus!4v1657104480008!5m2!1sen!2sus"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div> 

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box  text-center">
          		<h3 class="mb-4">Ünvan</h3>
	            <p>AZ1010, Bakı şəhəri, Azadlıq prospekti 20, ADNSU, I korpus</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box text-center">
          		<h3 class="mb-4">Telefon:</h3>
	            <p><a href="tel://+994124980393">+994 12 498-03-93</a></p>
              <p><a href="tel://+994125982912">+994 12 598-29-12</a></p>
              <p><a href="tel://+994124980757">+994 12 498-07-57</a></p>
              <p><a href="tel://+994502428415">+994 50 242-84-15</a></p>
	          </div>
          </div>

          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box text-center">
              <h3 class="mb-4">Faks:</h3>
              <p><a href="tel://+994124980757">+994 12 498-07-57</a></p>
            </div>
          </div>

          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box text-center">
          		<h3 class="mb-4">Email</h3>
	            <p><a href="mailto:smiiyi@asoiu.edu.az">smiiyi@asoiu.edu.az</a></p>
	          </div>
          </div>
        </div> 
      </div>
      <p class = "my-sm-5" style = "text-align:center;">Əgər siz də institutda təhsil almaq istəyirsinizsə, əlaqə bölməsinə keçərək məlumat əldə edə və ya aşağıdaki formanı dolduraraq 
                      bir başa müraciət edə bilərsiniz</p>
                      <br>
                      <p style = "text-align:center;"><a style = "text-align:center; color:blue;margin:10px 60px" href="<?php echo base_url('qeydiyyat')?>"
                        >İnstituta qəbul üçün Elektron Qeydiyyat</a></p>
    </section>
          

    <?php $this->load->view('user/includes/footer');?>
	<?php $this->load->view('user/includes/footer_style');?>