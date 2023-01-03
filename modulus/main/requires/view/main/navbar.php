<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand text-white" href="/panel/admin"
      ><?php echo content::nav(); ?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php if(User::has()): ?>
          <li class="nav-item">
            <a class="nav-link <?php echo segment(1) != '' ?: 'active'; ?>" href="/">home</a>
          </li>
          <?php else: ?>
          <li class="nav-item">
            <a class="nav-link <?php echo segment(1) != '' ?: 'active'; ?>" href="/auth">auth</a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>


