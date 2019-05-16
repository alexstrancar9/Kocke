<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sl" lang="sl">
<head>		
	<title>RESULTS</title>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="copyright" content="" />
	<meta name="author" content="" />
	<meta name="rating" content="general" />
	<meta name="expires" content="Never" />
	<meta name="revisit-after" content="30 Days" />

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	
	<link rel="stylesheet" href="css/resultscss.css" type="text/css" media="all" />		

</head>
<body>
<div id="naslov">
RESULTS
</div>
	<div id="glavni">
		<div class="rezultati">
			<image src="slike/podium.png"/>
			<?php
				if($_SESSION['throw1']>$_SESSION['throw2']&&$_SESSION['throw1']>$_SESSION['throw3']){
					echo "<div class=\"mesto1\"><span class='pisava'>".$_SESSION['i1']."</span>(".$_SESSION['throw1'].")</div>";
					if($_SESSION['throw2']>$_SESSION['throw3']){
						echo "<div class=\"mesto2\"><span class='pisava'>".$_SESSION['i2']."</span>(".$_SESSION['throw2'].")</div>";
						echo "<div class=\"mesto3\"><span class='pisava'>".$_SESSION['i3']."</span>(".$_SESSION['throw3'].")</div>";
					}
					else{
						echo "<div class=\"mesto2\"><span class='pisava'>".$_SESSION['i3']."</span>(".$_SESSION['throw3'].")</div>";
						echo "<div class=\"mesto3\"><span class='pisava'>".$_SESSION['i2']."</span>(".$_SESSION['throw2'].")</div>";
					}
				}
				else if($_SESSION['throw2']>$_SESSION['throw1']&&$_SESSION['throw2']>$_SESSION['throw3']){
					echo "<div class=\"mesto1\"><span class='pisava'>".$_SESSION['i2']."</span>(".$_SESSION['throw2'].")</div>";
					if($_SESSION['throw1']>$_SESSION['throw3']){
						echo "<div class=\"mesto2\"><span class='pisava'>".$_SESSION['i1']."</span>(".$_SESSION['throw1'].")</div>";
						echo "<div class=\"mesto3\"><span class='pisava'>".$_SESSION['i3']."</span>(".$_SESSION['throw3'].")</div>";
					}
					else{
						echo "<div class=\"mesto2\"><span class='pisava'>".$_SESSION['i3']."</span>(".$_SESSION['throw3'].")</div>";
						echo "<div class=\"mesto3\"><span class='pisava'>".$_SESSION['i1']."</span>(".$_SESSION['throw1'].")</div>";
					}
				}
				else if($_SESSION['throw3']>$_SESSION['throw2']&&$_SESSION['throw3']>$_SESSION['throw1']){
					echo "<div class=\"mesto1\"><span class='pisava'>".$_SESSION['i3']."</span>(".$_SESSION['throw3'].")</div>";
					if($_SESSION['throw1']>$_SESSION['throw2']){
						echo "<div class=\"mesto2\"><span class='pisava'>".$_SESSION['i1']."</span>(".$_SESSION['throw1'].")</div>";
						echo "<div class=\"mesto3\"><span class='pisava'>".$_SESSION['i2']."</span>(".$_SESSION['throw2'].")</div>";
					}
					else{
						echo "<div class=\"mesto2\"><span class='pisava'>".$_SESSION['i2']."</span>(".$_SESSION['throw2'].")</div>";
						echo "<div class=\"mesto3\"><span class='pisava'>".$_SESSION['i1']."</span>(".$_SESSION['throw1'].")</div>";
					}
				}
			?>
		</div>
	</div>
		<div class="cas">
		<span id="cas">15</span>
	</div>
	
	
</body>
	<script>
function redirTimer() {self.setTimeout ("self.location.href='index.php';",10000);} 
redirTimer();

var seconds_left = 10;
setInterval(function() {
    document.getElementById('cas').innerHTML = --seconds_left;}, 1000);
</script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script  src="jquery.fireworks.js"></script>
	<script>
		$('body').fireworks({
			sound: false,
			opacity: 0.1,
			width: '100%',
			height: '100%'
		});
	</script>
<?php
	
		session_unset(); 
		
	?>	
</html>
