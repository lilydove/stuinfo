<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>学生管理系统</title>
</head>

<body>
	<?php include('menu.php'); ?>
 <h3>增加学生信息</h3>
 	<form aciotn="action.php?action=add" method="post">
		<table>
			<tr>
				<td>姓名</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>年龄</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr>
				<td>性别</td>
				<td><input type="radio" name="sex" value="男">男</td>
				<td><input type="radio" name="sex" value="女">女</td>
			</tr>
			<tr>
				<td>班级</td>
				<td><input type="text" name="class"></td>
			</tr>
			<tr>
				<!-- <td> </td>-->
<td><a href="index.php">返回</td>
				<td><input type="submit" value="添加"></td>
				<td><input type="reset" value="重置"></td>
			</tr>
		</table>				
	</form>
</body>
</html>
