<?php 

$title = "Kyle's Role";

include "includes/html-head.php"; 

?>

<!-- Main Header -->

<section class="hero">

	<!-- Hero content: will be in the middle -->
	<div class="hero-body">
		<div class="container has-text-centered">
			<h2 class="title is-1">
				The Information Architect
			</h2>
			<h3 class="title">
				Kyle Pollock
			</h3>
			<div class="subtitle">
				Computer Science '18
			</div>
			<figure>
				<img class="profile-pic" src="images/kyle.jpg" alt="">
			</figure>
		</div>
	</div>

	<!-- Hero footer: will stick at the bottom -->
	<div class="hero-foot">
		<nav class="tabs">
			<div class="container">
				<ul>
					<li>
						<a href="kpollock.php">About</a>
					</li>
					<li class="is-active">
						<a href="kpollock_information_architect.php">Role</a>
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
			Personal Summary
		</h2>
		<p>
			I have a good amount of personal experience related to the Information Architect role. Most recently was my group project
			in CSC 210, Web Programming. My primary role in the group was that of a project manager. I managed the project overview,
			structure, and Github repository, restructuring as necessary, and taught my teammates how to use Github. I also managed
			all communication within the group, as well as between TA's and the Professor to set up meetings and presentations. I
			really enjoyed working in this role!
		</p>


		<h2 class="title is-2">
			Responsibilities
		</h2>
		<ul>
			<li>Prepares all the content and how it's arranged within each page and across pages</li>
			<li>Designs the navigation and how it's presented in any browser type and size</li>
			<li>Leads team collaboration (Github) and manages the file structure – unless there is a Backend Hacker on the team</li>
		</ul>

		<h2 class="title is-2">
			Rubric
		</h2>
		<ul>
			<li>No usability problems</li>
			<li>The structure layer (content) is coded in HTML so it is arranged and accessible in a way that makes sense for the content</li>
			<li>Content structure (HTML) meets industry standards and best practices including W3C HTML validation within reason</li>
			<li>The team is coordinated and effective; no complaints</li>
		</ul>
	</div>

	<?php include "includes/scroll-to-top.php"; ?>
	
</section>

<?php include "includes/footer.php"; ?>