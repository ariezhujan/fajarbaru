<blockquote class="card">
    <div class="section section-team text-center">
      <div class="container">
      <h2 class="title">Konten Service 1</h2>
       <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('data'); ?></div> 
        <div class="team">
          <!--Table-->
          <table id="example" class="table-striped table-bordered table-responsive">
          <!--Table head-->
            <thead>
              <tr>
                <th>text</th>
                <th>file</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
              <?php foreach($service1 as $key) { ?> 
              <tr>
                <td><?php echo $key->text; ?></td>
                <td><img style="width: 20%" src="<?php echo site_url('upload/service/'. $key->file) ?>" ></td>
                <td>
                  <a href="javascript:;" data-id="<?php echo $key->id ?>" data-text="<?php echo  $key->text ?>" data-file="<?php echo  $key->file ?>"  data-toggle="modal" data-target="#edit-data"><button  data-toggle="modal" data-target="#ubah-data" class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i></button>
                   </a>
                </td>
                <td>
                  <a href="<?php echo site_url('admin/service_page/service1_remove') ?>?id=<?php echo $key->id ?>" title="Hapus" class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></a>
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
              <form action="<?php echo site_url('admin/service_page/service1') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <div class="row" style="margin-left:70px" id="row">
                  <input type="hidden" value="6" name="page" >
                  <input type="hidden" value="1" name="sub" >
                  <input type="hidden" value="1" name="field">
                  <div class="col-md-10">
                    <label>Header Text</label>
                    <input class="input form-control" name="field1" type="text" placeholder="Type something" required/>
                  </div>
                  <div class="col-md-10" style="margin-bottom : 200px;"> 
                    <label>Rekomendasi Image : width: 1350px height: 400px , Max file 1mb</label>
                    <input class="input form-control" name="field2" type="file" placeholder="Type something" required/>
                  </div>
                  </div>
                <button type="submit" class="btn btn-primary" style="margin-top: -200px" title="Simpan Data" ></i>&nbsp;&nbsp;Simpan data</button>
              </form>
            </div>
           </div>
        </div>
      </div>
</blockquote>


<!-- Sart Modal #formulasi1 -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data</h4>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                <form class="form-horizontal" action="<?php echo base_url('admin/service_page/service1_edit')?>" method="post" enctype="multipart/form-data" role="form">
                  <div class="modal-body">
                      <div class="form-group">
                          <div class="col-md-12">
                            <br>
                            <br>
                              <input type="hidden" name="id" id="id">
                              <input type="text" class="form-control" id="text" name="field1" required="required">
                          </div>
                           <div class="col-md-12">
                            <br>
                            <br>
                              <input type="file" class="form-control" id="file" name="field2" required="required">  
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
<!--  End Modal #formulasi1-->


<!--############################# JS ADD FORM ############################################################-->
<script type="text/javascript">
 $(document).ready(function(){
  
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
            modal.find('#text').attr("value",div.data('text'));
            modal.find('#file').attr("value",div.data('file'));
        });
    });

</script>
<!--############################# END JS ADD FORM ############################################################-->