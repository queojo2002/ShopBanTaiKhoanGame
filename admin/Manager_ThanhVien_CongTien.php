
  <div class="row">
   
    <div class="col-xs-12">
    <?php
if(isset($_POST['cong'])):
	$query = mysqli_query($conn,"SELECT * FROM `users` WHERE `username_login` = '".$_POST['username_login']."' LIMIT 1");
if (mysqli_num_rows($query) == 0){

?>

        <div class="alert alert-danger" role="alert">
  <span class="fa fa-warning" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span> Người dùng không tồn tại
</div>
     
            


<?php } else { mysqli_query($conn,"UPDATE `users` SET `cash_money` = `cash_money` + '".$_POST['cash_money']."' where `username_login`='".$_POST['username_login']."'"); ?>

<div class="alert alert-success" role="alert">
  <span class="fa fa-check" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span> Cộng <strong class="text-primary"><?=number_format($_POST['cash_money'])?> <sup class="text-muted">vnđ</sup></strong> vào tài khoản có UserName <?=$_POST['username_login']?> thành công!</div>
<?php } endif; ?>
 <div class="card">
      
        <div class="card-body no-padding">
            
<div class="panel panel-default">
  <div class="panel-heading">Cộng tiền thành công!</div>
  <div class="panel-body">


<form action ="?quanly=congtien&username_login=<?php echo $_GET['username_login']; ?>" method="post">
<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">UserName Muốn Cộng Tiền</span>
  <input type="text" name="username_login" class="form-control" placeholder="Người dùng " aria-describedby="sizing-addon3"  value="<?=$_GET['username_login']?>" required>
</div><br/>

<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">#</span>
  <input type="number" name="cash_money" class="form-control" placeholder="Nhập số tiền muốn cộng" aria-describedby="sizing-addon3" min="-1000000000">
</div><br/>

<button class="btn btn-danger btn-sm" type="submit" name="cong">Xác nhận</button></form>


       </div>
      </div>
    </div>
  </div>

