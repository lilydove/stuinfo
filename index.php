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

<body bgcolor='#66CC66' align='center'>
	<?php
	include("menu.php");
	?>
 <h3 align='center'>���ѧ����Ϣ</h3>
 	<table with="350" border="1" cellspaceing="0" align="center">
		<tr>
			<th>ID</th>
			<th>����</th>
			<th>�Ա�</th>
			<th>����</th>
			<th>�༶</th>
			<th>����</th>
		</tr>
<?php
//1.�������ݿ�	
//header("content-type:text/html;charset=utf8");
$conn=mysqli_connect("localhost","root","root","php01");
mysqli_set_charset($conn,"gb2312");
//2.ִ��sql
$sql_select = "select * from stu";
//3.data ����
//$conn->query($sql_select) as $row
$rs = $conn->query($sql_select);
echo "<tr>ѧ����������$rs->num_rows</tr>";
while($row = mysqli_fetch_assoc($rs))
{
echo "<tr align='center'>";
echo "<th>{$row['id']} </th>";
echo "<th>{$row['name']}</th>";
echo "<th>{$row['sex']} </th>";
echo "<th>{$row['age']}</th>";
echo "<th>{$row['class']} </th>";
echo "<td>
<a href='edit.php?id={$row['id']}'>�޸�</a>
<a href='javascript:void(0);' onclick='doDel({$row['id']})'>ɾ��</a>
</td>";
echo "</tr>";
}	
?>
	</table>
			
</body>
</html>
