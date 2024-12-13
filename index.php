<?php
require_once 'core/dbConfig.php';


// Redirect if the user is not logged in
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit();
}

// Get the user role from the session
$user_role = $_SESSION['role'];

?>

<?php include_once 'login.php'; ?>