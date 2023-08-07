<?php 
$title = "memory";
include 'inc/header.php';
include 'inc/navbar.php';
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="game-container">
                <div id="timer-container">
                    <div id="timer">00:00</div>
                    <div id="attempts">Attempts: 0</div>
                </div>
                <div class="grid-container" id="cards-container">
                    <!-- Cards will be added here -->
                </div>
                <button id="start-button" class="btn btn-primary mt-3">Start the game</button>
            </div>
        </div>
    </div>
</div>
<!--Bootstrap JavaScript plugins-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--Game script-->
<script src="js/pairs.js"></script>
<?php
include "inc/footer.php";  
?>
