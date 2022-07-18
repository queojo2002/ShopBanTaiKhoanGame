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
mysqli_query($conn,"UPDATE `users` SET `cash_money` = `cash_money` - '".$data_account_posts['price']."' where `username_login`='".$username_login."'");

mysqli_query($conn,"UPDATE `posts` SET `status_posts` = 'Đã Bán' where `id`='".$idacc."'");

mysqli_query($conn,"INSERT INTO his_trans (id, id_account_buy, username_login_buy , status_buy, time_buy) VALUE ('','{$idacc}','{$username_login}','Mua Thành Công','{$time}')");

_chuyenhuong_1("Mua Account ".$data_account_posts['account_type']."  - MS: ".$data_account_posts['id']." Thành Công .",'His_Trans.php');

?>