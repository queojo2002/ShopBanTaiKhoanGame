<?php 
include('Account/Config.php');
$get_his_toup = mysqli_query($conn,"SELECT * FROM his_toup");
while($row = mysqli_fetch_array($get_his_toup))
{
    if ($row['result_toup'] == 'Chờ Duyệt')
    {
        $info_loaithe  = $row['info_loaithe']; 
        $info_mathe  = $row['info_mathe']; 
        $info_seri  = $row['info_seri'];
        $info_menhgia = $row['info_menhgia'];
        $username_login = $row['username_login_toup'];
        $request_id = $row['request_id'];     
        $dataPost = array();
        $dataPost['partner_id'] = $Partner_ID;
        $dataPost['request_id'] = $request_id;
        $dataPost['telco'] = $info_loaithe;
        $dataPost['amount'] = $info_menhgia;
        $dataPost['serial'] = $info_seri;
        $dataPost['code'] = $info_mathe;
        $dataPost['command'] = 'check';
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
        
        if ($obj->status == 1) {
            $menhgia = $obj->declared_value;
            $menhgia_thuc = $obj->value;
            if ($menhgia_thuc <> $menhgia)
            {
                mysqli_query($conn,"UPDATE `his_toup` SET `result_toup` = 'Sai Mệnh Giá Thẻ.' where `request_id`='".$request_id."'");
                exit;
            }
            mysqli_query($conn,"UPDATE his_toup SET result_toup ='Thành Công' WHERE `request_id`='".$request_id."'");
            mysqli_query($conn,"UPDATE `his_toup` SET `info_thucnhan` = '".$menhgia_thuc."' where `request_id`='".$request_id."'");
            mysqli_query($conn,"UPDATE `users` SET `cash_money` = `cash_money` + '".$menhgia_thuc."' where `username_login`='".$row['username_login_toup']."'");
           /* if (mysqli_num_rows(mysqli_query($conn,"SELECT uid FROM top WHERE uid='".$uiddd."'")) > 0)
            {
                mysqli_query($conn,"UPDATE `top` SET `ucash` = `ucash` + '".$menhgia_thu."' where `uid`='".$uiddd."'");
            }else{
                $dataaa = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `account` WHERE `uid` = '".$uiddd."' LIMIT 1"));
                mysqli_query($conn,"INSERT INTO top (id,uname,uid,ucash) VALUES ('','".$dataaa['name']."','".$uiddd."','".$menhgiaa."')");
            }*/
        }elseif ($obj->status == 2) {
            mysqli_query($conn,"UPDATE `his_toup` SET `result_toup` = 'Sai Mệnh Giá Thẻ.' where `request_id`='".$request_id."'");
        }elseif ($obj->status == 4) {
            mysqli_query($conn,"UPDATE `his_toup` SET `result_toup` = 'Thẻ Sai Hoặc Đã Được Sử Dụng.' where `request_id`='".$request_id."'");
        }elseif ($obj->status == 3) {
            mysqli_query($conn,"UPDATE `his_toup` SET `result_toup` = 'Thẻ Sai Hoặc Đã Được Sử Dụng.' where `request_id`='".$request_id."'");
        }
        
        
    }
    
    
    
    

}