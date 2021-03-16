<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">CEB</a>
    <span class="navbar-text"> <?php echo $_SESSION['name']; ?> </span>
    
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse ms-5" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Options</a>
        </li>
      </ul>
    </div>


    <form class="d-flex" action="logout.php" method = 'post'>
        <button type="submit" class="btn nav-link" name='logout'>Logout</button>
    </form>

  </div>
</nav>