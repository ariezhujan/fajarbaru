
<blockquote class="card">
  <div class="page-header page-header-small">
    <?php if($contact1){ ?>
      <div class="page-header-image" data-parallax="true" style='background-image: url("<?php echo base_url('upload/contact/'. $contact1->file)?>");'>
      </div>
    <?php } ?>
    <div class="content-center">
      <div class="container">
        <?php if($contact1){ ?>
          <h2 class="title"><strong style="color: white"><?php echo $contact1->text; ?></strong></h2>
        <?php } ?>
      </div>
    </div>
  </div>
  <p class="text-center"><a href="<?php echo site_url('admin/contact_page/action/contact1') ?>" class="btn btn-info">Edit / Konten 1</a></p>
</blockquote>


<blockquote class="card">
  <div class="gtco-section">
      <div class="gtco-container">
        <div class="row">
          <div style="margin-left: 180px" class="col-md-8 col-md-offset-6 text-center gtco-heading">
            <?php foreach ($contact2 as $key) { ?>
            <h2><?php echo $key->text; ?></h2>
            <p><?php echo $key->file; ?></p>
          <?php } ?>
            <p class="text-center"><a href="<?php echo site_url('admin/contact_page/action/contact2') ?>" class="btn btn-info">Edit / Konten 2</a></p>
          </div>
        </div>
        <div class="container contact">
      <div class="row">
        <div class="col-md-3" style="background: #012b72;">
          <div class="contact-info">
            <h3>Contact Us</h3>
            <h4 class="text-center"><i style="font-size: 100px" class="now-ui-icons media-1_button-power"></i></h4>
          </div>
        </div>
        <div class="col-md-9">
          <div class="contact-form">
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-3"> 
                <a class="nav-link-contact" rel="tooltip" title="" data-placement="bottom" href="<?php if($contact3){ echo $contact3->phone;  }?>" data-original-title="Contact us on Phone (+6224) 7625823">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#012b72"><g id="surface1"><path d="M41.19938,13.90781c0,0 -7.49813,0 -15.85625,3.96406v-0.01344c-6.39625,3.03688 -11.78469,7.47125 -14.37813,11.09938c-0.76594,0.99437 -0.92719,2.33812 -0.43,3.48031c0.51063,1.15562 1.59906,1.935 2.86219,2.05594c1.24969,0.1075 2.45906,-0.48375 3.15781,-1.53188c1.23625,-1.73344 6.53063,-6.40969 11.74438,-8.88219c6.94719,-3.29219 12.9,-3.29219 12.9,-3.29219c1.23625,0.01344 2.39187,-0.63156 3.02344,-1.70656c0.61812,-1.075 0.61812,-2.39187 0,-3.46687c-0.63156,-1.075 -1.78719,-1.72 -3.02344,-1.70656zM109.60969,17.2c-7.94156,-0.02687 -17.49562,0.30906 -28.12469,1.67969c-14.12281,1.81406 -26.875,4.6225 -38.99562,8.58656c-20.58625,6.70531 -27.4125,14.57969 -29.97906,17.53594l-0.24188,0.28219c-5.07937,5.81844 1.38406,26.56594 1.43781,26.7675c1.53188,4.70312 5.41531,7.06812 8.86875,7.06812c0.69875,0 1.37063,-0.09406 2.00219,-0.28219c1.29,-0.38969 6.36938,-2.40531 13.96156,-5.41531c3.73563,-1.49156 7.04125,-2.80844 8.11625,-3.19812c2.92938,-1.075 5.14656,-4.16563 5.9125,-8.25063c0.37625,-1.90812 2.45906,-10.62906 3.80281,-16.17875c3.50719,-1.41094 13.23594,-4.87781 27.80219,-6.75906c14.55281,-1.88125 24.87281,-1.14219 28.62188,-0.7525c3.84312,6.46344 9.39281,15.8025 9.64812,16.19219c1.85438,2.83531 4.3,4.50156 6.89344,4.70312c1.16906,0.09406 4.97188,0.57781 9.17781,1.10188c7.74,0.9675 12.91344,1.59906 14.37813,1.63937c3.77594,0.06719 8.39844,-3.45344 8.73437,-9.32562c0.01344,-0.215 0.91375,-21.47313 -5.50937,-25.82688c0,0 -0.63156,-0.43 -0.99438,-0.65844c-3.99094,-2.60688 -14.17656,-8.22375 -38.10875,-8.80156c-2.28437,-0.06719 -4.74344,-0.1075 -7.40406,-0.1075zM65.36,55.04c-1.89469,0 -3.44,1.54531 -3.44,3.44v8.82844c-3.48031,3.3325 -14.82156,14.39156 -28.40687,30.2075c-11.395,13.26281 -12.9,22.53469 -12.87313,29.85813c0.02688,6.43656 3.34594,27.09 3.49375,27.96344c0.25531,1.67969 1.69313,2.9025 3.38625,2.9025h17.2c1.89469,0 3.44,-1.54531 3.44,-3.44v-3.44h82.56v3.44c0,1.89469 1.54531,3.44 3.44,3.44h17.2c1.69313,0 3.13094,-1.22281 3.38625,-2.9025c0.14781,-0.87344 3.48031,-21.56719 3.49375,-28.0575c0.01344,-7.28312 -1.49156,-16.52812 -12.87312,-29.76406c-13.58531,-15.81594 -24.92656,-26.875 -28.40688,-30.2075v-8.82844c0,-1.89469 -1.54531,-3.44 -3.44,-3.44h-10.32c-1.89469,0 -3.44,1.54531 -3.44,3.44v6.88h-20.64v-6.88c0,-1.89469 -1.54531,-3.44 -3.44,-3.44zM130.70656,65.50781c-1.46469,-0.01344 -2.78156,0.91375 -3.26531,2.28437c-0.49719,1.38406 -0.05375,2.91594 1.075,3.84313c3.01,2.48594 7.28313,3.73562 12.30875,4.04469c6.04688,0.36281 8.86875,-0.33594 11.9325,-1.505c1.77375,-0.69875 2.64719,-2.6875 1.96188,-4.46125c-0.68531,-1.77375 -2.67406,-2.66062 -4.44781,-1.97531c-2.84875,1.10188 -3.45344,1.41094 -9.01656,1.06156c-4.00437,-0.24187 -7.18906,-1.505 -8.34469,-2.4725c-0.61813,-0.52406 -1.3975,-0.81969 -2.20375,-0.81969zM61.92,86h13.76v6.88h-13.76zM82.56,86h13.76v6.88h-13.76zM103.2,86h13.76v6.88h-13.76zM61.92,99.76h13.76v6.88h-13.76zM82.56,99.76h13.76v6.88h-13.76zM103.2,99.76h13.76v6.88h-13.76zM61.92,113.52h13.76v6.88h-13.76zM82.56,113.52h13.76v6.88h-13.76zM103.2,113.52h13.76v6.88h-13.76z"></path></g></g></g></svg>
                  <h5>Call Me ON Phone</h5>
                </a>        
              </div>
              <div class="col-sm-3">
                <a class="nav-link-contact" rel="tooltip" title="" data-placement="bottom" href="https://wa.me/<?php if($contact3){ echo $contact3->whatsapp;  }?>" data-original-title="Chat us on Whatsapp (+62)81931763399">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#012b72"><path d="M136.7185,35.31733c-13.51633,-13.5235 -31.49033,-20.97683 -50.63967,-20.984c-39.45967,0 -71.5735,32.0995 -71.58783,71.55917c-0.00717,12.61333 3.2895,24.92567 9.55317,35.776l-9.71083,35.99817l37.50317,-8.86517c10.45617,5.70467 22.22383,8.7075 34.2065,8.71467h0.02867c39.4525,0 71.56633,-32.10667 71.58783,-71.55917c0.01433,-19.12783 -7.42467,-37.109 -20.941,-50.63967zM121.10233,111.47033c-1.49067,4.17817 -8.7935,8.20583 -12.07583,8.49967c-3.28233,0.301 -6.35683,1.4835 -21.46417,-4.472c-18.18183,-7.16667 -29.66283,-25.80717 -30.5515,-26.99683c-0.89583,-1.19683 -7.30283,-9.6965 -7.30283,-18.49717c0,-8.80067 4.6225,-13.12933 6.26367,-14.91383c1.64117,-1.79167 3.57617,-2.236 4.773,-2.236c1.18967,0 2.3865,0 3.42567,0.043c1.27567,0.05017 2.6875,0.11467 4.02767,3.08883c1.591,3.54033 5.06683,12.384 5.51117,13.27983c0.44433,0.89583 0.74533,1.94217 0.1505,3.13183c-0.59483,1.18967 -0.89583,1.935 -1.7845,2.98133c-0.89583,1.04633 -1.87767,2.32917 -2.68033,3.13183c-0.89583,0.88867 -1.8275,1.86333 -0.78833,3.64783c1.04633,1.79167 4.62967,7.64683 9.94733,12.384c6.837,6.09167 12.59183,7.9765 14.3835,8.8795c1.79167,0.89583 2.83083,0.74533 3.87717,-0.4515c1.04633,-1.18967 4.472,-5.21733 5.66167,-7.009c1.18967,-1.79167 2.3865,-1.49067 4.02767,-0.89583c1.64117,0.59483 10.43467,4.9235 12.21917,5.81933c1.79167,0.89583 2.98133,1.34017 3.42567,2.0855c0.44433,0.73817 0.44433,4.3215 -1.04633,8.49967z"></path></g></g>
                  </svg>
                  <h5>Chat Me ON Whatsapp</h5>
                </a>
              </div>
              <div class="col-sm-3">
                <a class="nav-link-contact" rel="tooltip" title="" data-placement="bottom" href="mailto: <?php if($contact3){ echo $contact3->email;  }?>?subject=Question From Web " data-original-title="Message us on Email info@fajarbaru.co.id">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#012b72"><path d="M28.66667,28.66667c-7.33867,0 -13.32686,5.53715 -14.16536,12.65365l71.4987,44.67969l71.49869,-44.67969c-0.83849,-7.1165 -6.82669,-12.65365 -14.16536,-12.65365zM14.33333,55.55566v73.44434c0,7.91917 6.41417,14.33333 14.33333,14.33333h87.23177l-18.53255,-18.53256c-2.6875,-2.6875 -4.19922,-6.33578 -4.19922,-10.13411v-18.8125l-3.37337,2.11361c-2.322,1.45483 -5.26459,1.45483 -7.58659,0zM157.66667,55.55566l-48.72493,30.44434h12.8916c3.79833,0 7.44661,1.51172 10.13411,4.19922l25.69922,25.69922zM107.5,100.33333v14.33333l36.88314,36.88314l14.33333,-14.33333l-36.88314,-36.88314zM163.78353,142.28353l-14.33333,14.33333l7.16667,7.16667c1.3975,1.3975 3.66239,1.3975 5.06706,0l9.26628,-9.26628c1.3975,-1.3975 1.3975,-3.66956 0,-5.06706z"></path></g></g>
                  </svg>
                  <h5>Message Me ON Email</h5>
                </a>
              </div>
              <div class="col-sm-1"></div>
            </div>
          </div>
          <p class="text-center"><a href="<?php echo site_url('admin/contact_page/action/contact3') ?>" class="btn btn-info">Edit / Konten 3</a></p> 
        </div>
      </div>
    </div>
    </div>
  </div>
</blockquote>
  
<blockquote class="card">
  <div id="gtco-subscribe">
    <div class="gtco-container">
      <div class="row animate-box fadeInUp animated-fast">
        <div class="col-md-12 col-md-offset-2 text-center gtco-heading">
        <div class="row">
        <div class="col-md-12 col-md-offset-2 text-center gtco-heading animate-box fadeInUp animated-fast">
          <?php foreach ($contact4 as $key) { ?>
          <h2><?php echo $key->text; ?></h2>
          <p><?php echo $key->file; ?></p>
        <?php } ?>
          <p class="text-center"><a href="<?php echo site_url('admin/contact_page/action/contact4') ?>" class="btn btn-info">Edit / Konten 4</a></p>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</blockquote>
  
<?php foreach ($maps as $key) { ?>
<div class="footer" style="margin-bottom: -30px;margin-top: -30px">
  <?php echo $key->maps; ?>
</div>
<?php } ?>