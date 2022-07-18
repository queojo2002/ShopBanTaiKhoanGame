<?php
include('Account/Config.php');
$_SESSION['title'] = "Danh Mục LQM";
include('Account/Head.php');
if (isset($_GET['price']) And $_GET['price'] <> "") {
    $price = !empty($_GET['price']) ? addslashes($_GET['price']) : ""; // theo tien
    if ($price == addslashes('duoi-50k')) {
        $sql_gia = addslashes(" price <= 50000 ");
    } elseif ($price == addslashes('tu-50k-200k')) {
        $sql_gia  = addslashes(" price BETWEEN 50000 And 200000 ");
    } elseif ($price == addslashes('tu-200k-500k')) {
        $sql_gia  = addslashes(" price BETWEEN 200000 And 500000 ");
    } elseif ($price == addslashes('tu-500k-1-trieu')) {
        $sql_gia  = addslashes(" price BETWEEN 500000 And 1000000 ");
    } elseif ($price == addslashes('tren-1-trieu')) {
        $sql_gia  = addslashes(" price >= 1000000 ");
    } elseif ($price == addslashes('tren-5-trieu')) {
        $sql_gia  = addslashes(" price >= 5000000 ");
    } elseif ($price == addslashes('tren-10-trieu')) {
        $sql_gia  = addslashes(" price >= 10000000 ");
    } else {
        $sql_gia  = "";
        $sql_rank = "";
    }
}
?>
<div class="c-layout-page">
<div class="container">
<div class="row"></div>
<div class="row" style="margin-bottom: 15px">
	<div class="m-l-10 m-r-10">
		<form  class="form-inline m-b-10" role="form" method="get">
			<div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
				<div class="input-group c-square">
					<span class="input-group-addon">Giá tiền</span>
					<select style="" class="form-control c-square" name="price">
						<option value="">Chọn giá tiền</option>
						<option value="duoi-50k" >Dưới 50K</option>
						<option value="tu-50k-200k" >Từ 50K - 200K</option>
						<option value="tu-200k-500k" >Từ 200K - 500K</option>
						<option value="tu-500k-1-trieu" >Từ 500K - 1 Triệu</option>
						<option value="tren-1-trieu" >Trên 1 Triệu</option>
						<option value="tren-5-trieu" >Trên 5 Triệu</option>
						<option value="tren-10-trieu" >Trên 10 Triệu</option>
					</select>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 p-5 no-radius">
				<button type="submit" style = "text-align: center; padding: 12px 20px 4px 20px;"  class="btn c-square c-theme c-btn-green">Tìm kiếm</button>
				<a style = "text-align: center; padding: 12px 20px 4px 20px;" class="btn c-square m-l-0 btn-danger" href="Game_LQM.php">Xóa Tìm Kiếm</a>
			</div>
		</form>
	</div>
</div>

<div class="row row-flex  item-list">



<?php 
//echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'LQM'"))['total'];
if (isset($_GET['page']))
{
	if (!is_numeric($_GET['page']))
	{
		$page = 1;
	}else {
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
	}
}else { 
	$page=1; 
}

$num_rec_per_page = 8;
$start_from = ($page-1) * $num_rec_per_page;  
if (isset($_GET['price']) And $_GET['price'] <> "") {
	$dataacc = mysqli_query($conn, "SELECT * FROM posts WHERE $sql_gia And account_type = 'LQM' AND status_posts = 'Chưa Bán' ORDER by id DESC LIMIT $start_from, $num_rec_per_page");
	$tong = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) FROM `posts` WHERE $sql_gia And `account_type` = 'LQM' AND status_posts = 'Chưa Bán'"), 0);
}else {
	$dataacc = mysqli_query($conn, "SELECT * FROM posts WHERE account_type = 'LQM' AND status_posts = 'Chưa Bán' ORDER by id DESC LIMIT $start_from, $num_rec_per_page");
	$tong = mysqli_result(mysqli_query($conn,"SELECT COUNT(*) FROM `posts` WHERE  `account_type` = 'LQM' AND status_posts = 'Chưa Bán'"), 0);
}
$total_pages = ceil($tong / $num_rec_per_page);
while($row = mysqli_fetch_array($dataacc))
{
	//<div class="col-xs-6 a_att">B.NGỌC: <b>'.$row["ngoc"].'</b></div>			
	$cats = explode("|", $row['image_posts']);
	echo '
			<div class="col-sm-6 col-md-3">
			<div class="classWithPad">
			<div class="image">
				<a href="View_Account.php?idacc='.$row['id'].'"><img src="'.$cats[0].'" alt="png-image"> <span class="ms">MS: '.$row["id"].'</span> </a>
			</div>
			<div class="description">'.$row["info_ghichu"].'</div>
			<div class="attribute_info">
				<div class="row">
					<div class="col-xs-12 a_att"> Thông Tin Account: <b>'.$row["info_account"].'</b> </div>
					<div class="col-xs-12 a_att"> Rank: <b>'.$row["info_rank"].'</b> </div>
					<div class="col-xs-6 a_att"> Tướng: <b>'.$row["info_champ"].'</b> </div>
					<div class="col-xs-6 a_att"> Trang Phục: <b>'.$row["info_skins"].'</b> </div>
				</div>
			</div>
			<div class="a-more">
				<div class="row">
					<div class="col-xs-6">
						<div class="price_item">CARD: '._tien($row["price"]).'đ </div>
					</div>
					<div class="col-xs-6">
						<div class="price_item">ATM-MOMO: '._tien($row["price_atm"]).'đ </div>
					</div>
					<div class="col-xs-12 ">
						<div class="view"> <a href="View_Account.php?idacc='.$row['id'].'">Chi tiết</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
	';
}

?>
</div>
</div>
</div>
</div>
<div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
		<?php 
		require_once 'Pagination.php';
		//Khởi tạo class
		$config = [
			'total' => $tong, 
			'limit' => $num_rec_per_page,
			'full' => false, //bỏ qua nếu không muốn hiển thị full page
			'querystring' => 'page' //bỏ qua nếu GET của bạn là page
			];
		$page = new Pagination($config);
		//hiển thị code
		echo $page->getPagination();
		?>
</div>

</div>






</div>
<?php include('Account/Foot.php');?>
<div class="c-layout-go2top">
<i class="icon-arrow-up"></i>
</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<![endif]-->
<script src="assets/frontend/theme/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/global/plugins/magnific/magnific.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/base/js/components.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/base/js/app.js" type="text/javascript"></script>
<script src="assets/frontend/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
App.init(); // init core
});
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})
$(".menu-main-mobile a").click(function() {

if( $(this).closest("li").hasClass("c-open")){
$(this).closest("li").removeClass("c-open");
}
else{
$(this).closest("li").addClass("c-open");
}
});
</script>
<script src="assets/frontend/theme/assets/plugins/moment.min.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/frontend/theme/assets/demos/default/js/scripts/pages/datepicker.js" type="text/javascript"></script>
<script src="assets/frontend/plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js" type="text/javascript"></script>
<script src="assets/frontend/js/common.js" type="text/javascript"></script>
</body>
</html>