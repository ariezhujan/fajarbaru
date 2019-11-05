
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-10 mx-auto">

		<!-- Profile widget -->
		<div class="card">
        <div class="bg-white shadow rounded overflow-hidden">
			<div class="alert alert-success" role="alert"><?php echo $this->session->message; ?></div>
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

