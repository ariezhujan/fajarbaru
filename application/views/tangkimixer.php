
<div class="page-header page-header-small">
  <?php if($tangkimixer1){ ?>
    <div class="page-header-image" data-parallax="true" style='background-image: url("<?php echo base_url('upload/tangkimixer/'. $tangkimixer1->file) ?>");'>
    </div>
  <?php } ?>
  <div class="content-center">
    <div class="container">
      <?php if($tangkimixer1){ ?>
        <h2 class="title"><strong style="color: white"><?php echo $tangkimixer1->text; ?></strong></h2>
      <?php } ?>
    </div>
  </div>
</div>

<div class="section section-tank">
  <div class="container">
      <div class="row">
          <div class="col-md-6 padding-l">
              <h4>Tank</h4>
              <?php foreach ($tangkimixer2 as $key){ ?>
                <div class="text-center"><i class="now-ui-icons business_bulb-63 text-primary" style="font-size: 30px;"></i></div>
                <?php echo $key->text ?>
              <?php } ?>
          </div>
          <div class="col-md-6 padding-l">
              <h4>Mixer</h4>
              <?php foreach ($tangkimixer2 as $key){ ?>
                  <div class="text-center"><i class="now-ui-icons objects_spaceship text-primary" style="font-size: 30px;"></i></div>
                <?php echo $key->file ?>
              <?php } ?>
          </div>
      </div>
  </div>
</div>

<div class="section section-about-us">
    <div class="main-white section-check-free-pro section-white-gradient"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col-md-5 ml-auto mr-auto"> 
            <h4 class="legend">Welcome</h4> 
              <?php foreach ($tangkimixer3 as $key) { ?>
              <p class="desc">
                  <?php echo $key->text ?>
              </p> 
            <?php } ?>
              <div class="row" data-turbolinks="false"> 
              </div> 
            </div> 
            <div class="col-md-6 ml-auto mr-auto col-md-offset-4"> 
              <div class="image"> 
                <?php foreach ($tangkimixer3 as $key) { ?> 
                <img style="width:70%" src="<?php echo base_url('upload/tangkimixer/'. $key->file) ?>"> 
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
            <p class="desc text-justify">
              <?php foreach ($tangkimixer4 as $key){ echo $key->text; }?>
            </p>
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
                        <i class="now-ui-icons design-2_ruler-pencil"></i><span style="color:#012B72"> Tank</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#install" role="tablist">
                        <i class="now-ui-icons ui-2_settings-90"></i><span style="color:#012B72">Mixer</span>
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
                        <?php foreach ($tangkimixer5left as $key) { ?>
                            <img src="<?php echo base_url('upload/tangkimixer/'. $key->file) ?>" alt="" class="img-raised">
                        <?php } ?>
                      </div>
                      <div class="col-md-6">
                        <?php foreach ($tangkimixer5right as $key) { ?>
                           <img src="<?php echo base_url('upload/tangkimixer/'. $key->file) ?>" alt="" class="img-raised">
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="raw" role="tabpanel">
                  <div class="col-md-10 ml-auto mr-auto">
                    <div class="row collections">
                      <div class="col-md-6">
                         <?php foreach ($tangkimixer6left as $key) { ?>
                              <img src="<?php echo base_url('upload/tangkimixer/'. $key->file) ?>" alt="" class="img-raised">
                          <?php } ?>
                      </div>
                      <div class="col-md-6">
                        <?php foreach ($tangkimixer6right as $key) { ?>
                           <img src="<?php echo base_url('upload/tangkimixer/'. $key->file) ?>" alt="" class="img-raised">
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