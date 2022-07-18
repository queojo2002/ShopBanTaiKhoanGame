<?php 
include('Account/Config.php'); 
$_SESSION['title'] = "Shop Account Game";
include('Account/Head.php'); 



?>
	<div class="c-layout-page">
		<!-- BEGIN: PAGE CONTENT -->
		<div class="c-content-box">
			<div id="slider" class="owl-theme section section-cate slideshow_full_width ">
				<div id="slide_banner" class="owl-carousel owl-loaded owl-drag">
					<div class="owl-stage-outer">
						<div class="owl-stage" style="width: 2670px; transform: translate3d(-890px, 0px, 0px); transition: all 0.25s ease 0s;">
							<div class="owl-item cloned" style="width: 445px;">
								<div class="item">
									<a href="<?php echo $urlweb; ?>" alt="BÁN ÁO"> <img src="https://nick.vn/storage/images/XoBF4ldarS_1623147567.jpg" alt="#"> </a>
								</div>
							</div>
							<div class="owl-item cloned" style="width: 445px;">
								<div class="item">
									<a href="<?php echo $urlweb; ?>" alt="Mua bán xu"> <img src="https://nick.vn/storage/images/pHqmqsnmhX_1623851481.jpg" alt="#"> </a>
								</div>
							</div>
						</div>
					</div>
					<div class="owl-nav">
						<button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button>
						<button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right right_button" aria-hidden="true"></i></button>
					</div>
					<div class="owl-dots disabled"></div>
				</div>
			</div>
		</div>
		<div class="c-content-box c-size-md c-bg-white">
			<div class="container">
				<!-- Begin: Testimonals 1 component -->
				<div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
					<!-- Begin: Title 1 component -->
					<div class="c-content-title-1">
						<h3 class="c-center c-font-uppercase c-font-bold">Dịch vụ nổi bật</h3>
						<div class="c-line-center c-theme-bg"></div>
					</div>
					<div class="owl-carousel owl-theme c-theme owl-bordered1 c-owl-nav-center owl-loaded owl-drag" data-items="6" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-items="2" data-slide-speed="5000" data-rtl="false">
						<div class="owl-stage-outer">
							<div class="owl-stage" style="width: 760px; transform: translate3d(-380px, 0px, 0px); transition: all 0.25s ease 0s;">
								<div class="owl-item" style="width: 180px; margin-right: 10px;">
									<div class="item">
										<a href="Profile.php"><img src="image/taikhoan.jpg" alt="Trang cá nhân"></a>
									</div>
								</div>
								<div class="owl-item" style="width: 180px; margin-right: 10px;">
									<div class="item">
										<a href="#"><img src="image/dichvu.jpg" alt="dịch vụ"></a>
									</div>
								</div>
								<div class="owl-item active" style="width: 180px; margin-right: 10px;">
									<div class="item">
										<a href="#"><img src="image/muathecao.jpg" alt="Mua thẻ cào"></a>
									</div>
								</div>
								<div class="owl-item active" style="width: 180px; margin-right: 10px;">
									<div class="item">
										<a href="Toup.php"><img src="image/naptien.jpg" alt="nạp tiền"></a>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
					<!-- End-->
				</div>
				<!-- End-->
			</div>
		</div>
		<?php include('Account/DanhMucGame.php'); ?>
			<?php //include('Account/DanhMucGameRandom.php'); ?>
				<?php /*
        <div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo <B>SHOPACCRE247.COM</B></h4>
                    </div>

                    <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                        <p style="text-align:center"><b>Từ ngày 1/12 đến 29/1/2020 Shop giảm mạnh 35% tất cả các Account tại Shop</b> <br />
Nạp thẻ không trừ triết khấu ( 100k thẻ = 100k tiền Shop )</p>

<p style="text-align:center">Shop chuyên bán acc Game Chuẩn và Ramdom như LQMB, CF, LMHT, NRO, FREE FIRE và PUBG MOBILE</p>

<p style="text-align:center"><span style="color:#e74c3c"><strong>Ưu ti&ecirc;n Dùng Thẻ Viettel để giao dịch</strong></span></p>

<p style="text-align:center">Web đang&nbsp;cập nhật th&ecirc;m acc game v&agrave; nhiều thể loại game mới.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
*/
?>
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
					<!-- END: PAGE CONTENT -->
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