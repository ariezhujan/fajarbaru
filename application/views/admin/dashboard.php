
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
							<small class="text-muted"> <?php echo anchor('admin/auth/create_user', lang('index_create_user_link'))?></small>
                    </li>
                    <li class="list-inline-item">
						<h5 class="font-weight-bold mb-0 d-block"><i class="fa fa-user-circle-o mr-1"></i></h5>
						<small class="text-muted"><?php echo anchor('admin/auth/create_group', lang('index_create_group_link'))?></small>
                    </li>
                </ul>
            </div>-->

            <!--<div class="py-5 px-4">
                    <h5 class="mb-3">Recent History</h5>
                <div class="p-5 bg-light rounded shadow-sm">
				<table id="example" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Name</th>
						<th>User Role</th>
						<th>Page Area</th>
						<th>Detail</th>
						<th>Last Update</th>
						<th>Browser</th>
						<th>Ip</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($users as $user):?>
					<tr>
						<td><?php echo $user->first_name ?></td>
						<td><?php echo $user->username ?></td>
						<td>Edinburgh</td>
						<td><?php echo $user->last_login ?></td>
						<td><?php echo $user->last_login ?></td>
						<td><?php echo $user->last_login ?></td>
						<td><?php echo $user->last_login ?></td>
					</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Name</th>
						<th>User Role</th>
						<th>Page Area</th>
						<th>Detail</th>
						<th>Last Update</th>
						<th>Browser</th>
						<th>Ip</th>
					</tr>
				</tfoot>
			</table>
                </div>
            </div>-->
        </div><!-- End profile widget -->
	</div>
    </div>
</div>
