<?php $this->load->view('header');?>

<div class="col-md-12">
	<div class="text-center">
		<h3> เบิก - จ่าย  </h3>
	</div>
	<div class="panel panel-info">
		<div class="panel-heading">
			<i class="fa fa-list-alt fa-2x"> เบิก - จ่าย </i> 
		</div>
		<div class="panel-body">
			<?php echo form_open('sup_con/add_withdraw_supplies','class="form-horizontal" role="form"'); ?>

			<div class="form-group" id="withdraw">
				<label class="control-label col-sm-2" for="supplies_name">ชื่อ/รายการ:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="supplies_name" name="supplies_name" />
				</div>

				<label class="control-label col-sm-1" for="supplies_amount">จำนวน:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="supplies_amount" name="supplies_amount" />
				</div>

				<div class="col-sm-1">
					<i class="fa fa-plus-square fa-2x" id="clone-list"></i>   <!-- / . add supplies name list -->
				</div>
			</div>


			<!-- <div class="form-group"> -->
			<div id="add">
				<!-- / .show copy id withdraw -->
			</div>
			<!-- </div> -->

			<div class="form-group">
				<label class="control-label col-sm-2" for="supplies_withdraw_name">ชื่อผู้เบิก:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="supplies_withdraw_name" name="supplies_withdraw_name" />
				</div>

				<label class="control-label col-sm-1"  for="supplies_date" >วันที่</label>
				<div class="col-sm-2">
					<input type="datetime"  class="form-control"   value="<?php echo date('d/m/Y H:i:s'); ?>" data-format="dd/MM/yyyy hh:mm:ss" name="supplies_date" id="supplies_date" />
				</div>

				<lable class="control-label col-sm-1"  for="supplies_detail">หมายเหตุ</lable>
				<div class="col-sm-3">
					<textarea id="supplies_detail" class="form-control" rows="2" ></textarea>
				</div>
			</div>

			<div class="form-group text-center">
				<!-- <div class="col-sm-offset-2 col-sm-10"> -->
				<button type="reset" class="btn btn-warning">ยกเลิก </button>
				<button type="submit" class="btn btn-success">บันทึก  </button>
				<!-- </div> -->
			</div>

			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<?php $this->load->view('footer')?>		<!-- /  =====================. end footer. ===================\ -->
<script type="text/javascript">
	$(function(){
		$("#clone-list").click(function(){
			$('#withdraw').clone().appendTo("#add");
		});
	});
</script>