<!-- Action -->
<div class="right_top">
	<span class="right_action">
		<div class="right_title"><?php echo $title; ?></div>
		<span>&nbsp;&nbsp;设置系统常用参数</span>
	</span>
</div>
<div class="right_line">&nbsp;</div>
<!-- Action End -->
<!-- Content -->
<div class="right_ct">
<form action="<?php echo base_url('sys_config/editData.html');?>" method="post" id="configForm">
<table class="table_add">
	<tr>
		<td class="add_width add_right">后台名称：</td>
		<td>
			<input type="text" name="title" class="input" style="width: 180px;" value="<?php echo $config['title'];?>" />
		</td>
	</tr>
	<tr>
		<td class="add_right">版权信息:</td>
		<td>
			<textarea name="copy" style="width: 520px; height: 70px;" maxlength="200"><?php echo $config['copy'];?></textarea>
		</td>
	</tr>
	<tr>
		<td class="add_right">数据备份目录:</td>
		<td>
			<input type="text" name="backdir" class="input" style="width: 160px;" value="<?php echo $config['backdir'];?>" />
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>
			<input type="submit" id="editSub" value="保存配置" />
		</td>
	</tr>
	<tr>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
</form>
</div>
<!-- Content End -->