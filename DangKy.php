<?php 
include('Account/Config.php'); 
if(isset($_SESSION['username_login'])){
	header("Location: index.php");
	exit();   
}
$_SESSION['title'] = "Đăng Ký";
include('Account/Head.php'); 
?>
<div class="c-layout-page">
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
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="login-box-body box-custom">
            <p class="login-box-msg">Đăng ký thành viên</p>

                <span class="help-block" style="text-align: center;color: #dd4b39">
                       <strong></strong>
                </span>

            <form action="dangky-ajax.php" method="POST">
                <div class="form-group has-feedback  ">
                    <input type="text" class="form-control" name="username_reg" value="" placeholder="Tài khoản" >
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
				<div class="form-group has-feedback  ">
                    <input type="text" class="form-control" name="email_reg" value="" placeholder="Email của bạn" >
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
				<div class="form-group has-feedback  ">
                    <input type="number" class="form-control" name="phone_number_reg" value="" placeholder="Số điện thoại của bạn" >
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password_reg" placeholder="Mật khẩu">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password_reg_confirmation" placeholder="Xác nhận mật khẩu">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
				       
				      
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" style="margin: 0 auto;">Đăng ký</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


             <div class="social-auth-links text-center">
                <p style="margin-top: 5px">- HOẶC -</p>
                <!-- login facebook -->
                 
                <a href="<?php echo $loginurl; ?>" class="btn  btn-social btn-facebook btn-flat d-inline-block"><i class="fa fa-facebook"></i>Login FB</a>

                <a href="DangKy.php" class="btn  btn-social btn-google btn-flat d-inline-block"><i class="icon-key icons"></i>Tạo tài khoản</a>
                
                
            </div>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <style>
        .login-box, .register-box {
            width: 400px;
            margin: 7% auto;
            padding: 20px;;
        }

        @media (max-width: 767px){
            .login-box, .register-box {
                width: 100%;
            }

        }

        .login-box-msg, .register-box-msg {
            margin: 0;
            text-align: center;
            padding: 0 20px 20px 20px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        .box-custom{
            border: 1px solid #cccccc;
            padding: 20px;
            color: #666;
        }
    </style>
<!-- END: PAGE CONTENT -->










</div>
















<div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
<h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
</div>
<div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
<p style="text-align:center">13/5 -N&acirc;ng chiết khấu thẻ l&ecirc;n 80 (100k THẺ đc 80k ATM)<br />
Cập nhật random zing speed</p>
<p style="text-align:center">Tăng gi&aacute; bạc LL x8,Xu NSO x52, V&agrave;ng NRO x2800, Ngọc xanh x8</p>
<p style="text-align:center"><span style="color:#e74c3c"><strong>Ưu ti&ecirc;n ae d&ugrave;ng thẻ Viettel - ATM/V&iacute; để giao dịch</strong></span></p>
<p style="text-align:center">Web đang&nbsp;cập nhật th&ecirc;m acc game v&agrave; nhiều thể loại game mới.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
</div>
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
<!-- END: PAGE CONTENT -->
</div>
<div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="loader" style="text-align: center"><img src="image/loader.gif" style="width: 50px;height: 50px;display: none"></div>
<div class="modal-content">
&lt;p style=&quot;text-align:center&quot;&gt;13/5 -N&amp;acirc;ng chiết khấu thẻ l&amp;ecirc;n 80 (100k THẺ đc 80k ATM)&lt;br /&gt;
Cập nhật random zing speed&lt;/p&gt;
&lt;p style=&quot;text-align:center&quot;&gt;Tăng gi&amp;aacute; bạc LL x8,Xu NSO x52, V&amp;agrave;ng NRO x2800, Ngọc xanh x8&lt;/p&gt;
&lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;color:#e74c3c&quot;&gt;&lt;strong&gt;Ưu ti&amp;ecirc;n ae d&amp;ugrave;ng thẻ Viettel - ATM/V&amp;iacute; để giao dịch&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p style=&quot;text-align:center&quot;&gt;Web đang&amp;nbsp;cập nhật th&amp;ecirc;m acc game v&amp;agrave; nhiều thể loại game mới.&lt;/p&gt;
</div>
</div>
</div>
</div>
<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="loader" style="text-align: center"><img src="assets1/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
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
curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets1/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
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