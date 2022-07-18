
  <div class="row">
   
    <div class="col-xs-12">
    <?php
if(isset($_POST['cong'])):
$query = mysql_query("SELECT * FROM `baidang` WHERE `id` = '".$_POST['idacc']."' LIMIT 1");
if (mysql_num_rows($query) == 0){

?>

        <div class="alert alert-danger" role="alert">
  <span class="fa fa-warning" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span> Người dùng không tồn tại
</div>
     
            


<?php } else { mysql_query("UPDATE `baidang` SET `gia` = '".$_POST['gia']."' where `id`='".$_POST['idacc']."'"); ?>

<div class="alert alert-success" role="alert">
  <span class="fa fa-check" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span> Sửa <strong class="text-primary"><?=number_format($_POST['gia'])?> <sup class="text-muted">vnđ</sup></strong> vào tài khoản có Id <?=$_POST['idacc']?> thành công!</div>

<?php } endif; ?>
 <div class="card">
      
        <div class="card-body no-padding">
            
<div class="panel panel-default">
  <div class="panel-heading">Sửa Account</div>
  <div class="panel-body">


<form action ="?nhincc=edit" method="post">
<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">Id Acc</span>
  <input type="text" name="idacc" class="form-control" placeholder="Id Acc" aria-describedby="sizing-addon3"   required>
</div><br/>

<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">#</span>
  <input type="number" name="gia" class="form-control" placeholder="Nhập số tiền muốn sửa" aria-describedby="sizing-addon3" min="-1000000000">
</div><br/>

<button class="btn btn-danger btn-sm" type="submit" name="cong">Xác nhận</button></form>


       </div>
      </div>
    </div>
  </div>

