
<?php include "includes/html-head.inc"; ?>

  <body>

    <!-- Main Header -->

    <section class="hero is-primary">
      <!-- Hero head: will stick at the top -->
      <div class="hero-head">
        <?php include "includes/main_navbar.inc"; ?>
      </div>

      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">
            Kyle Pollock
          </h1>
          <h2 class="subtitle">
            Computer Science '18
          </h2>
          <figure>
            <img class="profile-pic" src="images/agentsmith24.jpg" alt="Star Mage by AgentSmith24">
            <figcaption>Star Mage by AgentSmith24</figcaption>
          </figure>
        </div>
      </div>

      <!-- Hero footer: will stick at the bottom -->
      <div class="hero-foot">
        <nav class="tabs">
          <div class="container">
            <ul>
              <li><a href="kpollock.php">About</a></li>
              <li class="is-active"><a href="kpollock_information_architect.php">Role</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </section>

    <!-- Main Header Ends -->

    <section class="hero">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Personal Summary
          </h1>
          <p>
            I have a good amount of personal experience related to the Information Architect role.
            Most recently was my group project in CSC 210, Web Programming. My primary role in the group
            was that of a project manager. I managed the project overview, structure, and Github repository,
            restructuring as necessary, and taught my teammates how to use Github. I also managed all communication
            within the group, as well as between TA's and the Professor to set up meetings and presentations.
            I really enjoyed working in this role!
          </p>
        </div>
      </div>
    </section>

    <section class="hero is-warning">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Responsibilities
          </h1>
          <ul>
            <li>Prepares all the content and how it's arranged within each page and across pages</li>
            <li>Designs the navigation and how it's presented in any browser type and size</li>
            <li>Leads team collaboration (Github) and manages the file structure – unless there is a Backend Hacker on the team</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="hero">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Rubric
          </h1>
          <ul>
            <li>No usability problems</li>
            <li>The structure layer (content) is coded in HTML so it is arranged and accessible in a way that makes sense for the content</li>
            <li>Content structure (HTML) meets industry standards and best practices including W3C HTML validation within reason</li>
            <li>The team is coordinated and effective; no complaints</li>
          </ul>
        </div>
      </div>
    </section>

    <footer>

      <section class="hero is-primary">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
              Sources
            </h1>
            <ul>
              <li>
                <a href="http://docs.urcsc174.org/lecture01-introduction/Introduction.pdf">Lecture 01, CSC 174</a>
              </li>
            </ul>
          </div>
        </div>
      </section>

    </footer>

    <?php include "includes/kpollock-footer.inc"; ?>

    <?php include "includes/scripts.inc"; ?>

  </body>

</html>
