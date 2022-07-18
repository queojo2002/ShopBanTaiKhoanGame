
  <div class="row">
   
    <div class="col-xs-12">
    
    <?php
if(isset($_POST['editacc'])):



$skin = ltrim($skin,'|');
$champ = ltrim($champ,'|');
$champs = str_replace('champions_','',$champ);

$query = mysql_query("SELECT * FROM `baidang` WHERE `id` = '".$_POST['pid']."' LIMIT 1");
$active = (isset($_POST['active'])) ? "yes" : "no";








if (mysql_num_rows($query) == 0){
echo'<div class="alert alert-danger">Mã tài khoản không tồn tại, hãy <a href="javascript: history.go(-1)" class="alert-link">thử lại</a></div>';
}else{
echo'<div class="alert alert-success">Sửa tài khoản #'.$_POST['pid'].' thành công!</div>';

$price = $_POST['gia'];
$price -= ($_POST['giamgia'] / 100) * $_POST['gia']  ;
$idpassword = explode(":",$_POST['idpassword']);

mysql_query("UPDATE `baidang` SET `skins` = '".addslashes($_POST['skins'])."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `champs` = '".addslashes($_POST['champs'])."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `count_skin` = '".$_POST['count_skin']."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `count_champ` = '".$_POST['count_champ']."' where `id`='".$_POST['pid']."'");

mysql_query("UPDATE `baidang` SET `thongtin` = '".$_POST['thongtin']."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `noidung` = '".$_POST['noidung']."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `kichhoat` = '".$active."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `gia` = '".$price."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `giacu` = '".$_POST['gia']."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `giamgia` = '".$_POST['giamgia']."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `rank` = '".$_POST['rank']."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `khung` = '".$_POST['khung']."' where `id`='".$_POST['pid']."'");
//mysql_query("UPDATE `baidang` SET `thumb` = '".$thumb."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `bangngoc` = '".$_POST['anhngoc']."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `hinhanh` = '".$_POST['anhthongtin']."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `taikhoan` = '".$idpassword[0]."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `matkhau` = '".$idpassword[1]."' where `id`='".$_POST['pid']."'");
mysql_query("UPDATE `baidang` SET `count_bangngoc` = '".$_POST['bangngoc']."' where `id`='".$_POST['pid']."'");
}



endif;
if(isset($_POST['edit'])):
$query = mysql_query("SELECT * FROM `baidang` WHERE `id` = '".$_POST['pid']."' LIMIT 1");
if (mysql_num_rows($query) == 0){

?>
<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span> Tài khoản không tồn tại
</div>

<?php } else { 
$get = mysql_fetch_array(mysql_query("SELECT * FROM `baidang` WHERE `id` = '".$_POST['pid']."' LIMIT 1"));
?>



<form action ="?nhincc=edit" method="post" enctype="multipart/form-data">


<!--

	<div class="row">
	<div class="col-md-4">
	    <div class="form-group">
	        <div class="input-group">
	            <div class="input-group-addon">
	                Skin
	            </div><input class="form-control" type="file"  name="fileToUpload" id="fileToUpload">    </div>
	    </div>
	</div>
-->
 <div class="card">
      
        <div class="card-body no-padding">

    <div class="panel panel-default">
  <div class="panel-heading">Sửa tài khoản <?=$_POST['pid']?></div>
  
  <div class="panel-body">
	<div class="col-md-4">
	    <div class="form-group">
	        <div class="input-group">
	            <div class="input-group-addon">
	                Skin
	            </div><input class="form-control" type="file" name="fileToUpload" id="fileToUpload">        </div>
	    </div>
	</div>

	<div class="col-md-4">
	    <div class="form-group">
	        <div class="input-group">
	            <div class="input-group-addon">
	                Rank
	            </div>
<select class="form-control" name="rank">

<?php
for ($i = 0; $i < 29; $i++){
if($get['rank'] == $i):
    echo '<option value="'.$i.'" selected="selected">'.get_string_rank($i).'</option>';
else:
    echo '<option value="'.$i.'">'.get_string_rank($i).'</option>';
endif;

}
?>

</select>

</div></div></div>


           <div class="col-md-4">
	              <div class="form-group">
	                <div class="input-group">


	            <div class="input-group-addon">
	                Khung
	            </div>
<select class="form-control" name="khung">

<?php
for ($i = 0; $i < 7; $i++){
if($get['khung'] == $i):
    echo '<option value="'.$i.'" selected="selected">'.get_string_khung($i).'</option>';
else:
    echo '<option value="'.$i.'">'.get_string_khung($i).'</option>';
endif;
}
?>

</select>

	                </div>
	              </div>
	            </div> 
							</div>
						  <div class="panel-body">

	<div class="row">

	<div class="col-md-4">
	    <div class="form-group">
	                <label>Loại game</label>
	        <div class="input-group">
	            <div class="input-group-addon">
	                Game
	            </div>
	<select class="form-control" name="loainick" id="loainick">


	                <option value="LMHT">
	                    Liên Minh Huyền Thoại
	                </option>
	            </select>
	        </div>
	    </div>
	</div>


							<div class="col-md-4">
	              <div class="form-group">
	                <label>Giá</label>
	                <input class="form-control" placeholder="Giá" name="gia" type="number" autofocus="" value="<?=$get['gia']?>">
	              </div>
	            </div>
	            <div class="col-md-4">
	              <div class="form-group">
	                <label>Khuyễn mãi</label>
	                <div class="input-group">
	                  <input class="form-control" placeholder="Khuyễn mãi" name="giamgia" type="number" maxlength="3" value="<?=$get['giamgia']?>">
	                  <div class="input-group-addon">%</div>
	                </div>
	              </div>
	            </div>
	            <div class="col-md-12">
	              <div class="form-group">
	                <label>Thông tin đăng nhập</label>
	                <input class="form-control" placeholder="tài khoản:mật khẩu" id="idpassword" name="idpassword" type="text" value="<?=$get['taikhoan']?>:<?=$get['matkhau']?>">
	              </div>
	            </div>
	          </div>

	          
	            <div class="col-md-2">
	<div class="form-group">
	                <label>Số bảng ngọc</label>
	                <input class="form-control" placeholder="Số bảng ngọc" id="bangngoc" name="bangngoc" type="text" value="<?=$get['count_bangngoc']?>">
	              </div>
	            </div>
             
	            <div class="col-md-2">
	                <div class="form-group">
	                <label>Số tướng</label>
	                <input class="form-control" placeholder="Số tướng" id="" name="count_champ" type="text" value="<?=$get['count_champ']?>">
	              </div>
	            </div>
	          <div class="row">
	            <div class="col-md-2">
	<div class="form-group">
	                <label>Số skin</label>
	                <input class="form-control" placeholder="Số trang phục" id="" name="count_skin" type="text" value="<?=$get['count_skin']?>">
	              </div>
	            </div>
	          </div>
	          
	          <div class="row">
	            <div class="col-md-12">
	              <div class="form-group">
	                <label>List tướng</label>
	                <textarea class="form-control" rows="2" name="champs" placeholder="Jhin, Jinx"><?=$get['champs']?></textarea>
	              </div>
	            </div>
	          </div>
	          
	          <div class="row">
	            <div class="col-md-12">
	              <div class="form-group">
	                <label>List Skin</label>
	                <textarea class="form-control" rows="2" name="skins" placeholder="Rek'Sai Bất Diệt, Kindred Lửa Bóng Tối"><?=$get['skins']?></textarea>
	              </div>
	            </div>
	          </div>
	          
	          <div class="row">
	            <div class="col-md-12">
	              <div class="form-group">
	                <label>Hình ảnh thông tin</label>
	                <textarea class="form-control" rows="2" name="anhthongtin" placeholder="Url hình ảnh|Url hình ảnh|url hình ảnh"><?=$get['hinhanh']?></textarea>
	              </div>
	            </div>
	          </div>
	          
              <div class="row">
	            <div class="col-md-12">
	              <div class="form-group">
	                <label>Hình ảnh ngọc</label>
	                <textarea class="form-control" rows="2" name="anhngoc" placeholder="Url hình ảnh|Url hình ảnh|url hình ảnh"><?=$get['hinhanh']?></textarea>
	              </div>
	            </div>
	          </div>
	          <div class="row">
	            <div class="col-md-12">
	               <div class="form-group">
	                <label>Nội Dung</label>
	                <textarea class="form-control" rows="3" name="noidung" placeholder="Cái này là nhập nó sẽ hiển thị bên ngoài..."></textarea><?=$get['noidung']?>
	              </div>
	            </div>
	          </div>
	          
	          <div class="row">
	            <div class="col-md-12">
	               <div class="form-group">
	                <label>Thông Tin</label>
	                <textarea class="form-control" rows="3" name="thongtin" placeholder="Còn cái này nhập vào nó sẽ hiển thị phần bên trong chi tiết acc..."></textarea><?=$get['thongtin']?>
	              </div>
	            </div>
	          </div>
	          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group remove-margin-b">
                <label class="css-input switch switch-sm switch-primary">
                  <input type="checkbox" id="active" name="active" checked="true"><span></span> Kích hoạt?
                </label>
              </div>
            </div></div>

	            
	          <div class="row">
	            <div class="col-md-12">
	              <div class="form-group">
<input type="hidden" name="pid" value="<?=$_POST['pid']?>">
	<button id="login" type="submit" class="sa-lib-dk btn btn-success" name="editacc">Đăng bán</button>

	              </div>
	            </div>
	          </div>



<?php } else: ?>

<div class="panel panel-default">
  <div class="panel-heading">Chỉnh sửa tài khoản</div>
  <div class="panel-body">


<form action ="?act=edit" method="POST">
<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">#</span>
  <input type="text" name="pid" class="form-control" placeholder="Nhập số id của acc" aria-describedby="sizing-addon3">
</div><br/>
<button class="btn btn-danger btn-sm" type="submit" name="edit">Xác nhận</button></form>

</div>
</div>

<?php endif; ?>