<?php $this->load->view('user/cabinet/cabinet_header_status'); ?>

<nav id="navbar" class="navbar navbar-expand-md">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon">
            <div class="icon"></div>
            <div class="icon"></div>

        </span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="menu" id="menu">
            <li id="link1" class="nav-link"><a href="">Dərs cədvəli</a></li>
            <li id="link2" class="nav-link"><a href="">İmtahan cədvəli</a></li>
            <li id="link3" class="nav-link"><a href="">Fənnlərin siyahısı</a></li>
            <li id="link4" class="nav-link"><a href="">Ballar</a></li>
        </ul>
    </div>
</nav>


<style>
.mediaQ {
    width: 100% !important;
    min-height: 100vh !important;
}

.a1 {
    height: 100% !important;
}
</style>

<section id="main-section">
    <div class="container-fluid">
        <div id="lesson-schedule">
            <?php if(!empty($exam_list)){
                 if($exam_list['lesson_ext'] == ".pdf"){ ?>
            <iframe class="mediaQ" src="<?php echo base_url('upload/exam/'.$exam_list['lesson_table']); ?>"
                frameborder="0"></iframe>
            <?php }else{ ?>

            <?php if($exam_list['lesson_table']){ ?>
            <img width="100%" src="<?php echo base_url('upload/exam/'.$exam_list['lesson_table']) ?>" alt="" class="a1">
            <?php }else{ ?>
            <img width="100%" src="<?php echo base_url('assets/user/img/upload/') ?>02_team.png" alt="" class="a1">
            <?php } ?>

            <?php } }else{echo "Dərs cədvəliniz hazırlanır...";}?>


        </div>

        <div id="exam-schedule">
            <?php if(!empty($exam_list)){
                if($exam_list['exam_ext'] == ".pdf"){ ?>
            <iframe class="mediaQ" src="<?php echo base_url('upload/exam/'.$exam_list['exam_table']); ?>"
                frameborder="0"></iframe>
            <?php }else{ ?>

            <?php if($exam_list['exam_table']){ ?>
            <img width="100%" src="<?php echo base_url('upload/exam/'.$exam_list['exam_table']) ?>" alt="" class="a1">
            <?php }else{ ?>
            <img width="100%" src="<?php echo base_url('assets/user/img/upload/') ?>02_team.png" alt="" class="a1">
            <?php } ?>

            <?php } }else{echo "<h2>Imtahan cədvəliniz hazırlanır...</h2>";}?>
        </div>


        <div id="subject-list">
            <div class="row mb-lg-5 mb-sm-0 flex-lg-nowrap flex-md-wrap">
                <?php foreach($std_subject as $stds){ ?>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 subject-item mb-sm-5">
                    <h4><?php echo $stds['subject_name'];?></h4>
                    <!-- Collapse6 -->
                    <div class="accordion" id="accordionExample<?php echo $stds['co_id']; ?>">
                        <div class="card">
                            <div class="card-header" id="headingSixteen">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left p-0" type="button" data-toggle="collapse"
                                        data-target="#collapseSixteen<?php echo $stds['co_id']; ?>"
                                        aria-expanded="false" aria-controls="collapseSixteen">
                                        Sillabus
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSixteen<?php echo $stds['co_id']; ?>" class="collapse"
                                aria-labelledby="headingSixteen"
                                data-parent="#accordionExample<?php echo $stds['co_id']; ?>">
                                <div class="card-body">
                                    <a target="_blank"
                                        href="<?php echo base_url("upload/about/").$stds['syllabs'];?>">Endir</a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSeventeen<?php echo $stds['co_id']; ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed p-0" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapseSeventeen<?php echo $stds['co_id']; ?>"
                                        aria-expanded="false" aria-controls="collapseSeventeen">
                                        Mühazirə
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeventeen<?php echo $stds['co_id']; ?>" class="collapse"
                                aria-labelledby="headingSeventeen<?php echo $stds['co_id']; ?>"
                                data-parent="#accordionExample<?php echo $stds['co_id']; ?>">
                                <div class="card-body">
                                    <a target="_blank"
                                        href="<?php echo base_url("upload/about/").$stds['lecture'];?>">Endir</a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingEighteen">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed p-0" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapseEighteen<?php echo $stds['co_id']; ?>"
                                        aria-expanded="false" aria-controls="collapseEighteen">
                                        İmatahan sualları
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEighteen<?php echo $stds['co_id']; ?>" class="collapse"
                                aria-labelledby="headingEighteen"
                                data-parent="#accordionExample<?php echo $stds['co_id']; ?>">
                                <div class="card-body">
                                    <a target="_blank"
                                        href="<?php echo base_url("upload/about/").$stds['exam'];?>">Endir</a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingNineteen">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed p-0" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapseNineteen<?php echo $stds['co_id']; ?>"
                                        aria-expanded="false" aria-controls="collapseNineteen">
                                        İmatahan cavabları
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseNineteen<?php echo $stds['co_id']; ?>" class="collapse"
                                aria-labelledby="headingNineteen"
                                data-parent="#accordionExample<?php echo $stds['co_id']; ?>">
                                <div class="card-body">
                                    <a target="_blank"
                                        href="<?php echo base_url("upload/about/").$stds['exam_answers'];?>">Endir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Collapse6 end -->
                </div>
                <?php }?>
            </div>

            <div class="row mb-lg-5 mb-sm-0 flex-lg-nowrap flex-md-wrap">
                <?php foreach($std_subject_add as $std){ ?>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 subject-item mb-sm-5">
                    <h4><?php echo $std['subject_name'];?></h4>
                    <!-- Collapse6 -->
                    <div class="accordion" id="accordionExampleadd<?php echo $std['re_id']; ?>">
                        <div class="card">
                            <div class="card-header" id="headingSixteenadd">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left p-0" type="button" data-toggle="collapse"
                                        data-target="#collapseSixteenadd<?php echo $std['re_id']; ?>"
                                        aria-expanded="false" aria-controls="collapseSixteenadd">
                                        Sillabus
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSixteenadd<?php echo $std['re_id']; ?>" class="collapse"
                                aria-labelledby="headingSixteenadd"
                                data-parent="#accordionExampleadd<?php echo $std['re_id']; ?>">
                                <div class="card-body">
                                    <a target="_blank"
                                        href="<?php echo base_url("upload/about/").$std['syllabs'];?>">Endir</a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSeventeenadd<?php echo $std['re_id']; ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed p-0" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapseSeventeenadd<?php echo $std['re_id']; ?>"
                                        aria-expanded="false" aria-controls="collapseSeventeenadd">
                                        Mühazirə
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeventeenadd<?php echo $std['re_id']; ?>" class="collapse"
                                aria-labelledby="headingSeventeenadd<?php echo $std['re_id']; ?>"
                                data-parent="#accordionExampleadd<?php echo $std['re_id']; ?>">
                                <div class="card-body">
                                    <a target="_blank"
                                        href="<?php echo base_url("upload/about/").$std['lecture'];?>">Endir</a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingEighteenadd">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed p-0" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapseEighteenadd<?php echo $std['re_id']; ?>"
                                        aria-expanded="false" aria-controls="collapseEighteenadd">
                                        İmatahan sualları
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEighteenadd<?php echo $std['re_id']; ?>" class="collapse"
                                aria-labelledby="headingEighteenadd"
                                data-parent="#accordionExampleadd<?php echo $std['re_id']; ?>">
                                <div class="card-body">
                                    <a target="_blank"
                                        href="<?php echo base_url("upload/about/").$std['exam'];?>">Endir</a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingNineteenadd">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed p-0" type="button"
                                        data-toggle="collapse"
                                        data-target="#collapseNineteenadd<?php echo $std['re_id']; ?>"
                                        aria-expanded="false" aria-controls="collapseNineteenadd">
                                        İmatahan cavabları
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseNineteenadd<?php echo $std['re_id']; ?>" class="collapse"
                                aria-labelledby="headingNineteenadd"
                                data-parent="#accordionExampleadd<?php echo $std['re_id']; ?>">
                                <div class="card-body">
                                    <a target="_blank"
                                        href="<?php echo base_url("upload/about/").$std['exam_answers'];?>">Endir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Collapse6 end -->
                </div><br><br><br><br>
                <?php }?>
            </div>
        </div>



        <div id="score-table">
            <table class="table table-striped table-hover">
                <thead class="text-white">
                    <tr id="headings">
                        <th scope="col">Fənn</th>
                        <th scope="col">İmtahana giriş balı</th>
                        <th scope="col">İmtahan balı</th>
                        <th scope="col">Ümumi bal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($std_points as $st_p){?>
                    <tr>
                        <td><?php echo $st_p["subject_name"];?></td>
                        <td><?php echo $st_p["po_enter_point"];?></td>
                        <td><?php echo $st_p["po_exam_point"];?></td>
                        <td><?php echo $st_p["po_enter_point"]+$st_p["po_exam_point"];?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>

        </div>
</section>

<footer class="bg-light text-center text-lg-start">
    <div class="text-light text-center p-3">
        © 2022 Copyright
    </div>
</footer>

<script src="<?php echo base_url('assets/user/js/') ?>bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/user/js/') ?>toggle.js"></script>
<script src="<?php echo base_url('assets/user/js/') ?>darkmode.js"></script>

</body>

</html>