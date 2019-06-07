<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <header class = "header1">
        <p> Welcome To Animation Website </p>
        <button type = "submit" formaction = "about.php"> Logout </button> 
    </header>
    <div class = "main1">
       
<?php
$sql = "SELECT * FROM film;";

$result = mysqli_query($db , $sql);

$resultcheck=mysqli_num_rows($result);

if($resultcheck > 0)
{
    echo "<table>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr><td>id : ".$row["id"].
	    "</td><td>".$row["name"].
	    "</td><td>".$row["type"].
	    "</td><td>".$row["year"].
	    "</td><td>".$row["country"].
	    "</td></tr>";
    }
    echo "</table>";
}
else
{
	echo "Not Found";
} 
$db->close();
?>
    </div>
    <footer class = "footer1">
        <p> Copyright Project IT Team, All Rights Reserved Powered by Create Animation Website</p>
    </footer>
</body>
</html>