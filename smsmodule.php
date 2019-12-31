
<html lang="en">
<?php
	// Authorisation details.
    if(isset($_POST["abc"])){
    $username = $_POST['username'];
    $hash = "83101e576a39fdd1264c582fa76ba1c0ca8b2350afa87d0d71a6b7e527b6c14f";
    
	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = $_POST['sender']; // This is who the message appears to be from.
	$numbers = $_POST['num']; // A single number or a comma-seperated list of numbers
	$message = $_POST['mess'];
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="smsmodule.php">
    <table align="center">
        <tr>
        <td>
        Username:
        </td>
        <td>
        <input type="text" name="username" placeholder="enter username"></td>
        </tr>

        <!-- <tr>
        <td>
        Hash:
        </td>
        <td>
        <input type="text" name="hash" placeholder="your hash key"></td>
        </tr> -->

        <tr>
        <td>
        Sender:
        </td>
        <td>
        <input type="text" name="sender" placeholder="enter sender detail"></td>
        </tr>
        
        <tr>
        <td>
        phone number:
        </td>
        <td>
        <input type="number" name="num" placeholder="enter number"></td>
        </tr>
        
        <tr>
        <td>
        Message: 
        </td>
        <td>
        <textarea type="text" name="mess" placeholder="enter Message"></textarea></td>
        </tr>
        
        <tr>
        <td>
        <input type="submit" name="abc" value="send"></td>
        </tr>
               
        
            

    </table>
    </form>
</body>
</html>