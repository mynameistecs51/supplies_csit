<?php $this->load->view('header');?>

<div class="col-md-12">
	<div class="text-center">
		<h3> เพิ่มข้อมูลพัสดุ </h3>
	</div>
	<div class="panel panel-info">
		<div class="panel-heading">
			<i class="fa fa-list-alt fa-2x"> เพิ่ม </i> 
		</div>
		<div class="panel-body">
			<?php echo form_open('sup_con/insert_supp_list','class="form-horizontal"'); ?>

			<div class="form-group">
				<label for="supplies_name" class="col-sm-3 control-label">ชื่อพัสดุ</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" name="supplies_name" id="supplies_name" />
				</div>
			</div>

			<div class="form-group">
				<label for="supplies_amount" class="col-sm-3 control-label">จำนน</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" name="supplies_amount" id="supplies_amount" />
				</div>
			</div>

			<div class="form-group">
				<label for="supplies_date" class="col-sm-3 control-label" >วันที่</label>
				<div class="col-sm-7">
					<!-- <input type="text" class="form-control" name="supplies_date" id="supplies_date" disabled /> -->
					<input type="datetime"  class="form-control"   value="<?php echo date('d/m/Y H:i:s'); ?>" data-format="dd/MM/yyyy hh:mm:ss" name="supplies_date" id="supplies_date" />
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

<?php $this->load->view('footer');?>