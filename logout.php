<?php
   session_start();
   unset($_SESSION["loginname"]);
   unset($_SESSION["loginpass"]);

   echo '<img src="css/plugins/ajax-loader.gif" style="display: block; margin: auto;">';
   session_destroy();
   header('Refresh: 0.5; URL = login-register.php');
?>