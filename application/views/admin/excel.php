<!-- <div style="margin-top:20px"></div>
<form id="contactform" action="<?php echo base_url();?>admin/upload/" method="post" enctype="multipart/form-data">
	<input type="file" name="file"/>
	<input type="submit" value="Upload file"/>
</form>
			 -->



<div style="margin-top: 20px;">
</div>
<form action="<?php echo base_url();?>admin/upload/" enctype="multipart/form-data" method="post">
<input name="file" type="file" />
<input type="submit" value="Import File" />
</form>

<?php echo $this->session->flashdata('msg'); ?> 

