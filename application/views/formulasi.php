
<div class="page-header page-header-small">
  <?php foreach ($formulasi1 as $key) { ?>
    <div class="page-header-image" data-parallax="true" style='background-image: url("<?php echo site_url('upload/formulasi/'. $key->file) ?>");'>
    </div>
  <?php } ?>
  <div class="content-center">
    <div class="container">
     <?php foreach ($formulasi1 as $key) { ?>
        <h2 class="title"><strong style="color: white"><?php echo $key->text; ?></strong></h2>
      <?php } ?>
    </div>
  </div>
</div>
<div class="section section-about-us">
      <div class="container">
          <div class="row">
              <div class="col-md-6 text-left col-z-index">
                  <?php foreach ($formulasi2 as $key){ ?>
                    <h1 class="title"> <?php echo $key->text; ?> </h1>
                  <?php } ?>
                   <?php foreach ($formulasi3 as $key){ ?>
                      <h4 class="desc"><?php echo $key->text; ?> </h4>
                   <?php } ?>
              </div>
              <div class="col-md-6">
                  <?php foreach ($formulasi4 as $key){ ?>
                    <img src="<?php echo base_url('upload/formulasi/'. $key->file) ?>" alt="illustration" class="img-responsive">
                  <?php } ?>
              </div>
          </div>
          <div class="row">
            <div class="points">
                <div class="point point-floating-1"></div>
                <div class="point point-floating-2"></div>
                <div class="point point-floating-3"></div>
                <div class="point point-floating-4"></div>
            </div>
            <br>
            <div class="col-md-7">
                <div class="ipad">
                    <div class="shadow"></div>
                    <div class="lid"></div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators"></ol>
                      <div class="carousel-inner" role="listbox">
                        <?php foreach ($formulasi5 as $key) { ?>
                      <div class="carousel-item">
                        <img style="max-height: 350px;height: 350px;width: 100%px;" class="d-block" src="<?php echo base_url('upload/formulasi/'. $key->file) ?>" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h5></h5>
                        </div>
                      </div>
                      <?php } ?>
                      <div class="carousel-item active">
                        <img style="height: 350px" class="d-block" src="<?php echo base_url() ?>/assets/img/fileuser/logonamafajar.png" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h5></h5>
                        </div>
                      </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                      </a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="info info-horizontal text-center">
                    <div class="description">
                        <?php foreach ($formulasi6 as $key) { ?>
                          <h3><?php echo $key->text; ?></h3>
                        <?php } ?>
                         <?php foreach ($formulasi7 as $key) { ?>
                           <p class="desc"><?php echo $key->text; ?></p>
                         <?php } ?>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title text-center"></h2>
            <?php foreach ($formulasi8 as $key) { ?>
              <h5 class="desc text-justify">
                <?php echo $key->text; ?>
              </h5>
            <?php } ?>
          </div>
        </div>
        <div class="separator separator-primary"></div>
          <div class="section-story-overview">
              <div class="row">
              <div class="col-md-6 ml-auto mr-auto">
                <div class="nav-align-center">
                  <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#raw" role="tablist">
                        <i class="now-ui-icons design-2_ruler-pencil"></i><span style="color:#012B72">Powder</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#install" role="tablist">
                        <i class="now-ui-icons ui-2_settings-90"></i><span style="color:#012B72">Liquid</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Tab panes -->
              <div class="tab-content gallery">
                <div class="tab-pane active" id="install" role="tabpanel">
                  <div class="col-md-10 ml-auto mr-auto">
                    <div class="row collections">
                      <div class="col-md-6">
                        <?php foreach ($formulasi9left as $key) { ?>
                          <img src="<?php echo base_url('upload/formulasi/'. $key->file) ?>" alt="" class="img-raised">
                        <?php } ?>
                      </div>
                      <div class="col-md-6">
                        <?php foreach ($formulasi9right as $key) { ?>
                          <img src="<?php echo base_url('upload/formulasi/'. $key->file) ?>" alt="" class="img-raised">
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="raw" role="tabpanel">
                  <div class="col-md-10 ml-auto mr-auto">
                    <div class="row collections">
                      <div class="col-md-6">
                        <?php foreach ($formulasi10left as $key) { ?>
                          <img src="<?php echo base_url('upload/formulasi/'. $key->file) ?>" alt="" class="img-raised">
                        <?php } ?>
                      </div>
                      <div class="col-md-6">
                        <?php foreach ($formulasi10right as $key) { ?>
                          <img src="<?php echo base_url('upload/formulasi/'. $key->file) ?>" alt="" class="img-raised">
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