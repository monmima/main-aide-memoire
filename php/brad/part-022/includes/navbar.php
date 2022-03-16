
<!-- https://getbootstrap.com/docs/4.0/components/navbar/ -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>addpost.php">Add Post</a>
      </li>

    </ul>
    <!-- <span class="navbar-text">
      Navbar text with an inline element
    </span> -->
  </div>
</nav>