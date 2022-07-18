<?php 
include('Account/Config.php');
// check đã login chưa
if(isset($_SESSION['username_login'])){
	header("Location: index.php");
	exit();   
}
// end check đã login chưa
$code = $_GET['code'];
$facebook_access_token_uri = "https://graph.facebook.com/v2.11/oauth/access_token?client_id=$appid&redirect_uri=$redirect&client_secret=$secid&code=$code";    
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $facebook_access_token_uri);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);        
$response = curl_exec($ch); 
curl_close($ch);
$aResponse = json_decode($response);
$access_token = $aResponse->access_token;
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/me?access_token=$access_token");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);       
$response = curl_exec($ch); 
curl_close($ch);
if (stristr($response,'name'))
{
    $user = json_decode($response);  
    $_SESSION['username_fullname'] = $user->name;
    $_SESSION['username_login']    = $user->id;
    $username_fullnamee = $_SESSION['username_fullname'];
    $username_loginn = $_SESSION['username_login'];
    if (mysqli_num_rows(mysqli_query($conn,"SELECT username_login FROM users WHERE username_login = '$username_loginn'")) > 0){
        mysqli_query($conn,"UPDATE `users` SET `time_login_account` = '".$time."' where `username_login`='".$_SESSION['username_login']."'");
        header("Location: index.php");
    }else {
        $addmember = mysqli_query($conn,"INSERT INTO users (
    	id, uid_login_facebook, fullname_login_facebook, username_login, password_login, email, phone_number, cash_money, account_type, status_account, Account_ChucVu, time_login_account, time_make_account) 
    		VALUE 
    	('','{$username_loginn}', '{$username_fullnamee}', '{$username_loginn}', '', '', '', '0', 'Account_FaceBook', 'Live', 'Normal', '{$time}', '{$time}')
    	");
        header("Location: index.php");
    }
}else {
    header("Location: index.php");

}






?>