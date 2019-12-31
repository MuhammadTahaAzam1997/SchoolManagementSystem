<?php
require_once "config.php";

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Insert the record</h1>

    <form action="" method="POST">
    
    Month Name:    <!---Table Name---> 
    <input type="text" name ="name" placeholder="Write the month name of Test" required>
    <br>
    Year:   
    <input type="Number" name="year" placeholder="Which year" required>
    <br>
    Class:
    <input type="text" name="class" placeholder="Which class?" required>
    <br>
    Date: 
    <input type="date" name="date" placeholder="Select date" required>
    


    </form>

</body>
</html>