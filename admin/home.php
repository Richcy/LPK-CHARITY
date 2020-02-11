
 <?php if ($_SESSION["level"]="admin"): ?>
   <h2>Selamat Datang Admin!</h2>
 <?php elseif ($_SESSION["level"]="staff"): ?>
   <h2>Selamat Datang Staff!</h2>
  <?php endif ?> 
<pre><?php print_r($_SESSION); ?></pre>

<?php print_r(session_save_path()); ?>

<h1>Selamat Datang <?php echo $_SESSION["level"];?></h1>

<?php 

