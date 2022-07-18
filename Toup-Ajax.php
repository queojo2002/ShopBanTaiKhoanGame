<?php
include('Account/Config.php'); 
if(!isset($_SESSION['username_login'])){
	header("Location: index.php");
	exit();
} 

if (!Isset($_POST['napthe']))
{
	header("Location: index.php");
	exit();
}	
$info_loaithe  = addslashes($_POST['info_loaithe']); // nhà mạng, gồm có: viettel, mobi, vina
$info_mathe  = addslashes($_POST['info_mathe']); // mã thẻ 
$info_seri  = addslashes($_POST['info_seri']); // Seri 
$info_menhgia = addslashes($_POST['info_menhgia']); // mệnh giá 
if (empty($info_loaithe))
{
	_chuyenhuong("Bạn Chưa Chọn Loại Thẻ Cần Nạp !!!" ,'Toup.php');
	exit();
}else if (empty($info_mathe))
{
	_chuyenhuong("Bạn Chưa Nhập Mã Thẻ !!!" ,'Toup.php');
	exit();
}else if (empty($info_seri))
{
	_chuyenhuong("Bạn Chưa Nhập Serial !!!" ,'Toup.php');
	exit();
}else if (empty($info_menhgia))
{
	_chuyenhuong("Bạn Chưa Chọn Mệnh Giá Cần Nạp !!!" ,'Toup.php');
	exit();
}
if (strlen($info_mathe) >= 17 || strlen($info_seri) >= 17)
{
	_chuyenhuong("Mã Thẻ Hoặc Serial Bạn Nhập Vào Không Hợp Lệ !!!" ,'Toup.php');
	exit();
}

/*$content = $username_login . '_' . rand(10000,99999); // Nội dung kèm theo thẻ. Ví dụ request id để kiểm tra thẻ trả về.
$url = 'https://cardngon.com/api/card-auto.php?type='.$info_loaithe.'&menhgia='.$info_menhgia.'&seri='.$info_seri.'&pin='.$info_mathe.'&APIKey='.$APIKey.'&callback=https://accountshoptest.tk/Callback_Toup.php&content='.$content.'';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
*/



$command = 'charging';
$request_id = rand(100000000, 999999999); /// Order id của bạn, ví dụ này lấy ngẫu nhiên để test
$dataPost = array();
$dataPost['partner_id'] = $Partner_ID;
$dataPost['request_id'] = $request_id;
$dataPost['telco'] = $info_loaithe;
$dataPost['amount'] = $info_menhgia;
$dataPost['serial'] = $info_seri;
$dataPost['code'] = $info_mathe;
$dataPost['command'] = $command;
$sign = creatSign($Partner_key, $dataPost);
$dataPost['sign'] = $sign;
$data1 = http_build_query($dataPost);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://trumthe.vn/chargingws/v2');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
curl_setopt($ch, CURLOPT_REFERER, $actual_link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$obj = json_decode($result);

if ($obj->status == 1 || $obj->status == 99) {
    mysqli_query($conn,"INSERT INTO his_toup 
		(id, username_login_toup, info_mathe, info_seri, info_loaithe, info_thucnhan, info_menhgia, info_toup_type, result_toup, request_id, time_toup) 
											VALUE 
		('','{$username_login}','{$info_mathe}','{$info_seri}','{$info_loaithe}','0','{$info_menhgia}','CallBack','Chờ Duyệt','{$request_id}','{$time}')
        ");
        _chuyenhuong_1("Gửi Yêu Cầu Nạp Thẻ Thành Công. Thẻ Của Bạn Sẽ Được Duyệt Trong Từ 1-3 Phút !!! Xin Cảm Ơn <3",'His_Toup.php');

}else {
    _chuyenhuong($obj->message,'Toup.php');
	    exit();
}











/*
		$type  = $_POST['type']; // nhà mạng, gồm có: viettel, mobi, vina
		$code  = $_POST['pin']; // mã thẻ 
		$seri  = $_POST['serial']; // Seri 
		$amout = $_POST['amount']; // mệnh giá  
		$command = 'charging';  // Nap the
		$request_id = rand(100000000, 999999999); /// Order id của bạn, ví dụ này lấy ngẫu nhiên để test
		$dataPost = array();
		$dataPost['partner_id'] = $partner_id;
		$dataPost['request_id'] = $request_id;
		$dataPost['telco'] = $type;
		$dataPost['amount'] = $amout;
		$dataPost['serial'] = $seri;
		$dataPost['code'] = $code;
		$dataPost['command'] = $command;
		$sign = creatSign($partner_key, $dataPost);
		$dataPost['sign'] = $sign;
		$data1 = http_build_query($dataPost);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
		$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		curl_setopt($ch, CURLOPT_REFERER, $actual_link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		$obj = json_decode($result);
		$uidd = $_SESSION['uid'];
		if ($obj->status == 1) {
		$tongtienn = $amout + $data['cash'];
		$uidddd = $data['uid'];
		mysql_query('UPDATE nguoidung SET cash="'.$tongtienn.'" WHERE uid="'.$uidddd.'"');
		mysqli_query($conn,"INSERT INTO lsnapthe (id,mathe,seri,menhgia,thucnhan,nhamang,kieunap,ketqua,uidnap,thoigian,request_id) VALUE ('','{$code}','{$seri}','{$amout}','{$amout}','{$type}','Auto','Thành Công','{$uidd}','{$time}','{$request_id}')");
		if (mysqli_num_rows(mysqli_query($conn,"SELECT uid FROM top WHERE uid='".$uidddd."'")) > 0)
		{
		mysqli_query($conn,"UPDATE `top` SET `ucash` = `ucash` + '".$amout."' where `uid`='".$uidddd."'");
		}else{
		$dataaa = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `account` WHERE `uid` = '".$uidddd."' LIMIT 1"));
		mysqli_query($conn,"INSERT INTO top (id,uname,uid,ucash) VALUES ('','".$data['name']."','".$uidddd."','".$amout."')");
		}
		_chuyenhuong('Nạp Thẻ Thành Công !' ,'napthe.php');	
		}elseif ($obj->status == 99)  {
		mysqli_query($conn,"INSERT INTO lsnapthe (id,mathe,seri,menhgia,thucnhan,nhamang,kieunap,ketqua,uidnap,thoigian,request_id) VALUE ('','{$code}','{$seri}','{$amout}','0','{$type}','Auto','ChoDuyet','{$uidd}','{$time}','{$request_id}')");
		_chuyenhuong('Thẻ của bạn đang được chờ duyệt sau 1-2p nữa !' ,'napthe.php');	
		} else{
		_chuyenhuong($obj->message ,'napthe.php');	
		}
    */
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    


