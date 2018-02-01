
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
            Zubair Aziz
          </h1>
          <h2 class="subtitle">
            Computer Science '19
          </h2>
          <figure>
              <img class="profile-pic" src="images/designer.jpg" alt="Designer Graphic">
          </figure>
        </div>
      </div>

      <!-- Hero footer: will stick at the bottom -->
      <div class="hero-foot">
        <nav class="tabs">
          <div class="container">
            <ul>
              <li><a href="zabaziz.php">About</a></li>
              <li class="is-active"><a href="zabaziz_design_artist.php">Role</a></li>
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
            Responsibilities
          </h1>
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
              <li>No readability problems</li>
              <li>The presentation layer (styles) is coded in CSS so it is visually arranged a way that makes sense for the
                  content and adds value to the structure layer</li>
              <li>Styles (CSS) meet industry standards and best practices including W3C CSS validation within reason</li>
          </ul>
        </div>
      </div>
    </section>

    <?php include "includes/zabaziz-footer.inc"; ?>

    <?php include "includes/scripts.inc"; ?>

  </body>

</html>
