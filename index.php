<?php
	session_start();
	session_destroy();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sl" lang="sl">
<head>		
	<title>GAMBLING ROOM</title>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="copyright" content="" />
	<meta name="author" content="" />
	<meta name="rating" content="general" />
	<meta name="expires" content="Never" />
	<meta name="revisit-after" content="30 Days" />

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	
	<link rel="stylesheet" href="css/mojstil.css" type="text/css" media="all" />		

</head>
<body>
<div id="naslov">
GAMBLING ROOM
</div>
	<div id="glavni">
		<form action="index1.php" name="forma" method="post">
		
		<div id="input1">
		<font id="pisava">Player1</font>			
			<input type="text" name="ime1" class="ime1" required/>
				<div class="gif">
					<?php
						echo "<img src=\"slike/dice1.gif\"/>";
				
					?>	
				</div>				
		</div>

		
		<div id="input2">
		<font id="pisava">Player2</font>				
			<input type="text" name="ime2" class="ime2" required/>
				<div class="gif">
					<?php
						echo "<img src=\"slike/dice1.gif\"/>";
					
					?>	
				</div>	
		</div>
		
		<div id="input3">
		<font id="pisava">Player3</font>			
			<input type="text" name="ime3" class="ime3" required/>
				<div class="gif">
					<?php
						echo "<img src=\"slike/dice1.gif\"/>";
				
					?>	
				</div>			
		</div>
		
		<div class="send">
			<font id="pisava1">Number of dice:</font>
			<select name="stkock">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select><br/>
			<font id="pisava1">Number of rounds:</font>
				<select name="stiger">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select><br />
			<input type="submit" class="subbutton" onClick="return isEmpty()" name="play" value="Play" />			
		</div>
		</form>
		
	</div>
	<?php
	?>
</body>
	<script>
		function isEmpty(){
			if(document.forms['forma'].ime.value == "" || document.forms['forma'].ime2.value == "" || document.forms['forma'].ime3.value == ""){
				alert("Izpolni vsa vnosna polja.");
				return false;
			}
			return true;
			
		}
	</script>
	
	
	

</html>
