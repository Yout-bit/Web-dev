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
      <style>
      body {
         margin: 0;
         padding: 0;
         box-sizing: border-box;

         background-size: cover;
         min-height: 100vh;
         position: relative;
         color: black;
      }
      .center {
         height: 100vh;
         display: flex;
         justify-content: center;
         align-items: center;
      }
      .wave {
         width: 5px;
         height: 100px;
         background: linear-gradient(45deg, cyan, #fff);
         margin: 10px;
         animation: wave 1s linear infinite;
         border-radius: 20px;

      }
      .wave:nth-child(2) {
         animation-delay: 0.1s;
      }
      .wave:nth-child(3) {
         animation-delay: 0.2s;
      }
      .wave:nth-child(4) {
         animation-delay: 0.3s;
      }
      .wave:nth-child(5) {
         animation-delay: 0.4s;
      }
      .wave:nth-child(6) {
         animation-delay: 0.5s;
      }
      .wave:nth-child(7) {
         animation-delay: 0.6s;
      }
      .wave:nth-child(8) {
         animation-delay: 0.7s;
      }
      .wave:nth-child(9) {
         animation-delay: 0.8s;
      }
      .wave:nth-child(10) {
         animation-delay: 0.9s;
      }

      @keyframes wave {
         0% {
            transform: scale(0);
         }
         50% {
            transform: scale(1);
         }
         100% {
            transform: scale(0);
         }
      }
      </style>
      <title>HTML Meta Tag</title>
      <meta http-equiv = "refresh" content = "3; url = index.php" />
   </head>
   <body style="background-image: url(res/arcade-unsplash.jpg);">
      
      <div class="center">
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
         <div class="wave"></div>
      </div>


   </body>
</html>
