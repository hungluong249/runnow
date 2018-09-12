<section id="about">
    <div class="cover">
		<div class="mask">
			<img src="https://images.unsplash.com/photo-1505515888495-c1897b0b5740?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ca2beb82c990e56325cce416232970b6&auto=format&fit=crop&w=1350&q=80" alt="image about cover">
		</div>

		<div class="text">
			<h2 class="title-md">
				about us
			</h2>
			<h1 class="title-xlg">
				BRING INSPIRATION AND INNOVATION TO EVERY ATHLETE* IN THE WORLD
			</h1>
		</div>
	</div>

	<div class="container-fluid" id="description">
		<div class="container">
			<p class="paragraph">
				Hydroderm is the highly desired anti-aging cream on the block. This serum restricts the occurrence of early aging sings on the skin and keeps the skin younger, tighter and healthier. It reduces the wrinkles and loosening of skin. This cream nourishes the skin and brings back the glow that had lost in the run of hectic years.
			</p>
		</div>
	</div>

	<div class="container-fluid" id="list-about">
		<div class="container">
            <?php foreach ( $result as $key => $value): ?>
				<div class="item">
					<div class="row">
						<div class="left col-xs-12 col-md-6">
							<?php
							if ($key % 2 == 0){
								echo '<div class="mask wow fadeInUp">';
								echo '<a href="' . base_url('about/detail/') . $value['id'] . '">';
								echo '<img src="' . $value['image'] . '" alt="image ' . $value['title'] . '">';
								echo '</a>';
								echo '</div>';
							} else {
                                echo '<div class="wow fadeInUp" data-wow-delay="0.2s">';
								echo '<h4 class="subtitle-sm">' . $value['subtitle'] . '</h4>';
                                echo '<h2 class="title-md">' . $value['title'] . '</h2>';
                                echo '<p class="paragraph">' . $value['description'] . '</p>';
                                echo '<a href="' . base_url('about/detail/') . $value['id'] . '" class="btn btn-link" role="button">read more</a>';
                                echo '</div>';
							}
							?>
						</div>
						<div class="right col-xs-12 col-md-6">
                            <?php
                            if ($key % 2 == 0){
                            	echo '<div class="wow fadeInUp" data-wow-delay="0.2s">';
                                echo '<h4 class="subtitle-sm">' . $value['subtitle'] . '</h4>';
                                echo '<h2 class="title-md">' . $value['title'] . '</h2>';
                                echo '<p class="paragraph">' . $value['description'] . '</p>';
                                echo '<a href="' . base_url('about/detail/') . $value['id'] . '" class="btn btn-link" role="button">read more</a>';
                            	echo '</div>';
                            } else {
                                echo '<div class="mask wow fadeInUp">';
                                echo '<a href="' . base_url('about/detail/') . $value['id'] . '">';
                                echo '<img src="' . $value['image'] . '" alt="image ' . $value['title'] . '">';
                                echo '</a>';
                                echo '</div>';
                            }
                            ?>
						</div>
					</div>
				</div>
            <?php endforeach; ?>
		</div>
	</div>

	<!-- animate css -->
	<link rel="stylesheet" href="<?php echo site_url('assets/lib/') ?>animate/animate.min.css">

	<!-- wow js -->
	<script src="<?php echo site_url('assets/lib/') ?>wow/wow.min.js"></script>

	<script>
		new WOW().init();
	</script>

</section>