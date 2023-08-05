<?php 
global $login;
$login = false;
?>
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#home">Home</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class=<?php activePage("play", $title); ?>><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#play">Play</a></li>
                <li class=<?php activePage("leaderboard", $title); ?>><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#leaderboard">Leaderboard</a></li>
                <li class=<?php activePage("register", $title); ?>><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#register">Register</a></li>
                <li class=<?php activePage(lastTab(), $title); ?>><a class="nav-link py-3 px-0 px-lg-3 rounded" href=<?php echo '#' + lastTab()?>><?php echo lastTab()?></a></li>
            </ul>
        </div>
    </div>
  </nav>
  <p></p>
  <div>
    <h1><?php echo $title; ?> </h1>
  </div>

<?php
function activePage($pageName, $title) {
    echo "nav-item mx-0 mx-lg-1";
    if ($pageName == $title) {
        echo " active";
    }

}

function lastTab() {
    global $login;
    if ($login) {
        echo "leaderboard";
    }
    else {
        echo "register";
    }
}
?>