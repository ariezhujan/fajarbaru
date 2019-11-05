
<blockquote class="card">
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
  <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi1') ?>" class="btn btn-info">Edit / Konten 1</a></p>
</blockquote>

<div class="section section-about-us">

<div class="container">

<blockquote class="card">
  <div class="row" style="padding: 20px">
      <div class="col-md-6 text-left col-z-index">
        <?php foreach ($formulasi2 as $key){ ?>
          <h1 class="title"> <?php echo $key->text; ?> </h1>
        <?php } ?>
          <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi2') ?>" class="btn btn-info">Edit / Konten 2</a></p>
          <?php foreach ($formulasi3 as $key){ ?>
          <h4 class="desc"><?php echo $key->text; ?> </h4>
          <?php } ?>
          <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi3') ?>" class="btn btn-info">Edit / Konten 3</a></p>
      </div>
      <div class="col-md-6">
        <?php foreach ($formulasi4 as $key){ ?>
          <img src="<?php echo base_url('upload/formulasi/'. $key->file) ?>" alt="illustration" class="img-responsive">
        <?php } ?>
          <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi4') ?>" class="btn btn-info">Edit / Konten 4</a></p>
      </div>
  </div>
</blockquote>

          

<blockquote class="card">
<div class="row" style="padding: 20px">   
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
      <ol class="carousel-indicators">
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php foreach ($formulasi5 as $key) { ?>
        <div class="carousel-item">
          <img style="max-height: 350px;height: 350px;width: 610px;" class="d-block" src="<?php echo base_url('upload/formulasi/'. $key->file) ?>" alt="Second slide">
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
    <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi5') ?>" class="btn btn-info">Edit / Konten 5</a></p>
      </div>
  </div>
  <div class="col-md-5">
      <div class="info info-horizontal text-center">
          <div class="description">
            <?php foreach ($formulasi6 as $key) { ?>
              <h3><?php echo $key->text; ?></h3>
            <?php } ?>
              <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi6') ?>" class="btn btn-info">Edit / Konten 6</a></p>
               <?php foreach ($formulasi7 as $key) { ?>
               <p class="desc"><?php echo $key->text; ?></p>
             <?php } ?>
          </div>
          <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi7') ?>" class="btn btn-info">Edit / Konten 7</a></p>
      </div>
  </div>
</div>
</blockquote>


</div>

      <div class="container">

<blockquote class="card">
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
   <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi8') ?>" class="btn btn-info">Edit / Konten 8</a></p>
</blockquote>


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
                        <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi9left') ?>" class="btn btn-info">Edit Liquid Left</a></p>
                        <?php foreach ($formulasi9left as $key) { ?>
                        <img src="<?php echo base_url('upload/formulasi/'. $key->file) ?>" alt="" class="img-raised">
                      <?php } ?>
                      </div>
                      <div class="col-md-6">
                        <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi9right') ?>" class="btn btn-info">Edit Liquid Right</a></p>
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
                      <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi10left') ?>" class="btn btn-info">Edit Powder Left</a></p>
                      <?php foreach ($formulasi10left as $key) { ?>
                        <img src="<?php echo base_url('upload/formulasi/'. $key->file) ?>" alt="" class="img-raised">
                      <?php } ?>
                      </div>
                      <div class="col-md-6">
                        <p class="text-center"><a href="<?php echo site_url('admin/formulasi_page/action/formulasi10right') ?>" class="btn btn-info">Edit Powder Right</a></p>
                         <?php foreach ($formulasi10right as $key) { ?>
                          <img src="<?php echo base_url('upload/formulasi/'. $key->file) ?>" alt="" class="img-raised">
                        <?php } ?>
                        <img src="<?php echo base_url() ?>" alt="" class="img-raised">
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