 
<blockquote class="card">
<div class="page-header page-header-small">
  <?php if($conveyor1){ ?>
    <div class="page-header-image" data-parallax="true" style='background-image: url("<?php echo base_url('upload/conveyor/'.$conveyor1->file) ?>");'>
    </div>
  <?php } ?>
    <div class="content-center">
        <div class="container">
          <?php if($conveyor1) { ?> 
        <h2 class="title"><strong style="color:white"><?php echo $conveyor1->text ?></strong></h2>
      <?php } ?> 
        </div>
    </div>
  </div>
  <p class="text-center"><a href="<?php echo site_url('admin/conveyor_page/action/conveyor1') ?>" class="btn btn-info">Edit / Konten 1</a></p>
 </blockquote>

<div class="section section-about-us">
      <div class="container">
      <blockquote class="card">
        <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <br>
            <?php foreach ($conveyor2 as $key) { ?>
            <h5 class="description text-justify">
              <?php echo $key->text; ?>
            </h5>
            <?php } ?>
        </div>
        </div>
        <p class="text-center"><a href="<?php echo site_url('admin/conveyor_page/action/conveyor2') ?>" class="btn btn-info">Edit / Konten 2</a></p>
        </blockquote>

        <blockquote class="card">
        <div class="image-container" style="width: 70%; margin-left: 40px;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php 
                $a = count($conveyor3);
                for ($i=0; $i < $a; $i++) { ?>
                  <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $a; ?>" class=""></li>
                <?php } ?>
              </ol>
            <div class="carousel-inner" role="listbox" style="max-height: 350px;height: 350px;width: 600px;">
              <div class="carousel-item active">
                  <img style="width: 600px;height:400px" class="d-block" src="<?php echo base_url(); ?>/assets/img/fileuser/logonamafajar.png">
              </div>
              <?php foreach ($conveyor3 as $key) { ?>
                <div class="carousel-item">
                  <img style="width: 700px;height:400px" class="d-block" src="<?php echo base_url('upload/conveyor/'. $key->file); ?>" alt="Four slide">
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
         <p ><a href="<?php echo site_url('admin/conveyor_page/action/conveyor3') ?>" class="btn btn-info">Edit / Konten 3</a></p> 
        </div>
                <div style="margin-left: 240px; margin-top: -120px" class="image-container image-right" style="background-color: #012b727d; background-size:100%;">
                  <div class="image-container" style="width: 70%; margin-left: 160px">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <?php 
                              $b = count($conveyor4);
                              for ($i=0; $i < $b; $i++) { ?>
                          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>" class=""></li>
                        <?php } ?>
                        </ol>
                      <div class="carousel-inner" role="listbox" style="max-height: 300px;height: 300px;max-width: 450px;width: 450px;">
                        <div class="carousel-item active">
                          <img style="width: 450px;height:300px" class="d-block" src="<?php echo base_url(); ?>/assets/img/pic/cnvyrvector2.jpg" alt="Four slide">
                        </div>
                        <?php foreach ($conveyor4 as $key) {?>
                        <div class="carousel-item">
                          <img style="width: 450px;height:300px" class="d-block" src="<?php echo base_url('upload/conveyor/'. $key->file); ?>" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $key->text; ?></h5>
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
                   <p class="text-center"><a href="<?php echo site_url('admin/conveyor_page/action/conveyor4') ?>" class="btn btn-info">Edit / Kontent 4</a></p>
                  </div>
                </div> 
              </blockquote>
              
              <br>
               <blockquote class="card" style="padding: 0 50px 0 50px">
                  <h3>Material Handling</h3>
                  <?php foreach($conveyor5 as $key) { ?>
                  <p class="text-justify">
                      <?php echo $key->text; ?>
                  </p>
                <?php } ?>
                  <p class="text-center"><a href="<?php echo site_url('admin/conveyor_page/action/conveyor5') ?>" class="btn btn-info">Edit / Konten 5</a></p>
          </blockquote>
          </div>
        </div>


        <div class="separator separator-primary"></div>
            <div class="section-story-overview">
              <div class="row">
              <div class="col-md-6 ml-auto mr-auto">
                <h4 class="title text-center" style="margin-left:-28px;">Conveyor processing</h4>
                <div class="nav-align-center">
                  <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#raw" role="tablist">
                        <i class="now-ui-icons design-2_ruler-pencil"></i><span style="color:#012B72"> On progress</span>
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
              <div class="tab-content gallery" style="margin-top: 100px">
                <div class="tab-pane active" id="install" role="tabpanel">
                  <div class="col-md-10 ml-auto mr-auto">
                    <div class="row collections">
                      <div class="col-md-6">
                        <p class="text-center"><a href="<?php echo site_url('admin/conveyor_page/action/conveyor6left') ?>" class="btn btn-info">Edit Installation / Left</a></p> 
                        <?php foreach ($conveyor6left as $key) { ?>
                        <img src="<?php echo base_url('upload/conveyor/'. $key->file) ?>" alt="" class="img-raised">
                      <?php } ?>
                      </div>
                      <div class="col-md-6">
                        <p class="text-center"><a href="<?php echo site_url('admin/conveyor_page/action/conveyor6right') ?>" class="btn btn-info">Edit Installation / Right</a></p>  
                       <?php foreach ($conveyor6right as $key) { ?>
                        <img src="<?php echo base_url('upload/conveyor/'. $key->file) ?>" alt="" class="img-raised">
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="raw" role="tabpanel">
                  <div class="col-md-10 ml-auto mr-auto">
                    <div class="row collections">
                      <div class="col-md-6">
                        <p class="text-center"><a href="<?php echo site_url('admin/conveyor_page/action/conveyor7left') ?>" class="btn btn-info">Edit On Progress / left</a></p> 
                        <?php foreach ($conveyor7left as $key) { ?>
                        <img src="<?php echo base_url('upload/conveyor/'. $key->file) ?>" alt="" class="img-raised">
                      <?php } ?>
                      </div>
                      <div class="col-md-6">
                        <p class="text-center"><a href="<?php echo site_url('admin/conveyor_page/action/conveyor7right') ?>" class="btn btn-info">Edit On Progress / Right</a></p> 
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
    