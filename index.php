<?php 
$title = "home";
include 'inc/header.php';
include 'inc/navbar.php';
include 'src/utils.php';
include 'src/scores.php';
?>
<div class="d-flex p-3 mb-2 bg-light text-dark">
  <?php
  if (isset($_COOKIE["username"])) {
    include 'inc\welcomelogin.php'; 
  } else {
    include 'inc\welomenotlogin.php';
  }

  ?>

</div>
<?php
include "inc/footer.php";  
?>