    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">Website Alumni</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <?php if (!session()->has('id_user') && !logged_in()) : ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/login">Login</a>
              </li>
            <?php endif; ?>

            <?php if (session()->has('id_user') || logged_in()) : ?>
              <?php if (session()->has('id_user')) : ?>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/home/userinfo">Profile</a>
                </li>
              <?php endif; ?>

              <?php if (logged_in()) : ?>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/user/index">User</a>
                </li>
              <?php endif; ?>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Recomendation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">API Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Admin Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/auth/logout">Logout</a>
              </li>
            <?php endif; ?>
          </ul>

          <li class="d-flex">
            <a type="button" class="btn btn-primary btn-sm" aria-current="page" href="/home/search">Pencarian</a>
          </li>
        </div>
      </div>
    </nav>