<?php 
$title = "home";
include 'inc/header.php';
include 'inc/navbar.php';
setcookie("login", false)
?>
<div class="d-flex p-3 mb-2 bg-light text-dark">
  <?php
  global $login;
  if ($login) {
    include 'inc\welcomelogin.php'; 
  } else {
    include 'inc\welomenotlogin.php';
  }
  ?>

</div>
<?php
include "inc/footer.php";  
?>