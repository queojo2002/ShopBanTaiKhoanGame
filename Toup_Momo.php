<?php 
include('Account/Config.php'); 
if(!isset($_SESSION['username_login'])){
	header("Location: DangNhap.php");
	exit();
} 
$_SESSION['title'] = "Nạp Tiền - MoMo";
include('Account/Head.php'); 
?>
<div class="c-layout-page">
	<!-- BEGIN: PAGE CONTENT -->
	        

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
</div>	          <div class="c-layout-sidebar-content ">
                <!-- BEGIN: PAGE CONTENT -->
                <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
                <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">Nạp Tiền Bằng MoMo</h3>
                        <div class="c-line-left"></div>
                </div>
                    <div class="alert alert-info">
<p style="text-align:center"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#000000"><strong>*Chú ý: Vui Lòng Chuyển Tiền Theo Đúng Nội Dung</strong></span></span></span></p>
<br><br>
<p style="text-align:center">
	<span style="font-size:16px">
		<span style="font-family:Arial,Helvetica,sans-serif">
			<span style="color:#000000">
				<strong>Chuyển Khoản Với Nội Dung: <span style="color:#e74c3c">NapTien_MoMo <?php echo $username_login; ?></span> Đến SĐT: <span style="color:#e74c3c">0326393540</span></strong>
			</span>
		</span>
	</span>
</p>

<br><br>
<p style="text-align:center"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="color:#000000"><strong>*Chú ý: Số Tiền Nạp Phải Lớn Hơn Hoặc Bằng 10.000 VNĐ</strong></span></span></span></p>

                    </div>


            </div>
        </div>
    </div>




    <div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif"
                                                                style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">
            </div>
        </div>
    </div>


    <style>
        .table-custom-res {
            margin: auto;
            overflow-x: auto;
            width: 100%;

        }
    </style>

    <script>
        $(document).ready(function () {

            $('.load-modal').on('click', function (e) {
                e.preventDefault();
                var curModal = $('#LoadModal');
                curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
                curModal.modal('show').find('.modal-content').load($(this).attr('rel'));
            });


        });

        function get_list_status() {


            //for safari
            $("#status option").detach();
            var type_charge = $("#type_charge").val();


            var myOpts = $(".stt_" + type_charge).clone();
            var myOptsAll = $(".stt_all").clone();
            myOptsAll.appendTo("#status");
            myOpts.appendTo("#status");

            // $("#amount").append(myOpts);
        }

        get_list_status();


    </script>

			<!-- END: PAGE CONTENT -->
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







