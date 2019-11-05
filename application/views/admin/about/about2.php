<blockquote class="card">
    <div class="section section-team text-center">
      <div class="container">
      <h2 class="title">Konten About 3 / With us better</h2>
       <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('data'); ?></div> 
        <div class="team">
          <!--Table-->
          <table id="example" class="table-striped table-bordered table-responsive">
          <!--Table head-->
            <thead>
              <tr>
                <th>icon</th>
                <th>Header Text</th>
                <th>text</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <!--Table head-->
            <!--Table body-->
            <tbody>
              <?php foreach($about2 as $key) { ?> 
              <tr>
                <td><i class="now-ui-icons <?php echo $key->icon; ?> text-primary"></i></td>
                <td><?php echo $key->headertext; ?></td>
                <td><?php echo $key->text; ?></td>
                <td>
                  <a href="javascript:;" data-id="<?php echo $key->id ?>" data-headertext="<?php echo  $key->headertext ?>" data-text="<?php echo  $key->text ?>" data-icon="<?php echo  $key->icon ?>"  data-toggle="modal" data-target="#edit-data"><button  data-toggle="modal" data-target="#ubah-data" class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i></button>
                   </a>
                </td>
                <td>
                  <a href="<?php echo site_url('admin/about_page/about2_remove') ?>?id=<?php echo $key->id ?>" title="Hapus" class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
            <!--Table body-->
          </table>
          <!--Table-->
        </div>
      </div>
      <?php if(!$about2){ ?>
      <div class="row">
        <div class="col-sm-6 col-lg-10">
           <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Tambah Data</h3>
            </div>
            <div class="panel-body">
              <form action="<?php echo site_url('admin/about_page/about2') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                
                <div class="form-group">
                <div id="dynamic_field" style="margin-left: 130px">
                      <input type="hidden" value="2" name="page" >
                      <input type="hidden" value="3" name="sub" >
                      <input type="hidden" value="3" name="field">
                      <div class="row">
                      <div class="col-md-10">
                        <ul style="display:flex;list-style: none; flex-wrap: wrap;">
                          <li class="liicon">
                            <i class="now-ui-icons design_app"></i>
                            <p>design_app</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons ui-1_calendar-60"></i>
                            <p>ui-1_calendar-60</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons business_briefcase-24"></i>
                            <p>business_briefcase-24</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons objects_spaceship"></i>
                            <p>objects_spaceship</p>
                          </li>
                          </li>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons design_scissors"></i>
                            <p>design_scissors</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons design_vector"></i>
                            <p>design_vector</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                            <p>ui-2_settings-90</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons design-2_ruler-pencil"></i>
                            <p>design-2_ruler-pencil</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons ui-1_settings-gear-63"></i>
                            <p>ui-1_settings-gear-63</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="row" style="margin-bottom: 80px">
                      <div class="col-md-10">
                        <label>Copy salah satu nama icon di sini</label>
                        <input class="input form-control" name="field3[]" type="text" placeholder="ex:design_app" required/>
                      </div>
                      <div class="col-md-10">
                        <label>Header Text</label>
                        <input class="input form-control" name="field1[]" type="text" placeholder="Text Header" required/>
                      </div>
                      <div class="col-md-10">
                        <label>Konten Text</label>
                        <textarea class="input form-control" name="field2[]" type="text" placeholder="Type something" required></textarea>
                      </div>
                    </div>
                    <div class="row" style="margin-bottom: 80px">
                      <div class="col-md-10">
                        <label>Copy salah satu nama icon di sini</label>
                         <input class="input form-control" name="field3[]" type="text" placeholder="ex:design_app" required/>
                      </div>
                      <div class="col-md-10">
                        <label>Header Text</label>
                        <input class="input form-control" name="field1[]" type="text" placeholder="Text Header" required/>
                      </div>
                      <div class="col-md-10">
                        <label>Konten Text</label>
                        <textarea class="input form-control" name="field2[]" type="text" placeholder="Type something" required></textarea>
                      </div>
                    </div>
                     <div class="row" style="margin-bottom: 80px">
                      <div class="col-md-10">
                        <label>Copy salah satu nama icon di sini</label>
                         <input class="input form-control" name="field3[]" type="text" placeholder="ex:design_app" required/>
                      </div>
                      <div class="col-md-10">
                        <label>Header Text</label>
                        <input class="input form-control" name="field1[]" type="text" placeholder="Text Header" required/>
                      </div>
                      <div class="col-md-10">
                        <label>Konten Text</label>
                        <textarea class="input form-control" name="field2[]" type="text" placeholder="Type something" required></textarea>
                      </div>
                    </div>
                </div>
                </div>
                <button type="submit" id="categoryIndustri" class="btn btn-primary" title="Simpan Data" style="margin-top:0px;margin-left: -15px;"><i class="now-ui-icons ui-1_check"></i>&nbsp;&nbsp;Simpan data</button>
              </form>
            </div>
           </div>
        </div>
      </div>
    <?php } ?>
</blockquote>


<!-- Sart Modal #About1 -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade" style="margin-top: -130px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data</h4>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                <form class="form-horizontal" action="<?php echo base_url('admin/about_page/about2_edit')?>" method="post" enctype="multipart/form-data" role="form">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-10">
                        <ul style="display:flex;list-style: none; flex-wrap: wrap;">
                          <li class="liicon">
                            <i class="now-ui-icons design_app"></i>
                            <p>design_app</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons ui-1_calendar-60"></i>
                            <p>ui-1_calendar-60</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons business_briefcase-24"></i>
                            <p>business_briefcase-24</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons objects_spaceship"></i>
                            <p>objects_spaceship</p>
                          </li>
                          </li>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons design_scissors"></i>
                            <p>design_scissors</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons design_vector"></i>
                            <p>design_vector</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                            <p>ui-2_settings-90</p>
                          </li>
                          <li class="liicon">
                            <i class="now-ui-icons design-2_ruler-pencil"></i>
                            <p>design-2_ruler-pencil</p>
                          </li>
                           <li class="liicon">
                          <i class="now-ui-icons ui-1_settings-gear-63"></i>
                          <p>ui-1_settings-gear-63</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                      <div class="form-group">
                          <div class="col-md-12">
                            <br>
                            <br>
                              <input type="hidden" name="id" id="id">
                              <label>Copy salah satu nama icon di sini</label>
                              <input class="input form-control" id="icon" name="field3" type="text" placeholder="ex:design_app" required/>
                          </div>
                          <div class="col-md-12">
                            <br>
                            <br>
                              <label>Header Text</label>
                              <input class="form-control" id="headertext" name="field1" required="required">
                          </div>
                          <div class="col-md-12">
                            <br>
                            <br>
                            <label>Konten Text</label>
                              <textarea class="form-control" id="textarea" name="field2" required="required"></textarea>
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
<!--  End Modal #about1-->


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
            modal.find('#headertext').attr("value",div.data('headertext'));
            modal.find('#text').attr("value",div.data('text'));
            modal.find('#icon').attr("value",div.data('icon'));
        });
    });

var ckeditor = CKEDITOR.replace('textarea',{
      height:'400px'
});
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('editable');

</script>
<!--############################# END JS ADD FORM ############################################################-->