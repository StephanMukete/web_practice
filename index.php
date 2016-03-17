<?php include('includes/title.inc.php');  ?>
<?php include('includes/random_image.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Stephan's Website<?php echo "&#8212;{$title}"; ?></title>
<link href="assets/journey.css" rel="stylesheet" type="text/css" media="screen" />
<?php
if (isset($imageSize)) {
?>
<style type="text/css">
p#caption {
width: <?php echo $imageSize[0]; ?>px;
}
</style>
<?php } ?>
</head>

<body>
<div id="header">
    <h1>Stephan's Life </h1>
</div>
<div id="wrapper">
    <?php include('includes/menu.inc.php'); ?>
    <div id="maincontent">
        <h1>STEPHAN'S WEBSITE IN PHP </h1>
		<p>Stephan is a simple handsome young guy from the south west region of Cameroon, precisely from the magnificient city of Kumba. It's been quite alot trying to put up this. I can hardly say i came out with this beautiful piece of work by my own strength cause it's all the wonders of the lord. Well i could go on writing and writing cos thats what i'm really good at but of course it's just a home page and sorry but i really have to go. </p>
		<?php if (isset($imageSize)) { ?>
		<div id="pictureWrapper"><img src="<?php echo $selectedImage; ?>" alt="Random image" class="picBorder" <?php echo $imageSize[3]; ?>/>
       <p id="caption"><?php echo $caption; ?></p>
		</div>
		<?php } ?>
        <p>Kinda forgot some little stuffs in the first paragraph. It's strange but still i forgot! Just thought of saying a big thank you to my mum. cos if not for her, all of these wouldn't have been possible.</p>
        <p>Wow! i began mentioning important personalities already but i can't afford to continue lest i run out of time and energy. Lol but there's nothing i can really do about that .</p>
        <p>I guess everyone is fine with this home page. Wait a minute!! was that a question? sorry if it sounded like one but it was meant to be imposed on you guys cos i Know you blacks. You look for the slightest opportunities to give silly answers to questions. hahahahhah soryy..ohhh to disappoint you. Wel i really must bit goodbye now. Love you all very much. C you in my navigated pages</p>
    </div>
   <?php include('includes/footer.inc.php'); ?>
    </div>
</div>
</body>
</html>
