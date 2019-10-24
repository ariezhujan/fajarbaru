<blockquote class="card">
    <div class="section section-team text-center">
      <div class="container">
      <h2 class="title">Our Advantages</h2>
      <p class="text-danger"><?php echo $this->session->flashdata('data'); ?></p> 
        <div class="team">
          <!--Table-->
          <table id="example" class="table table-striped table-bordered table-responsive">
          <!--Table head-->
            <thead>
              <tr>
                <th>Advantages</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
              <?php foreach($our_advantages as $key) { ?> 
              <tr>
                <td><?php echo $key->file; ?></td>
                <td>
                  <a href="javascript:;" data-id="<?php echo $key->id ?>" data-file="<?php echo $key->file ?>"  data-toggle="modal" data-target="#edit-data" class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i>
                   </a>
                </td>
                <td>
                  <a href="<?php echo site_url('admin/home_page/our_advantages_remove') ?>?id=<?php echo $key->id ?>" title="Hapus" class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></a>
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
              <h3 class="panel-title">Tambah Our Advantages</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-2">
                  <button type="button" name="add" id="add" class="btn btn-success"><i class="now-ui-icons ui-1_simple-add"></i></button>
              </div>
              <form action="<?php echo site_url('admin/home_page/our_advantages') ?>" method="post" accept-charset="utf-8">
                
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


<!-- Sart Modal #Application Field -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data</h4>
            </div>

            <div class="col-sm-10 col-lg-10">
                <div class="row">
                <form class="form-horizontal" action="<?php echo base_url('admin/home_page/our_advantages_edit')?>" method="post" enctype="multipart/form-data" role="form">
                  <div class="modal-body">
                          <div class="form-group">
                              
                              <div class="col-md-6">
                                <label>Industry Category</label>
                                  <input type="hidden" id="id" name="id">
                                  <input type="text" class="form-control" id="field" name="field1" >
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
<!--  End Modal #Application Field-->


<!--############################# JS ADD FORM ############################################################-->
<script type="text/javascript">
  $(document).ready(function(){
  var i=0;
  $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<div class="row" style="margin-left:40px" id="row'+i+'"><input type="hidden" value="1" name="page" placeholder="" class="form-control"><input type="hidden" value="4" name="sub" placeholder="" class="form-control"><input type="hidden" value="'+i+'" name="field"><div class="col-md-10"><input autocomplete="off" class="input form-control" name="field1[]" type="text" placeholder="Type something" required/></div><button type="button" name="remove" id="'+i+'" title="Hapus Input Data" class="btn_remove btn btn-danger" style="margin-top:5px;margin-left: 0px;"><i class="now-ui-icons ui-1_simple-delete"></i></button></div>');
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
  });

  $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)
 
            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#file').attr("value",div.data('file'));
        });
    });

</script>
<!--############################# END JS ADD FORM ############################################################-->