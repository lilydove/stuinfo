<?php
header("content-type:text/html;charset=utf8");
$conn = mysqli_connect("localhost","root","root","php01");
mysqli_set_charset($conn,"gb2312");

if($conn){
	switch($_GET['action']){
		case 'add':
			$name = $_POST['name'];
			$sex = $_POST['sex'];
			$age = $_POST['age'];
			$class = $_POST['class'];
			
			$sql = "insert into stu (name,sex,age,class) values
			('$name','$sex','$age','$class')";
			$rw = mysqli_query($conn,$sql);
			
			 /* if($rw > 0){
				echo "<script>alert('��ӳɹ�');</script>";
			}else{
			    echo "<script>alert('���ʧ��');</script>";
			��  */
			
			header('Location:index.php');
			break;
			
		case 'del':
			$id = $_GET['id'];//�õ���������id
			$sql = "delete from stu where id='$id'";
			$rw = mysqli_query($conn,$sql);
			/* if($rw > 0){
				echo "<script>alert('ɾ���ɹ�');</script>";
			}else{
			    echo "<script>alert('ɾ��ʧ��');</script>";
			�� */
			
			header('Location:index.php');
			break;
			
		case 'edit'://post
			$id = $_POST['id'];
			$name = $_POST['name'];
			$sex = $_POST['sex'];
			$age = $_POST['age'];
			$class = $_POST['class'];
			$sql = "update stu set name='$name',age='$age',
					sex='$sex',class='$class' where id='$id';";
			$rw = mysqli_query($conn,$sql);
			/* if($rw > 0){
				echo "<script>alert('���³ɹ�');</script>";
 			}else{
 				echo "<script>alert('����ʧ��');</script>";
			}  */
 			header('Location: index.php');
			break;
 	default:
 			header('Location: index.php');
			echo "<script>alert('�޲���');</script>";
 			break;
	}
	}else{
		die("���ݿ�����ʧ��".mysqli_connect_error());
	}

?>