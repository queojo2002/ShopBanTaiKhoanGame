  <div class="row">  

    <div class="col-xs-12">

<?php 

   

$i = 0;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$num_rec_per_page=30;
$start_from = ($page-1) * $num_rec_per_page; 	

$total_records = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM posts"));  //count number of records

$total_pages = ceil($total_records / $num_rec_per_page); 
		?>

      <div class="card">
        <div class="card-header">
             <div class="col-xs-6"> Danh Sách Acc</div> 
        </div>
        
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">

<table class="table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Loại Nick</th>
                                        <th>Tài Khoản</th>
                                        <th>Mật khẩu</th>
                                        <th>Giá</th>
                                        <th>Trạng Thái</th>
                                    </tr>
                                </thead>
                                <tbody>


<?php

$get_data_account_posts = mysqli_query($conn,"SELECT * FROM `posts` order by id LIMIT $start_from, $num_rec_per_page");

if (mysqli_num_rows($get_data_account_posts) == 0):
?>
<tr><td colspan="6" class="text-center"><p>Không có tài khoản nào</p></td></tr>
<?php else: while ($row = mysqli_fetch_array($get_data_account_posts)):?>

<tr >
<td class="text-muted"><?=$row['account_type']?> #<?=$row['id']?></td>

 <td class="text-muted"><?=$row['username_posts']?></td>
 <td class="text-primary"><?=$row['password_posts']?></td> 
<td class="font-w600 text-success"><?=number_format($row['price'])?> <sup class="text-muted">vnđ</sup></td>

<td class="btn btn-primary">　<?=($row['status_posts'])?>　　</td>






  <?php $i++; endwhile; endif; ?>  

                                 
                                  </tbody>
</table>

        </div>
      </div>
      <ul class="pagination">


<?php
echo "<li class=''><a href='?quanly=listacc&page=1'>".'Trang đầu'."</a> </li>"; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<li class=''><a href='?quanly=listacc&page=".$i."'>".$i."</a></li>"; 
}; 
echo "<li class=''><a href='?quanly=listacc&page=$total_pages'>".'Trang cuối'."</a></li>";

?>
 



    </ul>


