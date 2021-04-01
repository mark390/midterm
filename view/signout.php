<?php include('view/header.php'); ?>
<?php 
$_SESSION = array();
session_destroy();
?>
<h1>You have been signed out!</h1><br>
<a href="./index.php?action=list_vehicles">Return to Homepage</a>


<?php include('view/footer.php'); ?>