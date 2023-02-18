@component('components.header')
@endcomponent

			
				

		<!-- Main -->
			<div id="main">

				<section id="s-refer" class="wrapper style2">
					<div class="inner">
						<header>
							<h2>Doctor 4 Pic</h2>
							<p>Tool for edit <strong>Image</strong> powerful by <strong>AI Tool</strong> technology...</p>
						</header>
						<!-- Tabbed Video Section -->
							<div class="flex flex-tabs">
								<div class="tab-upload">
									<img src="images/icons/ic-upload-full.png" />
								</div>
								<div class="tabs">

									<!-- Tab 1 -->
										<div class="tab tab-1 flex flex-3 active">
										@for ($i=1; $i<=4; $i++)
												<div class="video col">
													<div class="image fit">
														<img src="images/portfolio/product/pr ({{ $i }}).jpg" alt="Chụp ảnh Sản phẩm" />
														
													</div>
													<a href="gallery/product" class="link"><span>Click Me</span></a>
												</div>
										@endfor
										</div>

								</div>
							</div>
					</div>
				</section>


				<section id="s-services" class="wrapper style1">
					<div class="inner">
							<div class="flex flex-2">
								<div class="video col">
									<div class="image fit">
										<img src="images/service_product.jpg" alt="" />
									</div>
									<p class="caption">
										Ảnh Sản phẩm
									</p>
									<a href="services/product" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/service_place.jpg" alt="" />
										
									</div>
									<p class="caption">
										Ảnh Kiến trúc
									</p>
									<a href="services/place" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/service_social.jpg" alt="" />
										
									</div>
									<p class="caption">
										Video Mạng xã hội
									</p>
									<a href="services/social" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/service_event.jpg" alt="" />
										
									</div>
									<p class="caption">
										Video sự kiện
									</p>
									<a href="services/event" class="link"><span>Click Me</span></a>
								</div>
							</div>
					</div>
				</section>

				<section id="s-ex" class="wrapper style1">
					<div class="inner">
						<header class="align-center">
							<h2>Some examples</h2>
						</header>
							<div class="flex flex-2">
								<div class="video col">
									<div class="image fit">
										<img src="images/service_product.jpg" alt="" />
									</div>
									<p class="caption">
										Ảnh Sản phẩm
									</p>
									<a href="services/product" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/service_place.jpg" alt="" />
										
									</div>
									<p class="caption">
										Ảnh Kiến trúc
									</p>
									<a href="services/place" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/service_social.jpg" alt="" />
										
									</div>
									<p class="caption">
										Video Mạng xã hội
									</p>
									<a href="services/social" class="link"><span>Click Me</span></a>
								</div>
								<div class="video col">
									<div class="image fit">
										<img src="images/service_event.jpg" alt="" />
										
									</div>
									<p class="caption">
										Video sự kiện
									</p>
									<a href="services/event" class="link"><span>Click Me</span></a>
								</div>
							</div>
					</div>
				</section>


				<section id="s-price" class="wrapper ">
					<div class="inner">
						<header class="align-center">
							<h2>Pricing</h2>
							
						</header>

						<!-- 3 Column Video Section -->
						<div class="flex flex-3">

							<div class="video col">
								<div class="upper">
									<p class="title">Free</p>
									<p class="price">
										<span class="pr-2">0$ / Month</span>
									</p>
								</div>
								<ul class="feature">
									<li>- Edit unlimited</li>
									<li>- Download 20 images</li>
								</ul>
							</div>
							<div class="video col">
								<div class="upper">
									<p class="title">Pro</p>
									<p class="price">
										<span class="pr-1">15$ / Month</span><br />
										<span class="pr-2">12$ / Month</span>
									</p>
								</div>
								<ul class="feature">
									<li>- Edit unlimited</li>
									<li>- Download 500 images</li>
									<li>- High Resolution Editing</li>
								</ul>
								<div class="buy"><a href=""><span>Select</span></a></div>
							</div>
							<div class="video col">
								<div class="upper">
									<p class="title">Master</p>
									<p class="price">
										<span class="pr-1">30$ / Month</span><br />
										<span class="pr-2">25$ / Month</span>
									</p>
								</div>
								<ul class="feature">
									<li>- Edit unlimited</li>
									<li>- Download unlimited images</li>
									<li>- High Resolution Editing</li>
									<li>- Unlimited support</li>
								</ul>
								<div class="buy"><a href=""><span>Select</span></a></div>
							</div>
						</div>

					</div>
				</section>
				

			</div>

		


@component('components.footer')

@endcomponent