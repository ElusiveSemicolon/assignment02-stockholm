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
			</div>
		</div>
	</section>

	<div class="container">

		<div class="columns">
			<div class="column">
				<div class="card">
					<a href="zabaziz.php">
						<div class="card-image">
							<figure class="image">
								<img src="images/zubair.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="media">
								<div class="media-content has-text-centered">
									<h3 class="title is-4">Zubair Aziz</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<a href="jfazio.php">
						<div class="card-image">
							<figure class="image">
								<img src="images/james.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="media">
								<div class="media-content has-text-centered">
									<h3 class="title is-4">James Fazio</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<a href="kpollock.php">
						<div class="card-image">
							<figure class="image">
								<img src="images/kyle.jpg" alt="Placeholder image">
							</figure>
						</div>
						<div class="card-content">
							<div class="media">
								<div class="media-content has-text-centered">
									<h3 class="title is-4">Kyle Pollock</h3>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>

	</div>

</section>

<?php include "includes/footer.php"; ?>