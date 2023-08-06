<?php 
$title = "register";
include 'inc/header.php';
include 'inc/navbar.php';
?>
<script>
    function jsDropDown(img, folder, newimg) {
        document.getElementById(img).src = "res/" + folder + "/" + newimg + ".png"
    }
</script>
<div class="data-entry">
    <h1>Register</h1>
    <form class="needs-validation" novalidate>

        <label for="Username">Username</label>
        <input type="username" class="form-control" id="username" placeholder="Username" required pattern="[A-Za-z0-9]+">

        <p></p>
        <h3>Avatar</h3>
        
        <div class="dropdown" style="display:inline">
            <button class="btn btn-secondary dropdown-toggle m-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Skin
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="javascript:jsDropDown('skin', 'skin', 'green');">Green</a>
                <a class="dropdown-item" href="javascript:jsDropDown('skin', 'skin', 'red');">Red</a>
                <a class="dropdown-item" href="javascript:jsDropDown('skin', 'skin', 'yellow');">Yellow</a>
            </div>
        </div>
        <div class="dropdown" style="display:inline">
            <button class="btn btn-secondary dropdown-toggle m-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mouth
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="javascript:jsDropDown('mouth', 'mouth', 'open');">Open</a>
                <a class="dropdown-item" href="javascript:jsDropDown('mouth', 'mouth', 'sad');">Sad</a>
                <a class="dropdown-item" href="javascript:jsDropDown('mouth', 'mouth', 'smiling');">Smiling</a>
                <a class="dropdown-item" href="javascript:jsDropDown('mouth', 'mouth', 'straight');">Straight</a>
                <a class="dropdown-item" href="javascript:jsDropDown('mouth', 'mouth', 'surprise');">Surprise</a>
                <a class="dropdown-item" href="javascript:jsDropDown('mouth', 'mouth', 'teeth');">Teeth</a>
            </div>
        </div>
        <div class="dropdown" style="display:inline">
            <button class="btn btn-secondary dropdown-toggle m-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Eyes
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="javascript:jsDropDown('eyes', 'eyes', 'closed');">Closed</a>
                <a class="dropdown-item" href="javascript:jsDropDown('eyes', 'eyes', 'laughing');">Laughing</a>
                <a class="dropdown-item" href="javascript:jsDropDown('eyes', 'eyes', 'long');">Long</a>
                <a class="dropdown-item" href="javascript:jsDropDown('eyes', 'eyes', 'normal');">Normal</a>
                <a class="dropdown-item" href="javascript:jsDropDown('eyes', 'eyes', 'rolling');">Rolling</a>
                <a class="dropdown-item" href="javascript:jsDropDown('eyes', 'eyes', 'winking');">Winking</a>
            </div>
        </div>
        <div class="parent" >
            <img src="res/skin/green.png", id="skin" style="width:150px;height:150px;" class="image1">
            <img src="res/eyes/closed.png", id="eyes" style="width:150px;height:150px;" class="image2">
            <img src="res/mouth/open.png", id="mouth" style="width:150px;height:150px;" class="image2">
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
include "inc/footer.php";  
?>