<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>学生管理系统</title>
	<script>
		function doDel(id){
			if(confirm('确认删除？')){
				window.location='action.php?action=del&id='+id;
				}
			}
	</script>
</head>

<body>
	<?php
	include("menu.php");
	?>
 <h3>浏览学生信息</h3>
 	<table with="350" border="1" cellspaceing="0">
		<tr>
			<th>ID</th>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>班级</th>
			<th>操作</th>
		</tr>
	</table>
			
</body>
</html>
