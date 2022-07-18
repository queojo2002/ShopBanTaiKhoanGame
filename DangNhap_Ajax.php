<?php 
include('Account/Config.php'); 
if(isset($_SESSION['username_login'])){
	header("Location: index.php");
	exit();   
}
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
if (!$username || !$password)
{
	_chuyenhuong("Vui lòng nhập đầy đủ thông tin.",'DangNhap.php');
	exit;
}
$query = mysqli_query($conn,"SELECT * FROM users WHERE username_login = '$username'");
if (mysqli_num_rows($query) == 0) {
	_chuyenhuong("Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.",'DangNhap.php');
	exit;
}
$row = mysqli_fetch_array($query);
if ($password != $row['password_login']) {
	_chuyenhuong("Tên đăng nhập hoặc mật khẩu không hợp lệ.",'DangNhap.php');
	exit;
}
if ($row['account_type'] != "Account_Normal")
{
    	_chuyenhuong("Tên đăng nhập hoặc mật khẩu không hợp lệ.",'DangNhap.php');
	exit;
}
$_SESSION['username_login'] = $row['username_login'];
mysqli_query($conn,"UPDATE `users` SET `time_login_account` = '".$time."' where `username_login`='".$_SESSION['username_login']."'");
header("Location: index.php");