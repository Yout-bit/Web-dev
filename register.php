<?php
include "src/utils.php";
setCookiesNoReload(array(
    array("username", $_GET["username"]),
    array("skin", $_GET["skin"]),
    array("mouth", $_GET["mouth"]),
    array("eyes", $_GET["eyes"]),
))
?>

<!DOCTYPE html>
<html>
   <head>
      <title>HTML Meta Tag</title>
      <meta http-equiv = "refresh" content = "3; url = index.php" />
   </head>
   <body>
      <p>Registering...</p>
   </body>
</html>
