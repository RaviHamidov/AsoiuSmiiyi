
<?php $this->load->view('user/includes/header'); ?>
<style>

  /* core styles for table */

table{
  width: 100%;
  border-spacing: 0;
  border-collapse: collapse;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24);
  background-color: var(--tableBgColor, #fff);
}

thead{
  background-color: var(--tableTitleBgColor);
  color: var(--tableTitleTextColor);
}



td, th{
  padding: var(--tableCellPadding, 20px);
  box-sizing: border-box;
}

@media screen and (min-width: 769px){

  tr:hover{
    background-color: var(--tableRowBgColorHover);
  }

  td:first-child, th:first-child{
    width: 30%;
    text-align: left;
  }

  td, th{
    text-align: center;
  }
}



/* demo styles for table */

table{
  --tableCellPadding: 2rem;
  --tableTitleBgColor: #5668ca;
  --tableTitleTextColor: #fff;
  --tableRowBgColorHover: #f0f0f0;
  --tableSeparatorColor: #eee;
}

/*
* demo page
*/

@media screen and (min-width: 768px){

  html{
    font-size: 62.5%;
  }
}

@media screen and (max-width: 767px){

  html{
    font-size: 50%;
  }
}

table{
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Open Sans", "Ubuntu", "Fira Sans", "Helvetica Neue", sans-serif;
  font-size: 1.4rem;
  background-color: #f0f0f0;
  color: #222;
  margin: 0;
}

a{
  text-decoration: none;
  color: #5668ca;
}

a:hover, a:focus{
  text-decoration: underline;
}


</style>

<section class="section db p120">
      <div class="container">
        <div class="row">
          <div class="col-md-32">
            <div class="tagline-message page-title text-center">
              <h3>Elanlar</h3>
              <ul class="breadcrumb">
                <li><a href="<?php echo base_url('announcement');?>">Elanlar</a></li>
                <li class="active">
               
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section gb nopadtop">
      <div class="container">
        <div class="boxed">
          <div class="row">
            <div class="col-md-32">
              <div class="content blog-list">
                <div class="blog-wrapper clearfix">
                  <div class="blog-meta">
                    <h3><?php echo $x->title;?></h3>
                    <ul class="list-inline">
                      <li><i class="fa fa-clock-o"></i> <?php echo $x->date?></li>
                    </ul>
                  </div>
                  <div class="col-md-32 shop-media">
                    <div class="row">
                      <div class="col-md-32 shop-media">
                        <div class="img-responsive article-head-img">
                        <img src="<?php echo base_url('upload/events/'.$x->img) ?>" alt="image not found" class="img-responsive">
                          <div class="magnifier">
                            <a rel="prettyPhoto[inline]" href="<?php echo base_url('upload/'."elan-1-3.jpeg");?>" title=""><i
                                class="flaticon-add"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="blog-desc-big mt-2">
                    <p>
                      <h3><?php echo $x->description;?></h3>
                    </p>
                    <hr class="invis" />
                    <div class="row">
                      <div class="col-md-3 col-sm-4 col-xs-4">
                        <div class="image-wrap entry">
                          <div class="magnifier">
                            <a rel="prettyPhoto[inline]" href="../upload/elan-1-2.jpeg" title=""><i
                                class="flaticon-add"></i></a>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="dark-light fabs">
        <i class='bx bx-moon moon fab'></i>
        <i class='bx bx-sun sun fab'></i>
    </div>
    </section>


    <?php $this->load->view('user/includes/footer'); ?>