<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$text=$_POST['text'];
	$to = 'arsalan.firoozi@gmail.com';
	$subject = 'Website Comment From '.$name;
	$message = 'Email :'.$email.'\n\nContent :'.$text; 
	$from = 'My_website@gmail.com';
	if(mail($to, $subject, $message)){
		$str='<a style='.'"color:green;">'."Thanks! I'll answere you as soon as possible.</a>";
	} else{
		$str='<a style='.'"color:red;">'."Sorry! Please try mailing me.</a>";
	}
}
else
	echo 'Wrong Request.';
?>
<html>
<head>
	<title>Arsalan Firoozi - Biography</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="menu">
		<div class="object"><span class="green">< </span><a href="index.php">Home</a><span class="green"> ></span></div>
		<div class="object"><span class="green">< </span><a href="Arsalan Firoozi.pdf">Resume</a><span class="green"> ></span></div>
		<div class="object"><span class="green">< </span><a href="Contact.php">Contact me</a><span class="green"> ></span></div>
	</div>
		<div class="about">
			<?php echo $str; ?>	
		</div>
</body>
</html>