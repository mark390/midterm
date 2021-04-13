<?php
$result = isset($_SESSION['is_valid_admin']);
if (!$result) {
    header('Location: ../view/login.php?action=login');
}