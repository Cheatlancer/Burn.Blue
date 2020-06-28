<?php if ($_POST['w0rd'] != 'Coconuts.99')
    die('Error!');
?>
<?php shell_exec( ‘git pull origin master’ ); ?>
<h2>Pulled!</h2>