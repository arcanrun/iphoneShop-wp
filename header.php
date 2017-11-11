	<!-- nav -->

		<nav class="navbar navbar-default yamm">
			<div class="container">
				<div class="tel-blc hidden-xs pos-rel z-index-7">
					<a href="tel:+78000000000">8 (800) 000-00-00</a>
				</div>
				<div class="navbar-header">
					<a class="navbar-brand hidden-lg hidden-md hidden-sm" href="#"><img src="<?php bloginfo('template_directory')?>/img/logo.png" alt=""></a>
					<button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				</div>
				<div id="navbar-collapse-grid" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						
						<li class="social-icons-navbar hidden-xs">
							<a href=""><i class="fa fa-vk" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
						</li>

						<!-- Grid 12 Menu -->
						<li class="dropdown yamm-fw"><a href="#" id="toggle-yamm" data-toggle="dropdown" class="dropdown-toggle z-index-7"><img id="btn-drop-down" src="<?php bloginfo('template_directory')?>/img/Menu-Icon.png" alt=""> <img id="close-btn-drop-down" src="<?php bloginfo('template_directory')?>/img/Menu-Icon-close.png" alt="">каталог</a>
							
							<ul class="dropdown-menu">
								<li class="grid-drop-mnu">
									<div class="container">
										<div class="row">
											<div id="drop-down-main-mnu" class="col-lg-3 col-md-3">
												<ul class="tabs-control">
													<li class="active"><a  href="#">Apple iPhone</a></li>
													<li><a href="#">iPad</a></li>
													<li><a href="#">MacBook</a></li>
													<li><a href="#">iWatch</a></li>
													<li><a href="#">iMac</a></li>
													<li><a href="#">Аксессуары</a></li>
													<li><a href="#">Смартфоны Xiaomi</a></li>
													<li><a href="#">Фитнес-трекеры</a></li>
													<li><a href="#">text</a></li>
													<li><a href="#">text</a></li>
												</ul>
											</div>
											<div class="col-lg-9 col-md-9">
												<div class="row">
													<!-- tab content -->
													<div class="tabs-content">
														<div class="item-catalog tab-1">
															
															<div class="col-lg-4 col-md-4 col-sm-4 ">
																<ul>
																	<li><a href="card.html">Аксессуары для iPhone 7</a></li>
																	<li><a href="card.html">Аксессуары для iPhone 7 Plus</a></li>
																	<li><a href="#">iPhone</a></li>
																	<li><a href="#">iPhone</a></li>
																	<li><a href="#">iPhone</a></li>
																	<li><a href="#">iPhone</a></li>
																	<li><a href="#">iPhone</a></li>
																	
																</ul>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-4 ">
																<div>
																	<ul>
																		<li><a href="#">iPhone</a></li>
																		<li><a href="#">iPhone</a></li>
																		<li><a href="#">iPhone</a></li>
																		<li><a href="#">iPhone</a></li>
																		<li><a href="#">iPhone</a></li>
																		<li><a href="#">iPhone</a></li>
																		<li><a href="#">iPhone</a></li>
																	</ul>
																</div>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-4">
																<div class="advert-blc">
																	<div class="wrapper-text-advert-blc">
																		<p class="title">iPhone 7</p>
																		<p class="old-price">50 999 р</p>
																		<p class="price">28 900 р</p>
																	</div>
																</div>
															</div>
														</div>
														<!-- end tab content -->
														<div class="item-catalog tab-2">
															<div class="row">
																<div class="col-lg-12">
																	<ul>
																		<li><a href="">еще один пункт меню</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</li>
							</ul>

						</li>
						<li class="hidden-xs main-logo  z-index-7"><a href=""><img src="<?php bloginfo('template_directory')?>/img/logo-black.png" alt=""><img src="<?php bloginfo('template_directory')?>/img/logo-white.png" alt=""></a></li>
					</ul>
					
					<?php
						$args = array(
							'menu' => 'nav', 
							'container' => 'ul', 
							'container_class' => 'nav navbar-nav navbar-right pos-rel z-index-7',
							'menu_class' => 'nav navbar-nav navbar-right pos-rel z-index-7'
							);
						wp_nav_menu( $args ); ?>
			
				</div>
			</div>
		</nav>
		<!-- end nav -->