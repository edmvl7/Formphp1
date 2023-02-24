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
                <input type="text" id="fname" name="user_name"> 
            </div>
            <div>
                <label for="lname">Last name : </label>
                <br>
                <input type="text" id="lname" name="user_lname"> 
            </div>
            <div>
                <label for="mail">Email : </label>
                <br>
                <input type="email" id="mail" name="user_email"> 
            </div>
            <div>
                <label for="number">Phone number : </label>
                <br>
                <input type="number" id="number" name="user_number"> 
            </div>
            <div>
            <label for="subject">Subject : </label>
            <br>
            <select name="subject" id="user_subject">
                <option value="information">Information</option>
                <option value="Review">Review</option>
                <option value="rendezVous">Rendez-vous</option>
            </select>
            </div>


            <div>
                <label for="message">Message: </label>
                <br>
                <textarea type="text" id="messege" name="user_message"> </textarea>
            </div>
            <div>
                <button type="submit">VALIDATION</button>
            </div>
        </div>
    </form>
</body>
</html>



