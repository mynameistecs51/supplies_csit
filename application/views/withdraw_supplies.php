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
			<?php //echo form_open('sup_con/add_withdraw','class="form-horizontal" role="form"'); ?>
			<?php echo form_open('sup_con/add_withdraw','class="form-horizontal" role="form" id="add_withdraw"'); ?>
			<div class="form-group" id="withdraw">
				<label class="control-label col-sm-2" for="supplies_name">ชื่อ/รายการ:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="supplies_name" name="supplies_name-0" value="" />
				</div>

				<label class="control-label col-sm-1" for="supplies_amount">จำนวน:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="supplies_amount" name="supplies_amount-0" />
				</div>

				<div class="col-sm-1">		<!-- / . add supplies name list -->
					<i class="fa fa-plus-square fa-2x" id="clone-list"></i>
				</div>

			</div>

			<div id="add">
				<!-- / .show copy id withdraw (add text box copy) -->
			</div>

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
				<button type="submit" class="btn btn-success" id="submit">บันทึก  </button>
				<!-- </div> -->
			</div>

			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<?php $this->load->view('footer')?>		<!-- /  =====================. end footer. ===================\ -->

<script type="text/javascript">
	$(function(){
		var counts = [0];
		$("#clone-list").click(function(){
			counts[0]++;

			$('#withdraw').clone().appendTo('#add');
			$('#supplies_name').attr('name','supplies_name-'+counts[0]).val('');
			$('#supplies_amount').attr('name','supplies_amount-'+counts[0]).val('');

			//console.log($('#withdraw input[type=text]').length+"\n"+$(' input[type="text"]').attr('name'));.
			$('#withdraw input[type=text]').each(function() {
				//console.log("name = "+$(this).attr('name')+"\n"+"value = "+$(this).val()+"\n");

			});
			//console.log($('#withdraw input[type=text]').length);
		});  // -------------- . end function click .-----------------
		$('#add_withdraw').submit(function() {
			$('#withdraw input[type=text]').each(function() {
				//alert("name = "+$(this).attr('name')+"\n"+"value = "+$(this).val()+"\n");
				data : $('#add_withdraw').serialize(),
				post: "POST",
				url: <?php echo base_url()."add_withdraw";?>
			});
		});
	});  // . end function() . ------------------
</script>