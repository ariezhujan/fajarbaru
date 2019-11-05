
<div class="page-header page-header-small">
  <?php if($conveyor1){ ?>
    <div class="page-header-image" data-parallax="true" style='background-image: url("<?php echo base_url('upload/conveyor/'.$conveyor1->file) ?>");'>
    </div>
  <?php } ?>
  <div class="content-center">
    <div class="container">
      <?php if($conveyor1) { ?> 
        <h2 class="title"><strong><?php echo $conveyor1->text ?></strong></h2>
      <?php } ?>
    </div>
  </div>
</div>
<div class="section section-about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title text-center"></h2>
              <?php foreach ($conveyor2 as $key) { ?>
              <h5 class="description text-justify">
              <?php echo $key->text; ?>
            </h5>
            <?php } ?>
          </div>
        </div>

        <div class="section-story-overview">
          <div class="row">
            <div class="col-md-6">
              <div class="image-container image-left">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <?php 
                      $a = count($conveyor3);
                      for ($i=0; $i < $a; $i++) { ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $a; ?>" class=""></li>
                      <?php } ?>
                  </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img  class="d-block" src="<?php echo base_url(); ?>/assets/img/fileuser/logonamafajar.png">
                    </div>
                   <?php foreach ($conveyor3 as $key) { ?>
                    <div class="carousel-item">
                      <img class="d-block" src="<?php echo base_url('upload/conveyor/'. $key->file); ?>" alt="Four slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $key->text ?></h5>
                      </div>
                    </div>
                  <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="now-ui-icons arrows-1_minimal-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="now-ui-icons arrows-1_minimal-right"></i>
                </a>
              </div>
            </div>
              <!-- Second image on the left side of the article -->
              <div class="image-container" style="background-image: url('<?php echo base_url(); ?>/assets/img/fileuser/conveyorsystem.png');background-repeat:no-repeat; background-size:650px; width: 117%">
              </div>
              <p class="blockquote blockquote-primary">"Our selection of handling components for you"
                  <img src="<?php echo base_url(); ?>/assets/img/fileuser/ourselection.png" alt="">
                  <br>
                  <small>-FBTM</small>
                </p>
            </div>
            <div class="col-md-5 mob">
              <!-- First image on the right side, above the article -->
              <div class="image-container image-right" style="background-color: #012b727d; background-size:600px;">
                  <div class="image-container image-left">
                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <?php 
                          $b = count($conveyor4);
                          for ($i=0; $i < $b; $i++) { ?>
                      <li data-target="#carouselExampleIndicators1" data-slide-to="<?php echo $i ?>" class=""></li>
                    <?php } ?>
                  </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img  class="d-block" src="<?php echo base_url(); ?>/assets/img/pic/cnvyrvector2.jpg">
                    </div>
                   <?php foreach ($conveyor4 as $key) {?>
                        <div class="carousel-item">
                          <img class="d-block" src="<?php echo base_url('upload/conveyor/'. $key->file); ?>" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!--<h5><?php //echo $key->text; ?></h5>-->
                          </div>
                        </div>
                      <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                  <i class="now-ui-icons arrows-1_minimal-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                  <i class="now-ui-icons arrows-1_minimal-right"></i>
                </a>
              </div>
            </div>
                <!--<video src="https://cdn.videvo.net/videvo_files/converted/2017_09/preview/170804_B_Lombok_089.mp422032.webm" width="557" height="315" poster="<?php echo base_url(); ?>/assets/img/fileuser/logonamafajar.png" controls=""></video>--> 
              </div>
              <h3>Material Handling</h3>
                <?php foreach($conveyor5 as $key) { ?>
                  <p class="text-justify">
                      <?php echo $key->text; ?>
                  </p>
                <?php } ?>
            </div>
          </div>
        </div>

        <div class="separator separator-primary"></div>
            <div class="section-story-overview">
              <div class="row">
              <div class="col-md-6 ml-auto mr-auto">
                <h4 class="title text-center" style="margin-left:-10px;">conveyor processing</h4>
                <div class="nav-align-center">
                  <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#raw" role="tablist">
                        <i class="now-ui-icons design-2_ruler-pencil"></i><span style="color:#012B72">On Progress</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#install" role="tablist">
                        <i class="now-ui-icons ui-2_settings-90"></i><span style="color:#012B72">Installation</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Tab panes -->
              <div class="tab-content gallery">
                <div class="tab-pane active" id="install" role="tabpanel">
                  <div class="col-md-10 ml-auto col-xl-10 mr-auto">
                    <!-- Tabs with Background on Card -->
                    <div class="card">
                      <div class="card-header">
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home1" role="tab" aria-selected="true">Images</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile1" role="tab" aria-selected="false">Vector</a>
                          </li>
                          <!--<li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Messages</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Settings</a>
                          </li>-->
                        </ul>
                      </div>
                      <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content text-center">
                          <div class="tab-pane active" id="home1" role="tabpanel">
                            <!--<div class="col-md-10 ml-auto mr-auto">-->
                            <div class="row collections">
                              <div class="col-md-6">
                                 <?php foreach ($conveyor6left as $key) { ?>
                                    <img src="<?php echo base_url('upload/conveyor/'. $key->file) ?>" alt="" class="img-raised">
                                 <?php } ?>
                              </div>
                              <div class="col-md-6">
                                <?php foreach ($conveyor6right as $key) { ?>
                                  <img src="<?php echo base_url('upload/conveyor/'. $key->file) ?>" alt="" class="img-raised">
                                <?php } ?>
                              </div>
                            </div>
                          <!--</div>-->
                          </div>
                          <div class="tab-pane" id="profile1" role="tabpanel">
                            <div class="row collections">
                              <div class="col-md-6">
                                <img src="<?php echo base_url() ?>/assets/img/pic/cnvyr2.jpg" alt="" class="img-raised">
                                <img src="<?php echo base_url() ?>/assets/img/pic/cnvyrvector.jpg" alt="" class="img-raised">
                                <img src="<?php echo base_url() ?>/assets/img/pic/cnvyrvector1.jpg" alt="" class="img-raised">
                              </div>
                              <div class="col-md-6">
                                <img src="<?php echo base_url() ?>/assets/img/pic/cnvyr3.jpg" alt="" class="img-raised">
                                <img src="<?php echo base_url() ?>/assets/img/pic/cnvyrvector2.jpg" alt="" class="img-raised">
                                <img src="<?php echo base_url() ?>/assets/img/pic/cnvyrvector3.jpg" alt="" class="img-raised">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Tabs on plain Card -->
                  </div>
                </div>
                <div class="tab-pane" id="raw" role="tabpanel">
                  <div class="col-md-10 ml-auto mr-auto">
                    <div class="row collections">
                      <div class="col-md-6">
                         <?php foreach ($conveyor7left as $key) { ?>
                            <img src="<?php echo base_url('upload/conveyor/'. $key->file) ?>" alt="" class="img-raised">
                          <?php } ?>
                      </div>
                      <div class="col-md-6">
                       <?php foreach ($conveyor7right as $key) { ?>
                          <img src="<?php echo base_url('upload/conveyor/'. $key->file) ?>" alt="" class="img-raised">
                        <?php } ?>
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

    