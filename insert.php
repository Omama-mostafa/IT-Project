<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Insert.css" />
    <script src="main.js"></script>
</head>
<body>

    <form class = "edit" action = "insert_done.php" method = "POST">
        <p> Fill this form to insert new film animation </p>
        <label class = "txt"> Name </label>
        <input type= "text" name  = "name" id = "name" placeholder = "Film Name">
        <br>
        <label class = "txt"> Type </label>
        <br>
        <input type = "checkbox" name = "type[]" value = "Adventure" id = "type" class = "first">
        <label > Adventure </label>
        <input type = "checkbox" name = "type[]"  value = "Comedy" id = "type" class = "sec">
        <label> Comdy </label>
        <input type = "checkbox" name = "type[]" value = "War" id = "type" class = "thr">
        <label > War </label>
        <br>
        <input type = "checkbox" name = "type[]" value = "Romance" id = "type" class = "first">
        <label > Romance </label>
        <input type = "checkbox" name = "type[]" value = "Family" id = "type" class = "sec">
        <label > Family </label> 
        <input type = "checkbox" name = "type[]" value = "Action" id = "type" class = "thr">
        <label > Action </label>
        <br>
        <input type = "checkbox" name = "type[]" value = "Animation" id = "type" class = "first">
        <label > Animation </label> 
        <input type = "checkbox" name = "type[]" value = "Drama" id = "type" class = "sec">
        <label > Drama </label>
        <input type = "checkbox" name = "type[]" value = "Horror" id = "type" class = "thr">
        <label > Horror </label>
        <br> <br>
        <label class = "txt"> Publication Data </label>
        <input type = "text" name = "year" id = "year" placeholder = "Year">
        <br>
        <label class = "txt" > Publication Country </label>
        <br>
        <input type = "checkbox" name = "P_C[]" value = "Russia" id = "P_C">
        <label> Russia </label>
        <input type = "checkbox" name = "P_C[]" value = "Egypt" id = "P_C">
        <label> Egypt </label> 
        <input type = "checkbox" name = "P_C[]" value = "Span" id = "P_C">
        <label> Span </label> 
        
        <br>
        <input type = "checkbox" name = "P_C[]" value = "Germany" id = "P_C">
        <label> Germany </label>
        <input type = "checkbox" name = "P_C[]" value = "US" id = "P_C" >
        <label> US </label>
        <input type = "checkbox" name = "P_C[]" value = "Saudia Arabia" id = "P_C">
        <label> Saudia Arabia  </label>
        <br>
        <input type = "checkbox" name = "P_C[]" value = "Argentina" id = "P_C">
        <label> Argentina </label>
        <input type = "checkbox" name = "P_C[]" value = "Japan" id = "P_C">
        <label> Japan </label>
        <input type = "checkbox" name = "P_C[]" value = "China" id = "P_C">
        <label> China </label>
        <br><br>
        <label class = "txt"> Image Path </label>
        <input type = "text" name = "img" id = "img" placeholder= "Image Path">
        <br><br>
        <input type = "submit" value = "Insert">
    </form>
</body>
</html>