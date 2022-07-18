<?php 
include('Account/Config.php'); 
if ( isset($_GET['request_id']) && isset($_GET['status']) )
{
    $tt_toup = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM his_toup Where request_id = '".$_GET['request_id']."'"));
    if ($_GET['status'] == 1)
    {
        mysqli_query($conn,"UPDATE `his_toup` SET `result_toup` = '".$_GET['message']."' where `request_id`='".$_GET['request_id']."'");
        mysqli_query($conn,"UPDATE `users` SET `cash_money` =  `cash_money` +  '".$_GET['value']."' where `username_login`='".$tt_toup['username_login_toup']."'");
        

    }else {
        mysqli_query($conn,"UPDATE `his_toup` SET `result_toup` = '".$_GET['message']."' where `request_id`='".$_GET['request_id']."'");
    }
   
}

?>





