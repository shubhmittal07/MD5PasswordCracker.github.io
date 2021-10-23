<p>
<?php
$ERROR_NUMERIC = false;
$ERROR_4CHAR = false;
$md5 = false;
if( isset($_GET['hash'])){
    $hash =  $_GET['hash'];
    if( strlen($hash) != 4){
        $ERROR_4CHAR = "Input must be exactly four characters";
    }
    else if( !is_numeric($hash)){
        $ERROR_NUMERIC = "Input must be numeric";
    }
    else{
        $hashTOmd5 = md5($hash);
        $md5 = "MD5 value: ".$hashTOmd5;}
}
?>
</p>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubh Mittal PIN Code</title>
</head>
<body style="font-family: sans-serif">
    <h1>MD5 PIN Maker</h1>
    <p>
        <?php
        if( $ERROR_4CHAR !== false){
            print '<p style="color:red">';
            print htmlentities($ERROR_4CHAR);
            print "</p>\n";
        }
        if( $ERROR_NUMERIC !== false){
            print '<p style="color:red">';
            print htmlentities($ERROR_NUMERIC);
            print "</p>\n";
        }
        if( $md5 !== false){
            print htmlentities($md5);
        }
        ?>
    </p>

    <form action="" method="GET">
		<input type="text" name="hash">
		<input type="submit" name="PINbtn" value="Compute MD5 for PIN">
	</form>

    <ul>
			<li>
				<a href="makepin.php" style="color: rgb(77,77,255) !important;">Reset this page</a>
			</li>

			<li>
				<a href="index.php" style="color: rgb(77,77,255) !important;">Back to Cracking</a>
			</li>
		</ul>
</body>
</html>