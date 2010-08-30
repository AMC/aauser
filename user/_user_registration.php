<?php $stylesheets = array('layout.css', 'categories.css'); ?>
<?php $javascripts = array(); ?>

<?php include("layout/_layout_top.php"); ?>
<?php include("layout/_layout_flash.php"); ?>
<?php include("layout/_layout_menu.php"); ?>

<div id="container">

  <form id="registration_form" method="post" action="user.php">
  	<p>
  		<label for="email">email (this will be your username): </label> <br />
  		<input type="text" id="email" name="email" size="30" value="<?php echo $email?>" />
  	</p>
    <p>
  		<label for="password">password: </label> <br />
  		<input type="password" id="password" name="password" size="30" />
  	</p>
  	<p>
  		<label for="password_confirmation">password confirmation: </label> <br />
  		<input type="password" id="password_confirmation" name="password_confirmation" size="30" />
  	</p>
  	<p>
    <p>
  		<label for="first_name">first name: </label> <br />
  		<input type="text" id="first_name" name="first_name" size="30" value="<?php echo $first_name?>" />
  	</p>
  	<p>
  		<label for="last_name">last name: </label> <br />
  		<input type="text" id="last_name" name="last_name" size="30" value="<?php echo $last_name?>" />
  	</p>
  	<p>
  		<label for="zip_code">zip code: </label> <br />
  		<input type="text" id="zip_code" name="zip_code" size="30" maxlength="5" value="<?php echo $zip_code?>" />
  	</p>
  	<p>
  	  <input type="hidden" id="action" name="action" value="create_user">  	  
  		<input type="submit" value="register" /> <br />

  	</p>
  </form>


  <div style="clear: both">
  </div>


  </div>

  <?php include("layout/_layout_bottom.php"); ?>