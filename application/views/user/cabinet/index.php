<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--jQuery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!--Fontwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/') ?>cabinet.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/') ?>reset.css">
    <script src="<?php echo base_url('assets/user/js/') ?>cabinet.js"></script>
    <title>İstifadəçi paneli</title>
</head>

<body>

    <header class="header">
            <div class="topbar-cabinet container-fluid">
                <div class="item-1 logo-img">
                    <a href="<?php echo base_url('index') ?>">
                        <img src="<?php echo base_url('assets/user/img/') ?>logo.png" alt="logo.png">
                    </a>
                </div>
                <div class="item-2">
                    <h4>Xoş gəldiniz! User</h4>
                </div>
        </div>
    </header>


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

    <section id="main-section">
        <div class="container-fluid">
            <div id="lesson-schedule">
                <img src="<?php echo base_url('assets/user/img/upload/') ?>02_team.png" alt="" class="">
            </div>

            <div id="exam-schedule">
                <img src="<?php echo base_url('assets/user/img/upload/') ?>blog_small_01.jpg" alt="" class="">
            </div>

            <div id="subject-list">
                <div class="row mb-lg-5 mb-sm-0 flex-lg-nowrap flex-md-wrap">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 subject-item mr-lg-5 mr-sm-auto mr-xs-1 mb-sm-5">
                        <h4>İnformasiya təhlükəsizliyi</h4>

                        <!-- Collapse1 -->
                        <div class="accordion" id="accordionExample1">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left p-0" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            Sillabus
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample1">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Mühazirə
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample1">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            İmatahan sualları
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample1">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Collapse1 end-->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 subject-item mb-sm-5">
                        <h4>Veb sistemləri və texnologiyaları</h4>
                        <!-- Collapse2 -->
                        <div class="accordion" id="accordionExample2">
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left p-0" type="button" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Sillabus
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordionExample2">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Mühazirə
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordionExample2">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                            İmatahan sualları
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-parent="#accordionExample2">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Collapse2 end -->
                    </div>
                </div>
                <div class="row mb-lg-5 mb-sm-0 flex-lg-nowrap flex-md-wrap">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 subject-item mr-lg-5 mb-sm-5">
                        <h4>Mülki Müdafiə</h4>
                        <!-- Collapse3 -->
                        <div class="accordion" id="accordionExample3">
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left p-0" type="button" data-toggle="collapse"
                                            data-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                            Sillabus
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                            Mühazirə
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseNine" aria-expanded="false"
                                            aria-controls="collapseNine">
                                            İmatahan sualları
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                                    data-parent="#accordionExample3">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Collapse3 end -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 subject-item mb-sm-5">
                        <h4>İnternet Texnologiyaları</h4>
                        <!-- Collapse4 -->
                        <div class="accordion" id="accordionExample4">
                            <div class="card">
                                <div class="card-header" id="headingTen">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left p-0" type="button" data-toggle="collapse"
                                            data-target="#collapseTen" aria-expanded="false"
                                            aria-controls="collapseTen">
                                            Sillabus
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen"
                                    data-parent="#accordionExample4">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingEleven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseEleven"
                                            aria-expanded="false" aria-controls="collapseEleven">
                                            Mühazirə
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven"
                                    data-parent="#accordionExample4">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwelve">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false"
                                            aria-controls="collapseTwelve">
                                            İmatahan sualları
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve"
                                    data-parent="#accordionExample4">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Collapse4 end -->
                    </div>
                </div>
                <div class="row mb-lg-5 mb-sm-0 flex-lg-nowrap flex-md-wrap">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 subject-item mr-lg-5 mb-sm-5">
                        <h4>İT layihələrin idarə ediləməsi</h4>
                        <!-- Collapse5 -->
                        <div class="accordion" id="accordionExample5">
                            <div class="card">
                                <div class="card-header" id="headingThirteen">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left p-0" type="button" data-toggle="collapse"
                                            data-target="#collapseThirteen" aria-expanded="false"
                                            aria-controls="collapseThirteen">
                                            Sillabus
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen"
                                    data-parent="#accordionExample5">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFourteen">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false"
                                            aria-controls="collapseFourteen">
                                            Mühazirə
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen"
                                    data-parent="#accordionExample5">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFifteen">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false"
                                            aria-controls="collapseFifteen">
                                            İmatahan sualları
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen"
                                    data-parent="#accordionExample5">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Collapse5 end -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 subject-item mb-sm-5">
                        <h4>Korporativ infromasiya sistemləri</h4>
                        <!-- Collapse6 -->
                        <div class="accordion" id="accordionExample6">
                            <div class="card">
                                <div class="card-header" id="headingSixteen">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left p-0" type="button" data-toggle="collapse"
                                            data-target="#collapseSixteen" aria-expanded="false"
                                            aria-controls="collapseSixteen">
                                            Sillabus
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen"
                                    data-parent="#accordionExample6">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingSeventeen">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseSeventeen"
                                            aria-expanded="false" aria-controls="collapseSeventeen">
                                            Mühazirə
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen"
                                    data-parent="#accordionExample6">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingEighteen">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left collapsed p-0" type="button"
                                            data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="false"
                                            aria-controls="collapseEighteen">
                                            İmatahan sualları
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen"
                                    data-parent="#accordionExample6">
                                    <div class="card-body">
                                        PDF
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Collapse6 end -->
                    </div>
                </div>
            </div>

            <div id="score-table">
                <table class="table table-striped table-hover">
                    <thead class="text-white">
                        <tr id="headings">
                            <th scope="col">№</th>
                            <th scope="col">Fənn</th>
                            <th scope="col">İmtahana giriş balı</th>
                            <th scope="col">İmtahan balı</th>
                            <th scope="col">Ümumi bal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Database</td>
                            <td>46</td>
                            <td>47</td>
                            <td>93</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Database</td>
                            <td>45</td>
                            <td>46</td>
                            <td>91</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Database</td>
                            <td>46</td>
                            <td>İmtahan bitməyib</td>
                            <td>-</td>
                        </tr>
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