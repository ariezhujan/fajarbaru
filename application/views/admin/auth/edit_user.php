<div class="row mb-3">
      <div class="col-md-8 mx-auto">
            <div class="card">
                  <div class="content">
                        <?php echo form_open(uri_string());?>
                        <h3><?php echo lang('edit_user_heading');?></h3>
                        <div class="form-group row showcase_row_area">
                              <div class="col-md-3 showcase_text_area">
                                    <label for="inputType1">First Name</label>
                              </div>
                              <div class="col-md-9 showcase_content_area">
                                    <?php echo form_input($first_name);?>
                              </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                              <div class="col-md-3 showcase_text_area">
                                    <label for="inputType1">Last Name</label>
                              </div>
                              <div class="col-md-9 showcase_content_area">
                                    <?php echo form_input($last_name);?>
                              </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                              <div class="col-md-3 showcase_text_area">
                                    <?php echo lang('edit_user_company_label', 'company');?>
                              </div>
                              <div class="col-md-9 showcase_content_area">
                                    <?php echo form_input($company);?>
                              </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                              <div class="col-md-3 showcase_text_area">
                                    <?php echo lang('edit_user_email_label', 'email');?>
                              </div>
                              <div class="col-md-9 showcase_content_area">
                                    <?php echo form_input($email);?>          
                              </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                              <div class="col-md-3 showcase_text_area">
                                    <?php echo lang('edit_user_phone_label', 'phone');?>
                              </div>
                              <div class="col-md-9 showcase_content_area">
                                    <?php echo form_input($phone);?>          
                              </div>
                        </div>

                       <!-- <div class="form-group row showcase_row_area">
                              <div class="col-md-3 showcase_text_area">
                                    <?php echo lang('edit_user_password_label', 'password');?>
                              </div>
                              <div class="col-md-9 showcase_content_area">
                                    <?php echo form_input($password);?> 
                              </div>
                        </div>
                        <div class="form-group row showcase_row_area">
                              <div class="col-md-3 showcase_text_area">
                                    <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
                              </div>
                              <div class="col-md-9 showcase_content_area">
                                    <?php echo form_input($password_confirm);?>
                              </div>
                        </div>-->
                        <div class="form-group row showcase_row_area">
                        <div class="col-md-3 showcase_text_area">
                              <?php if ($this->ion_auth->is_admin()): ?>
                              <!--<?php echo lang('edit_user_groups_heading');?>-->
                        </div>
                        <!--<div class="col-md-9 showcase_content_area">
                              <?php foreach ($groups as $group):?>
                              <label class="checkbox">
                              <?php
                                    $gID=$group['id'];
                                    $checked = null;
                                    $item = null;
                                    foreach($currentGroups as $grp) {
                                          if ($gID == $grp->id) {
                                          $checked= ' checked="checked"';
                                          break;
                                          }
                                    }
                              ?>
                              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                              </label>
                              <?php endforeach?>

                              <?php endif ?>
                        </div>-->
                        <div class="col-md-9 showcase_content_area">
                              <?php echo form_hidden('id', $user->id);?>
                              <?php echo form_hidden($csrf); ?>
                              <!--<?php echo form_submit('submit', lang('edit_user_submit_btn'));?>-->
                              <button type="submit" name="submit" class="btn btn-primary btn-fill pull-right">Save User</button>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        <?php echo form_close();?>
                  </div>
            </div>
      </div>
</div>
