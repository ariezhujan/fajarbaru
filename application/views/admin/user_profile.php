

<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-10 mx-auto">

		<!-- Profile widget -->
		<div class="card">
			<br>
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4">
                <div class="media align-items-end profile-header">
				<?php foreach ($users as $user):?>
					<div class="profile mr-3">
						<img src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg" alt="..." width="130" class="rounded mb-2 img-thumbnail">
						<span class="btn btn-dark btn-sm btn-block">
							<?php echo anchor("admin/auth/edit_user/".$user->id, 'Edit Profile') ;?>
						</span>
					</div>
                    <div class="media-body mb-5">
						<h4 class="mt-0 mb-0"><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?>&nbsp;<?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></h4>
						<p class="mt-0 mb-0"><i class="fa fa-phone mr-1"></i><?php echo htmlspecialchars($user->phone,ENT_QUOTES,'UTF-8');?></p>
						<p class="mt-0 mb-0"><i class="fa fa-envelope mr-1"></i><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></p>
						<!--<p class="small mb-4"> <i class="fa fa-map-marker mr-2"></i><?php echo ($user->active) ? /*anchor("admin/auth/deactivate/".$user->id, lang('index_active_link'))*/'Admin' : /*anchor("admin/auth/activate/". $user->id, lang('index_inactive_link'))*/ 'User';?></p>-->
						<?php endforeach ?>
                    </div>
                </div>
            </div>
			<div id="infoMessage"><?php echo $message;?></div>
            <!--<div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
						<h5 class="font-weight-bold mb-0 d-block"><i class="fa fa-user-circle-o mr-1"></i></h5>
							<small class="text-muted"> <?php //echo anchor('admin/auth/create_user', lang('index_create_user_link'))?></small>
                    </li>
                    <li class="list-inline-item">
						<h5 class="font-weight-bold mb-0 d-block"><i class="fa fa-user-circle-o mr-1"></i></h5>
						<small class="text-muted"><?php //echo anchor('admin/auth/create_group', lang('index_create_group_link'))?></small>
                    </li>
                </ul>
            </div>-->
        </div><!-- End profile widget -->
	</div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-10 mx-auto">

		<!-- Profile widget -->
		<div class="card">
        <div class="bg-white shadow rounded overflow-hidden">
			<div id="infoMessage"><?php echo $this->session->message; ?></div>

            <!--<div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
						<h5 class="font-weight-bold mb-0 d-block"><i class="fa fa-user-circle-o mr-1"></i></h5>
							<small class="text-muted"> <?php //echo anchor('admin/auth/create_user', lang('index_create_user_link'))?></small>
                    </li>
                    <li class="list-inline-item">
						<h5 class="font-weight-bold mb-0 d-block"><i class="fa fa-user-circle-o mr-1"></i></h5>
						<small class="text-muted"><?php //echo anchor('admin/auth/create_group', lang('index_create_group_link'))?></small>
                    </li>
                </ul>
			</div>-->

            <div class="py-5 px-4">
                    <h5 class="mb-3">Login History</h5>
                <div class="p-5 bg-light rounded shadow-sm">
				<table id="example" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Ip</th>
						<th>Browser</th>
						<th>Last Login</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($login_attempts as $log):?>
					<tr>
						<td><?php echo $log->ip_address ?></td>
						<td><?php echo $log->login ?></td>
						<td><?php echo $log->time ?></td>
					</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Browser</th>
						<th>Ip</th>
						<th>Last Login</th>
					</tr>
				</tfoot>
			</table>
                </div>
            </div>
        </div><!-- End profile widget -->
	</div>
    </div>
</div>

