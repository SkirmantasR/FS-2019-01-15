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
          <a class="nav-link" href="<?php echo ROOT ?>contacts">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT ?>gallery">Gallery</a>
        </li>
      </ul>
      <ul class="navbar-nav float-right">
        <li class="nav-item">
          <?php
          if (Session::get('loggedIn') && (Session::get('role') == 'reader' || Session::get('role') == 'librarian')) {
            ?>
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
        <?php

      }
      if (Session::get('loggedIn') && Session::get('role') == 'admin') {
        ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT ?>admin">User management</a>
        </li>
        <?php

      }
      if (Session::get('loggedIn') && Session::get('role') == 'moderator') {
        ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT ?>reader">Readers</a>
        </li>
        <?php

      }
      if (Session::get('loggedIn')) {
        ?>
        <li class="nav-item">
          <a class="nav-link user-profile-link" href="<?php echo ROOT ?>home">
            <?php 
            if (Session::get('name') && Session::get('surname')) {
              {{}}?>
            <span><?php echo Session::get('name') ?></span>
            <span><?php echo Session::get('surname') ?></span>
            <?php

          } else {
            ?>
            <span><?php echo ucfirst(Session::get('role')) ?></span>
            <?php

          }
          ?>
          </a>
        </li>
        <?php

      }



      echo '<li class="nav-item">';
      if (Session::get('loggedIn')) echo '<a class="nav-link" href="' . ROOT . 'login/logout">Logout</a>';
      else echo '<a class="nav-link" href="' . ROOT . 'login">Login</a>';
      echo '</li>';
      ?>
      </ul>
    </div>
  </div>
</nav>