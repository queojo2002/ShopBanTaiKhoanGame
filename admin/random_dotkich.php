<?php
if(isset($_POST['upacc'])):


	$data = $_POST['data'];
	$loaiacc = $_POST['loainick'];
	$gia = $_POST['gia'];
	$giaatm = $_POST['giaatm'];
	$anh = $_POST['anhthongtin'];
		$lines = explode("\n", $data);
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line == '') continue;
            $arrTmp = explode('/', $line, 2);
            if (count($arrTmp) != 2) continue;
            $taikhoan = $arrTmp[0];
            $matkhau = $arrTmp[1];
		mysqli_query($conn,"INSERT INTO posts (id,loaiacc,taikhoan,matkhau,gia,giaatm,linkanh,trangthai) VALUE ('','{$loaiacc}','{$taikhoan}','{$matkhau}','{$gia}','{$giaatm}','{$anh}','chua')");
	}
echo mysqli_error($conn);
echo'<div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Thông báo:</span>Thành công
</div>';



endif;

?>

<div class="panel panel-default">
  <div class="panel-heading">Thêm tài khoản random_dotkich</div>
  <div class="panel-body">


<form action ="?nhincc=random_dotkich" method="post" enctype="multipart/form-data">






	<div class="row">

	<div class="col-md-4">
	    <div class="form-group">
	                <label>Loại game</label>
	        <div class="input-group">
	            <div class="input-group-addon">
	                Game
	            </div>
	<select class="form-control" name="loainick" id="loainick">


	           
	                <option value="RANDOMCF">
	                    RANDOM CF
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
		<div class="col-md-4">
                      <label for="exampleTextarea1">List Acc</label>
                     <textarea class="form-control" name="data" id="mulData" rows="4" placeholder="username/matkhau
username2/matkhau2" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false"></textarea>
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
	<button id="login" type="submit" class="sa-lib-dk btn btn-success" name="upacc">Đăng bán</button>
	              </div>
	            </div>
	          </div>





</div>
</div>