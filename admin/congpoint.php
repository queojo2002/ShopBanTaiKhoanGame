
  <div class="row">
   
    <div class="col-xs-12">
    <?php
if(isset($_POST['cong'])):
$query = mysql_query("SELECT * FROM `nguoidung` WHERE `uid` = '".$_POST['uid']."' LIMIT 1");
if (mysql_num_rows($query) == 0){

?>

        <div class="alert alert-danger" role="alert">
  <span class="fa fa-warning" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span> Người dùng không tồn tại
</div>
     
            


<?php } else { mysql_query("UPDATE `nguoidung` SET `point` = `point` + '".$_POST['point']."' where `uid`='".$_POST['uid']."'"); ?>

<div class="alert alert-success" role="alert">
  <span class="fa fa-check" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span> Cộng <strong class="text-primary"><?=number_format($_POST['point'])?> Point </strong> vào tài khoản có UID <?=$_POST['uid']?> thành công!</div>

<?php } endif; ?>
 <div class="card">
      
        <div class="card-body no-padding">
            
<div class="panel panel-default">
  <div class="panel-heading">Cộng Point <?=$_GET['uid']?></div>
  <div class="panel-body">


<form action ="?nhincc=congpoint" method="post">
<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">UID</span>
  <input type="number" name="uid" class="form-control" placeholder="Người dùng UID" aria-describedby="sizing-addon3"  value="<?=$_GET['uid']?>" required>
</div><br/>

<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">#</span>
  <input type="number" name="point" class="form-control" placeholder="Nhập số point muốn cộng" aria-describedby="sizing-addon3" min="-1000000000">
</div><br/>

<button class="btn btn-danger btn-sm" type="submit" name="cong">Xác nhận</button></form>


       </div>
      </div>
    </div>
  </div>

