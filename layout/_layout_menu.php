<div id="menu">

  <?php if ($_SESSION['role'] == 'admin') { ?> 
    <a href="admin.php">Admin Area</a>
  <?php } ?> 

  <?php if ($_SESSION['logged_in'] == 'TRUE') { ?> 
    <a href="user.php?action=logout">Logout</a>
  <?php } else { ?>
    <a id="login" title="Login" href="#login_form">Login</a>
    <a href="user.php?action=register_user">Register</a>
  <?php } ?>

</div>


<div style="display:none">
	<form id="login_form" method="post" action="user.php?action=login">
		<p>
			<label for="email">email: </label> <br />
			<input type="text" id="email" name="email" size="30" />
		</p>
		<p>
			<label for="password">password: </label> <br />
			<input type="password" id="password" name="password" size="30" />
		</p>
		<p>
			<input type="submit" value="login" />
		</p>
		
		<p>
		  Forgot password?
		</p>
	</form>
</div>


