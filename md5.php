<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shubh Mittal MD5</title>
</head>
<body style="font-family: sans-serif">
    <h1>MD5 Maker</h1>
    <p>
    <?php
    if(isset($_GET['hash'])){
        $hashTomd5 =  md5($_GET['hash']);
        echo("MD5: ".$hashTomd5);
    }
    else{
        echo("MD5: Not computed");
    }
    ?>
    </p>
    <form action="" method="GET">
		<input type="text" name="hash">
		<input type="submit" name="PINbtn" value="Compute MD5 for PIN">
	</form>

    <ul>
			<li>
				<a href="md5.php" style="color: rgb(77,77,255) !important;">Reset</a>
			</li>

			<li>
				<a href="index.php" style="color: rgb(77,77,255) !important;">Back to Cracking</a>
			</li>
		</ul>
</body>
</html>