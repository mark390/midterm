<?php include('view/header.php'); ?>
<?php 
$_SESSION = array();
session_destroy();
?>
<h1>You have been signed out!</h1><br>
<<<<<<< Updated upstream
<a href="./index.php?action=list_vehicles">Return to Homepage</a>
=======
<a href="../index.php">Return to Homepage</a>
>>>>>>> Stashed changes


<?php include('view/footer.php'); ?>