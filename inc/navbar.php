<?php 
global $login;
$login = false;
?>
<div class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-left">
            <li class=<?php activePage("home", $title); ?>><a class="nav-link py-3 px-0 px-lg-3 rounded" href="home.php">Home</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class=<?php activePage("play", $title); ?>><a class="nav-link py-3 px-0 px-lg-3 rounded" href="memory.php">Play</a></li>
            <li class=<?php activePage(lastTab(), $title); ?>><a class="nav-link py-3 px-0 px-lg-3 rounded" href=<?php echo (lastTab(). ".php")?>><?php echo lastTab()?></a></li>
        </ul>
    </div>
</div>
<p></p>


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
        return "leaderboard";
    }
    else {
        return "register";
    }
}
?>