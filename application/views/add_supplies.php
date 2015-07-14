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
			<?php echo form_open('form','class="form-horizontal"'); ?>
			<div class="form-group">
				<label for="inputName1" class="col-sm-3 control-label">ชื่อพัสดุ</label>
				<div class="col-sm-7">
					<div class="input-group">
						<input type="text" class="form-control " name="inputName1" id="inputName1" placeholder="ชื่อสกุล  ผู้ส่งโครงงาน 1"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="inputName2" class="col-sm-3 control-label">ผู้ส่งโครงงาน 2</label>
				<div class="col-sm-7">
					<div class="input-group">
						<div class="input-group-addon">
							<label for="male2">Male
								<input type="radio" value="male" name="sex2" id="male2" checked="true" />
							</label>
							<label for="female">Female
								<input type="radio" value="female" name="sex2" id="female2">
							</label>
						</div>
						<input type="text" class="form-control" name="inputName2" id="inputName2" placeholder="ชื่อสกุล  ผู้ส่งโครงงาน 2">
					</div>
				</div>
			</div>
			<div class="form-group"> 
				<label for="inputProjectName_TH" class="col-sm-3 control-label">ชื่อโปรเจ็ค (ภาษาไทย)</label>
				<div class="col-sm-7">                           
					<input type="text" class="form-control" id="inputProjectName_TH" name="inputProjectName_TH" placeholder="ชื่อโปรเจ็คภาษาไทย">
				</div>
			</div>
			<div class="form-group"> 
				<label for="inputProjectName_EN" class="col-sm-3 control-label">ชื่อโปรเจ็ค (ภาษาอังกฤษ)</label>
				<div class="col-sm-7">                           
					<input type="text" class="form-control" id="inputProjectName_EN" name="inputProjectName_EN" placeholder="ชื่อโปรเจ็คภาษาอังกฤษ">
				</div>
			</div>
			<div class="form-group"> 
				<label for="inputGroup" class="col-sm-3 control-label">ประเภทโครงงาน</label>
				<div class="col-sm-7">  
					<select  class="form-control "  id="select_group" name="select_group" >   <!--  เลือกประเภทของโครงงาน   -->
						<?php
						foreach ($paper_group as $key => $row_group) {
							echo '<option value="'.$row_group->group_id.'">'.$row_group->group_name.'</option>';
						}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputFileProject" class="col-sm-3 control-label">ไฟล์โปรเจ็ค</label>
				<div class="col-sm-7">
					<div class="input-group">
						<input type="file" name="fileProject" id="fileProject"  accept=".doc, .docx, .pdf"  />
						<p class="help-block">สามารถอัพโหลดไฟล์ .doc .docx .pdf <br/>*ควรตั้งชื่อเป็นภาษาอังกฤษ</p>   
					</div>
				</div>
			</div>
			<div class="form-group text-center">
				<!-- <div class="col-sm-offset-2 col-sm-10"> -->
				<button type="reset" class="btn btn-warning">Cancel </button>
				<button type="submit" class="btn btn-success">Send  </button>
				<!-- </div> -->
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
<?php $this->load->view('footer');?>