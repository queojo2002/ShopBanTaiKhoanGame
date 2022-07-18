  <div class="row">  

    <div class="col-xs-12">
    <?php
$i = 1;
//* admin user *///
if (isset($_GET['unadmin'])) {
mysqli_query($conn,"UPDATE `users` SET `Account_ChucVu` = 'Normal' where `username_login`='".$_GET['username_login']."'");
echo'	<div class="alert alert-success" role="alert">
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			<span class="sr-only">Thông báo:</span> Xuống Menber cho Username '.$_GET['username_login'].' thành công!
		</div>';
}elseif (isset($_GET['admin'])) {
mysqli_query($conn,"UPDATE `users` SET `Account_ChucVu` = 'Admin' where `username_login`='".$_GET['username_login']."'");
echo '	<div class="alert alert-success" role="alert">
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			<span class="sr-only">Thông báo:</span> Lên Admin Username '.$_GET['username_login'].' thành công!
		</div>';
}
   
//* ctv user *///
if (isset($_GET['unctv'])) {
mysqli_query($conn,"UPDATE `users` SET `Account_ChucVu` = 'Normal' where `username_login`='".$_GET['username_login']."'");
echo'<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span> Xuống Menber cho Username '.$_GET['username_login'].' thành công!
</div>';
}elseif (isset($_GET['ctv'])) {
mysqli_query($conn,"UPDATE `users` SET `Account_ChucVu` = 'CTV' where `username_login`='".$_GET['username_login']."'");
echo'<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span> Lên CTV Username '.$_GET['username_login'].' thành công!
</div>';
}
   

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$num_rec_per_page=30;
$start_from = ($page-1) * $num_rec_per_page; 	
if (isset($_POST['ok'])) {
$search = addslashes($_POST['search']);
$total_records = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users where username_login like '%$search%'"));  //count number of records
}else{
$total_records = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users"));  //count number of records
}
$total_pages = ceil($total_records / $num_rec_per_page); 
		?>

      <div class="card">
        <div class="card-header">
             <div class="col-xs-6"> Thành Viên</div>   <div class="col-xs-3"> <form action ="?quanly=member" method="POST">
  <div class="input-group ">
    <input type="text" class="form-control" placeholder="Nhập tên thành viên" name="search">
    <div class="input-group-btn">
      <button class="btn btn-default " type="submit" name="ok">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
</form></div>
        </div>
        
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">

<table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Username Login</th>
										<th>Email</th>
										<th>Số Điện Thoại</th>
                                        <th>Cash</th>
                                        <th>Chức Vụ</th>
										<th>Time Login</th>
                                        <th>Thao tác</th>

                                    </tr>
                                </thead>
                                <tbody>


<?php
if (isset($_POST['ok'])) {
$search = addslashes($_POST['search']);
$cash = mysqli_query($conn,"SELECT * FROM `users` where username_login like '%$search%' order by id LIMIT $start_from, $num_rec_per_page");
}else{
$cash = mysqli_query($conn,"SELECT * FROM `users` order by id LIMIT $start_from, $num_rec_per_page");
}
if (mysqli_num_rows($cash) == 0):
?>
<tr><td colspan="7" class="text-center"><p>Không có người dùng này</p></td></tr>
<?php else: while ($row = mysqli_fetch_array($cash)):?>
<tr>

<td class="text-muted">
	<span><?=$row['username_login']?></span> 
</td>

<td class="text-muted">
	<span><?=$row['email']?></span> 
</td>

<td class="text-muted">
	<span><?=$row['phone_number']?></span> 
</td>


<td class="font-w600 text-success">
	<?=_tien($row['cash_money'])?> <sup class="text-muted">vnđ</sup>
</td>

<td class="font-w600 text-success"> <?php if($row['Account_ChucVu'] <> 'Normal'): ?>
	Admin<?php else: ?>
	Thành Viên
	<?php endif; ?>
</td>

<td class="text-muted">
	<span><?=$row['time_login_account']?></span> 
</td>


<!-- Thao Tác -->
<td class="font-w600 text-success"><a href="?quanly=congtien&username_login=<?=$row['username_login']?>" class="label label-success"> Cộng tiền</a> 
 <?php if($row['Account_ChucVu'] == 'Admin'): ?>
  <a href="?quanly=member&username_login=<?=$row['username_login']?>&unadmin" class="label label-danger"> Xuống Member</a>
<?php else: ?>
 <a href="?quanly=member&username_login=<?=$row['username_login']?>&admin" class="label label-success"> Lên Admin</a>

<?php endif; ?>

  <?php $i++; endwhile; endif; ?>  

                                 
                                  </tbody>
</table>

        </div>
      </div>
      <ul class="pagination">


<?php
echo "<li class=''><a href='?quanly=member&page=1'>".'Trang đầu'."</a> </li>"; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<li class=''><a href='?quanly=member&page=".$i."'>".$i."</a></li>"; 
}; 
echo "<li class=''><a href='?quanly=member&page=$total_pages'>".'Trang cuối'."</a></li>";

?>
 



    </ul>