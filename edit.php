<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ѧ������ϵͳ</title>
</head>

<body bgcolor='#66CC66' align='center'>
<?php include('menu.php');
//1.�������ݿ�
//header("content-type:text/html;charset=utf8");
$conn = mysqli_connect("localhost","root","root","php01");
mysqli_set_charset($conn,"gb2312");
$id = $_GET['id'];//��ҳ��ؼ��л�ȡIDֵ
//2.ִ��sql
$sql_select = "select * from stu where id='$id'";
$stmt = mysqli_query($conn,$sql_select);
$stu = mysqli_fetch_assoc($stmt);//��������
?>

<h3 align='center'>�޸�ѧ����Ϣ</h3>
	<form action="action.php?action=edit" method="post">
		<input type="hidden" name="id" value="<?php echo $stu['id'];?>">
		<table align='center'>
			<tr>
				<td>����</td>
				<td><input type="text" name="name" value="<?php echo $stu[  'name'];?>"></td>
			</tr>
			
			<tr>
			    <td>����</td>
				<td><input type="text" name="age" value="<?php echo $stu[  'age'];?>"></td>
			</tr>
			
			<tr>
			    <td>�༶</td>
				<td><input type="text" name="class" value="<?php echo $stu[  'class'];?>"></td>
			</tr>
			<tr>
			    <td>�Ա�</td>
				<td><input type="radio" name="sex" value="��"<?php if($stu['sex']=="��") echo "checked=\"checked\"";?>>��
                </td>
				<td><input type="radio" name="sex" value="Ů"<?php if($stu['sex']=="Ů") echo "checked=\"checked\"";?>>Ů
                </td>
			</tr>
			<tr>
			    <td></td>
				<td><input type="submit"  value="�޸�"></td>
				<td><input type="reset"  value="����"></td>
			</tr>
		</table>
	</form>
	<?php
	?>
</body>
</html>
