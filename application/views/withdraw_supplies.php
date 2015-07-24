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
			<?php echo form_open('sup_con/add_withdraw','class="form-horizontal" role="form" id="add_withdraw" method="post" '); ?>
			<?php
			$amount = array();
			foreach ($show_store as $store_row) {
				//print_r($store_row);
			}
			?>
			<div id="wd-0" class="form-group row well col-md-12 " >
				<label class="control-label col-sm-2" for="supplies_name">ชื่อ/รายการ:</label>
				<div class="col-sm-6">
					<!-- <input type="text" class="form-control" id="supplies_name-0" name="namelist[0]"  /> -->
					<input type="text" class="form-control" id="supplies_name-0" name="namelist[0]" data-provide="typeahead"/>
				</div>

				<label class="control-label col-sm-1" for="supplies_amount">จำนวน:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="supplies_amount-0" name="number[0]" />
				</div>
			</div>

			<div id="withdraw" >
				<!-- <label class="control-label col-sm-2" for="supplies_name">ชื่อ/รายการ:</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="supplies_name" name="supplies_name-0" value="" />
				</div>

				<label class="control-label col-sm-1" for="supplies_amount">จำนวน:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="supplies_amount" name="supplies_amount-0" />
				</div> -->
			</div>
			<div class="form-group row  pull-right " id="clone-list" data-count="0"><!--  / . add supplies name list  -->
				<label class="control-label" for="clone-list">
					<i class="fa fa-plus-square fa-2x clone-list"  name="clone-list"  title="เพิ่มรายกาาร"></i>
				</label>
			</div>

			<!-- <div id="add">
				// .show copy id withdraw (add text box copy)
			</div> -->

			<div class="form-group well col-sm-12">
				<label class="control-label col-sm-1" for="supplies_withdraw_name">ชื่อผู้เบิก:</label>
				<div class="col-sm-3">
					<!-- <input type="text" class="form-control" id="supplies_withdraw_name" name="supplies_withdraw_name" /> -->
					<select id="first-disabled" name="user_withdraw" class="selectpicker" data-hide-disabled="true" data-live-search="true" title="----เลือก----">
						<?php
						foreach ($show_user as $user_row) {
							echo '<option value='.$user_row->user_id.'>อ'.$user_row->user_name.'</option>';
							print_r($user_row);
						}
						?>
					</select>
				</div>

				<label class="control-label col-sm-1"  for="supplies_date" >วันที่</label>
				<div class="col-sm-2">
					<input type="datetime"  class="form-control"   value="<?php echo date('d/m/Y H:i:s'); ?>" data-format="dd/MM/yyyy hh:mm:ss" name="supplies_date" id="supplies_date" />
				</div>

				<lable class="control-label col-sm-1"  for="supplies_detail">หมายเหตุ</lable>
				<div class="col-sm-3">
					<textarea id="supplies_detail"  name="supplies_detail" class="form-control" rows="2" ></textarea>
				</div>
			</div>

			<div class="form-group text-center col-md-12">
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
	function  getWithDraw(no){
		var c = ['form-control','control-label'];
		var n = ['supplies_name','supplies_amount'];
		$('#withdraw').append($('<div>', { 'id':'wd-' + no , 'class' : 'form-group row well col-md-12'})
			// flied add supplies list
			.append($('<label>',{'class': c[1] + ' col-sm-2', 'text' :  'ชื่อ/รายการ :' }))
			.append($('<div>', { 'class' : 'col-sm-6'})
				.append($('<input>' , {'type' : 'text', 'class' : c[0] , 'id' : n[0] + '-' + no , 'name' : 'namelist['+no+']'}))
				)

			//flied add supplie amount
			.append($('<label>',{'class': c[1] + ' col-sm-1', 'text' :  'จำนวน :' }))
			.append($('<div>', { 'class' : 'col-sm-2'})
				.append($('<input>' , {'type' : 'text', 'class' : c[0] , 'id' : n[1] + '-' + no , 'name' : 'number['+no+']'}))
				)
			);
		//alert('success');
	}

	$(function(){
		$("#clone-list").click(function(){
			var no = Number($(this).attr('data-count')) + 1;
			$(this).attr('data-count',no);
			getWithDraw(no);
			//console.log(no);
		});  // -------------- . end function click .-----------------
		//getWithDraw(no);
	});  // . end function() . ------------------
</script>
