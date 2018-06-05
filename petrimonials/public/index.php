<?php
	require_once '../app/init.php';
	$app = new App;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Petrimoniale</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles.css">
    
    <style>
        .bg {
          background-image: url("https://cdn.glitch.com/fb12d49e-1df5-4752-a09a-efc4da5a070c%2Ffp.png?1520680295166");
          height: 100%; 
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          webkit-animation: fadein 1.5s; /* Safari, Chrome and Opera > 12.1 */
            -moz-animation: fadein 1.5s; /* Firefox < 16 */
             -ms-animation: fadein 1.5s; /* Internet Explorer */
              -o-animation: fadein 1.5s; /* Opera < 12.1 */
                 animation: fadein 1.5s;
        }

        @keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        @-moz-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        @-webkit-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
    </style>
  </head>
  <body >
    <a href="home.html">
      <div class="bg"></div>
    </a>
  </body>
</html>

