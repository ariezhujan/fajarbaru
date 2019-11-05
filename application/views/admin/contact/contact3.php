<blockquote class="card">
    <div class="section section-team text-center">
      <div class="container">
      <h2 class="title">Konten Contact 3</h2>
        <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('data'); ?></div>  
        <div class="team">
          <!--Table-->
          <table id="example" class="table-striped table-bordered table-responsive">
          <!--Table head-->
            <thead>
              <tr>
                <th>Telephone</th>
                <th>Whatsapp</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
              <?php foreach($contact3 as $key) { ?> 
              <tr>
                <td><?php echo $key->phone; ?></td>
                <td><?php echo $key->whatsapp; ?></td>
                <td><?php echo $key->email; ?></td>
                <td>
                  <a href="javascript:;" data-id="<?php echo $key->id ?>" data-phone="<?php echo  $key->phone ?>" data-whatsapp="<?php echo  $key->whatsapp ?>"  data-email="<?php echo  $key->email ?>" data-toggle="modal" data-target="#edit-data"><button  data-toggle="modal" data-target="#ubah-data" class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i></button>
                   </a>
                </td>
                <td>
                  <a href="<?php echo site_url('admin/contact_page/contact3_remove') ?>?id=<?php echo $key->id ?>" title="Hapus" class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
            <!--Table body-->
          </table>
          <!--Table-->
        </div>
      </div>
      <?php if(!$contact3){ ?>
      <div class="row">
        <div class="col-sm-6 col-lg-10">
           <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Tambah Data</h3>
            </div>
            <div class="panel-body">
              <form action="<?php echo site_url('admin/contact_page/contact3') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <div class="row" style="margin-left:70px" id="row">
                  <input type="hidden" value="7" name="page" >
                  <input type="hidden" value="3" name="sub" >
                  <input type="hidden" value="i" name="field">
                  <div class="col-md-4"><label>Telephone</label>
                    <input class="input form-control" name="field1" type="text" placeholder="ex: 0247625823 " required/>
                  </div>
                  <div class="col-md-4">
                    <label>Whatsapp</label>
                    <input class="input form-control" name="field2" type="text" placeholder="ex: 6281931763399" required/>
                  </div>
                  <div class="col-md-4">
                    <label>Email</label>
                    <input class="input form-control" name="field3" type="text" placeholder="info@fajarbaru.co.id" required/>
                  </div>
                  </div>
                <button type="submit" class="btn btn-primary" title="Simpan Data" style="margin-top:0px;"><i class="now-ui-icons ui-1_check"></i>&nbsp;&nbsp;Simpan data</button>
              </form>
            </div>
           </div>
        </div>
      </div>
    <?php } ?>
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
                <form class="form-horizontal" action="<?php echo base_url('admin/contact_page/contact3_edit')?>" method="post" enctype="multipart/form-data" role="form">
                  <div class="modal-body">
                      <div class="form-group">
                          <div class="col-md-12">
                              <input type="hidden" name="id" id="id">
                          </div>
                           <div class="col-md-4"><label>Telephone</label>
                            <input class="input form-control" id="phone" name="field1" type="text" placeholder="Type something" required/>
                           </div>
                           <div class="col-md-4"><label>Whatsapp</label>
                              <input class="input form-control" id="whatsapp" name="field2" type="text" placeholder="Type something" required/>
                            </div>
                            <div class="col-md-4"><label>Email</label>
                              <input class="input form-control" id="email" name="field3" type="text" placeholder="Type something" required/>
                            </div
>                          <br>
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
            modal.find('#phone').attr("value",div.data('phone'));
            modal.find('#whatsapp').attr("value",div.data('whatsapp'));
            modal.find('#email').attr("value",div.data('email'));
        });
    });

</script>
<!--############################# END JS ADD FORM ############################################################-->