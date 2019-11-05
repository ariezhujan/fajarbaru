<blockquote class="card">
    <div class="section section-team text-center">
      <div class="container">
      <h2 class="title">Konten About 4</h2>
       <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('data'); ?></div>  
        <div class="team">
          <!--Table-->
          <table id="example" class="table-striped table-bordered table-responsive">
          <!--Table head-->
            <thead>
              <tr>
                <th>text</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
              <?php foreach($about3 as $key) { ?> 
              <tr>
                <td><?php echo $key->text; ?></td>
                <td>
                  <a href="javascript:;" data-id="<?php echo $key->id ?>" data-text="<?php echo  $key->text ?>"  data-toggle="modal" data-target="#edit-data"><button  data-toggle="modal" data-target="#ubah-data" class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i></button>
                   </a>
                </td>
                <td>
                  <a href="<?php echo site_url('admin/about_page/about3_edit_remove') ?>?id=<?php echo $key->id ?>" title="Hapus" class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></a>
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
              <h3 class="panel-title">Tambah Data</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-2">
                  <button type="button" name="add" id="add" class="btn btn-success"><i class="now-ui-icons ui-1_simple-add"></i></button>
              </div>
              <form action="<?php echo site_url('admin/about_page/about3') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                
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


<!-- Sart Modal #About3 -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data</h4>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                <form class="form-horizontal" action="<?php echo base_url('admin/about_page/about3_edit')?>" method="post" enctype="multipart/form-data" role="form">
                  <div class="modal-body">
                      <div class="form-group">
                          <div class="col-md-12">
                            <br>
                            <br>
                              <input type="hidden" name="id" id="id">
                              <textarea id="textarea" class="form-control" id="icon" name="field1" required="required"></textarea>
                          </div>
                          <br>
                          <br>
                          <br>
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
<!--  End Modal #about3-->


<!--############################# JS ADD FORM ############################################################-->
<script type="text/javascript">
 $(document).ready(function(){
  var i=0;
  $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<div class="row" style="margin-left:40px" id="row'+i+'"><input type="hidden" value="2" name="page" ><input type="hidden" value="4" name="sub" ><input type="hidden" value="'+i+'" name="field"><div class="col-md-10"><textarea class="input form-control" name="field1[]" type="text" placeholder="Input Text" required/></textarea></div><button type="button" name="remove" id="'+i+'" title="Hapus Input Data" class="btn_remove btn btn-danger" style="margin-top:5px;margin-left: 0px;"><i class="now-ui-icons ui-1_simple-delete"></i></button></div>');
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
            modal.find('#textarea').attr("value",div.data('text'));
        });
    });

var ckeditor = CKEDITOR.replace('textarea',{
      height:'400px'
});
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('editable');

</script>
<!--############################# END JS ADD FORM ############################################################-->