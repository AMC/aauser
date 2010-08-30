<?php session_start(); ?>
<?php if (empty($_SESSION['flash'])) {$_SESSION['flash'] = array(); } ?>

<?php $_SESSION['PHP_SELF'] = $_SERVER['PHP_SELF']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>aauser</title>
	<meta name="author" content="Andrew Canfield">
	<!-- Date: 2010-08-20 -->
  
  <?php foreach ($stylesheets as $stylesheet) { ?>
    <?php echo "<link href='stylesheets/$stylesheet' rel='stylesheet' type='text/css' />"; }   ?>
    
  <?php foreach ($javascripts as $javascript) { ?>
    <?php echo "<script href='javascript/$javascript' type='text/javascript' /></script>"; }   ?>
    

  	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
  	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
  	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.1.js"></script>
  	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.1.css" media="screen" />
   	<link rel="stylesheet" href="style.css" />
  	<script type="text/javascript">
  		$(document).ready(function() {

  			$("a[rel=image_gallery]").fancybox({
  				'transitionIn'		: 'elastic',
  				'transitionOut'		: 'elastic',
  				'titlePosition' 	: 'inside',
  				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
  					return '<span id="fancybox-title-over"> Image Title </span>';
  				}
  			});
  			
  			$("#login").fancybox({
        	'scrolling'		: 'no',
        	'titleShow'		: false,
        	'onClosed'		: function() {
        	    $("#login_error").hide();
        	}
        });
        
 

  		});
  		

      

  	</script>

</head>
<body>

