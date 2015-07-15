<?php $this->load->view('header');?>

<!-- show table data withdraw supplies  -->
<div class="col-md-12">
	<div class="text-center">
		<h3> รายการพัสดุ </h3>
	</div>
	<div class="panel panel-info">
		<div class="panel-heading">
			<i class="fa fa-list-alt fa-2x"> รายการพัสดุ </i> 
		</div>
		<div class="panel-body">
			<div class="dataTable_wrapper">
				<table class="table table-striped table-bordered table-hover" id="example">
					<thead>
						<tr >
							<th class="text-center">ที่</th>
							<th class="text-center">ชื่อ/รายการ</th>
							<th class="text-center">จำนวนคงเหลือ</th>
							<th class="text-center" >วันที่เพิ่มล่าสุด</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($show_supplies as $row_supplies){
							?>
							<tr>
								<td class="text-center col-md-1"><?php echo $row_supplies->supp_id;?></td>
								<td class="col-md-6"><?php echo $row_supplies->supp_name;?></td>
								<td class="text-center col-md-2"><?php echo $row_supplies->supp_amount;?></td>
								<td class="text-center col-md-3"><?php echo $row_supplies->supp_date;?></td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>  <!-- / .panel-body -->
	</div>
</div>
<?php $this->load->view('footer');?>