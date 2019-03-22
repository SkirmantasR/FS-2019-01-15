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
          <a class="nav-link" href="<?php echo ROOT ?>about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT ?>contacts">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT ?>gallery">Gallery</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" role="button">Catalog</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog">All genres</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/fantasy">Fantasy</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/biography">Biography</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/scifi">Science fiction</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/detectives">Detectives</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/poetry">Poetry</a>
            <a class="dropdown-item" href="<?php echo ROOT ?>catalog/science">Science</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>