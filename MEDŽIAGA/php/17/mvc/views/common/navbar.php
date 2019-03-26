<nav class="navbar navbar-expand-sm navbar-dark bg-brown fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo ROOT ?>">ReadOnly</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT ?>home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT ?>gallery">Gallery</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" role="button">Catalog</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog">All genres</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/novels">Novels</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/adventure">Adventure</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/war">War</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/instructional">Instructional</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/stories">Stories</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/politics">Politics</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT ?>reader">Readers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT ?>contacts">Contacts</a>
        </li>
      </ul>
      <ul class="navbar-nav float-right">
        <li class="nav-item">
        <?php
        if (Session::get('loggedIn')) {
          echo '<a class="nav-link" href="' . ROOT . 'login/logout">Logout</a>';
        } else {
          echo '<a class="nav-link" href="' . ROOT . 'login">Login</a>';
        }
        ?>
        </li>
      </ul>
    </div>
  </div>
</nav>