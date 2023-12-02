<!--Log out setting -->
<?php
 require './content/header.php';
 
   session_start();

   session_unset();
 
   session_destroy();

   header('location:index.php');

   require './content/footer.php';

?>
