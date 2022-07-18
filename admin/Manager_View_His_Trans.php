
  <div class="row">
   
    <div class="col-xs-12">
        
    <?php
	$i = 0;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$num_rec_per_page=30;
$start_from = ($page-1) * $num_rec_per_page; 	
if (isset($_POST['ok'])) {
	$search = addslashes($_POST['search']);
	$total_records = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM his_trans where username_login_buy like '%$search%'"));  //count number of records
}else{
	$total_records = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM his_trans"));  //count number of records
}
$total_pages = ceil($total_records / $num_rec_per_page); 
?>
      <div class="card">
        <div class="card-header">
             <div class="col-xs-6"> Lịch sử mua nick</div>
        </div>
        
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">

<table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th>UserName Mua</th>
                                        <th>Tài Khoản</th>
                                        <th>Mật Khẩu</th>
                                        <th>Giá</th>
                                        <th>ID ACC</th>
                                        <th>Ngày mua</th>
                                    </tr>
                                </thead>
                                <tbody>


<?php
if (isset($_POST['ok'])) {
	$search = addslashes($_POST['search']);
	$cash = mysqli_query($conn,"SELECT * FROM `his_trans` where username_login_buy like '%$search%' order by id desc LIMIT $start_from, $num_rec_per_page");
}else{
	$cash = mysqli_query($conn,"SELECT * FROM `his_trans` order by id desc LIMIT $start_from, $num_rec_per_page");
}
if (mysqli_num_rows($cash) == 0):
?>
<tr><td colspan="5" class="text-center"><p>Chưa có ai mua</p></td></tr>
<?php else: while ($row = mysqli_fetch_array($cash)):?>

	<?php 
		$data_his_trans = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `posts` WHERE `id` = '".$row['id_account_buy']."' LIMIT 1"));
	
	?>
<tr >
  <td class="text-muted"><?=$row['username_login_buy']?></span>
<td class="text-muted"><?=$data_his_trans['username_posts']?></td>
 <td class="text-muted"><?=$data_his_trans['password_posts']?></td> 
 
 
 </td>
 </td>
<td class="font-w600 text-success">- <?=number_format($data_his_trans['price'])?> <sup class="text-muted">vnđ</sup></td>
 <td class="text-primary"><?=$data_his_trans['account_type']?> #<?=$data_his_trans['id']?></td> 
 <td class="text-primary"><?=$row['time_buy']?></td> 
</tr >
  <?php 
  $i++; 
  endwhile; 
  endif; 
  ?>   

                                 
                                                              </tbody>
</table>

        </div>
      </div>






<ul class="pagination">
<?php
echo "<li class=''><a href='?quanly=lsmua&page=1'>".'Trang đầu'."</a> </li>"; // Goto 1st page  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<li class=''><a href='?quanly=lsmua&page=".$i."'>".$i."</a></li>"; 
}; 
echo "<li class=''><a href='?quanly=lsmua&page=$total_pages'>".'Trang cuối'."</a></li>";
?>
</ul>

