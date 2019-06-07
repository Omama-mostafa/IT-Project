<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Admin.css" />
    <script src="main.js"></script>
</head>
<body>

    <header class  = "header1">
    <p> AniMation</p>
    </header>

    <form class = "edit">
    <p> Select Option </p>
    <button type = "submit" formaction = "ainsert.php"> Add Admin </button>
    <br><br>
    <button type = "submit" formaction = "insert.php"> Insert Anemy </button>
    <br><br>
    <button type = "submit" formaction = "delete.php"> Delete Anemy </button>
    <br><br>
    <button type = "submit" formaction = "update.php"> Update Anemy </button>
    <br><br>
    <button type = "submit" formaction = "view.php"> View Anemy </button>
    </form>

</body>
</html>