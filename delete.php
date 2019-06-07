<?php
$user = 'root';
$pass = '12345678';
$db = 'animation';

$db=new mysqli ('localhost', $user, $pass, $db) or die("unable to connect");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
$param_id = trim($_POST['id']);
$sql = "DELETE FROM film WHERE id=$param_id";

if ($db->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("location: admin.php");
} else {
    echo "Error deleting record: " . $db->error;
}

$db->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delete Film</title>
    <link rel="stylesheet" href="delete.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
</head>
<body>
    <form class = "edit" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return vaildiationform()">
            <div class="form-group <?php echo (!empty($adminname_err)) ? 'has-error' : ''; ?>">
       
        <p> Fill this form to delete an existing film animation </p>
        <label> ID </label>
        <input type="text" name="id" id = "id" placeholder = "Enter Target Film ID" class="form-control" value="<?php echo $username; ?> " id ="id" ><br>
        <br><br>
        <span class="help-block"><?php echo $username_err; ?></span>
        <br><br>
        <input type = "submit" value = "Delete">
    </form>
</body>
</html>