<?php
include('Account/Config.php');
if(!isset($_SESSION['username_login'])){
	header("Location: index.php");
	exit();   
}
$_SESSION['title'] = "Trang Cá Nhân";
include('Account/Head.php'); 
?>
<div class="c-layout-page">
	<!-- BEGIN: PAGE CONTENT -->
		<div class="c-layout-page">
		<!-- BEGIN: PAGE CONTENT -->
		<div class="m-t-20 visible-sm visible-xs"></div>

		<center style="max-width:1140px; margin: 0 auto;" class="hidden-xs"><div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url('https://nick.vn/assets/frontend/images/unknown-cover.jpg');background-position: center;width:100%;height: 350px;background-repeat: no-repeat;background-position: center;background-size: cover;">
		<div class="container">
			<div class="c-page-title c-pull-left">
				<h3 class="c-font-uppercase c-font-bold c-font-white c-font-20 c-font-slim">&nbsp;</h3>
			</div>
		</div>
	</div>
</center>
<div class="container c-size-md ">
	<div class="col-md-12">
		<div class="text-center" style="margin-top: -128px;">
			<center>
				<img class="img-responsive img-thumbnail hidden-xs" width="256" height="256" src="https://nick.vn/assets/frontend/images/unknown-avatar.jpg" alt="">
				<h2 class="c-font-bold c-font-28">ID: <?php echo $data['id']; ?></h2>
				<h2 class="c-font-bold c-font-28">Tên Tài Khoản: <?php echo $_SESSION['username_login']; ?></h2>
				<h2 class="c-font-22">Chức Vụ: Thành viên</h2>
				<h2 class="c-font-22 c-font-red">Số Dư: <?php echo _tien($data['cash_money']); ?>đ</h2>
			</center>

		</div>

	</div>
</div>
		<div class="c-layout-page" style="margin-top: 20px;">
			<div class="container">
				<div class="c-layout-sidebar-menu c-theme ">
	<div class="row">
	
	

		<div class="col-md-12 col-sm-6 col-xs-6 m-t-15">
			<div class="c-content-title-3 c-title-md c-theme-border">
				<h3 class="c-left c-font-uppercase">Menu giao dịch</h3>
				<div class="c-line c-dot c-dot-left "></div>
			</div>
			<div class="c-content-ver-nav m-b-20">
				<ul class="c-menu c-arrow-dot c-square c-theme">
						<li><a href="His_Toup.php" class="">Lịch sử nạp thẻ</a></li>
					<li><a href="His_Trans.php" class="">Tài khoản đã mua</a></li>	
					<li><a href="Toup.php" class="">Nạp Tiền Bằng Card</a></li>
					<li><a href="Toup_Momo.php" class="">Nạp Tiền Bằng MoMo</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>				
<div class="c-layout-sidebar-content ">
					<!-- BEGIN: PAGE CONTENT -->
					<!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
					<div class="c-content-title-1">
						<h3 class="c-font-uppercase c-font-bold">Thông tin tài khoản</h3>
						<div class="c-line-left"></div>
					</div>
					<table class="table table-striped">
						<tbody><tr>
							<th scope="row">ID của bạn:</th>
							<th><span class="c-font-uppercase"><?php echo $data['id']; ?></span></th>
						</tr>
						<tr>
							<th scope="row">Tên tài khoản:</th>
							<th><?php echo $_SESSION['username_login']; ?></th>
						</tr>
						<tr>
							<th scope="row">Số dư tài khoản:</th>
							<td><b class="text-danger"><?php echo _tien($data['cash_money']); ?>đ</b></td>
						</tr>
						<!--                <tr>
                    <th scope="row">Địa chỉ Email:</th>
                    <td>Tanmk1191@gmail.com (<a href="/user/email.html">Cài đặt</a>)</td>
                </tr>-->
					
						<tr>
							<th scope="row">Nhóm tài khoản:</th>
							<td>
							<?php 
							/*
							if ($data['chucvu'] < 1) 
							{
							    echo 'Admin';
							}else{
							    echo 'Thành Viên';
							    
							}
							*/
							echo 'Thành Viên';
							?>
							</td>
						</tr>
						<tr>
							<th scope="row">Ngày tham gia:</th>
							<td>
																	<?php echo $data['time_make_account']; ?>
															</td>
						</tr>
						</tbody></table>
					<!-- END: PAGE CONTENT -->
				</div>
			</div>
		</div>


	
		 <script>
            $(document).ready(function(){
                if ($.cookie('noticeModal') != '1') {

                    $('#noticeModal').modal('show')
                    //show popup here

                    var date = new Date();
                    var minutes = 60*12;
                    date.setTime(date.getTime() + (minutes * 60 * 1000));
                    $.cookie('noticeModal', '1', { expires: date}); }
            });
        </script>
	</div>
</div>
<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="loader" style="text-align: center"><img src="assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
		<div class="modal-content">
		</div>
	</div>
</div>
<script>
    $(document).ready(function () {
        $('.load-modal').each(function (index, elem) {
            $(elem).unbind().click(function (e) {
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