<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<style>
    body{
    background-image:url('img/pp.jpg');
    background-size:cover;
    background-position:center;
    }
    h1{
        margin-top: 8%;
        text-align: center;
        font-size: 40px;
        color:  #f0b775;

    }
    form{
        text-align: center;
        background-color: #ffebbb;
        margin: auto;
        margin-top: 3%;
        width:400px;
        padding: 20px;
        border: 5px solid white;
        box-shadow: 5px 10px grey;
        border-radius: 5%;
        

    }
    label{
        font-size: 15px;
        font-weight: bold;
        color: #f0b775;
    }
    input {
        padding: 5px 10px;
        border: 1px solid #f0b775;
        border-radius: 8%;
    }
    #button{
        color:#f0b775;
        background-color:white;
        border: 1px solid #f0b775;
        border-radius: 8%;
    }
    




</style>
<body>
        <h1>Registration Form</h1>


        <form action="process.php" method="POST">
            <label> Email </label> </br>
            <input type="email" name="email" required> </p>

            <label> Password </label> </br>
            <input type="password" name="pass" required> </p>

            <label> Name </label> </br>
            <input type="name" name="nm" required> </p>

            <input id="button" type="submit" name="reg" value="REGISTER"><br>
            
            <a href="index.php">Click to Login </a>
             <a href="reg.php"> Click to Register </a>

        </form>
</body>
</html>