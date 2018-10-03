<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- TITLE -->
	<title>Run Now</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- FontAwesome 5 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css" integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">

	<!-- Style -->
	<link rel="stylesheet" href="<?php echo site_url('assets/sass/') ?>style.css">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>

<body>

<header class="">
	<div class="container">
		<div class="secondary-nav">
			<div class="row">
				<div class="left col-lg-6">
					<ul>
						<li>
							<a href="<?php echo base_url('about/')?>">
								about us
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('contact/')?>">
								contact us
							</a>
						</li>
					</ul>
				</div>

				<div class="right col-lg-6">
					<ul>
						<?php if(empty($username->id)): ?>
							<li>
								<a href="<?php echo base_url('')?>" data-toggle="modal" data-target="#login" data-whatever="@getbootstrap">
									Log in
								</a>
							</li>
	    				<?php endif; ?>
						<li>
							<?php if(!empty($username->id)): ?>
								<a href="<?php echo base_url('')?>" data-toggle="modal" data-target="#Personal" data-whatever="@getbootstrap">
									Personal information
								</a>
	        				<?php else: ?>
								<a href="<?php echo base_url('')?>" data-toggle="modal" data-target="#signup" data-whatever="@getbootstrap">
									Sign up
								</a>
	        				<?php endif; ?>
						</li>
						<li>
							<a href="<?php echo base_url('')?>">
								help
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('checkout/')?>">
								<i class="fas fa-shopping-cart">
									<div class="marked" id="cart-mark"></div>
								</i>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('')?>">
								English
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<nav>
			<div class="nav-brand">
				<a href="<?php echo base_url('') ?>">
					<img src="<?php echo site_url('assets/img/logo.png') ?>" alt="logo">
				</a>
			</div>

			<div class="nav-main">
				<ul>
					<li>
						<a href="<?php echo base_url('products/')?>">
							men
						</a>

						<div class="nav-expand">
							<div class="container">
								<div class="row">
									<div class="item col-md-3">
										<ul>
											<li>
												<a href="<?php echo base_url('products/')?>">
													new release
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													best sellers
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													trending
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													sale
												</a>
											</li>
										</ul>
									</div>

									<div class="item col-md-3">
										<ul>
											<li>
												Nike
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													running
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													sport
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													casual
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													lifestyle
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													training & gym
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													all shoes
												</a>
											</li>
										</ul>
									</div>

									<div class="item col-md-3">
										<ul>
											<li>
												Adidas
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													running
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													sport
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													casual
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													lifestyle
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													training & gym
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													all shoes
												</a>
											</li>
										</ul>
									</div>

									<div class="item col-md-3">
										<ul>
											<li>
												Reebok
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													running
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													sport
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													casual
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													lifestyle
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													training & gym
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													all shoes
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="<?php echo base_url('products/')?>">
							women
						</a>

						<div class="nav-expand">
							<div class="container">
								<div class="row">
									<div class="item col-md-3">
										<ul>
											<li>
												<a href="<?php echo base_url('products/')?>">
													new release
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													best sellers
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													trending
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													sale
												</a>
											</li>
										</ul>
									</div>

									<div class="item col-md-3">
										<ul>
											<li>
												Nike
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													running
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													sport
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													casual
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													lifestyle
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													training & gym
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													all shoes
												</a>
											</li>
										</ul>
									</div>

									<div class="item col-md-3">
										<ul>
											<li>
												Adidas
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													running
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													sport
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													casual
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													lifestyle
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													training & gym
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													all shoes
												</a>
											</li>
										</ul>
									</div>

									<div class="item col-md-3">
										<ul>
											<li>
												Reebok
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													running
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													sport
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													casual
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													lifestyle
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													training & gym
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													all shoes
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="<?php echo base_url('products/')?>">
							kids
						</a>

						<div class="nav-expand">
							<div class="container">
								<div class="row">
									<div class="item col-md-3">
										<ul>
											<li>
												<a href="<?php echo base_url('products/')?>">
													new release
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													best sellers
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													trending
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													sale
												</a>
											</li>
										</ul>
									</div>

									<div class="item col-md-3">
										<ul>
											<li>
												Nike
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													sport
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													lifestyle
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													all shoes
												</a>
											</li>
										</ul>
									</div>

									<div class="item col-md-3">
										<ul>
											<li>
												Adidas
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													running
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													sport
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													all shoes
												</a>
											</li>
										</ul>
									</div>

									<div class="item col-md-3">
										<ul>
											<li>
												Reebok
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													running
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('products/')?>">
													all shoes
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="<?php echo base_url('products/')?>">
							favorites
						</a>
					</li>
				</ul>
			</div>

			<div class="nav-search">
				<a href="<?php echo base_url('')?>">
					<i class="fas fa-search"></i> search
				</a>
			</div>
		</nav>
	</div>

	<!--
	<nav>
		<div class="nav-brand nav-item">
			<a href="<?php echo base_url('') ?>">
				<img src="<?php echo site_url('assets/img/') ?>logo.png" alt="logo Sound ON">
			</a>
		</div>

		<div class="nav-main nav-item">
			<div class="left">
				<div id="expand-nav">
					<a class="btn-nav-expand" role="button" id="btn-nav-expand">
						<span class="nav-icon"></span>
					</a>
				</div>
			</div>

			<div class="right">
				<ul>
					<li>
						<a href="<?php echo base_url('products')?>">
							Store
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('')?>">
							Second Hand
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('')?>">
							Advise Corner
						</a>
					</li>

					<li>
						<div class="divide"></div>
					</li>

					<li>
						<a href="<?php echo base_url('')?>">
							<i class="fas fa-shopping-cart"></i> 0
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('')?>">
							Log in
						</a>
					</li>
					<li>
						<a href="<?php echo base_url('')?>">
							Sign up
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="nav-expand">
			<div class="row head">
				<div class="col item">
					<h2 class="title-md">
						<a href="<?php echo base_url('products/') ?>">
							Speakers
						</a>
					</h2>

					<ul class="d-none d-md-block">
						<li>
							<a href="<?php echo base_url('products/') ?>">
								Bookshelfs
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								Speakers with Ampli
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								TV Speakers
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								Surround
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								Floor Standing
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								2.1 Speakers
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								5.1 Speakers
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								Karaoke Speakers
							</a>
						</li>
					</ul>
				</div>

				<div class="col item">
					<h2 class="title-md">
						<a href="<?php echo base_url('products/') ?>">
							Headphones
						</a>
					</h2>

					<ul class="d-none d-md-block">
						<li>
							<a href="<?php echo base_url('products/') ?>">
								In-ear
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								Over-ear
							</a>
						</li>
					</ul>
				</div>

				<div class="col item">
					<h2 class="title-md">
						<a href="<?php echo base_url('products/') ?>">
							Accessories
						</a>
					</h2>

					<ul class="d-none d-md-block">
						<li>
							<a href="<?php echo base_url('products/') ?>">
								Speaker
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								Headphone
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								Cable
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								Ampli
							</a>
						</li>
					</ul>
				</div>

				<div class="col item">
					<h2 class="title-md">
						<a href="<?php echo base_url('about/') ?>">
							About Us
						</a>
					</h2>

					<ul class="d-none d-md-block">
						<li>
							<a href="<?php echo base_url('about/') ?>">
								About Us
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('contact/') ?>">
								Contact Us
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('support/') ?>">
								Support
							</a>
						</li>
						<li>
							<a href="<?php ?>">
								Help
							</a>
						</li>
						<li>
							<a href="<?php ?>">
								Terms & Conditions
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="row foot">
				<div class="col">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">
								<i class="fas fa-search"></i>
							</span>
						</div>
						<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
						<button class="btn btn-link" type="button" id="button-addon2">Search</button>
					</div>
				</div>
			</div>
		</div>
	</nav>
	-->
</header>
