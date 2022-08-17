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
                <h1 class="mb-2 bread">Təkrar ali təhsil işçi Tədris Planları</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('index'); ?>">Əsas səhifə <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="<?php echo base_url('blog'); ?>">Elanlar</a></span> </p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8 ftco-animate ">
                <h4 style="text-align:center">
                    ADNSU SMİİYİ
                    Təkrar ali təhsil üzrə ixtisasların<br>
                    İŞÇİ TƏDRİS PLANLARI:
                </h4>

                <div class="wrapper">
                    <div class="tabs">
                        <div class="tab hgt">
                            <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
                            <label for="tab-1" class="tab-label">2021-2026</label>
                            <div class="tab-content tb">
                                <h4 class="text-center">Azərbaycan Respublikası Təhsil Nazirliyi
                                    Azərbaycan Dövlət Neft və Sənaye Universiteti
                                    Əlavə təhsilin ixtisaslar üzrə
                                    (2021-2026-cı illər üzrə)
                                    BAKALAVR SƏVIYYƏSINDƏ 5 illik İŞÇİ TƏDRİS PLANI</h4>
                                <ul class="y-h-ul">
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma/') . '050628_MM_2021_5TP.pdf'; ?>"> 050628 - Mexanika mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma/') . '050608_EM_2021_5TP.pdf'; ?>">050608 - Energetika mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma/') . '050614_HFT_2021_5TP.pdf'; ?>">050614 - Həyat fəaliyyətinin təhlükəsizliyi
                                            mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma/') . '050616_IT_2021_5TP.pdf'; ?>">050616 - İnformasiya texnologiyaları
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma/') . '050405_I_2021_5TP.pdf'; ?>">050405 - İqtisadiyyat
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma/') . '050618_KM_2021_5TP.pdf'; ?>">050618 - Kimya mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma/') . '050509_KE_2021_5TP.pdf'; ?>">050509 - Kompüter elmləri
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma/') . '050631_NQM_2021_5TP.pdf'; ?>"> 050631 - Neft-qaz mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma/') . '050408_M_2021_5TP.pdf'; ?>"> 050408 - Menecment
                                        </a></li>

                                </ul>


                            </div>
                        </div>
                        <div class="tab hgt">
                            <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
                            <label for="tab-2" class="tab-label">2016-2020</label>
                            <div class="tab-content tb">
                                <h4 class="text-center">Azərbaycan Respublikası Təhsil Nazirliyi
                                    Azərbaycan Dövlət Neft və Sənaye Universiteti
                                    Əlavə təhsilin ixtisaslar üzrə
                                    (2016-2020-ci illər üzrə)
                                    BAKALAVR SƏVIYYƏSINDƏ 5 illik İŞÇİ TƏDRİS PLANI</h4>
                                <ul class="y-h-ul">
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt-050651.pdf'; ?>"> 050651-Fövqəladə hallar və həyat fəaliyyətinin
                                            təhlükəsizliyi mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt-050641.pdf'; ?>">050641-Kimya mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt-050604.pdf'; ?>">050604-Geofizika mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt-050655.pdf'; ?>">050655-İnformasiya texnologiyalari
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt-050405.pdf'; ?>">050405-Sənayenin təşkili və idarə edilməsi
                                            mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt-050608.pdf'; ?>">050608-Elektroenergetika mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt-050607.pdf'; ?>">050607-Neft-qaz qurğulari mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt-050606.pdf'; ?>">050606-Neft-qaz mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt-050625.pdf'; ?>">
                                            050625-Texnoloji maşin və avadanliqlar mühəndisliyi</a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt_050647.pdf'; ?>">
                                            050647-Metrologiya, standartlaşdirma və sertifikasiya
                                            mühəndisliyi</a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt_050509.pdf'; ?>">050509-Kompüter elmləri
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt-050626.pdf'; ?>">050626-Elektrik mühəndisliyi
                                        </a></li>
                                    <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma2020/') . 'tedris_qrafiki_ixt-050630.pdf'; ?>">050630-Mexanika mühəndisliyi
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <p style="color: red; font-style: italic;">* (Qeyd: Lazım olan ixtisası seçib
                    tədris qrafikini yükləyə bilərsiniz)</p>
            </div>

            <?php $this->load->view('user/includes/right_side'); ?>
        </div>
    </div>
</section>


<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footer_style'); ?>