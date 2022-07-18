<?php 
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$time       = date('d/m/Y H:i:s');
$conn       = mysqli_connect('localhost', 'root', '', 'doan_1') or die ('Not Connect');
mysqli_query($conn,"SET NAMES utf8");
if(isset($_SESSION['username_login'])){
	$username_login = $_SESSION['username_login'];
	$data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `users` WHERE `username_login` = '".$username_login."' LIMIT 1"));
	if ($data['account_type'] == "Account_Normal")
    {
        $name_hien_thi = $data['username_login'];
    }else {
        $name_hien_thi = $data["fullname_login_facebook"];
    }
}

$Partner_ID = '1266018561'; 
$Partner_key = 'ef88dc9357b1292b46fc7b6387eeaa22';
$appid = '323512963266765';
$secid = 'f3b433088243e302f53859a396465845';
$domainl = $_SERVER['SERVER_NAME'];
$domainu = strtoupper($domainl);
$urlweb  = 'https://' . $domainl . '';
$redirect = $urlweb.'/DangNhap_FaceBook.php';
$loginurl = 'https://www.facebook.com/dialog/oauth?client_id='.$appid.'&redirect_uri='.$redirect.'&scope=public_profile';
$sdt = '0363054223';
$email = '......@gmail.com';
$fbcanhan = 'https://www.facebook.com/vanduc1101/';





function _chuyenhuong($bodytt,$link)
{
	die("
	<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js'></script>
	<br>
	<script>
		Swal.fire({
		type: 'error',
		title: 'Error....',
		confirmButtonText: 'Ok',
		text: '".$bodytt."',
		footer: '',
		showCloseButton: true
		}).then(function (result) {
			if (result.value) {
				window.location = '".$link."';
			}
		})
	</script>"
	);
}
function _chuyenhuong_1($bodytt,$link)
{
	die("
	<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js'></script>
	<br>
	<script>
		Swal.fire({
		type: 'success',
		title: 'Success !!!',
		confirmButtonText: 'Ok',
		text: '".$bodytt."',
		footer: '',
		showCloseButton: true
		}).then(function (result) {
			if (result.value) {
				window.location = '".$link."';
			}
		})
	</script>"
	);
}

function _chuyenhuong_mua($link_1, $link_2)
{
		die("
  <script src='//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js'></script>
  <link rel='stylesheet' href='//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css' id='theme-styles'>
	<br>
	<script>
		Swal.fire({
		title: 'Bạn Có Chắc Chắn Muốn Mua Account Này !!!',
		text: 'Are you sure?',
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Hông Mua Đâu Pé Ơi !!',
		confirmButtonText: 'Tôi Muốn Mua !!!'
		}).then((result) => {
			if (result.isConfirmed) {
				window.location = '".$link_2."';
			}else if (
				result.dismiss === Swal.DismissReason.cancel
			){
				window.location = '".$link_1."';
			}
		})
	</script>"
	);

}

function emailValid($string) 
{ 
	if (preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $string)) return true; 
} 
function _tien($tien)
{
	return number_format($tien, 0, '.', '.');
}
function mysqli_result($result,$row,$field=0) {
    if ($result===false) return false;
    if ($row>=mysqli_num_rows($result)) return false;
    if (is_string($field) && !(strpos($field,".")===false)) {
        $t_field=explode(".",$field);
        $field=-1;
        $t_fields=mysqli_fetch_fields($result);
        for ($id=0;$id<mysqli_num_fields($result);$id++) {
            if ($t_fields[$id]->table==$t_field[0] && $t_fields[$id]->name==$t_field[1]) {
                $field=$id;
                break;
            }
        }
        if ($field==-1) return false;
    }
    mysqli_data_seek($result,$row);
    $line=mysqli_fetch_array($result);
    return isset($line[$field])?$line[$field]:false;
}
    
    function creatSign($partner_key, $params)
{
    $data = array();
    $data['request_id'] = $params['request_id'];
    $data['code'] = $params['code'];
    $data['partner_id'] = $params['partner_id'];
    $data['serial'] = $params['serial'];
    $data['telco'] = $params['telco'];
    $data['command'] = $params['command'];
    ksort($data);
    $sign = $partner_key;
    foreach ($data as $item) {
        $sign .= $item;
    }
    return md5($sign);
}

    
?>