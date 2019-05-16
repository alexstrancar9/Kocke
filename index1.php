<?php
session_start();
$m1=0;
$m2=0;
$m3=0;
if(isset($_POST['ime1']) && isset($_POST['ime2']) && isset($_POST['ime3'])){
	$_SESSION['i1'] = $_POST['ime1'];
	$_SESSION['i2'] = $_POST['ime2'];
	$_SESSION['i3'] = $_POST['ime3'];
	$_SESSION['sk'] = $_POST['stkock'];
	$_SESSION['si'] = $_POST['stiger'];
	$_SESSION['ni'] = 1;
	$_SESSION['throw1'] = 0;
	$_SESSION['throw2'] = 0;
	$_SESSION['throw3'] = 0;
	$m1=0;
	$m2=0;
	$m3=0;
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sl" lang="sl">
<head>		
	<title>Gambling Room</title>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="copyright" content="" />
	<meta name="author" content="" />
	<meta name="rating" content="general" />
	<meta name="expires" content="Never" />
	<meta name="revisit-after" content="30 Days" />

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />		

</head>
<body>
		
<div id="naslov">
GAMBLING ROOM
</div>
	<div id="glavni">
	
	
	<div id="input1">
		<?php 
				echo "<font id=\"pisava\">".$_SESSION['i1']."</font><br>";
				if($_SESSION['sk']==1){
					$d1=rand(1,6);
					echo "<img class=\"kocke1\" src=\"slike/dice{$d1}.jpg\"/>";
					echo "<div id=\"sestevek1\" style=\"opacity: 1;\"><b>Current points: ".($d1+$_SESSION['throw1'])."</b></div>";
					$_SESSION['throw1'] = $d1+$_SESSION['throw1'];
				}
				else if($_SESSION['sk']==2){
					$d1=rand(1,6);
					$d2=rand(1,6);
					echo "<img class=\"kocke2\" src=\"slike/dice{$d1}.jpg\"/>";
					echo "<img class=\"kocke2\" src=\"slike/dice{$d2}.jpg\"/>";
					echo "<div id=\"sestevek1\" style=\"opacity: 1;\"><b>Current points: ".($d1+$d2+$_SESSION['throw1'])."</b></div>";
					$_SESSION['throw1'] = $d1+$d2+$_SESSION['throw1'];
				}
				else{
					$d1=rand(1,6);
					$d2=rand(1,6);
					$d3=rand(1,6);
					echo "<img class=\"kocke3\" src=\"slike/dice{$d1}.jpg\"/>";
					echo "<img class=\"kocke3\" src=\"slike/dice{$d2}.jpg\"/>";
					echo "<img class=\"kocke3\" src=\"slike/dice{$d3}.jpg\"/>";
					echo "<div class=\"kocke3\" id=\"sestevek1\" style=\"opacity: 1;\"><b>Current points: ".($d1+$d2+$d3+$_SESSION['throw1'])."</b></div>";
					$_SESSION['throw1'] = $d1+$d2+$d3+$_SESSION['throw1'];
				}
				?>
	
		</div>
		
		<div id="input2">
		<?php 
				echo "<font id=\"pisava\">".$_SESSION['i2']."</font><br>";
				if($_SESSION['sk']==1){
					$d1=rand(1,6);
					echo "<img class=\"kocke1\" src=\"slike/dice{$d1}.jpg\"/>";
					echo "<div id=\"sestevek2\" style=\"opacity: 1;\"><b>Current points: ".($d1+$_SESSION['throw2'])."</b></div>";
					$_SESSION['throw2'] = $d1+$_SESSION['throw2'];
				}
				else if($_SESSION['sk']==2){
					$d1=rand(1,6);
					$d2=rand(1,6);
					echo "<img class=\"kocke2\" src=\"slike/dice{$d1}.jpg\"/>";
					echo "<img class=\"kocke2\" src=\"slike/dice{$d2}.jpg\"/>";
					echo "<div id=\"sestevek2\" style=\"opacity: 1;\"><b>Current points: ".($d1+$d2+$_SESSION['throw2'])."</b></div>";
					$_SESSION['throw2'] = $d1+$d2+$_SESSION['throw2'];
				}
				else{
					$d1=rand(1,6);
					$d2=rand(1,6);
					$d3=rand(1,6);
					echo "<img class=\"kocke3\" src=\"slike/dice{$d1}.jpg\"/>";
					echo "<img class=\"kocke3\" src=\"slike/dice{$d2}.jpg\"/>";
					echo "<img class=\"kocke3\" src=\"slike/dice{$d3}.jpg\"/>";
					echo "<div id=\"sestevek2\" style=\"opacity: 1;\"><b>Current points: ".($d1+$d2+$d3+$_SESSION['throw2'])."</b></div>";
					$_SESSION['throw2'] = $d1+$d2+$d3+$_SESSION['throw2'];
				}
				?>
		</div>
		
		<div id="input3">
		<?php 
				echo "<font id=\"pisava\">".$_SESSION['i3']."</font><br>";
				if($_SESSION['sk']==1){
					$d1=rand(1,6);
					echo "<img class=\"kocke1\" src=\"slike/dice{$d1}.jpg\"/>";
					echo "<div id=\"sestevek3\" style=\"opacity: 1;\"><b>Current points: ".($d1+$_SESSION['throw3'])."</b></div>";
					$_SESSION['throw3'] = $d1+$_SESSION['throw3'];
				}
				else if($_SESSION['sk']==2){
					$d1=rand(1,6);
					$d2=rand(1,6);
					echo "<img class=\"kocke2\" src=\"slike/dice{$d1}.jpg\"/>";
					echo "<img class=\"kocke2\" src=\"slike/dice{$d2}.jpg\"/>";
					echo "<div id=\"sestevek3\" style=\"opacity: 1;\"><b>Current points: ".($d1+$d2+$_SESSION['throw3'])."</b></div>";
					$_SESSION['throw3'] = $d1+$d2+$_SESSION['throw3'];
				}
				else{
					$d1=rand(1,6);
					$d2=rand(1,6);
					$d3=rand(1,6);
					echo "<img class=\"kocke3\" src=\"slike/dice{$d1}.jpg\"/>";
					echo "<img class=\"kocke3\" src=\"slike/dice{$d2}.jpg\"/>";
					echo "<img class=\"kocke3\" src=\"slike/dice{$d3}.jpg\"/>";
					echo "<div id=\"sestevek3\" style=\"opacity: 1;\"><b>Current points: ".($d1+$d2+$d3+$_SESSION['throw3'])."</b></div>";
					$_SESSION['throw3'] = $d1+$d2+$d3+$_SESSION['throw3'];
				}
				?>
		</div>
	
		<div class="igra">
			<div class="send">
			<?php
				echo "<font id=\"pisava1\">"."Number of throws: ".$_SESSION['ni']."/".$_SESSION['si']."</font><br>";
					if($_SESSION['ni']<$_SESSION['si'])
						echo "<input type=\"button\" class=\"subbutton\" name=\"vrzi\" value=\"Throw\" onclick=\"reloadPage()\">";
					else
						echo "<input type=\"button\" class=\"subbutton\" name=\"rezultat\" value=\"Results\" onclick=\"rezultati()\">";
			?>
			</div>
		</div>
	</div>
	<?php
			if($_SESSION['ni']<$_SESSION['si']){
				$st=$_SESSION['ni'];
				$_SESSION['ni']=$st+1;
				
			}	
		?>
		<script>
			function reloadPage() {
				location.href='index1.php';
			}
			
			function rezultati() {
				location.href='results.php';
			}
			
			setTimeout(function() {
				document.getElementById('sestevek1').style.opacity = "1";}, 1250);
			setTimeout(function() {
				document.getElementById('sestevek2').style.opacity = "1";}, 1250);
			setTimeout(function() {
				document.getElementById('sestevek3').style.opacity = "1";}, 1250);			
			
		</script>

		
	
	
	
	
	
</body>
</html>
