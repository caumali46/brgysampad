	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
	  <div class="container d-flex justify-content-between">

	    <div id="landing-page-logo" class="logo">
	      <!-- <h1 class="text-light"><a href="index.html">Remember</a></h1> -->
	      <!-- Uncomment below if you prefer to use an image logo -->
	      <a href="/">
	        <img src="../image/Logo.png" alt="Brgy. Sampad Cardona Rizal" class="img-fluid">
	        Brgy. Sampad Cardona Rizal
	      </a>
	    </div>

	    <nav id="navbar" class="navbar">
	      <ul>
	        <?php
          $currentRoute = $_SERVER['REQUEST_URI'];
          $home = ($currentRoute == '/');
          $about = strpos($currentRoute, 'about') !== false;
          $gallery = strpos($currentRoute, 'gallery') !== false;
          $contact = strpos($currentRoute, 'contact') !== false;
          ?>
	        <li><a class="nav-link scrollto <?php if ($home) {
                                            echo 'active';
                                          } ?>" href="/">Home</a></li>
	        <li><a class=" nav-link scrollto <?php if ($about) {
                                              echo 'active';
                                            } ?>" href="about.php">About</a></li>
	        <li><a class="nav-link scrollto <?php if ($gallery) {
                                            echo 'active';
                                          } ?>" href="gallery.php">Gallery</a></li>
	        <li><a class="nav-link scrollto <?php if ($contact) {
                                            echo 'active';
                                          } ?>" href="contact.php">Contact</a></li>
	        <?php
          if (isset($_SESSION['username'])) {
            echo '<li><a class="nav-link scrollto" href="../pages/dashboard/dashboard.php">Dashboard</a></li>';
          } else {
            echo '<li><a class="nav-link scrollto" href="../login.php">Login</a></li>';
          }
          ?>
	      </ul>
	      <i class="bi bi-list mobile-nav-toggle"></i>
	    </nav><!-- .navbar -->

	  </div>
	</header><!-- End Header -->