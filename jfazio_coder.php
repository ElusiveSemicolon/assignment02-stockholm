
<?php

$title = "James' Role";

include "includes/html-head.php";

?>

		<section class="hero">
			<!-- Hero head: will stick at the top -->
			<div class="hero-head">
				<?php include "includes/main_navbar.inc"; ?>
			</div>

			<!-- Hero content: will be in the middle -->
			<div class="hero-body">
				<div class="container has-text-centered">
				<h2 class="title is-1">
					The Coder
				</h2>
				<h3 class="title">
					James Fazio
				</h3>
					<div class="subtitle">
						Computer Science '18
					</div>
					<figure>
						<img class="profile-pic" src="images/james.jpg" alt="James Fazio">
					</figure>
				</div>
			</div>

			<!-- Hero footer: will stick at the bottom -->
			<div class="hero-foot">
				<nav class="tabs">
					<div class="container">
						<ul>
							<li><a href="jfazio.php">About</a></li>
							<li class="is-active"><a href="jfazio_coder.php">Role</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</section>

		<!-- Main Header Ends -->

		<section class="content">
				<div class="container">
					<h2 class="title">
						Responsibilities
					</h2>
					<ul>

						<li class="role">Responsible for everything the user interacts with, from page load to every click and scroll</li>

						<li class="role">Checks to make sure everything in the front-end (not just JavaScript but also HTML and CSS) must work and work well (optimized)</li>

						<li class="role">Images must be correctly prepped (optimized)</li>

						<li class="role">Decides the particulars of plug-in usage and installation, web font
						installation, and general optimization and usage of all front-end technologies</li>

						<li class="role">Responsible for all server interactions using PHP and MySQL including the addition of all code in the HTML documents to handle the server-side interactions (server-side includes too)</li>

						<li class="role">Responsible for the set up and manipulation of database(s)</li>

						<li class="role">Leads team collaboration (Github) and manages the file structure</li>

					</ul>

					<h2 class="title">
						Rubric
					</h2>
					<ul>

						<li class="role">No interoperability problems</li>

						<li class="role">The behavior layer (interactions) is coded in JavaScript primarily (may include certain CSS3 interactions) so it adds value to the structure and presentation layers</li>

						<li class="role">"Page weight" is not excessive, and load time and on-page operations work as expected; includes optimization of images, web fonts, and JavaScript plugins</li>

						<li class="role">JavaScript implementation meets industry standards and best practices</li>

					</ul>

				</div>

				<?php include "includes/scroll-to-top.php"; ?>

		</section>

		<?php include "includes/footer.php"; ?>
