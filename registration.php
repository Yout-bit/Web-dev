<?php 
$title = "register";
include 'inc/header.php';
include 'inc/navbar.php';
?>

<div class="data-entry d-flex p-3 mb-2 bg-light text-dark">
    <form class="needs-validation" novalidate action="register.php" method="GET">

        <label for="Username">Username</label>
        <input type="username" class="form-control" id="username" placeholder="Username" name="username" required>

        <p></p>
        <h3>Avatar</h3>
        <div class="form-group">
            <select class="form-select" name="skin" onchange="jsDropDown('skin', 'skin', this.value)">
                <option class="dropdown-item" value="green" selected="selected">Green</option>
                <option class="dropdown-item" value="red">Red</option>
                <option class="dropdown-item" value="yellow" >Yellow</option>
            </select>

            <select class="form-select" name="mouth" onchange="jsDropDown('mouth', 'mouth', this.value)">
                <option class="dropdown-item" value="open" selected="selected">Open</option>
                <option class="dropdown-item" value="sad">Sad</option>
                <option class="dropdown-item" value="smiling">Smiling</option>
                <option class="dropdown-item" value="straight">Straight</option>
                <option class="dropdown-item" value="surprise">Surprise</option>
                <option class="dropdown-item" value="teeth">Teeth</option>
            </select>

            <select class="form-select" name="eyes" onchange="jsDropDown('eyes', 'eyes', this.value)">
                <option class="dropdown-item" value="closed" selected="selected">Closed</option>
                <option class="dropdown-item" value="laughing">Laughing</option>
                <option class="dropdown-item" value="long">Long</option>
                <option class="dropdown-item" value="normal">Normal</option>
                <option class="dropdown-item" value="rolling">Rolling</option>
                <option class="dropdown-item" value="winking">Winking</option>
            </select>
        </div>
        <p></p>
        <div class="parent" >
            <img src="res/skin/green.png", id="skin" style="width:150px;height:150px;" class="image1">
            <img src="res/eyes/closed.png", id="eyes" style="width:150px;height:150px;" class="image2">
            <img src="res/mouth/open.png", id="mouth" style="width:150px;height:150px;" class="image2">
        </div>
        <p></p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    function jsDropDown(img, folder, newimg) {
        document.getElementById(img).src = "res/" + folder + "/" + newimg + ".png"
    }   
    (function () {
  'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()
</script>

<?php
include "inc/footer.php";  
?>