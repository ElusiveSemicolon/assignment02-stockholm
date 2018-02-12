<?php

$title = "Home";

include "includes/html-head.php";

?>

<!-- Main Header Ends -->

<section class="content">

	<section class="hero">

		<!-- Hero content: will be in the middle -->
		<div class="hero-body">
			<div class="container has-text-centered">
				<h2 class="title is-1">
					Assignment 2: Team Portfolio
				</h2>
				<div class="subtitle is-2">
					Team Stockholm
				</div>
				<div id="container-slides">
					<div class="slide showing">
						<img src="images/kyle.jpg" alt="Kyle Pollock">
					</div>
					<div class="slide">
						<img src="images/zubair.jpg" alt="Zubair Aziz">
					</div>
					<div class="slide">
						<img src="images/james.jpg" alt="James Fazio">
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="columns">
			<div class="column">
				<div class="card face-card">
					<a href="kpollock.php">
						<div class="card-image">
							<figure class="image is-3by4">
								<img src="images/kyle.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="media">
								<div class="media-content has-text-centered">
									<h3 class="title is-4">Kyle Pollock</h3>
									<div class="subtitle">The Information Architect</div>
									<i class="fas fa-info-circle subtitle is-1"></i>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="column">
				<div class="card face-card">
					<a href="zabaziz.php">
						<div class="card-image">
							<figure class="image is-3by4">
								<img src="images/zubair.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="media">
								<div class="media-content has-text-centered">
									<h3 class="title is-4">Zubair Aziz</h3>
									<div class="subtitle">The Design Artist</div>
									<i class="fas fa-paint-brush subtitle is-1"></i>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="column">
				<div class="card face-card">
					<a href="jfazio.php">
						<div class="card-image">
							<figure class="image is-3by4">
								<img src="images/james.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="media">
								<div class="media-content has-text-centered">
									<h3 class="title is-4">James Fazio</h3>
									<div class="subtitle">The Coder</div>
									<i class="fas fa-code subtitle is-1"></i>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>

	</div>

	<?php include "includes/scroll-to-top.php"; ?>

</section>

<?php include "includes/footer.php"; ?>
