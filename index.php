<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>ѧ������ϵͳ</title>
	<script>
		function doDel(id){
			if(confirm('ȷ��ɾ����')){
				window.location='action.php?action=del&id='+id;
				}
			}
	</script>
</head>

<body>
	<?php
	include("menu.php");
	?>
 <h3>���ѧ����Ϣ</h3>
 	<table with="350" border="1" cellspaceing="0">
		<tr>
			<th>ID</th>
			<th>����</th>
			<th>�Ա�</th>
			<th>����</th>
			<th>�༶</th>
			<th>����</th>
		</tr>
	</table>
			
</body>
</html>
