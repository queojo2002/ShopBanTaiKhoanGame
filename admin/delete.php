
  <div class="row">
   
    <div class="col-xs-12">
        
<?php
if(isset($_POST['del'])):
$query = mysqli_query($conn,"SELECT * FROM `posts` WHERE `id` = '".$_POST['pid']."' LIMIT 1");
if (mysqli_num_rows($query) == 0){

?>
<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span> Tài khoản không tồn tại
</div>

<?php } else { mysqli_query($conn,"DELETE FROM posts WHERE id='".$_POST['pid']."'"); ?>

<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span> Đã xóa #<?=$_POST['pid']?> ra khỏi danh sách đăng bán.
</div>
<?php } endif; ?>

<div class="panel panel-default">
  <div class="panel-heading">Xóa tài khoản</div>
  <div class="panel-body">


<form action ="?nhincc=delete" method="post">
<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">#</span>
  <input type="text" name="pid" class="form-control" placeholder="Nhập số id của acc" aria-describedby="sizing-addon3">
</div><br/>
<button class="btn btn-danger btn-sm" type="submit" name="del">Xác nhận</button></form>

</div>
</div>