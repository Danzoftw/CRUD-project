<?php
      session_start();
      $sess = session_destroy();
      if ($sess) {
      	echo 1;
      }
      else{
      	echo 0;
      }
?>

