<?php 
include('Account/Config.php'); 
if(!isset($_SESSION['username_login'])){
	header("Location: DangNhap.php");
	exit();
} 
if (isset($_GET['idacc']) && is_numeric($_GET['idacc']))
{
	$idacc = intval($_GET['idacc']);
}else {
	_chuyenhuong('Có Lỗi !!!','index.php');
}
if (mysqli_num_rows(mysqli_query($conn,"SELECT id FROM posts WHERE id='$idacc'")) <= 0){
	_chuyenhuong('Không Tồn Tại Account Này !!!','index.php');
}
$data_account_posts = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `posts` WHERE `id` = '".$idacc."' LIMIT 1"));
if ($data_account_posts['status_posts'] <> 'Chưa Bán')
{
	_chuyenhuong('Account Đã Được Bán !!!','index.php');
}elseif ($data['cash_money'] < $data_account_posts['price'])
{
	_chuyenhuong('Tài Khoản Của Bạn Không Đủ Để Thanh Toán !!!','View_Account.php?idacc='.$idacc.'');	
}

_chuyenhuong_mua('View_Account.php?idacc='.$idacc.'', 'Buy_Account.php?idacc='.$idacc.'');


?>