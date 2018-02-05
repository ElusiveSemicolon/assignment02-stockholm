<?php 

$title = "Zubair's Role";

include "includes/html-head.php"; 

?>

	<section class="hero">

		<!-- Hero content: will be in the middle -->
		<div class="hero-body">
			<div class="container has-text-centered">
				<h2 class="title is-1">
					The Design Artist
				</h2>
				<h3 class="title">
					Zubair Aziz
				</h3>
				<div class="subtitle">
					Computer Science '19
				</div>
				<figure>
					<img class="profile-pic" src="images/zubair.jpg" alt="Designer Graphic">
				</figure>
			</div>
		</div>

		<!-- Hero footer: will stick at the bottom -->
		<div class="hero-foot">
			<nav class="tabs">
				<div class="container">
					<ul>
						<li>
							<a href="zabaziz.php">About</a>
						</li>
						<li class="is-active">
							<a href="zabaziz_design_artist.php">Role</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</section>

	<!-- Main Header Ends -->

	<section class="content">
		<div class="container">
			<h2 class="title is-2">
				Responsibilities
			</h2>
			<ul>
				<li>Responsible for everything the user sees, in any browser type and size</li>
				<li>Decides the graphic design:
					<ul>
						<li>Colors for any browser type and size</li>
						<li>Styles for any browser type and size</li>
						<li>Fonts for any browser type and size</li>
						<li>Layouts for any browser type and size</li>
					</ul>
				</li>
			</ul>

			<h2 class="title is-2">
				Rubric
			</h2>
			<ul>
				<li>No readability problems</li>
				<li>The presentation layer (styles) is coded in CSS so it is visually arranged a way that makes sense for the content and
					adds value to the structure layer</li>
				<li>Styles (CSS) meet industry standards and best practices including W3C CSS validation within reason</li>
			</ul>
		</div>

		<?php include "includes/scroll-to-top.php"; ?>
		
	</section>

	<?php include "includes/footer.php"; ?>