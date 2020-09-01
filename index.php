<?php $stg = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."; $newword ="***"; ?>
<p>
  <?php

  echo $stg;
  echo "<br>";
  echo "il paragrafo è lungo " . strlen($stg) .  " caratteri";

  echo "<br>";
  $badword = $_GET["badword"];
  echo "la nuova parola da sostiuire è " . $badword;
  echo "<br>";

  echo "va sostituita con " . $newword;

  echo "<br>";
  $newfrase = str_replace($badword,$newword,$stg);
  echo $newfrase;

   ?>
</p>
