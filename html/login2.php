<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link href='https://fonts.googleapis.com/css?family=Jockey One' rel='stylesheet'>
    <link rel="stylesheet" href="login.locic.php">
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="img/Schermafbeelding 2024-02-26 144208.png" alt="">   
            <div class="back">
                <a href="index.html" class="back">Terug</a>
            </div>
        </div>

      

        <div class="inloggen">
            <a href="login.php" class="inloggen">Registreren</a>
        </div>

        
        
    </div>

    

    

    <div class="banner">
       
        <div class="topbar">
            <div class="around">
   
            </div>
            <div class="navbar">

            </div>
        </div>
        <div class="middlebox">
         
            <div class="wrapper">
                <h2></h2>
                <div id="error_message">
         
                </div>
                <form action="login.locic.php" id="myform" onsubmit="return validate();" method="post">
    <div class="input_field1">
        <input type="text" placeholder="Gebruikersnaam" required name="username">
    </div>
    <div class="input_field">
        <input type="password" required placeholder="Wachtwoord" name="password">
    </div>
    <div class="topbackgroundbbtn"></div>
    <div class="backgourndbbtn">
        <button type="submit" class="bbtn">Inloggen</button>
    </div>
    <div class="bottombackgroundbbtn"></div>
</form>
            </div>
           
          </div>
        </div>
        </div>
   
    
</body>
</html>