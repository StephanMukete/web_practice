
<?php
// define a constant for the maximum upload size
define ('MAX_FILE_SIZE', 1120000);

if (array_key_exists('upload', $_POST)) {
  // define constant for upload folder
  define('UPLOAD_DIR', '/opt/lampp/htdocs/phpsolutions/upload_test/');
  // convert the maximum size to KB
  $max = number_format(MAX_FILE_SIZE/1024, 1).'KB';
  // create an array of permitted MIME types
  $permitted = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
  
  foreach ($_FILES['image']['name'] as $number => $file) {
    // replace any spaces in the filename with underscores
	$file = str_replace(' ', '_', $file);
    // begin by assuming the file is unacceptable
    $sizeOK = false;
    $typeOK = false;
  
    // check that file is within the permitted size
    if ($_FILES['image']['size'][$number] > 0 || $_FILES['image']['size'][$number] <= MAX_FILE_SIZE) {
    $sizeOK = true;
	}

    // check that file is of an permitted MIME type
    foreach ($permitted as $type) {
      if ($type == $_FILES['image']['type'][$number]) {
        $typeOK = true;
	    break;
	    }
	  }
  
    if ($sizeOK && $typeOK) {
      switch($_FILES['image']['error'][$number]) {
	    case 0:
          // check if a file of the same name has been uploaded
		  if (!file_exists(UPLOAD_DIR.$file)) {
		    // move the file to the upload folder and rename it
		    $success = move_uploaded_file($_FILES['image']['tmp_name'][$number], UPLOAD_DIR.$file);
		    }
		  else {
		    // get the date and time
		    ini_set('date.timezone', 'Europe/London');
		    $now = date('Y-m-d-His');
		    $success = move_uploaded_file($_FILES['image']['tmp_name'][$number], UPLOAD_DIR.$now.$file);
		    }
		  if ($success) {
            $result[] = "$file uploaded successfully";
	        }
		  else {
		    $result[] = "Error uploading $file. Please try again.";
		    }
	      break;
	    case 3:
		  $result[] = "Error uploading $file. Please try again.";
		default:
          $result[] = "System error uploading $file. Contact webmaster.";
	    }
      }
    elseif ($_FILES['image']['error'][$number] == 4) {
	  $result[] = 'No file selected';
	  }
	else {
      $result[] = "$file cannot be uploaded. Maximum size: $max. Acceptable file types: gif, jpg, png.";
	  }
	}
  }
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Multiple file upload</title>
<link href="assets/journey.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div id="wrapper">
    <?php include('includes/menu.inc.php'); ?>
    <div id="maincontent">

<p>
	this is for u to upload anything you wish
	
</p>
</div>
  


<?php
// if the form has been submitted, display result
if (isset($result)) {
  echo '<ol>';
  foreach ($result as $item) {
    echo "<strong><li>$item</li></strong>";
	}
  echo '</ol>';
  }
?>
<div id="maincontent">
<form action="" method="post" enctype="multipart/form-data" name="multiUpload" id="multiUpload">
    <p>
        <label for="image1">File 1:</label>
		<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>" />
        <input type="file" name="image[]" id="image1" />
    </p>
    <p>
        <label for="image2">File 2:</label>
        <input type="file" name="image[]" id="image2" />
    </p>
    <p>
        <input name="upload" type="submit" id="upload" value="Upload files" />
    </p>
</div>
    <?php include('includes/footer.inc.php'); ?>
</div>
</form>
</body>
</html>

