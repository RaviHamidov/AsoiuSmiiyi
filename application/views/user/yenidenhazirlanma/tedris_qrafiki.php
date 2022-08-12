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
        height: 10em;
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
        height: 10em;
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
        height: 10em;
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
        height: 10em;
    }
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url('assets/user/images/'); ?>bg_126.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Yenidən hazırlanma > Tədris Qrafiki</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>">Əsas səhifə <i class="ion-ios-arrow-forward"></i></a></span> </p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h4 style="text-align:center">
                    ADNSU SMİİYİ
                    Yenidənhazırlama üzrə<br>
                    TƏDRİS PROSESİNİN QRAFİKİ:
                </h4>

                <div class="wrapper">
                    <div class="tabs">
                        <div class="tab">
                            <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
                            <label for="tab-1" class="tab-label">Ali təhsil</label>
                            <div class="tab-content tb">
                                <ul class="y-h-ul">
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma_tp/') . 'tedris_qrafiki_Neft-qaz_muhendisliyi.pdf'; ?>"> 050606-Neft-qaz mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma_tp/') . 'tedris_qrafiki_Senayenin_teshkili.pdf'; ?>">
                                            050405-Sənayenin təşkili və idarə edilməsi
                                        </a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="tab">
                            <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
                            <label for="tab-2" class="tab-label">Orta ixtisas təhsili</label>
                            <div class="tab-content tb">
                                <ul class="y-h-ul">
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma_tp/') . 'tedris_qrafiki_Neft-qaz_emali.pdf'; ?>">040507-Neft və qaz emalı
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma_tp/') . 'tedris_qrafiki_Menecment.pdf'; ?>">040407-Menecment
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma_tp/') . 'tedris_qrafiki_Elektrik_techizati.pdf'; ?>">040510-Elektrik təchizatı
                                        </a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <p style="color: red; font-style: italic;">* (Qeyd: Lazım olan ixtisası seçib
                    tədris qrafikini yükləyə bilərsiniz)</p>
                </div>
            </div>
            <?php $this->load->view('user/includes/right_side'); ?>
        </div>
    </div>
</section>


<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footer_style'); ?>