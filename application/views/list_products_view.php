<section id="products">
    <div class="container">
        <div class="row">
            <div class="left col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <h2 class="title-md">
					products
				</h2>

                <div class="accordion" id="accordion">

                    <!-- Collapse 1: brand -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h3 class="title-sm">
                                <a role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    brand
                                </a>
                            </h3>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <?php
                                $brand = array(
                                    'nike' , 'adidas' , 'reebok' , 'others'
                                )
                                ?>
								<ul>
                                    <?php for ($i = 0; $i < count($brand); $i++) { ?>
										<li>
											<a href="<?php echo base_url('products/') ?>">
                                                <?php echo $brand[$i] ?> (<?php echo count($result) ?>)
											</a>
										</li>
                                    <?php } ?>
								</ul>

                            </div>
                        </div>
                    </div>

                    <!-- Collapse 2: style -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h3 class="title-sm">
                                <a role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                    style
                                </a>
                            </h3>
                        </div>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <?php
                                $style = array(
                                    'running', 'sport', 'casual', 'lifestyle', 'training & gym'
                                )
                                ?>
								<ul>
                                    <?php for ($i = 0; $i < count($style); $i++) { ?>
										<li>
											<a href="<?php echo base_url('products/') ?>">
                                                <?php echo $style[$i] ?> (<?php echo count($result) ?>)
											</a>
										</li>
                                    <?php } ?>
								</ul>

                            </div>
                        </div>
                    </div>

                    <!-- Collapse 3: features -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h3 class="title-sm">
                                <a role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                    features
                                </a>
                            </h3>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <?php
                                $features = array(
                                    'new release', 'best sellers', 'trending', 'sale'
                                )
                                ?>
								<ul>
                                    <?php for ($i = 0; $i < count($features); $i++) { ?>
										<li>
											<a href="<?php echo base_url('products/') ?>">
                                                <?php echo $features[$i] ?> (<?php echo count($result) ?>)
											</a>
										</li>
                                    <?php } ?>
								</ul>

                            </div>
                        </div>
                    </div>

                    <!-- Collapse 4: size -->
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h3 class="title-sm">
                                <a role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                    size
                                </a>
                            </h3>
                        </div>
                        <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <?php
                                $size = array(
                                    5, 5.5, 6, 6.5, 7, 7.5, 8, 8.5, 9, 9.5, 10, 10.5, 11, 11.5, 12, 12.5
                                )
                                ?>
								<ul class="list-inline">
                                    <?php for ($i = 0; $i < count($size); $i++) { ?>
										<li class="list-inline-item">
											<a href="javascript:void(0);">
                                                <?php echo $size[$i] ?>
											</a>
										</li>
                                    <?php } ?>
								</ul>

                            </div>
                        </div>
                    </div>

                    <!-- Collapse 4: color -->
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h3 class="title-sm">
                                <a role="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                                    color
                                </a>
                            </h3>
                        </div>
                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <?php
                                $color = array(
                                    '#fff' , '#333', '#5BD1FF' , '#ED2222'
                                )
                                ?>
								<ul class="list-inline">
                                    <?php for ($i = 0; $i < count($color); $i++) { ?>
										<li class="list-inline-item">
											<a href="javascript:void(0);">
												<div class="square" style="background-color: <?php echo $color[$i] ?>"></div>
											</a>
										</li>
                                    <?php } ?>
								</ul>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="right col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <!-- Temporary Deleted 'cause no Banner
				<div class="banner">
                    <img src="<?php echo site_url('assets/img/')?>banner-discount.jpg" alt="banner discount 5%">
                </div>
                -->

                <div id="list">
					<div class="grid">
						<div class="grid-sizer"></div>

                        <?php foreach ($result as $key => $value): ?>
							<div class="grid-item <?php echo ($key % 2 == 0 )?'grid-item-2': '' ?> wow fadeInUp" <?php echo ($key % 2 == 0 )?'data-wow-delay="0.2s"': '' ?> >
								<div class="inner">
									<div class="mask">
										<img src="<?php echo site_url('assets/img/shoes/') . $value['image'] ?>" alt="image product <?php echo $value['title'] ?>">
									</div>

									<div class="text">
										<h4 class="subtitle-sm">
											<a href="<?php echo base_url('products/') ?>">
                                                <?php echo $value['subtitle'] ?>
											</a>
										</h4>
										<h3 class="title-sm">
											<a href="<?php echo base_url('products/detail/') . $value['id'] ?>">
                                            	<?php echo $value['title'] ?>
											</a>
										</h3>
										<h3 class="title-sm">
											<?php
												if ($value['discount'] == 1 ){
                                            	 echo '$' . $value['price_discount'] . ' <small><del>$' . $value['price'] . '</del></small>';
												} else {
													echo '$' . $value['price'];
												}
											?>
										</h3>

										<div class="buttons">
											<button class="btn btn-primary add-to-cart" role="button" data-id="<?php echo $value['id'] ?>" data-quantity="1" data-price="<?php echo $value['price'] ?>" data-product='<?php echo json_encode($value) ?>'>
												<i class="fas fa-shopping-cart"></i> add to cart
											</button>
											<a href="<?php echo base_url('products/detail/') .$value['id'] ?>" class="btn btn-link" role="button">
												see detail
											</a>
										</div>
									</div>
								</div>
							</div>
                        <?php endforeach; ?>
					</div>

					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-center">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- animate css -->
<link rel="stylesheet" href="<?php echo site_url('assets/lib/') ?>animate/animate.min.css">

<!-- wow js -->
<script src="<?php echo site_url('assets/lib/') ?>wow/wow.min.js"></script>

<!-- isotpode js -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<!-- imageloaded js -->
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>

<script>
    var $grid = $('.grid').isotope({
        // set itemSelector so .grid-sizer is not used in layout
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
            // use element for option
            columnWidth: '.grid-sizer'
        }
    });
    // layout Isotope after each image loads
    $grid.imagesLoaded().progress( function() {
        $grid.isotope('layout');
    });

    //make mask square

	$('.grid-item .mask').css( 'height' , $('.grid-item .mask').width() );

    new WOW().init();
</script>