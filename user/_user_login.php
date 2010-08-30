<?php 

# everything must be in a single php block otherwise the header re-direct will not work

$user = $db->query("SELECT id, email, first_name, last_name, zip_code, role FROM users WHERE email = '$email' AND password_hash = '$password_hash'"); 
if ($user->num_rows == 1) {
  $user = $user->fetch_array(MYSQLI_ASSOC);
  $_SESSION['userid'] = $user['id'];
  $_SESSION['email'] = $user['email'];
  $_SESSION['first_name'] = $user['first_name'];
  $_SESSION['last_name'] = $user['last_name'];
  $_SESSION['zip_code'] = $user['zip_code'];
  $_SESSION['role'] = $user['role'];
  $_SESSION['logged_in'] = "TRUE";
  $_SESSION['flash'][] = "You have logged in";
} else {
  $_SESSION['flash'][] = "Invalid username or password";
}
  
  # sends the user back to where they logged in at
  $PHP_SELF = $_SESSION['PHP_SELF']; 
  header('Location: ' . $PHP_SELF ); 

?>
