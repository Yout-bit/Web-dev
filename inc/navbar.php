<?php 
global $login;
$login = false;
?>
<div class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php getAng()  ?>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-left">
            <li class=<?php activePage("index", $title); ?>><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Home</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class=<?php activePage("pairs", $title); ?>><a class="nav-link py-3 px-0 px-lg-3 rounded" href="pairs.php">Play</a></li>
            <li class=<?php activePage(lastTab(), $title); ?>><a class="nav-link py-3 px-0 px-lg-3 rounded" href=<?php echo (lastTab(). ".php")?>><?php echo lastTab()?></a></li>
        </ul>
    </div>
</div>
<p></p>
<br></br>
<br></br>
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
        return "registration";
    }
}
 
function getAng() {
    foreach (array("username", "skin", "mouth", "eyes") as $piece) {
        if (!isset($_COOKIE[$piece])) {
            return;
        }
    }
    echo 
    '<div class="parent" >
        <img src="res/skin/' . $_COOKIE["skin"] . '.png" id="navskin" style="width:50px;height:50px;" class="image1">
        <img src="res/mouth/' . $_COOKIE["mouth"] . '.png" id="navmouth" style="width:50px;height:50px;" class="image2">
        <img src="res/eyes/' . $_COOKIE["eyes"] . '.png" id="naveyes" style="width:50px;height:50px;" class="image3">

    </div>';
}
?>