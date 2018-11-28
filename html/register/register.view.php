<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" media="screen" href="../css/reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/regForm.css" />
    <script src="./javascript/register.js"></script>
    
</head>
<body>

    <form action="/DaProject/html/index.html" method="post">

        <div class="reg-content">

            <div class="reg-labels reg-item">

                <label  for="reg_username">Usuario. </label>
                <input class="reg-labeled" type="text" id="reg_username" name="reg_username">

                <label  for="reg_email">Correo Electrónico. </label>
                <input class="reg-labeled" type="email" id="reg_email" name="reg_email">
                        
                <label for="reg_password">Contraseña.</label>
                <input class="reg-labeled" type="password" id="reg_password" name="reg_password">

                <label for="reg_confirm-password">Confirmar Contraseña</label>
                <input class="reg-labeled" type="password" id="reg_confirm_password" name="reg_confirm_password">
            
            </div>

            <div class="reg-labels2 reg-item2">

                <button id="subutton" class="reg-labeledButton" type="submit" value="Log-in">
                <button id="subutton2" class="reg-labeledButton" type="button" value="Contraseña Olvidada"></button>

            </div>

        </div> 

    </form>
    
</body>
</html>