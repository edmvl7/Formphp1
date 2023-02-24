<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!isset($_POST['user_name']) || ($_POST['user_name']) === '')
            $error[] = "The first name is required";
        if(!isset($_POST['user_lname']) || trim($_POST['user_lname']) === '')
            $error[] = "The last name is required";
        if(!isset($_POST['user_email']) || trim($_POST['user_email']) || var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL)) === '')
            $error[] = "The email is required";
        if(!isset($_POST['user_number']) || trim($_POST['user_email']) === '')
            $error[] = "The number is required";
        if(!isset($_POST['user_subject']) || trim($_POST['user_email']) === '')
            $error[] = "The subject is required";
        if(!isset($_POST['user_message']) || trim($_POST['user_email']) === '')
            $error[] = "The message is required";

            if(empty($errors)) {
                header('Location: thanks.php');
            }


    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="thanks.php" method="post" class="form">
        <h1>Information</h1>
        <div class="element">
            <div>
                <label for="fname">First name : </label>
                <br>
                <input type="text" id="fname" name="user_name" required> 
            </div>
            <div>
                <label for="lname">Last name : </label>
                <br>
                <input type="text" id="lname" name="user_lname" required> 
            </div>
            <div>
                <label for="mail">Email : </label>
                <br>
                <input type="email" id="mail" name="user_email" required> 
            </div>
            <div>
                <label for="number">Phone number : </label>
                <br>
                <input type="number" id="number" name="user_number" required> 
            </div>
            <div>
            <label for="subject">Subject : </label>
            <br>
            <select name="subject" id="user_subject" required>
                <option value="information">Information</option>
                <option value="Review">Review</option>
                <option value="rendezVous">Rendez-vous</option>
            </select>
            </div>


            <div>
                <label for="message">Message: </label>
                <br>
                <textarea type="text" id="messege" name="user_message" required> </textarea>
            </div>
            <div>
                <button type="submit">VALIDATION</button>
            </div>
        </div>
    </form>
</body>
</html>



