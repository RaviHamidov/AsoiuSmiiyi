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
        .mediaQ{
            width:100%!important;
            min-height:100vh!important;
        }
        .a1{
            height:100%!important;
        }
        
    </style>

    <section id="main-section">
        <div class="container-fluid">
            <div id="lesson-schedule">
                <?php if($exam_list['lesson_ext'] == ".pdf"){ ?>
                    <iframe class="mediaQ" src="<?php echo base_url('upload/exam/'.$exam_list['lesson_table']); ?>" frameborder="0"></iframe>
                <?php }else{ ?>

                    <?php if($exam_list['lesson_table']){ ?>
                        <img width="100%" src="<?php echo base_url('upload/exam/'.$exam_list['lesson_table']) ?>" alt="" class="a1">
                    <?php }else{ ?>
                       <img width="100%"  src="<?php echo base_url('assets/user/img/upload/') ?>02_team.png" alt="" class="a1">
                    <?php } ?>
                    
                 <?php } ?>
                
               
            </div>

            <div id="exam-schedule">
            <?php if($exam_list['exam_ext'] == ".pdf"){ ?>
                    <iframe class="mediaQ" src="<?php echo base_url('upload/exam/'.$exam_list['exam_table']); ?>" frameborder="0"></iframe>
                <?php }else{ ?>

                    <?php if($exam_list['exam_table']){ ?>
                        <img width="100%" src="<?php echo base_url('upload/exam/'.$exam_list['exam_table']) ?>" alt="" class="a1">
                    <?php }else{ ?>
                       <img width="100%"  src="<?php echo base_url('assets/user/img/upload/') ?>02_team.png" alt="" class="a1">
                    <?php } ?>
                    
                 <?php } ?>
            </div>

            
            <div id="subject-list">
                <div class="row mb-lg-5 mb-sm-0 flex-lg-nowrap flex-md-wrap">
                <?php foreach($std_subject as $std){?>    
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 subject-item mr-lg-5 mr-sm-auto mr-xs-1 mb-sm-5">
                        <h4><?php echo $std['subject_name'];?></h4>
                        <div class="accordion" id="accordionExample1">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left p-0" type="button" data-toggle="collapse"
                                            data-target="#<?php echo $std['subject_name'];?>headingOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            Sillabus
                                        </button>  
                                    </h2>
                                </div>
                                <div id="<?php echo $std['subject_name'];?>headingOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <a href="<?php echo base_url("upload/about/").$std['syllabs'];?>">Endir</a>  
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#<?php echo $std['subject_name'];?>headingTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Mühazirə
                                        </button>
                                    </h2>
                                </div>
                                <div id="<?php echo $std['subject_name'];?>headingTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample1">
                                    <div class="card-body">
                                        <a href="<?php echo base_url("upload/about/").$std['lecture'];?>">Endir</a>  
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#<?php echo $std['subject_name'];?>headingThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            İmatahan sualları
                                        </button>
                                    </h2>
                                </div>
                                <div id="<?php echo $std['subject_name'];?>headingThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample1">
                                    <div class="card-body">
                                    <a href="<?php echo base_url("upload/about/").$std['exam'];?>">Endir</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#<?php echo $std['subject_name'];?>headingFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Imtahan cavablar
                                        </button>
                                    </h2>
                                </div>
                                <div id="<?php echo $std['subject_name'];?>headingFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordionExample1">
                                    <div class="card-body">
                                    <a href="<?php echo base_url("upload/about/").$std['exam_answers'];?>">Endir</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <td><?php echo $st_p["ce_enter_point"];?></td>
                            <td><?php echo $st_p["ce_exam_point"];?></td>
                            <td><?php echo $st_p["ce_enter_point"]+$st_p["ce_exam_point"];?></td>
                        </tr>
                        <?php }?><br>
                    </tbody>
                </table>

            </div>
    </section>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-light text-center p-3">
          © 2022 Copyright
        </div>
      </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"
        integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="<?php echo base_url('assets/user/js/') ?>toggle.js"></script>
        
</body>

</html>