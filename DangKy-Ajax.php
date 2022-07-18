<?php 
include('Account/Config.php'); 
if(isset($_SESSION['username_login'])){
	header("Location: index.php");
	exit();   
}
//include('Account/Head.php'); 

$username = addslashes($_POST['username_reg']);
$password = addslashes($_POST['password_reg']);
$password_confirmation = addslashes($_POST['password_reg_confirmation']);
$email = addslashes($_POST['email_reg']);
$sdt = addslashes($_POST['phone_number_reg']);
if (!$username || !$password || !$password_confirmation || !$email || !$sdt)
{
	_chuyenhuong("Vui lòng nhập đầy đủ thông tin.",'DangKy.php');
	exit;
}
if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users WHERE username_login='$username'")) > 0){
	_chuyenhuong("Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.",'DangKy.php');
	exit;
}else if (emailValid($email) == false)
{
	_chuyenhuong("Email này không hợp lệ !!",'DangKy.php');
	exit;	
}else if (strlen($sdt) < 10 && strlen($sdt) > 10) {  
	_chuyenhuong("Số điện thoại phải có 10 chữ số !!",'DangKy.php');
	exit;
}

if ($password != $password_confirmation) {
	_chuyenhuong("Xác nhận mật khẩu không giống nhau.",'DangKy.php');
	exit;
}
If ($username <= 5 And $username > 20)
{
 	_chuyenhuong("Tài Khoản Phải Chứa Ít Nhất 6 Kí Tự Và Không Vượt Quá 20 Kí Tự.",'DangKy.php');
	exit;   
}
If ($password <= 5 And $password > 14)
{
  	_chuyenhuong("Mật Khẩu Phải Chứa Ít Nhất 6 Kí Tự Và Không Vượt Quá 14 Kí Tự.",'DangKy.php');
	exit;   
}
	$addmember = mysqli_query($conn,"INSERT INTO users (
	id, uid_login_facebook, fullname_login_facebook, username_login, password_login, email, phone_number, cash_money, account_type, status_account, Account_ChucVu, time_login_account, time_make_account) 
		VALUE 
	('','', '', '{$username}', '{$password}', '{$email}', '{$sdt}', '0', 'Account_Normal', 'Live', 'Normal', '', '{$time}')
	");
	
	
	_chuyenhuong_1("Đăng Ký Tài Khoản Thành Công.",'DangNhap.php');






?>