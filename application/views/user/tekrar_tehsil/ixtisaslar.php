<?php $this->load->view('user/includes/header_style'); ?>
<?php $this->load->view('user/includes/header'); ?>
<style>
    .wrapper {
        width: 100%;
        margin: 0 auto;
    }

    .tabs {
        position: relative;
        margin: 3rem 0;
        background: #0d1128 !important;
        height: 40em;
        width: 100%;
    }

    .tabs::before,
    .tabs::after {
        content: "";
        display: table;
    }

    .tabs::after {
        clear: both;
    }

    .tab {
        float: left;
    }

    .tab-switch {
        display: none;
    }

    .tab-label {
        position: relative;
        display: block;
        line-height: 2.75em;
        height: 3em;
        padding: 0 1.618em;
        background: #0d1128 !important;
        border: 1px solid white;
        color: #fff;
        cursor: pointer;
        top: 0;
        transition: all 0.25s;
    }

    .tab-label:hover {
        top: -0.25rem;
        transition: top 0.25s;
    }

    .tab-content {
        height: 12rem;
        position: absolute;
        z-index: 1;
        top: 2.75em;
        left: 0;
        padding: 1.618rem;
        background: #fff;
        color: #2c3e50;
        border-bottom: 0.25rem solid #bdc3c7;
        opacity: 0;
        transition: all 0.35s;
        height: 40em;
    }

    .tab-switch:checked+.tab-label {
        background: #fff;
        color: gray;
        border-bottom: 0;
        border-right: 0.125rem solid #fff;
        transition: all 0.35s;
        z-index: 1;
        top: -0.0625rem;
    }

    .tab-switch:checked+label+.tab-content {
        z-index: 2;
        opacity: 1;
        transition: all 0.35s;
    }

    .tb {
        width: 100%;
    }

    .tb a {
        color: black;
        text-decoration: underline;
    }

    .tb ul {
        list-style: none;
    }

    .hgt {
        height: 43em;
    }
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('assets/user/images/'); ?>bg_126.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">T??krar ali t??hsil ixtisaslar</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>">??sas s??hif?? <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="<?php echo base_url('blog'); ?>">Elanlar</a></span> </p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8 ftco-animate ">
                <h3 style="text-align:center;">
                    ADNSU SM????Y??
                    T??krar ali t??hsil ??zr??
                    a??a????dak?? ixtisaslar m??vcuddur:
                </h3>

               
                <div class="boxed boxedp4">
                    <div class="row text-center y-h-card">
                        <div class="container" style = "padding:10px 60px">
                            <ul class="list-group">
                            <li class="list-group-item" style="border-radius: 15px; color: white; background-color:#0d1128 !important;"><img style="margin-right:40px!important; height:40px;" src="<?php echo base_url('assets/user/img/specicons/')."mechanics.png" ?>"/>050628-MEXANIKA M??H??ND??SL??Y??</li>
                            <li class="list-group-item" style="border-radius: 15px; color: black;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."secure.png" ?>"/>050614-H??YAT F??AL??YY??T??N??N T??HL??K??S??ZL??Y??</li>
                            <li class="list-group-item" style="border-radius: 15px; color: white; background-color:#0d1128 !important;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."chemical.png" ?>"/>050618-K??MYA M??H??ND??SL??Y??</li>
                            <!-- <li class="list-group-item" style="border-radius: 15px; color: black;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."gepgisics.png" ?>"/>050604-GEOF??Z??KA M??H??ND??SL??Y??</li>
                            <li class="list-group-item" style="border-radius: 15px; color: white; background-color:#0d1128 !important;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."geology.png" ?>"/>050602-GEOLOGIYA M??H??ND??SL??Y??</li> -->
                            <li class="list-group-item" style="border-radius: 15px; color: black;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."analysis.png" ?>"/>050616-??NFORMAS??YA TEXNOLOG??YALARI</li>
                            <li class="list-group-item" style="border-radius: 15px; color: white; background-color:#0d1128 !important;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."mangement.png" ?>"/>050408-MENECMENT</li>
                            <li class="list-group-item" style="border-radius: 15px; color: black;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."factory.png" ?>"/>050405-??QT??SAD??YYAT</li>
                            <li class="list-group-item" style="border-radius: 15px; color: white; background-color:#0d1128 !important;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."electroenergy.png" ?>"/>050608-ENERGET??KA M??H??ND??SL??Y??</li>
                            <li class="list-group-item" style="border-radius: 15px; color: black;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."mining.png" ?>"/>050624-M??D??N M??H??ND??SL??Y??</li>
                            <li class="list-group-item" style="border-radius: 15px; color: white; background-color:#0d1128 !important;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."oilgas.png" ?>"/>050631-NEFT-QAZ M??H??ND??SL??Y??</li>
                            <!-- <li class="list-group-item" style="border-radius: 15px; color: black;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."metrology.png" ?>"/>050647-METROLOGIYA, STANDARTLA??DIRMA V?? SERT??FIKAS??YA M??H??ND??SL??Y??</li> -->
                            <li class="list-group-item" style="border-radius: 15px; color: black;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."logistics.png" ?>"/>050621-LOG??ST??KA V?? N??QL??YYAT TEXNOLOG??YALARI</li>
                            <!-- <li class="list-group-item" style="border-radius: 15px; color: black;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."material.png" ?>"/>050601-MATER??AL????NASLIQ M??H??ND??SL??Y??</li> -->
                            <li class="list-group-item" style="border-radius: 15px; color: white; background-color:#0d1128 !important;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."compscience.png" ?>"/>050509-KOMP??TER ELML??R??</li>
                            <!-- <li class="list-group-item" style="border-radius: 15px; color: black;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."biochemist.png" ?>"/>050648-B??OT??BB?? TEXN??KA M??H??ND??SL??Y??</li> -->
                            <li class="list-group-item" style="border-radius: 15px; color: black;"><img style="margin-right:40px!important; height:40px;" src ="<?php echo base_url('assets/user/img/specicons/')."electronics.PNG" ?>"/>050607-ELEKTR??K V?? ELEKTRON??KA M??H??ND??SL??Y??</li>
                            </ul>
                        </div>
                    </div>
                    
                </div> 

        </div>

        <?php $this->load->view('user/includes/right_side'); ?>
    </div>
</section>


<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footer_style'); ?>