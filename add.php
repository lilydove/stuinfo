<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>ѧ������ϵͳ</title>
</head>

<body>
	<?php include('menu.php'); ?>
 <h3>����ѧ����Ϣ</h3>
 	<form aciotn="action.php?action=add" method="post">
		<table>
			<tr>
				<td>����</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>����</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr>
				<td>�Ա�</td>
				<td><input type="radio" name="sex" value="��">��</td>
				<td><input type="radio" name="sex" value="Ů">Ů</td>
			</tr>
			<tr>
				<td>�༶</td>
				<td><input type="text" name="class"></td>
			</tr>
			<tr>
				<!-- <td> </td>-->
<td><a href="index.php">����</td>
				<td><input type="submit" value="���"></td>
				<td><input type="reset" value="����"></td>
			</tr>
		</table>				
	</form>
</body>
</html>
