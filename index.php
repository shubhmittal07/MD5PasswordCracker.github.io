<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shubh Mittal MD5</title>
</head>
<body style="font-family: sans-serif">
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
<pre>
Debug Output:
<?php
$status = "Not found";
$checks = 1;

if(isset($_GET['md5Txt'])){
$time_pre = microtime(true);
$md5 = $_GET['md5Txt'];

$txt = "0123456789";
$debug = 15;

for($i=0 ; $i<strlen($txt) ; $i++){
$ch1 = $txt[$i];
for($j=0 ; $j<strlen($txt) ; $j++){
$ch2 = $txt[$j];
for($k=0 ; $k<strlen($txt) ; $k++){
$ch3 = $txt[$k];
for($l=0 ; $l<strlen($txt) ; $l++){
$ch4 = $txt[$l];
$tryTxt = $ch1.$ch2.$ch3.$ch4;
$check = hash('md5', $tryTxt);
if ( $check == $md5 ) {
$status = $tryTxt;
break;}

if ( $debug > 0 ) {
print "$check $tryTxt\n";
$debug = $debug - 1;}
$checks = $checks + 1;
}
}
}
}
print "Total checks: ";
print $checks;
$time_post = microtime(true);
print "\nElapsed time: ";
print $time_post-$time_pre;
print "\n";
}
?>
</pre>
	<p>PIN: <?= htmlentities($status) ?></p>
	<form action="index.php" method="GET">
		<input type="text" name="md5Txt" size="50">
		<input type="submit" name="md5Btn" value="Crack MD5">
	</form>
		<ul>
			<li>
				<a href="index.php" style="color: rgb(77,77,255) !important;">Reset this page</a>
			</li>

			<li>
				<a href="makepin.php" style="color: rgb(77,77,255) !important;">Make an MD5 pin</a>
			</li>

			<li>
				<a href="md5.php" style="color: rgb(77,77,255) !important;">MD5 Encoder</a>
			</li>
			<li><a href="https://www.wa4e.com/assn/crack/" target="_blank">Specification
			for this assignment</li>
			<li><a 
			href="https://github.com/csev/php-intro/tree/master/code/crack" 
			target="_blank">Source code similar to this application</a></li>
		</ul>
</body>
</html>