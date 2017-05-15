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

<body bgcolor='#66CC66' align='center'>
	<?php
	include("menu.php");
	?>
 <h3 align='center'>浏览学生信息</h3>
 	<table with="350" border="1" cellspaceing="0" align="center">
		<tr>
			<th>ID</th>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>班级</th>
			<th>操作</th>
		</tr>
<?php
//1.连接数据库	
//header("content-type:text/html;charset=utf8");
$conn=mysqli_connect("localhost","root","root","php01");
mysqli_set_charset($conn,"gb2312");
//2.执行sql
$sql_select = "select * from stu";
//3.data 解析
//$conn->query($sql_select) as $row
$rs = $conn->query($sql_select);
echo "<tr>学生总人数：$rs->num_rows</tr>";
while($row = mysqli_fetch_assoc($rs))
{
echo "<tr align='center'>";
echo "<th>{$row['id']} </th>";
echo "<th>{$row['name']}</th>";
echo "<th>{$row['sex']} </th>";
echo "<th>{$row['age']}</th>";
echo "<th>{$row['class']} </th>";
echo "<td>
<a href='edit.php?id={$row['id']}'>修改</a>
<a href='javascript:void(0);' onclick='doDel({$row['id']})'>删除</a>
</td>";
echo "</tr>";
}	
?>
	</table>
			
</body>
</html>
