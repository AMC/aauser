<?php if ($_SESSION['flash']) { echo "<div id='flash'>"; } ?>
  <?php foreach ($_SESSION['flash'] as $message) { ?>
    <?php echo "$message <br />"; } ?>

<?php if ($_SESSION['flash']) { echo "</div"; } ?>
<?php $_SESSION['flash'] = array(); ?>