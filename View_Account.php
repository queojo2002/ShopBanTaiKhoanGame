<?php 
include('Account/Config.php'); 

if (isset($_GET['idacc']) && is_numeric($_GET['idacc']))
{
	$idacc = intval($_GET['idacc']);
}else {
	_chuyenhuong('Có Lỗi !!!','index.php');
}
if (mysqli_num_rows(mysqli_query($conn,"SELECT id FROM posts WHERE id='$idacc'")) <= 0){
	_chuyenhuong('Không Tồn Tại Account Này !!!','index.php');
}
$data_account_posts = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `posts` WHERE `id` = '".$idacc."' LIMIT 1"));
if ($data_account_posts['status_posts'] <> 'Chưa Bán')
{
	_chuyenhuong('Account Đã Được Bán !!!','index.php');
}
$_SESSION['title'] = "Account " . $data_account_posts['account_type'] . " - MS: " . $data_account_posts['id'];
$loai_account = $data_account_posts['account_type'];
include('Account/Head.php'); 
?>
	<div class="c-layout-page">
		<div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
			<div class="container">
				<div class="c-shop-product-details-4">
					<div class="row">
						<div class="col-md-4 m-b-20">
							<div class="c-product-header">
								<div class="c-content-title-1">
									<h3 class="c-font-uppercase c-font-bold">Account <?php echo $loai_account; ?>  - MS: <?php echo $data_account_posts['id']; ?></h3> <span class="c-font-red c-font-bold">Loại Tài Khoản: <?php echo $loai_account; ?></span> </div>
							</div>
						</div>
						<div class="col-sm-12 visible-sm visible-xs visible-sm">
							<div class="c-product-meta">
								<div class="c-content-divider"> <i class="icon-dot"></i> </div>
<?php
if ($loai_account == 'LQM')
{	
	echo '
		<div class="row">
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold"> Thông Tin Account: <span class="c-font-red">'. $data_account_posts["info_account"].'</span></p>
			</div>	
			<div class="col-sm-4 col-xs-6 c-product-variant">																																																																																			
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Rank: <span class="c-font-red">'. $data_account_posts["info_rank"].'</span></p>
			</div>																																																																																																																																						
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Tướng: <span class="c-font-red">'. $data_account_posts["info_champ"].'</span></p>
			</div>
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Trang Phục: <span class="c-font-red">'. $data_account_posts["info_skins"].'</span></p>
			</div>																																																																																																																																																																																																						
		</div>
	';
}elseif ($loai_account == 'CF')
{	
	echo '
		<div class="row">																																																																																																																																				
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Thông Tin Acc: <span class="c-font-red">'. $data_account_posts["info_account"].'</span></p>
			</div>	
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Số Vip Sỡ Hữu: <span class="c-font-red">'. $data_account_posts["info_sovip_cf"].'</span></p>
			</div>				
		</div>
	';
}elseif ($loai_account == 'LMHT')
{	
	echo '
		<div class="row">
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold"> Thông Tin Account: <span class="c-font-red">'. $data_account_posts["info_account"].'</span></p>
			</div>	
			<div class="col-sm-4 col-xs-6 c-product-variant">																																																																																			
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Rank: <span class="c-font-red">'. $data_account_posts["info_rank"].'</span></p>
			</div>																																																																																																																																						
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Tướng: <span class="c-font-red">'. $data_account_posts["info_champ"].'</span></p>
			</div>
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Trang Phục: <span class="c-font-red">'. $data_account_posts["info_skins"].'</span></p>
			</div>																																																																																																																																																																																																						
		</div>
	';
}elseif ($loai_account == 'FO4')
{	
	echo '
		<div class="row">																																																																																																																																				
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Thông Tin Acc: <span class="c-font-red">'. $data_account_posts["info_account"].'</span></p>
			</div>	
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Giá Trị Đội Hình: <span class="c-font-red">'. $data_account_posts["info_gtdh"].'</span></p>
			</div>		
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">BP Trắng Còn: <span class="c-font-red">'. $data_account_posts["info_bp_trang_fo4"].'</span></p>
			</div>				
		</div>
	';
}
?>
					<div class="c-content-divider"> <i class="icon-dot"></i> </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="c-product-meta">
								<div class="c-product-price c-theme-font" style="float: none;text-align: center">
									<?php echo _tien($data_account_posts['price_atm']); ?> ATM
										<br/>
										<?php echo _tien($data_account_posts['price']); ?> CARD </div>
							</div>
						</div>
						<div class="col-md-4 text-right">
							<div class="c-product-header">
								<div class="c-content-title-1"> <a class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20" href="Check_Buy_Account.php?idacc=<?php echo $data_account_posts['id']; ?>">Mua ngay</a> <a class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20" href="#">Mua bằng ATM-MOMO</a> <a class="btn c-btn btn-lg c-bg-green-4 c-font-white c-font-uppercase c-font-bold c-btn-square m-t-20" href="Toup.php">Nạp thẻ cào</a> </div>
							</div>
						</div>
					</div>
					<div class="c-product-meta visible-md visible-lg">
						<div class="c-content-divider"> <i class="icon-dot"></i> </div>
<?php
if ($loai_account == 'LQM')
{	
	echo '
		<div class="row">
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold"> Thông Tin Account: <span class="c-font-red">'. $data_account_posts["info_account"].'</span></p>
			</div>	
			<div class="col-sm-4 col-xs-6 c-product-variant">																																																																																			
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Rank: <span class="c-font-red">'. $data_account_posts["info_rank"].'</span></p>
			</div>																																																																																																																																						
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Tướng: <span class="c-font-red">'. $data_account_posts["info_champ"].'</span></p>
			</div>
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Trang Phục: <span class="c-font-red">'. $data_account_posts["info_skins"].'</span></p>
			</div>																																																																																																																																																																																																						
		</div>
	';
}elseIf ($loai_account == 'CF')
{	
	echo '
		<div class="row">
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Thông Tin Acc: <span class="c-font-red">'. $data_account_posts["info_account"].'</span></p>
			</div>	
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Số Vip Sỡ Hữu: <span class="c-font-red">'. $data_account_posts["info_sovip_cf"].'</span></p>
			</div>																																																																																																																																																																																																							
		</div>
	';
}elseif ($loai_account == 'LMHT')
{	
	echo '
		<div class="row">
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold"> Thông Tin Account: <span class="c-font-red">'. $data_account_posts["info_account"].'</span></p>
			</div>	
			<div class="col-sm-4 col-xs-6 c-product-variant">																																																																																			
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Rank: <span class="c-font-red">'. $data_account_posts["info_rank"].'</span></p>
			</div>																																																																																																																																						
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Tướng: <span class="c-font-red">'. $data_account_posts["info_champ"].'</span></p>
			</div>
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Trang Phục: <span class="c-font-red">'. $data_account_posts["info_skins"].'</span></p>
			</div>																																																																																																																																																																																																						
		</div>
	';
}elseif ($loai_account == 'FO4')
{	
	echo '
		<div class="row">																																																																																																																																				
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Thông Tin Acc: <span class="c-font-red">'. $data_account_posts["info_account"].'</span></p>
			</div>	
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Giá Trị Đội Hình: <span class="c-font-red">'. $data_account_posts["info_gtdh"].'</span></p>
			</div>		
			<div class="col-sm-4 col-xs-6 c-product-variant">
				<p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">BP Trắng Còn: <span class="c-font-red">'. $data_account_posts["info_bp_trang_fo4"].'</span></p>
			</div>				
		</div>
	';
}
?>
							<div class="c-content-divider"> <i class="icon-dot"></i> </div>
					</div>
				</div>
			</div>
			<div class="container m-t-20 content_post">
<?php
	$cats = explode("|", $data_account_posts['image_posts']);
	foreach($cats as $cat) {
		echo ' 
			<p>
			<img src="'.$cat.'" class="zoom">
			</p>
		';
	}
?>

<!--
<div class="buy-footer" style="text-align: center"> <a class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20 load-modal" href="Buy_Account.php?idacc=<?php //echo $data_account_posts['id']; ?>">Mua ngay</a> </div>
<div class="buy-footer" style="text-align: center"> <a class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20 load-modal" href="#">Mua bằng ATM-MOMO</a> </div>
	-->		

			</div>
			<script>
			$(document).ready(function() {
				if($.cookie('noticeModal') != '1') {
					$('#noticeModal').modal('show')
						//show popup here
					var date = new Date();
					var minutes = 60 * 12;
					date.setTime(date.getTime() + (minutes * 60 * 1000));
					$.cookie('noticeModal', '1', {
						expires: date
					});
				}
			});
			</script>
		</div>
	</div>
	<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="loader" style="text-align: center"><img src="assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
			<div class="modal-content"> </div>
		</div>
	</div>
	<script>
	$(document).ready(function() {
		$('.load-modal').each(function(index, elem) {
			$(elem).unbind().click(function(e) {
				e.preventDefault();
				e.preventDefault();
				var curModal = $('#LoadModal');
				curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
				curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
			});
		});
	});
	</script>
	<?php include('Account/Foot.php');?>
		<div class="c-layout-go2top"> <i class="icon-arrow-up"></i> </div>
		<!-- END: LAYOUT/FOOTERS/GO2TOP -->
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
		$(document).ready(function() {
			App.init(); // init core
		});
		$(function() {
			$('[data-toggle="tooltip"]').tooltip()
		})
		$(".menu-main-mobile a").click(function() {
			if($(this).closest("li").hasClass("c-open")) {
				$(this).closest("li").removeClass("c-open");
			} else {
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