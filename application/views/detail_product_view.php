<section id="product-detail">
	<div class="container-fluid">
		<div class="row">
			<div class="left col">
				<div class="item col-xs-12 col-md-12">
					<div id="cover">
						<div class="mask">
							<img src="<?php echo site_url('assets/img/shoes/') . $detail['detail_images'][0] ?>" alt="image <?php echo $detail['title'] ?>">
						</div>
					</div>
				</div>

				<div class="row">
                    <?php foreach ($detail['detail_images'] as $key => $value): ?>
                        <?php if ($key > 0 and $key < 4){ ?>
							<div class="item col-xs-12 col-md-6">
								<div class="detail-image">
									<div class="mask">
										<img src="<?php echo site_url('assets/img/shoes/') . $value ?>" alt="image <?php echo $detail['title'] ?>">
									</div>
								</div>
							</div>
                        <?php } ?>
                    <?php endforeach; ?>

					<div class="item col-xs-12 col-md-6">
						<?php
							if ($detail['video'] == 1){
								echo '<div class="video-frame">';
								echo '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' . $detail['video_link'] . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
								echo '</div>';
							} else{
								echo '';
							}
						?>
					</div>
				</div>
			</div>

			<div class="right col">
				<div id="detail-info">
					<div class="section" id="name">
						<h4 class="subtitle-sm">
							<?php echo $detail['subtitle'] ?>
						</h4>
						<h3 class="title-sm">
							<?php echo $detail['title'] ?>
						</h3>
					</div>

					<div class="section" id="price">
						<h3 class="subtitle-md">price</h3>

						<h3 class="title-sm">
                            <?php
                            if ($detail['discount'] == 1 ){
                                echo '$' . $detail['price_discount'] . ' <small><del>$' . $detail['price'] . '</del></small>';
                            } else {
                                echo '$' . $detail['price'];
                            }
                            ?>
						</h3>
					</div>

					<div class="section" id="color">
						<h3 class="subtitle-md">select color</h3>

						<ul class="list-inline">
                            <?php foreach ($detail['color'] as $key => $value): ?>
								<li class="list-inline-item">
									<div class="square" style="background-color: <?php echo $value ?>"></div>
								</li>
                            <?php endforeach; ?>
						</ul>
					</div>

					<div class="section" id="size">
						<h3 class="subtitle-md">select size</h3>

						<ul class="list-inline">
                            <?php foreach ($detail['size'] as $key => $value): ?>
								<li class="list-inline-item">
									<button class="btn btn-link" role="button">
                                        <?php echo $value ?>
									</button>
								</li>
                            <?php endforeach; ?>
						</ul>
					</div>

					<div class="section" id="buttons">
						<button class="btn btn-primary" role="button">
							<i class="fas fa-shopping-cart"></i> add to cart
						</button>
						<button class="btn btn-outline-dark" role="button">
							<i class="fas fa-heart"></i>
						</button>
					</div>

					<div class="section" id="description">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#description-content" aria-expanded="false" aria-controls="description-content">
							<h3 class="subtitle-md">description</h3>
						</button>

						<div class="collapse show" id="description-content">
							<div class="card card-body">
								<p class="paragraph">
									<?php echo $detail['description'] ?>
								</p>
							</div>
						</div>
					</div>

					<div class="section" id="reviews">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#reviews-content" aria-expanded="false" aria-controls="reviews-content">
							<h3 class="subtitle-md">reviews (13)</h3>
						</button>

						<div class="overview">
							<ul class="list-inline star-rating">
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>

								<li class="list-inline-item">4.5/5.0</li>
							</ul>
			                <?php $check_username = empty($username) ? '#login' : '#comment'; ?>
							<button class="btn btn-light" type="button"  data-toggle="modal" data-target="<?php echo $check_username; ?>" data-whatever="@getbootstrap">Write a Review</button>
						</div>

						<div class="collapse show" id="reviews-content">
							<div class="review">
								<div class="review-head">
									<h3 class="subtitle-md">
										The Different Methods Of Removal
									</h3>

									<div class="review-info">
										<ul class="list-inline star-rating">
											<li class="list-inline-item"><i class="fas fa-star"></i></li>
											<li class="list-inline-item"><i class="fas fa-star"></i></li>
											<li class="list-inline-item"><i class="fas fa-star"></i></li>
											<li class="list-inline-item"><i class="fas fa-star"></i></li>
											<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
										</ul>

										<p class="author">Lou Butler</p>

										<p class="time">05/16/2018</p>
									</div>

									<p class="paragraph">
										Gravity is an irresistible force. While it is certainly nice that it keeps us rooted to the planet, it also has a habit of pulling things lower than we might like over time. Breast Lifts – Improvement Without Implants
									</p>

									<a href="javascript:void(0);" class="btn btn-link" role="button">
										read full review
									</a>
								</div>
							</div>

							<div class="review">
								<div class="review-head">
									<h3 class="subtitle-md">
										Knowing What Moisturizer To Use Is Knowing About Your Skin Part 1
									</h3>

									<div class="review-info">
										<ul class="list-inline star-rating">
											<li class="list-inline-item"><i class="fas fa-star"></i></li>
											<li class="list-inline-item"><i class="fas fa-star"></i></li>
											<li class="list-inline-item"><i class="fas fa-star"></i></li>
											<li class="list-inline-item"><i class="fas fa-star"></i></li>
											<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
										</ul>

										<p class="author">Hester Brooks</p>

										<p class="time">03/14/2018</p>
									</div>

									<p class="paragraph">
										People who suffer from Presbyopia that causes trouble focusing on objects which are near and this doesn’t develop after the age 40.They are nearsightedness and farsightedness and suffer from the eye-glasses that are usually with thick lenses and a line across them (they act as two lenses in one).These eye-glasses have several problems: First :They are heavy, Second: They are almost unattractive, Third: It is hard to adjust to them as you have to look up or look down .All these problems cause dizziness during adapting to these bifocal lenses .The only choice for these people for long years ago was the eye-glasses even after contact lenses came on the market.
									</p>

									<a href="javascript:void(0);" class="btn btn-link" role="button">
										read full review
									</a>
								</div>
							</div>

						</div>
					</div>

					<div class="section" id="related">
						<div class="row">
							<?php foreach ($result as $key => $value): ?>
								<?php if ($value['subtitle'] === "men"){ ?>
									<?php if ($key < 3){ ?>
										<div class="item col-xs-12 col-md-4">
											<div class="mask related-mask">
												<img src="<?php echo site_url('assets/img/shoes/') . $value['image'] ?>" alt="image <?php echo $value['title'] ?>">
											</div>

											<h4 class="subtitle-sm">
                                                <a href="<?php echo base_url('products/') ?>">
                                                    <?php echo $value['subtitle'] ?>
												</a>
											</h4>
											<h3 class="subtitle-md">
												<a href="<?php echo base_url('products/detail/') . $value['id'] ?>">
                                                	<?php echo $value['title'] ?>
												</a>
											</h3>
											<h3 class="subtitle-md">
                                                <?php
                                                if ($value['discount'] == 1 ){
                                                    echo '$' . $value['price_discount'] . ' <small><del>$' . $value['price'] . '</del></small>';
                                                } else {
                                                    echo '$' . $value['price'];
                                                }
                                                ?>
											</h3>
										</div>
                                    <?php } ?>
								<?php } ?>
							<?php endforeach; ?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<script>
        //make mask square

        $('#cover .mask').css( 'height' , $('#cover .mask').width() );
        $('.detail-image .mask').css( 'height' , $('.detail-image .mask').width() );
        $('.video-frame').css( 'height' , $('.video-frame').width() );
        $('.related-mask').css( 'height' , $('.related-mask').width() );
	</script>
</section>
    <!--
	<div class="cover">
        <div class="mask">
            <img src="<?php echo site_url('assets/img/product/') . $detail['cover'] ?>" alt="image <?php echo $detail['title'] ?>">

            <div class="overlay"></div>

            <div class="caption">
                <div class="left item">
                    <h1 class="title-lg">
                        <?php echo $detail['title'] ?>
                    </h1>
                </div>

                <div class="right item">
                    <p class="paragraph">
                        <?php echo $detail['description'] ?>
                    </p>

                    <a href="<?php ?>" role="button" class="btn btn-light">
                        Shop now
                    </a>
                    <a href="<?php ?>" role="button" class="btn btn-link">
                        See Detail
                    </a>
                </div>
            </div>
        </div>
    </div>
	-->

    <!--
	<div class="content">
        <div class="navigation container-fluid">
            <div class="container">
                <div class="left item">
                    <ul>
                        <li>
                            <a class="nav-link active" href="#overview">Overview</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#spectation">Specs</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#faq">FAQs</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#accessories">Accessories</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#review">Review</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#support">Support</a>
                        </li>
                    </ul>
                </div>

                <div class="right item">
                    <ul>
                        <li>
                            <a class="btn btn-light" href="#shopnow">Shop Now</a>
                        </li>
                        <li>
                            <h3 class="title-sm">$<?php echo $detail['price'] ?></h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section container-fluid" id="overview">
            <div class="section-head">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col item">
                            <div class="mask">
                                <img src="<?php echo site_url('assets/img/product/') . $detail['image'] ?>" alt="image <?php echo $detail['title'] ?>">
                            </div>
                        </div>

                        <div class="col item">
                            <h1 class="title-lg"><?php echo $detail['title'] ?></h1>
                            <p class="paragraph"><?php echo $detail['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-body">
                <div id="overview-slider" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo site_url('assets/img/product/') . $detail['cover'] ?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo site_url('assets/img/product/') . $detail['cover'] ?>" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#overview-slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#overview-slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="section-foot">
                <div class="container">
                    <div class="row">
						<?php
							if ( $detail['bluetooth'] == 1 ){
								echo '<div class="media col-xs-12 col-md-6">';
								echo '<i class="fab fa-bluetooth-b mr-3"></i>';
								echo '<div class="media-body">';
								echo '<h3 class="title-sm mt-0">Bluetooth Support</h3>';
                                echo '<p class="paragraph">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>';
                                echo '</div>';
								echo '</div>';
							} else {
								echo '';
							}
						?>

                        <?php
                        if ( $detail['battery'] == 1 ){
                            echo '<div class="media col-xs-12 col-md-6">';
                            echo '<i class="fas fa-battery-full mr-3"></i>';
                            echo '<div class="media-body">';
                            echo '<h3 class="title-sm mt-0">BATTERY</h3>';
                            echo '<p class="paragraph">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo '';
                        }
                        ?>

                        <?php
                        if ( $detail['waterproof'] == 1 ){
                            echo '<div class="media col-xs-12 col-md-6">';
                            echo '<i class="fas fa-tint mr-3"></i>';
                            echo '<div class="media-body">';
                            echo '<h3 class="title-sm mt-0">SWEAT AND WEATHER RESISTANT</h3>';
                            echo '<p class="paragraph">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo '';
                        }
                        ?>

                        <?php
                        if ( $detail['heartbeat'] == 1 ){
                            echo '<div class="media col-xs-12 col-md-6">';
                            echo '<i class="fas fa-heartbeat mr-3"></i>';
                            echo '<div class="media-body">';
                            echo '<h3 class="title-sm mt-0">Tracks your heartbeat</h3>';
                            echo '<p class="paragraph">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo '';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>

        -->

		<!--
        <div class="section container" id="spectation">
            <div class="section-heading">
               <h2 class="title-md">Specs</h2>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col item">
                        <h3 class="title-sm">Size</h3>
                        <p class="paragraph">
                            <?php echo $detail['size'] ?>
                        </p>
                    </div>

                    <div class="col item">
                        <h3 class="title-sm">Detail</h3>
                        <p class="paragraph">
                            <?php echo $detail['detail'] ?>
                        </p>
                    </div>

                    <div class="col item">
                        <h3 class="title-sm">Accessories</h3>
                        <p class="paragraph">
                            <?php echo $detail['accessories'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section container" id="faq">
            <div class="section-heading">
                <h2 class="title-md">FAQs</h2>
            </div>
            <div class="section-content">
                <div class="accordion" id="faq-collapse">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="title-sm mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is TriPort acoustic headphone structure?
                                </button>
                            </h3>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faq-collapse">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h3 class="title-sm mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What is NFC?
                                </button>
                            </h3>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq-collapse">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h3 class="title-sm mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How long will the battery stay charged?
                                </button>
                            </h3>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq-collapse">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section container" id="accessories">
            <div class="section-heading">
                <h2 class="title-md">Accessories</h2>
            </div>
            <div class="section-content">
                <div class="row">
                    <?php foreach ($result as $key => $value): ?>
                    	<?php if ( $value['subtitle'] === "accessories" ) { ?>
						<div class="col-xs-12 col-md-6 col-lg-4 item">
							<a href="javascript:void(0);">
								<div class="inner">
									<div class="mask">
										<img src="<?php echo site_url('assets/img/product/') . $value['image'] ?>" alt="image product <?php echo $value['title'] ?>">
									</div>

									<div class="item-info">
										<h4 class="subtitle-sm"><?php echo $value['subtitle'] ?></h4>
										<h3 class="title-sm text-wrapper"><?php echo $value['title'] ?></h3>
										<h3 class="title-sm">
											$<?php echo $value['price'] ?>

											<span class="featured">
												<?php
												if ($value['bluetooth'] == 1){
													echo '<i class="fab fa-bluetooth-b"></i>';
												} else{
													echo '';
												}
												?>

												<?php
												if ($value['battery'] == 1){
													echo '<i class="fas fa-battery-full"></i>';
												} else{
													echo '';
												}
												?>

												<?php
												if ($value['waterproof'] == 1){
													echo '<i class="fas fa-tint"></i>';
												} else{
													echo '';
												}
												?>

												<?php
												if ($value['heartbeat'] == 1){
													echo '<i class="fas fa-heartbeat"></i>';
												} else{
													echo '';
												}
                                                    ?>

											</span>
										</h3>
									</div>

									<div class="overlay">
										<h4 class="subtitle-sm"><?php echo $value['subtitle'] ?></h4>
										<h3 class="title-sm text-wrapper"><?php echo $value['title'] ?></h3>
										<h3 class="title-sm">
											$<?php echo $value['price'] ?>

											<span class="featured">
												<?php
												if ($value['bluetooth'] == 1){
													echo '<i class="fab fa-bluetooth-b"></i>';
												} else{
													echo '';
												}
												?>

												<?php
												if ($value['battery'] == 1){
													echo '<i class="fas fa-battery-full"></i>';
												} else{
													echo '';
												}
												?>

												<?php
												if ($value['waterproof'] == 1){
													echo '<i class="fas fa-tint"></i>';
												} else{
													echo '';
												}
												?>

												<?php
												if ($value['heartbeat'] == 1){
													echo '<i class="fas fa-heartbeat"></i>';
												} else{
													echo '';
												}
												?>
											</span>
										</h3>
										<p class="paragraph text-wrapper"><?php echo $value['description'] ?></p>
									</div>

									<div class="buttons">
										<a href="javascript:void(0);" role="button" class="btn btn-light">
											Shop now
										</a>
										<a href="javascript:void(0);" role="button" class="btn btn-link">
											See Detail
										</a>
									</div>
								</div>
							</a>
						</div>
                        <?php } ?>
                    <?php endforeach ?>

                </div>
            </div>
        </div>

		<div class="section container" id="review">
			<div class="section-heading justify-content-between">
				<h2 class="title-md">Review</h2>

				<button class="btn btn-light" type="button">Write a Review</button>
			</div>
			<div class="section-content">
				<div class="row head">
					<div class="col-xs-12 col-lg-12">
						<div class="d-flex justify-content-between">
							<h3 class="title-sm">Overall rating</h3>

							<ul class="list-inline star-rating">
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>

								<li class="list-inline-item">4.5/5.0</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="row body" id="review-list">
					<div class="col-xs-12 col-lg-6 item">
						<ul class="list-inline star-rating">
							<li class="list-inline-item"><i class="fas fa-star"></i></li>
							<li class="list-inline-item"><i class="fas fa-star"></i></li>
							<li class="list-inline-item"><i class="fas fa-star"></i></li>
							<li class="list-inline-item"><i class="fas fa-star"></i></li>
							<li class="list-inline-item"><i class="fas fa-star"></i></li>

						</ul>

						<h3 class="title-sm">
							The culmination of audio quality and design
						</h3>

						<div class="author-n-date">
							<span class="post-author">Arman</span> - <span class="post-date">11 minutes ago</span>
						</div>

						<p class="paragraph">
							Aliquam fermentum lacinia tempor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi aliquet lacus quis nisl fringilla dictum. Quisque tincidunt purus et nibh porta lobortis. Pellentesque nec egestas mi. Fusce eget pharetra orci. Quisque aliquam neque quis malesuada malesuada.
						</p>

						<a href="javascript:void(0);">Read Full Review</a>

					</div>

					<div class="col-xs-12 col-lg-6 item">
						<ul class="list-inline star-rating">
							<li class="list-inline-item"><i class="fas fa-star"></i></li>
							<li class="list-inline-item"><i class="fas fa-star"></i></li>
							<li class="list-inline-item"><i class="fas fa-star"></i></li>
							<li class="list-inline-item"><i class="fas fa-star"></i></li>
							<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
						</ul>

						<h3 class="title-sm">
							Sound breaks with noise
						</h3>

						<div class="author-n-date">
							<span class="post-author">Sambit</span> - <span class="post-date">2 months ago</span>
						</div>

						<p class="paragraph">
							Aliquam fermentum lacinia tempor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi aliquet lacus quis nisl fringilla dictum. Quisque tincidunt purus et nibh porta lobortis. Pellentesque nec egestas mi. Fusce eget pharetra orci. Quisque aliquam neque quis malesuada malesuada.
						</p>

						<a href="javascript:void(0);">Read Full Review</a>

					</div>
				</div>

				<div class="d-flex justify-content-center">
					<button class="btn btn-light" type="button">Load All Reviews</button>
				</div>
			</div>
		</div>

		<div class="section container" id="support">
			<div class="section-heading">
				<h2 class="title-md">Support</h2>
			</div>
			<div class="section-content">
				<h3 class="title-sm">Owner's Guide</h3>
				<ul>
					<li>
						<a href="javascript:void(0);">
							<i class="fas fa-file-pdf"></i> English
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="fas fa-file-pdf"></i> Multilang
						</a>
					</li>
				</ul>

				<h3 class="title-sm">Quick start Guide</h3>
				<ul>
					<li>
						<a href="javascript:void(0);">
							<i class="fas fa-file-pdf"></i> English
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="section container" id="shopnow">
			<div class="section-heading">
				<h2 class="title-md">Shop Now</h2>
			</div>
			<div class="section-content">
				<div class="row">
					<div class="left col-xs-12 col-md-6">
						<img src="<?php echo site_url('assets/img/product/') . $detail['image'] ?>" alt="image product <?php echo $detail['title'] ?>">
					</div>

					<div class="right col-xs-12 col-md-6">

						<div class="detail-info detail">
							<h4 class="subtitle-sm">
                                <?php echo $detail['subtitle'] ?>
							</h4>

							<h2 class="title-md">
                                <?php echo $detail['title'] ?>
							</h2>

							<ul class="list-inline star-rating">
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star"></i></li>
								<li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
							</ul>
						</div>

						<div class="detail-color detail">
							<ul class="list-inline">

								<?php foreach ($detail['color'] as $key => $value): ?>
								<li class="list-inline-item">
									<div class="color" style="background-color: <?php echo $value ?>;"></div>
								</li>
								<?php endforeach ?>
							</ul>

							<span class="color-name">Black</span>
						</div>

						<div class="detail-benefit detail">
							<ul>
								<li>30-day Free Trial</li>
								<li>Free expedited shipping</li>
							</ul>
						</div>

						<div class="detail-price detail">
							<div class="price">
								<div class="d-flex justify-content-between align-items-center">
									<h2 class="title-md">
										$<?php echo $detail['price'] ?>
										<small>
											<del>
												<?php
													if ($detail['price_discount'] > 0){
														echo '$' . $detail['price_discount'];
													} else{
														echo '';
													}
												?>
											</del>
										</small>
									</h2>

									<h3 class="title-sm">
                                        <?php
                                        if ($detail['quantity'] > 0){
                                            echo 'In Stock';
                                        } else{
                                            echo '<span style="color: #f00;"> Out of Stock</span>';
                                        }
                                        ?>
									</h3>
								</div>
							</div>

							<div class="offer">
								<h3 class="title-sm">
									Special Offer
								</h3>
								<p>
									Save 25% when you order by 9/1/18. Regularly $<?php echo $detail['price_discount'] ?>
								</p>
							</div>

							<div class="buy">
								<div class="d-flex justify-content-between align-items-center">
									<button class="btn btn-primary" role="button">
										<i class="fas fa-cart-plus"></i> ADD TO CART
									</button>

									<button class="btn btn-light" role="button">
										<i class="fas fa-heart"></i>
									</button>

									<a href="javascript:void(0);" class="btn btn-link">
										Find a Store
									</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>


    </div>

   -->

