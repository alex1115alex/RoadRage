<?php
   $score = $_POST["scoreInput"];
   $name = $_POST["nameInput"];
   $oldScore = file_get_contents('score.txt', true);
   $oldName = file_get_contents('name.txt', true);
   $newScore = $oldScore;
   $newName = $oldName;
   if ($score > $oldScore) {
   $newScore = $score;
   $newName = $name;
	 $file = fopen("score.txt","w");
  	 echo fwrite($file, $score);
 	  fclose($file);

	$fileName = fopen("name.txt","w");
   	echo fwrite($fileName, $name);
   	fclose($fileName);
   }
   ?>
<html>
   <head>
      <style>
         @import url(https://fonts.googleapis.com/css?family=Sigmar+One);
         * {
         font-family: 'Sigmar One', cursive;
         }
	 body{
	 background-color: #404040;
	 }
         #main{
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         text-align: center;
         height: 300px;
         width: 450px;
         background-color: #FFF056;
         }
         #main h3{
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         text-align: center;
         }
      </style>
   </head>
   <body>
      <div id="main">
         <h3>
            Global High Score
            <p> <?php echo $newScore ?> </p>
	    <p> By: <?php echo $newName ?> </p>
         </h3>
      </div>
   </body>
</html>