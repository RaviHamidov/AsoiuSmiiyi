<?php $this->load->view('user/includes/header'); ?>

        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Yenidən Hazırlanma - Tədris Qrafiki</h3>
                            <ul class="breadcrumb">
                                <li><a href="<?php echo base_url('index');?>">Ana Səhifə</a></li>
                                <li class="active">Yenidən Hazırlanma</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section gb nopadtop">

            <div class="container">

                <div class="boxed boxedp4">
                    <h4 class="text-center">Sənaye Müəssisələri İşçilərinin İxtisasartırma və Yenidənhazırlama
                        İnstitutunun
                        2017-2018-ci Tədris ili üçün
                        TƏDRİS PROSESİNİN QRAFİKİ</h4>
                    <div class="row text-center y-h-card">
                        <div class="container">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapseTwo">
                                                Ali təhsil üzrə
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="y-h-ul">
                                                <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma_tp/').'tedris_qrafiki_Neft-qaz_muhendisliyi.pdf';?>"> 050606- “Neft-qaz mühəndisliyi”
                                                    </a></li>
                                                <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma_tp/').'tedris_qrafiki_Senayenin_teshkili.pdf';?>">
                                                        050405- “Sənayenin təşkili və idarə edilməsi”
                                                    </a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapseThree">
                                                Orta ixtisas təhsili üzrə
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <ul class="y-h-ul">
                                                <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma_tp/').'tedris_qrafiki_Neft-qaz_emali.pdf';?>">040507- “Neft və qaz emalı”
                                                    </a></li>
                                                <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma_tp/').'tedris_qrafiki_Menecment.pdf';?>">040407- “Menecment”
                                                    </a></li>
                                                <li><a target="_blank" href="<?php echo base_url('assets/user/pdfs/yeniden_hazirlanma_tp/').'tedris_qrafiki_Elektrik_techizati.pdf';?>">040510- “Elektrik təchizatı”
                                                    </a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p style="color: red; padding-top: 30px; font-style: italic;">* (Qeyd: Lazım olan ixtisası seçib
                        tədris qrafikini yükləyə bilərsiniz)</p>
                </div>
                
        </section>
        <?php $this->load->view('user/includes/footer'); ?>