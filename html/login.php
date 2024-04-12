<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link href='https://fonts.googleapis.com/css?family=Jockey One' rel='stylesheet'>
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
            <a href="login2.php" class="inloggen">Inloggen</a>
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
                <form action="geregistreerd.php"
                      id="myform"
                      onsubmit="return validate();">
                    <div class="input_field1">
                        <input type="text"
                               placeholder="Gebruikersnaam"
                               required
                               id="name">
                    </div>
                    <div class="input_field">
                        <input type="text"
                               placeholder="Wachtwoord"
                               required
                               id="subject">
                    </div>
                    <div class="input_field">
                        <input type="text"
                               placeholder="Telefoon"
                               required
                               id="phone">
                              
                    </div>
    
                    
                    <div class="input_field2">
                        <input type="text"
                               placeholder="Email"
                               required
                               id="email">
                    </div>
    
                    
                   
                    <div class="btn">
                        <button href="suc6volingelogd.php" class="bbtnn">Registreren</button>
                    </div>

                    
                    
                   
                </form>
            </div>
           
          </div>
        </div>
        </div>
   
    
</body>
</html>