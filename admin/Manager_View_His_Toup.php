
  <div class="row">
   
    <div class="col-xs-12">
    <?php
	$i = 0;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$num_rec_per_page=30;
$start_from = ($page-1) * $num_rec_per_page; 	
if (isset($_POST['ok'])) {
	$search = addslashes($_POST['search']);
	$total_records = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM his_toup where username_login_toup like '%$search%'"));  //count number of records
}else{
	$total_records = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM his_toup"));  //count number of records
}
	$total_pages = ceil($total_records / $num_rec_per_page); 
?>
 
     <div class="card">
        <div class="card-header">
             <div class="col-xs-6"> Lịch Sử Nạp Thẻ</div>   <div class="col-xs-3"> <form action ="?quanly=lsnap" method="POST">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Nhập tên thành viên" name="search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit" name="ok">
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
                                        <th>UserName Nạp</th>
                                        <th>Thực Nhận/Mệnh Giá</th>
                                        <th>Loại thẻ/mã</th>
                                        <th>Trạng Thái</th>
										<th>Kiểu Nạp</th>
                                        <th>Ngày nạp</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
if (isset($_POST['ok'])) {
	$search = addslashes($_POST['search']);
	$cash = mysqli_query($conn,"SELECT * FROM `his_toup` where username_login_toup like '%$search%' order by id desc LIMIT $start_from, $num_rec_per_page");
}else{
	$cash = mysqli_query($conn,"SELECT * FROM `his_toup` order by id desc LIMIT $start_from, $num_rec_per_page");
}
if (mysqli_num_rows($cash) == 0):
?>
<tr><td colspan="6" class="text-center"><p>Chưa có ai nạp</p></td></tr>
<?php else: while ($row = mysqli_fetch_array($cash)):?>

<tr>
  <td class="text-muted"><?=$row['username_login_toup']?></span>
 </td>
<td class="font-w600 text-success"><?=number_format($row['info_thucnhan'])?><sup class="text-muted">vnđ</sup>/<?=number_format($row['info_menhgia'])?> <sup class="text-muted">vnđ</sup></td>
 <td class="text-primary"><?=$row['info_loaithe']?>/<?=$row['info_mathe']?></td> 
  <td class="text-primary"><?=$row['result_toup']?></td> 
 <td class="text-primary"><?=$row['info_toup_type']?></td> 
 <td class="text-primary"><?=$row['time_toup']?></td> 
</tr >
  <?php $i++; endwhile; endif; ?>   

                                 
                                                                          </tbody>
</table>

        </div>
      </div>


<ul class="pagination">

<?php
echo "<li class=''><a href='?quanly=lsnap&page=1'>".'Trang đầu'."</a> </li>"; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<li class=''><a href='?quanly=lsnap&page=".$i."'>".$i."</a></li>"; 
}; 
echo "<li class=''><a href='?quanly=lsnap&page=$total_pages'>".'Trang cuối'."</a></li>";

?>
 


    </ul>

