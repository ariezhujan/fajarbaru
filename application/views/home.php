<div class="page-header page-header-small">
  <?php if($header){ ?>
    <div class="page-header-image" data-parallax="true" style='background-image: url("<?php echo base_url('upload/dashboard/'. $header->file) ?>");'>
    </div>
  <?php } ?>
  <div class="content-center">
    <div class="container">
      <?php if($header){ ?>
        <h2 class="title"><strong style="color: white;"> <?php echo $header->text ?></strong></h2>
      <?php } ?>
      <div class="text-center">
            <a class="btn btn-primary" rel="tooltip" title="Contact us on Phone" data-placement="bottom" href="tel:<?php if($contact3){ echo $contact3->phone;  }?>">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="20" height="20"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M112.875,106.425l-18.20333,18.13167c-10.97933,-5.7835 -19.77283,-12.52017 -27.219,-20.00933c-7.48917,-7.44617 -14.22583,-16.23967 -20.00933,-27.219l18.13167,-18.20333l-4.57233,-37.625h-39.50267c0,0 0,2.35067 0,7.16667c0,32.5295 13.18667,63.597 35.58967,86.24367c22.64667,22.403 53.71417,35.58967 86.24367,35.58967c4.816,0 7.16667,0 7.16667,0v-39.50267z"></path></g></g>
              </svg>
            </a>
            <a class="btn btn-primary" rel="tooltip" title="Chat us on Whatsapp" data-placement="bottom" href="https://wa.me/<?php if($contact3){ echo $contact3->whatsapp;  }?>">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="20" height="20"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M136.7185,35.31733c-13.51633,-13.5235 -31.49033,-20.97683 -50.63967,-20.984c-39.45967,0 -71.5735,32.0995 -71.58783,71.55917c-0.00717,12.61333 3.2895,24.92567 9.55317,35.776l-9.71083,35.99817l37.50317,-8.86517c10.45617,5.70467 22.22383,8.7075 34.2065,8.71467h0.02867c39.4525,0 71.56633,-32.10667 71.58783,-71.55917c0.01433,-19.12783 -7.42467,-37.109 -20.941,-50.63967zM121.10233,111.47033c-1.49067,4.17817 -8.7935,8.20583 -12.07583,8.49967c-3.28233,0.301 -6.35683,1.4835 -21.46417,-4.472c-18.18183,-7.16667 -29.66283,-25.80717 -30.5515,-26.99683c-0.89583,-1.19683 -7.30283,-9.6965 -7.30283,-18.49717c0,-8.80067 4.6225,-13.12933 6.26367,-14.91383c1.64117,-1.79167 3.57617,-2.236 4.773,-2.236c1.18967,0 2.3865,0 3.42567,0.043c1.27567,0.05017 2.6875,0.11467 4.02767,3.08883c1.591,3.54033 5.06683,12.384 5.51117,13.27983c0.44433,0.89583 0.74533,1.94217 0.1505,3.13183c-0.59483,1.18967 -0.89583,1.935 -1.7845,2.98133c-0.89583,1.04633 -1.87767,2.32917 -2.68033,3.13183c-0.89583,0.88867 -1.8275,1.86333 -0.78833,3.64783c1.04633,1.79167 4.62967,7.64683 9.94733,12.384c6.837,6.09167 12.59183,7.9765 14.3835,8.8795c1.79167,0.89583 2.83083,0.74533 3.87717,-0.4515c1.04633,-1.18967 4.472,-5.21733 5.66167,-7.009c1.18967,-1.79167 2.3865,-1.49067 4.02767,-0.89583c1.64117,0.59483 10.43467,4.9235 12.21917,5.81933c1.79167,0.89583 2.98133,1.34017 3.42567,2.0855c0.44433,0.73817 0.44433,4.3215 -1.04633,8.49967z"></path></g></g>
              </svg>
            </a>
            <a class="btn btn-primary" rel="tooltip" title="Massage us on E-Mail" data-placement="bottom" href="mailto: <?php if($contact3){ echo $contact3->email;  }?>?subject=Question From Web">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="20" height="20"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M28.66667,28.66667c-7.33867,0 -13.32686,5.53715 -14.16536,12.65365l71.4987,44.67969l71.49869,-44.67969c-0.83849,-7.1165 -6.82669,-12.65365 -14.16536,-12.65365zM14.33333,55.55566v73.44434c0,7.91917 6.41417,14.33333 14.33333,14.33333h87.23177l-18.53255,-18.53256c-2.6875,-2.6875 -4.19922,-6.33578 -4.19922,-10.13411v-18.8125l-3.37337,2.11361c-2.322,1.45483 -5.26459,1.45483 -7.58659,0zM157.66667,55.55566l-48.72493,30.44434h12.8916c3.79833,0 7.44661,1.51172 10.13411,4.19922l25.69922,25.69922zM107.5,100.33333v14.33333l36.88314,36.88314l14.33333,-14.33333l-36.88314,-36.88314zM163.78353,142.28353l-14.33333,14.33333l7.16667,7.16667c1.3975,1.3975 3.66239,1.3975 5.06706,0l9.26628,-9.26628c1.3975,-1.3975 1.3975,-3.66956 0,-5.06706z"></path></g></g>
              </svg>
            </a>
      </div>
    </div>
  </div>
</div>
<div class="home">
<div class="bgcolor">
<div class="section section-about-us"><!--start section-about-us-->
      <div class="container">
        <div class="row">
          <div class="separator separator-primary"></div>
          <div class="section section-team text-center">
            <div class="container">
            <h2 class="title">Product Category</h2>
              <div class="team">
                <div class="row">
                  <div class="col-md-12">
                    <div class="team-player">
                       <?php foreach ($product_category as $key ) { ?>
                          <a><img src="<?php echo base_url('upload/dashboard/'.$key->file) ?>" alt="Conveyor img"><?php echo $key->text ?></a>
                        <?php } ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--End section-about-us-->

    <div class="section section-team text-center">
      <div class="container">
      <h2 class="title">Application Field</h2>
        <div class="team">
          <!--Table-->
          <table id="tablePreview" class="table table-striped table-bordered table-responsive">
          <!--Table head-->
            <thead>
              <tr>
                <th>Industry Category</th>
                <th>conveyor system</th>
                <th>Tank / Mixer</th>
                <th>Formulasi system</th>
                <th>Customized system</th>
              </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
               <?php foreach ($application_field as $key) { ?>
                <tr>
                  <td scope="row" class="text-left"><?php echo $key->industry_category ?></td>
                  <td><?php if ($key->conveyor_system == 1) { echo "<i class='now-ui-icons ui-1_check'></i>";} ?></td>
                  <td><?php if ($key->tanki_mixer == 1) { echo "<i class='now-ui-icons ui-1_check'></i>";} ?></td>
                  <td><?php if ($key->formulasi_system == 1) { echo "<i class='now-ui-icons ui-1_check'></i>";} ?></td>
                  <td><?php if ($key->customized_system == 1) { echo "<i class='now-ui-icons ui-1_check'></i>";} ?></td>
                </tr>
              <?PHP } ?>
            </tbody>
            <!--Table body-->
          </table>
          <!--Table-->
        </div>
      </div>
    </div>

    <div class="container"><!--Our Advantage-->
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="title text-center">Our Advantages</h2>
              <div class="description text-justify">
                <?php foreach ($our_advan as $key) { ?>
                  <div class="row">
                    <div class="col-md-1 col-1">
                      <h5 class="text-primary text-right"><i class="text-primary now-ui-icons education_atom"></i></h5>
                    </div>      
                    <div class="col-md-10 col-10">
                      <h5><span class="paragraph"><?php echo $key->file; ?></span></h5>  
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div><!--End Our Advantage-->  

    <div class="section section-team text-center">
        <div class="container-fluid">
          <h2 class="title">Our Partner</h2>
          <div class="team">
          <div class="row">
            <div class="col-md-12">
              <div class="team-player1">
                <?php foreach ($our_partner as $key) { ?>
                    <img src="<?php echo base_url('upload/dashboard/'. $key->file) ?>" alt="">
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="section section-contact-us text-center">
      <div class="container">
        <h2 class="title">Want to work with us?</h2>
        <p class="description">Your project is very important to us</p>
        <div class="row">
          <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
              </div>
              <input type="text" name="nama" class="form-control" placeholder="First Name...">
            </div>
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input type="text" name="mail" class="form-control" placeholder="Email...">
            </div>
            <div class="textarea-container">
              <textarea class="form-control" name="body" rows="4" cols="80" placeholder="Type a message..."></textarea>
            </div>
            <div class="send-button">
              <button type="submit" onclick="window.location.href='mailto:info@fajarbaru.co.id?subject=Question'" class="btn btn-primary btn-round btn-block btn-lg">Send Message</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="page-footer font-small bg-info pt-4">

  <!-- Footer Text -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">Address</h5>
        <?php foreach ($address as $key ) { ?>
          <div class="row">
            <div class="col-md-2">
              <b> <?php echo $key->kota ?></b>
            </div>
            <div class="col-md-10">
              <address><?php echo $key->alamat ?></address>
            </div>
          </div>
        <?php }  ?>
        <hr>
        <?php foreach ($contact as $key ) { ?>
        <div class="row">
          <div class="col-md-2">
            <b><?php echo $key->contact; ?></b>
          </div>
          <div class="col-md-10">
            <address><?php echo $key->number; ?></address>
          </div>
        </div>
      <?php } ?>
      <!-- Grid column -->

    </div>
    <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">
            <h5 class="text-uppercase font-weight-bold">Maps</h5>
            <!-- Content -->
       <?php foreach ($maps as $key ) { ?>
        <div class="footer">
           <?php echo $key->maps ?> 
        </div>
       <?php } ?>
        
      </div>
    <!-- Grid row -->

  </div>
  </div>
  </div>
  <!-- Footer Text -->
</footer>
<!-- Footer -->
</div>

    




    