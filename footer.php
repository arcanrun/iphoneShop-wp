<footer>
	<div class="container">
		<!-- 1st row -->
		<div class="row first-row">

			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="logo-wrapper">
					<a href= "<?php echo get_home_url(); ?>" >
						<img src="<?php bloginfo('template_directory')?>/img/logo-black.png" alt="">
					</a>
				</div>
			</div>

			<div class="col-lg-9 col-md-9 col-sm-12">	
				<?php
				$args = array(
					'menu' => 'footer', 
					'container' => 'ul', 
					'container_class' => '',
					'menu_class' => ''
				);
				wp_nav_menu( $args ); ?>

				<!-- <ul>
					<li><a  href="">О компании</a></li>
					<li><a  href="delivery.html">Доставка и оплата</a></li>
					<li><a  href="service.html">Сервис и гарантия</a></li>
					<li><a  href="contacts.html">Контакты</a></li>
					<li><a href="tel+78000000000">8 (800) 000-00-00</a></li>
				</ul> -->
			</div>

		</div>
		<!-- end 1st row -->
		<!-- 2nd row -->
		<div class="row second-row">

			<div class="col-lg-4 col-md-4"">
				<p class="first-p">2010-2017© Gadget Access</p>
			</div>

			<div class="col-lg-4 col-md-4">
				<ul class="pos-rel">
					<li><p class="second-p">Мы <br> в соцсетях:</p></li>
					<li><a href=""><img src="<?php bloginfo('template_directory')?>/img/vk-footer.png" alt=""></a></li>
					<li><a href=""></a><img src="<?php bloginfo('template_directory')?>/img/inst-footer.png" alt=""></li>
					<li><a href=""></a><img src="<?php bloginfo('template_directory')?>/img/fb-footer.png" alt=""></li>

				</ul>
			</div>

			<div class="col-lg-4 col-md-4">
				<div class="input-group">
					<input type="text" class="form-control " placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn search-btn" type="button">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</span>
				</div>
			</div>

		</div>
		<!-- end 2nd row -->
	</div>
</footer>

<!-- ================== end body ================= -->
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/main.min.css">
<script src="<?php bloginfo('template_directory')?>/js/scripts.min.js"></script>
</body>
</html>
