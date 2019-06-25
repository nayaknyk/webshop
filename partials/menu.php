<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <a class="navbar-brand" href="<?= Http::asset('index.php'); ?>">WebShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= Http::asset('shop'); ?>">Shop <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= Http::asset('about'); ?>">About</a>
      </li>
      <li class="nav-item">
        <?php if(Auth::check()) { ?>
            <a class="nav-link" href="<?= Http::asset('uitloggen'); ?>">Uitloggen</a>
        <?php } else { ?>
            <a class="nav-link" href="<?= Http::asset('inloggen'); ?>">Inloggen</a>
        <?php } ?>
      </li>
    </ul>
  </div>
</nav>
