<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>学生管理系统</title>
</head>

<body bgcolor='#66CC66' align='center'>
<?php include('menu.php');
//1.链接数据库
//header("content-type:text/html;charset=utf8");
$conn = mysqli_connect("localhost","root","root","php01");
mysqli_set_charset($conn,"gb2312");
$id = $_GET['id'];//从页面控件中获取ID值
//2.执行sql
$sql_select = "select * from stu where id='$id'";
$stmt = mysqli_query($conn,$sql_select);
$stu = mysqli_fetch_assoc($stmt);//解析数据
?>

<h3 align='center'>修改学生信息</h3>
	<form action="action.php?action=edit" method="post">
		<input type="hidden" name="id" value="<?php echo $stu['id'];?>">
		<table align='center'>
			<tr>
				<td>姓名</td>
				<td><input type="text" name="name" value="<?php echo $stu[  'name'];?>"></td>
			</tr>
			
			<tr>
			    <td>年龄</td>
				<td><input type="text" name="age" value="<?php echo $stu[  'age'];?>"></td>
			</tr>
			
			<tr>
			    <td>班级</td>
				<td><input type="text" name="class" value="<?php echo $stu[  'class'];?>"></td>
			</tr>
			<tr>
			    <td>性别</td>
				<td><input type="radio" name="sex" value="男"<?php if($stu['sex']=="男") echo "checked=\"checked\"";?>>男
                </td>
				<td><input type="radio" name="sex" value="女"<?php if($stu['sex']=="女") echo "checked=\"checked\"";?>>女
                </td>
			</tr>
			<tr>
			    <td></td>
				<td><input type="submit"  value="修改"></td>
				<td><input type="reset"  value="重置"></td>
			</tr>
		</table>
	</form>
	<?php
	?>
</body>
</html>
