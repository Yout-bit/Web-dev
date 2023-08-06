<?php 
$title = "home";
include 'inc/header.php';
include 'inc/navbar.php';
include 'src/utils.php';
destroyCookiesNoReload(array(
  "username", "skin",  "login"
))
?>
<div class="d-flex p-3 mb-2 bg-light text-dark">
  <?php
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