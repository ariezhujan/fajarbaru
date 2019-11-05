
<div class="page-header page-header-small">
   <?php if($header){ ?>
    <div class="page-header-image" data-parallax="true" style='background-image: url("<?php echo base_url('upload/about/'. $header->file) ?>");'></div>
  <?php } ?>
  <div class="content-center">
    <div class="container">
     <?php if($header){ ?>
          <h2 class="title"><strong><?php echo $header->text; ?></strong></h2>
     <?php } ?>
    </div>
  </div>
</div>


<div class="container about">
<div class="row">
    <div class="col-md-8 ml-auto mr-auto">
      <h2 class="title text-center">Who we are?</h2>
     <?php foreach ($about1 as $key) { ?>
      <p class="text-justify"> <?php echo $key->text ?> </p>
    <?php } ?>
    </div>
  </div>
  <div class="section section-team text-center">
      <div class="container">
        <h2 class="title">With us better</h2>
        <div class="team">
          <div class="row">
            <?php foreach ($about2 as $key) { ?>
            <div class="col-md-4">
              <div class="team-player">
                <i style="font-size: 80px" class="now-ui-icons <?php echo $key->icon ?> text-primary"></i>
                <h4 class="title"><?php echo $key->headertext ?></h4>
                <p class="description"><?php echo $key->text ?></p>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
        <div class="container text-center">
          <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-8">
              <h2 class="title">Customer Experience </h2>
               <?php foreach($about3 as $key) { ?> 
                <h5 class="description"><?php echo $key->text; ?></h5>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
</div>