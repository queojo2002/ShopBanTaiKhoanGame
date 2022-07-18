<?php
if(isset($_POST['upacc'])):

	if(!isset($_POST['rank'],$_POST['anhthongtin'],$_POST['ngoc'],$_POST['thongtin'],$_POST['gia'],$_POST['giaatm'])){
	echo'<div class="alert alert-danger">Chưa nhập đầy đủ thông tin cần thiết, hãy <a href="javascript: history.go(-1)" class="alert-link">thử lại</a></div>';
	}else{


$idpassword = explode(":",$_POST['idpassword']);
$rank = $_POST['rank'];
$hinhanh = $_POST['anhthongtin'];
$ngoc = $_POST['ngoc'];
$thongtin = $_POST['thongtin'];
$price = $_POST['gia'];
$giaatm = $_POST['giaatm'];

mysqli_query($conn,"INSERT INTO `posts` SET
`loaiacc` = '". $_POST['loainick'] ."',
`taikhoan` = '". $idpassword[0] ."' ,
`matkhau` = '". $idpassword[1] ."',
`rank` = '" . $rank . "',
`thongtin` = '" . mysqli_real_escape_string($conn,$thongtin) . "',
`linkanh` = '" . $hinhanh . "',
`gia` = '" . $price . "',
`giaatm` = '" . $giaatm . "',
`ngoc` = '" . $ngoc . "',
`skin` = '".$_POST['skin']."',
`tuong` = '".$_POST['champ']."',
`trangthai` = 'chua'
");



echo'<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span>Thành công
</div>';

}

endif;

?>

<div class="panel panel-default">
  <div class="panel-heading">Thêm tài khoản liên minh</div>
  <div class="panel-body">


<form action ="?nhincc=upacclm" method="post" enctype="multipart/form-data">




	<div class="row">
	<!--<div class="col-md-4">
	    <div class="form-group">
	        <div class="input-group">
	            <div class="input-group-addon">
	                Skin
	            </div><input class="form-control" type="file" name="fileToUpload" id="fileToUpload">        </div>
	    </div>
	</div>-->

	<div class="col-md-4">
	    <div class="form-group">
	        <div class="input-group">
	            <div class="input-group-addon">
	                Rank
	            </div>
<select class="form-control" name="rank">

<?php
for ($i = 0; $i < 29; $i++){
    echo '<option value="'.$i.'">'.get_string_rank($i).'</option>';
}
?>

</select>

</div></div></div>


        
							</div>

	<div class="row">

	<div class="col-md-4">
	    <div class="form-group">
	                <label>Loại game</label>
	        <div class="input-group">
	            <div class="input-group-addon">
	                Game
	            </div>
	<select class="form-control" name="loainick" id="loainick">


	                <option value="Liên Minh Huyền Thoại">
	                    Liên Minh Huyền Thoại
	                </option>
	            </select>
	        </div>
	    </div>
	</div>


							<div class="col-md-4">
	              <div class="form-group">
	                <label>Giá</label>
	                <input class="form-control" placeholder="Giá" name="gia" type="number" autofocus="" value="">
	              </div>
	            </div>
		<div class="col-md-4">
	              <div class="form-group">
	                <label>Giá ATM</label>
	                <input class="form-control" placeholder="Giá ATM" name="giaatm" type="number" autofocus="" value="">
	              </div>
	            </div>
	            <div class="col-md-12">
	              <div class="form-group">
	                <label>Thông tin đăng nhập</label>
	                <input class="form-control" placeholder="tài khoản:mật khẩu" id="idpassword" name="idpassword" type="text" value="">
	              </div>
	            </div>
	          </div>

	          
	            <div class="col-md-2">
	<div class="form-group">
	                <label>Ngọc</label>
	                <input class="form-control" placeholder="Ngọc" id="ngoc" name="ngoc" type="text" value="">
	              </div>
	            </div>
             
	            <div class="col-md-2">
	                <div class="form-group">
	                <label>Số tướng</label>
	                <input class="form-control" placeholder="Số tướng" id="champ" name="champ" type="text" value="">
	              </div>
	            </div>
	          <div class="row">
	            <div class="col-md-2">
	<div class="form-group">
	                <label>Số skin</label>
	                <input class="form-control" placeholder="Số trang phục" id="skin" name="skin" type="text" value="">
	              </div>
	            </div>
	          </div>
	      
			  
	          <div class="row">
	            <div class="col-md-12">
	              <div class="form-group">
	                <label>Hình ảnh thông tin</label>
	                <textarea class="form-control" rows="2" name="anhthongtin" placeholder="Url hình ảnh|Url hình ảnh|url hình ảnh"></textarea>
	              </div>
	            </div>
	          </div>
	          
              
	          <div class="row">
	            <div class="col-md-12">
	               <div class="form-group">
	                <label>Thông Tin Account</label>
	                <textarea class="form-control" rows="3" name="thongtin" placeholder="Cái này là nhập nó sẽ hiển thị bên ngoài..."></textarea>
	              </div>
	            </div>
	          </div>
	          
	        
	          
      

	            
	          <div class="row">
	            <div class="col-md-12">
	              <div class="form-group">
	<button id="login" type="submit" class="sa-lib-dk btn btn-success" name="upacc">Đăng bán</button>
	              </div>
	            </div>
	          </div>





</div>
</div>