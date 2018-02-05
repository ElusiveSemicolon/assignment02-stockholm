
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
						Requirements
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
						Why James is suited for this role
					</h2>
					<ul>

						<li class="role">I am fluent in multiple coding laguanges, including HTML, CSS, Java, Python, and MYSQL.</li>

						<li class="role">My career goal is to become a software or web engineer and developer.</li>

						<li class="role">I have solid backend experience form CSC 210, taken last semester.</li>

						<li class="role">I am not the world's greatest designer or artist.</li>

					</ul>
				
					<h2 class="title">
						Prior Experience
					</h2>
					<ul>

						<li class="role">CSC 170 – Multi-page frontend website, complete with styling and layout</li>

						<li class="role">CSC 171 – Numerous Java programs, from utilties to games</li>

						<li class="role">CSC 172 – Knowledge of data structures for backend coding</li>

						<li class="role">CSC 210 – Backend knowledge and use of databases; login systems; etc.</li>

					</ul>
				</div>

				<?php include "includes/scroll-to-top.php"; ?>

		</section>

		<?php include "includes/footer.php"; ?>