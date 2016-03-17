<?php $currentPage = basename($_SERVER['SCRIPT_NAME']); ?>
<ul id="nav">
  <li><a href="index.php" <?php if ($currentPage == 'index.php') {echo 'id="here"';} ?>>Home</a></li>
  <li><a href="journal.php" <?php if ($currentPage == 'journal.php') {echo 'id="here"';} ?>>Journal</a></li>
  <li><a href="gallery_mysql08.php" <?php if ($currentPage == 'gallery_mysql08.php') {echo 'id="here"';} ?>>Gallery</a></li>
  <li><a href="contact.php" <?php if ($currentPage == 'contact.php') {echo 'id="here"';} ?>>Contact</a></li>
  <li><a href="upload_multi02.php" <?php if ($currentPage == 'upload_multi02.php') {echo 'id="here"';} ?>>UPLOAD</a></li>
</ul>
