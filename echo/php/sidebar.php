<nav>
  <div class="row me-lg-0">
    <div class="col-8 col-md-12 text-md-center mt-3 mb-3 mt-md-5">

      <!-- Site logo -->
      <img src="<?php echo empty($site->logo()) ? (DOMAIN_THEME_IMG . 'profile-icon.png') : $site->logo(); ?>" alt="<?php echo $site->title() ?>" width="150" class="mb-4 mx-auto d-none d-md-block" />

      <!-- Site title -->
      <?php if ($WHERE_AM_I !== 'home'): ?>
        <h2 class="navbar-brand">
      <?php else: ?>
        <h1 class="navbar-brand">
      <?php endif ?>
        <a href="<?php echo Theme::siteUrl() ?>"><?php echo $site->title() ?></a>
      <?php if ($WHERE_AM_I !== 'home'): ?>
        </h2>
      <?php else: ?>
        </h1>
      <?php endif ?>

      <p class="d-none d-md-block"><?php echo $site->slogan(); ?></p>
      <p class="d-none d-md-block"><?php echo $site->description(); ?></p>
    </div>
    <div class="col-4 d-md-none text-end mt-3 mb-3">
      <button class="navbar-toggler mt-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSidebar" aria-expanded="false" aria-controls="collapseSidebar">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>

  <div class="collapse d-md-block" id="collapseSidebar">
    <div class="col-md-12">

      <!-- Static pages -->
      <ul class="navbar-nav ms-auto">
        <?php foreach ($staticContent as $staticPage): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
        </li>
        <?php endforeach ?>
      </ul>

      <!-- Load Bludit Plugins: Site Sidebar -->
      <?php Theme::plugins('siteSidebar') ?>

    </div>
  </div>
</nav>
