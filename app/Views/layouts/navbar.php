<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">SI Arsip Surat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'admin' ? 'active' : '' ?> " href="/admin">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'about' ? 'active' : '' ?> " href="/about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>