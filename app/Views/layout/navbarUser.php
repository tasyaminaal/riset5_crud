<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Website Alumni</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/user/index">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home/userinfo">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Recomendation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">API Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Admin Menu</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <?php if (logged_in()) : ?>
            <a class="nav-link active" aria-current="page" href="/logout">Logout</a>
          <?php else : ?>
            <a class="nav-link active" aria-current="page" href="/login">Login Manual</a>
          <?php endif; ?>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Cari NIM" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>