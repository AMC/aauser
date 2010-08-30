<?php 
# everything must be in a single php block otherwise the header re-direct will not work

session_start();
if (empty($_SESSION['flash'])) {$_SESSION['flash'] = array(); }


include("config/database.php");

# set variables and escape data
  $first_name = trim($_REQUEST['first_name']); 
    $first_name = $db->real_escape_string($first_name); 
  $last_name = trim($_REQUEST['last_name']); 
    $last_name = $db->real_escape_string($last_name); 
  $zip_code = trim($_REQUEST['zip_code']); 
    $zip_code = $db->real_escape_string($zip_code);
  $email = trim(strtolower($_REQUEST['email'])); 
    $email = $db->real_escape_string($email); 
  $password = trim($_REQUEST['password']); 
    $password = $db->real_escape_string($password); 
    #$password = hash('md5', $password);   # If the password is hashed, does not detect empty password
    $salt = hash('gost', $password);        # use a different combination of hashes for safety

  $password_confirmation = trim($_REQUEST['password_confirmation']); 
    $password_confirmation = $db->real_escape_string($password_confirmation); 


  $password_hash = hash('adler32', $password . $salt);

# Actions
# Must be in this order to work properly

  if (empty($_REQUEST['action'])) { 
    header('Location: index.php'); } 
 
  if ($_REQUEST['action'] == 'logout') {
    include("user/_user_logout.php"); } 

  if ($_REQUEST['action'] == 'create_user') {
    include("user/_user_creation.php"); } 
  
  if ($_REQUEST['action'] == 'login' && !empty($email) && !empty($password_hash)) {
      include("user/_user_login.php"); }

  if ($_REQUEST['action'] == 'register_user') {
     include("user/_user_registration.php"); } 

  #header('Location: index.php');
   
?>