<?php 
include('Account/Config.php'); 
if(isset($_SESSION['username_login'])){
	header("Location: index.php");
	exit();   
}

$_SESSION['title'] = "Đăng Nhập";
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
									<a href="<?php echo $urlweb; ?>" alt="#"> <img src="https://nick.vn/storage/images/XoBF4ldarS_1623147567.jpg" alt="#"> </a>
								</div>
							</div>
							<div class="owl-item cloned" style="width: 445px;">
								<div class="item">
									<a href="<?php echo $urlweb; ?>" alt="#"> <img src="https://nick.vn/storage/images/pHqmqsnmhX_1623851481.jpg" alt="#"> </a>
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
            <p class="login-box-msg">Đăng nhập hệ thống</p>
			<span class="help-block" style="text-align: center;color: #dd4b39">
                       <strong></strong>
                </span>
            <form action="DangNhap_Ajax.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" value="" placeholder="Tài khoản của Web" >
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="checkbox icheck">
                            <label style="color: #666">
                                <input type="checkbox" name="remember" id="remember" > Ghi nhớ
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-6" style="text-align: right">
                        <a href="#" style="color: #666;margin-top: 10px;margin-bottom: 10px;display: block;font-style: italic;">Quên mật khẩu?</a><br>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" style="margin: 0 auto;">Đăng nhập</button>
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
        font-size: 20px;;
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
curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
});
});
});
</script>


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