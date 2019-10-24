<blockquote class="card">
    <div class="section section-team text-center">
      <div class="container">
      <h2 class="title">Address</h2>
      <p class="text-danger"><?php echo $this->session->flashdata('data'); ?></p> 
        <div class="team">
          <!--Table-->
          <table id="example" class="table table-striped table-bordered table-responsive">
          <!--Table head-->
            <thead>
              <tr>
                <th>Kota</th>
                <th>Alamat</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
              <?php foreach($address as $key) { ?> 
              <tr>
                <td><?php echo $key->kota; ?></td>
                <td><?php echo $key->alamat; ?></td>
                <td>
                  <a href="javascript:;" data-id="<?php echo $key->id ?>" data-kota="<?php echo $key->kota ?>" data-address="<?php echo $key->alamat ?>"  data-toggle="modal" data-target="#edit-data" class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i>
                   </a>
                </td>
                <td>
                  <a href="<?php echo site_url('admin/home_page/address_remove') ?>?id=<?php echo $key->id ?>" title="Hapus" class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
            <!--Table body-->
          </table>
          <!--Table-->
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-10">
           <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> Tambah Address</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-2">
                  <button type="button" name="add" id="add" class="btn btn-success"><i class="now-ui-icons ui-1_simple-add"></i></button>
              </div>
              <form action="<?php echo site_url('admin/home_page/address') ?>" method="post" accept-charset="utf-8">
                
                <div class="form-group">
                <div id="dynamic_field">
                  <div class="row" id="field"> 
                  </div>
                </div>
                </div>
                <button type="submit" id="categoryIndustri" class="btn btn-primary" title="Simpan Data" style="margin-top:0px;margin-left: -15px; display: none"><i class="now-ui-icons ui-1_check"></i>&nbsp;&nbsp;Simpan data</button>
              </form>
            </div>
           </div>
        </div>
      </div>
</blockquote>

<blockquote class="card">
    <div class="section section-team text-center">
      <div class="container">
      <h2 class="title">Contact</h2>
      <p class="text-danger"><?php echo $this->session->flashdata('data'); ?></p> 
        <div class="team">
          <!--Table-->
          <table id="example" class="table table-striped table-bordered table-responsive">
          <!--Table head-->
            <thead>
              <tr>
                <th>Contact</th>
                <th>Number</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
              <?php foreach($contact as $key) { ?> 
              <tr>
                <td><?php echo $key->contact; ?></td>
                <td><?php echo $key->number; ?></td>
                <td>
                  <a href="javascript:;" data-id="<?php echo $key->id ?>" data-contact="<?php echo $key->contact ?>" data-number="<?php echo $key->number ?>"  data-toggle="modal" data-target="#edit-datai" class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i>
                   </a>
                </td>
                <td>
                  <a href="<?php echo site_url('admin/home_page/contact_remove') ?>?id=<?php echo $key->id ?>" title="Hapus" class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
            <!--Table body-->
          </table>
          <!--Table-->
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-10">
           <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> Tambah Contact</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-2">
                  <button type="button" name="add" id="add1" class="btn btn-success"><i class="now-ui-icons ui-1_simple-add"></i></button>
              </div>
              <form action="<?php echo site_url('admin/home_page/contact') ?>" method="post" accept-charset="utf-8">
                
                <div class="form-group">
                <div id="dynamic_field1">
                  <div class="row" id="field"> 
                  </div>
                </div>
                </div>
                <button type="submit" id="categoryIndustri1" class="btn btn-primary" title="Simpan Data" style="margin-top:0px;margin-left: -15px; display: none"><i class="now-ui-icons ui-1_check"></i>&nbsp;&nbsp;Simpan data</button>
              </form>
            </div>
           </div>
        </div>
      </div>
</blockquote>

<blockquote class="card">
    <div class="section section-team text-center">
      <div class="container">
      <h2 class="title">Maps</h2>
      <p class="text-danger"><?php echo $this->session->flashdata('data'); ?></p> 
        <div class="team">
          <!--Table-->
          <table id="example" class="table table-striped table-bordered table-responsive">
          <!--Table head-->
            <thead>
              <tr>
                <th>data</th>
                <th>Maps</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
              <?php foreach($maps as $key) { ?> 
              <tr>
                <td style="word-break: break-all;"><?php echo htmlentities($key->maps); ?></td>
                <td id="maps"><?php echo $key->maps; ?></td>
                <td>
                  <a href="javascript:;" data-id="<?php echo $key->id ?>" data-maps="<?php echo htmlentities($key->maps) ?>" data-toggle="modal" data-target="#edit-data2" class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i>
                   </a>
                </td>
                <td>
                  <a href="<?php echo site_url('admin/home_page/maps_remove') ?>?id=<?php echo $key->id ?>" title="Hapus" class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
            <!--Table body-->
          </table>
          <!--Table-->
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-10">
           <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> Tambah Maps</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-2">
                  <button type="button" name="add" id="add2" class="btn btn-success"><i class="now-ui-icons ui-1_simple-add"></i></button>
              </div>
              <form action="<?php echo site_url('admin/home_page/maps') ?>" method="post" accept-charset="utf-8">
                <div class="form-group">
                <div id="dynamic_field2">
                  <div class="row" id="field"> 
                  </div>
                </div>
                </div>
                <button type="submit" id="categoryIndustri2" class="btn btn-primary" title="Simpan Data" style="margin-top:0px;margin-left: -15px; display: none"><i class="now-ui-icons ui-1_check"></i>&nbsp;&nbsp;Simpan data</button>
              </form>
            </div>
           </div>
        </div>
      </div>
</blockquote>


<!-- Sart Modal #Adrress -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="margin-left: 280px;">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data Address</h4>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                <form class="form-horizontal" action="<?php echo base_url('admin/home_page/address_edit')?>" method="post" enctype="multipart/form-data" role="form">
                  <div class="modal-body" style="margin-left: 280px;">
                          <div class="form-group">
                              <div class="row">
                                <div class="col-md-4">
                                    <input type="hidden" id="id" name="id">
                                    <input type="text" class="form-control" id="kotai" name="field1" >
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control"  id="alamati" name="field2">
                                </div>
                            </div> 
                              
                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-primary" type="submit" style="margin-left: 500px;"><i class="now-ui-icons ui-1_check"></i> Simpan</button>
                      </div>
                    </form>
                  </div>
              </div>

            </div>
        </div>
    </div>
</div>
<!--  End Modal #Address-->

<!-- Sart Modal #contact -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-datai" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="margin-left: 280px;">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data Contact</h4>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                <form class="form-horizontal" action="<?php echo base_url('admin/home_page/contact_edit')?>" method="post" enctype="multipart/form-data" role="form">
                  <div class="modal-body" style="margin-left: 280px;">
                          <div class="form-group">
                              <div class="row">
                                <div class="col-md-4">
                                    <input type="hidden" id="id" name="id">
                                    <input type="text" class="form-control" id="contacti" name="field1" >
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control"  id="numberi" name="field2">
                                </div>
                            </div> 
                              
                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-primary" type="submit" style="margin-left: 500px;"><i class="now-ui-icons ui-1_check"></i> Simpan</button>
                      </div>
                    </form>
                  </div>
              </div>

            </div>
        </div>
    </div>
</div>
<!--  End Modal #contact-->

<!-- Sart Modal #maps -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="margin-left: 280px;">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data Maps</h4>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                <form class="form-horizontal" action="<?php echo base_url('admin/home_page/maps_edit')?>" method="post" enctype="multipart/form-data" role="form">
                  <div class="modal-body" style="margin-left: 280px;">
                          <div class="form-group">
                              <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" id="id" name="id">
                                    <input style="height: 100px; width: 100%" type="text" class="form-control" id="mapsi" name="field1" >
                                </div>
                            </div> 
                              
                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-primary" type="submit" style="margin-left: 500px;"><i class="now-ui-icons ui-1_check"></i> Simpan</button>
                      </div>
                    </form>
                  </div>
              </div>

            </div>
        </div>
    </div>
</div>
<!--  End Modal #maps-->


<!--############################# JS ADD FORM ############################################################-->
<script type="text/javascript">
  $(document).ready(function(){
  var i=0;
  $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<div class="row" style="margin-left:40px" id="row'+i+'"><input type="hidden" value="1" name="page" placeholder="" class="form-control"><input type="hidden" value="6" name="sub" placeholder="" class="form-control"><input type="hidden" value="'+i+'" name="field"><div class="col-md-4"><input autocomplete="off" class="input form-control" name="field1[]" type="text" placeholder="Kota" required/></div><div class="col-md-6"><textarea autocomplete="off" class="input form-control" name="field2[]" type="text" placeholder="Alamat" required/></textarea></div><button type="button" name="remove" id="'+i+'" title="Hapus Input Data" class="btn_remove btn btn-danger" style="margin-top:5px;margin-left: 0px;"><i class="now-ui-icons ui-1_simple-delete"></i></button></div>');
  });

  $('#add1').click(function(){
    i++;
    $('#dynamic_field1').append('<div class="row" style="margin-left:40px" id="row'+i+'"><input type="hidden" value="1" name="page" placeholder="" class="form-control"><input type="hidden" value="6" name="sub" placeholder="" class="form-control"><input type="hidden" value="'+i+'" name="field"><div class="col-md-4"><input autocomplete="off" class="input form-control" name="field1[]" type="text" placeholder="Contact" required/></div><div class="col-md-6"><textarea autocomplete="off" class="input form-control" name="field2[]" type="text" placeholder="Number" required/></textarea></div><button type="button" name="remove" id="'+i+'" title="Hapus Input Data" class="btn_remove btn btn-danger" style="margin-top:5px;margin-left: 0px;"><i class="now-ui-icons ui-1_simple-delete"></i></button></div>');
  });

  $('#add2').click(function(){
    i++;
    $('#dynamic_field2').append('<div class="row" style="margin-left:40px" id="row'+i+'"><input type="hidden" value="1" name="page" placeholder="" class="form-control"><input type="hidden" value="6" name="sub" placeholder="" class="form-control"><input type="hidden" value="'+i+'" name="field"><div class="col-md-10"><textarea autocomplete="off" class="input form-control" name="field1" type="text" placeholder="Sematkan peta" required/></textarea></div><button type="button" name="remove" id="'+i+'" title="Hapus Input Data" class="btn_remove btn btn-danger" style="margin-top:5px;margin-left: 0px;"><i class="now-ui-icons ui-1_simple-delete"></i></button></div>');
  });
  
  $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
  });

  $(document).ready(function(){
    $("#add").click(function(){
      $("#categoryIndustri").show(10);
    });
  });
   $(document).ready(function(){
    $("#add1").click(function(){
      $("#categoryIndustri1").show(10);
    });
  });
    $(document).ready(function(){
    $("#add2").click(function(){
      $("#categoryIndustri2").show(10);
    });
  });

  });

  $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)
 
            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#kotai').attr("value",div.data('kota'));
            modal.find('#alamati').attr("value",div.data('address'));
        });
    });

   $(document).ready(function() {
        // Untuk sunting
        $('#edit-datai').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)
 
            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#contacti').attr("value",div.data('contact'));
            modal.find('#numberi').attr("value",div.data('number'));
        });
    });
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data2').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)
 
            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#mapsi').attr("value",div.data('maps'));
        });
    });

</script>
<!--############################# END JS ADD FORM ############################################################-->