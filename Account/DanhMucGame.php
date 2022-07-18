<div class="c-content-box c-size-md c-bg-white">
	<div class="container">
		<!-- Begin: Testimonals 1 component -->
		<div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
			<!-- Begin: Title 1 component -->
			<div class="c-content-title-1">
				<h3 class="c-center c-font-uppercase c-font-bold">Danh mục game</h3>
				<div class="c-line-center c-theme-bg"></div>
			</div>
			<div class="row row-flex-safari game-list">
				<div class="col-sm-3 col-xs-6 p-5">
					<div class="classWithPad">
						<div class="news_image">
							<img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;" src="image/new.png" alt="png-image">
							<a href="Game_CF.php" title="CF" class=""><img src="image/dotkich_1.gif" alt="DANH MỤC GAME ĐỘT KÍCH"></a>
						</div>
						<div class="news_title">
							<h2>
									<a href="Game_CF.php" title="CF">DANH MỤC GAME ĐỘT KÍCH</a>
										</h2> </div>
						<div class="news_description">
							<p> Số tài khoản: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'CF' And status_posts = 'Chưa Bán'"))['total']; ?> </p>
							<p> Đã bán: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'CF' And status_posts = 'Đã Bán'"))['total']; ?> </p>
						</div>
						<div class="a-more">
							<div class="row">
								<div class="col-xs-12">
									<div class="view"> <a href="Game_CF.php" title="CF">Xem tất cả</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 p-5">
					<div class="classWithPad">
						<div class="news_image">
						<img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;" src="image/new.png" alt="png-image">
							<a href="Game_LQM.php" title="LQM" class=""><img src="image/lienquan_1.gif" alt="LQM"></a>
						</div>
						<div class="news_title">
							<h2>
									<a href="Game_LQM.php" title="LQM">DANH MỤC LIÊN QUÂN</a>
																			</h2> </div>
						<div class="news_description">
							<p> Số tài khoản: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'LQM' And status_posts = 'Chưa Bán'"))['total']; ?> </p>
							<p> Đã bán: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'LQM' And status_posts = 'Đã Bán'"))['total']; ?> </p>
						</div>
						<div class="a-more">
							<div class="row">
								<div class="col-xs-12">
									<div class="view"> <a href="Game_LQM.php" title="LQM">Xem tất cả</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 p-5">
					<div class="classWithPad">
						<div class="news_image">
						<img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;" src="image/new.png" alt="png-image">
							<a href="Game_LMHT.php" title="LMHT" class=""><img src="image/lienminh_1.gif" alt="LMHT"></a>
						</div>
						<div class="news_title">
							<h2>
									<a href="Game_LMHT.php" title="LMHT">DANH MỤC GAME LIÊN MINH</a>
																			</h2> </div>
						<div class="news_description">
							<p> Số tài khoản: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'LMHT' And status_posts = 'Chưa Bán'"))['total']; ?> </p>
							<p> Đã bán: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'LMHT' And status_posts = 'Đã Bán'"))['total']; ?> </p>
						</div>
						<div class="a-more">
							<div class="row">
								<div class="col-xs-12">
									<div class="view"> <a href="Game_LMHT.php" title="LMHT">Xem tất cả</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 p-5">
					<div class="classWithPad">
						<div class="news_image">
						<img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;" src="image/giamgia.png" alt="png-image">
							<a href="Game_FO4.php" title="FO4" class=""><img src="image/fo4_1.gif" alt="FO4"></a>
						</div>
						<div class="news_title">
							<h2>
									<a href="Game_FO4.php" title="FO4">DANH MỤC GAME FO4</a>
																			</h2> </div>
						<div class="news_description">
							<p> Số tài khoản: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'FO4' And status_posts = 'Chưa Bán'"))['total']; ?> </p>
							<p> Đã bán: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'FO4' And status_posts = 'Đã Bán'"))['total']; ?> </p>
						</div>
						<div class="a-more">
							<div class="row">
								<div class="col-xs-12">
									<div class="view"> <a href="Game_FO4.php" title="FO4">Xem tất cả</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-3 col-xs-6 p-5">
					<div class="classWithPad">
						<div class="news_image">
						<img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;" src="image/giamgia.png" alt="png-image">
							<a href="#" title="FF" class=""><img src="image/ff_1.gif" alt="FF"></a>
						</div>
						<div class="news_title">
							<h2>
									<a href="#" title="FF">DANH MỤC GAME FREE FIRE</a>
																			</h2> </div>
						<div class="news_description">
							<p> Số tài khoản: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'FF' And status_posts = 'Chưa Bán'"))['total']; ?> </p>
							<p> Đã bán: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'FF' And status_posts = 'Đã Bán'"))['total']; ?> </p>
						</div>
						<div class="a-more">
							<div class="row">
								<div class="col-xs-12">
									<div class="view"> <a href="#" title="FO4">Xem tất cả</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 p-5">
					<div class="classWithPad">
						<div class="news_image">
						<img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;" src="image/giamgia.png" alt="png-image">
							<a href="#" title="PUBGM" class=""><img src="image/pubg_1.gif" alt="PUBGM"></a>
						</div>
						<div class="news_title">
							<h2>
									<a href="#" title="PUBGM">DANH MỤC GAME PUBG MOBILE</a>
																			</h2> </div>
						<div class="news_description">
							<p> Số tài khoản: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'PUBGM' And status_posts = 'Chưa Bán'"))['total']; ?> </p>
							<p> Đã bán: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'PUBGM' And status_posts = 'Đã Bán'"))['total']; ?> </p>
						</div>
						<div class="a-more">
							<div class="row">
								<div class="col-xs-12">
									<div class="view"> <a href="#" title="PUBGM">Xem tất cả</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 p-5">
					<div class="classWithPad">
						<div class="news_image">
						<img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;" src="image/giamgia.png" alt="png-image">
							<a href="#" title="ZSM" class=""><img src="image/zs_1.gif" alt="ZSM"></a>
						</div>
						<div class="news_title">
							<h2>
									<a href="#" title="ZSM">DANH MỤC GAME ZINGSPEED MOBILE</a>
																			</h2> </div>
						<div class="news_description">
							<p> Số tài khoản: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'ZSM' And status_posts = 'Chưa Bán'"))['total']; ?> </p>
							<p> Đã bán: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'ZSM' And status_posts = 'Đã Bán'"))['total']; ?> </p>
						</div>
						<div class="a-more">
							<div class="row">
								<div class="col-xs-12">
									<div class="view"> <a href="#" title="ZSM">Xem tất cả</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 p-5">
					<div class="classWithPad">
						<div class="news_image">
						<img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;" src="image/giamgia.png" alt="png-image">
							<a href="#" title="LANGLA" class=""><img src="image/ll_1.gif" alt="LANGLA"></a>
						</div>
						<div class="news_title">
							<h2>
									<a href="#" title="LANGLA">DANH MỤC GAME LÀNG LÁ</a>
																			</h2> </div>
						<div class="news_description">
							<p> Số tài khoản: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'LANGLA' And status_posts = 'Chưa Bán'"))['total']; ?> </p>
							<p> Đã bán: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'LANGLA' And status_posts = 'Đã Bán'"))['total']; ?> </p>
						</div>
						<div class="a-more">
							<div class="row">
								<div class="col-xs-12">
									<div class="view"> <a href="#" title="LANGLA">Xem tất cả</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 p-5">
					<div class="classWithPad">
						<div class="news_image">
						<img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;" src="image/giamgia.png" alt="png-image">
							<a href="#" title="ROBLOX" class=""><img src="image/rl_1.gif" alt="ROBLOX"></a>
						</div>
						<div class="news_title">
							<h2>
									<a href="#" title="ROBLOX">DANH MỤC GAME ROBLOX</a>
																			</h2> </div>
						<div class="news_description">
							<p> Số tài khoản: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'ROBLOX' And status_posts = 'Chưa Bán'"))['total']; ?> </p>
							<p> Đã bán: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'ROBLOX' And status_posts = 'Đã Bán'"))['total']; ?> </p>
						</div>
						<div class="a-more">
							<div class="row">
								<div class="col-xs-12">
									<div class="view"> <a href="#" title="ROBLOX">Xem tất cả</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6 p-5">
					<div class="classWithPad">
						<div class="news_image">
						<img style="position: absolute;max-width: 79px;height: auto;top: -5px;right: -6px;z-index: 1122;" src="image/giamgia.png" alt="png-image">
							<a href="#" title="TOCCHIEN" class=""><img src="image/tocchien_1.gif" alt="TOCCHIEN"></a>
						</div>
						<div class="news_title">
							<h2>
									<a href="#" title="TOCCHIEN">DANH MỤC GAME TỐC CHIẾN</a>
																			</h2> </div>
						<div class="news_description">
							<p> Số tài khoản: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'TOCCHIEN' And status_posts = 'Chưa Bán'"))['total']; ?> </p>
							<p> Đã bán: <?php echo mysqli_fetch_assoc(mysqli_query($conn,"SELECT count(*) as total from posts Where account_type = 'TOCCHIEN' And status_posts = 'Đã Bán'"))['total']; ?> </p>
						</div>
						<div class="a-more">
							<div class="row">
								<div class="col-xs-12">
									<div class="view"> <a href="#" title="TOCCHIEN">Xem tất cả</a> </div>
								</div>
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