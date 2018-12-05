<?php require_once '../includes/header.php'; ?>

<main>

    <form action="/DaProject/html/index.php" method="post">

        <div class="reg-content">

            <div class="reg-labels reg-item">

                <label  for="reg_username">Usuario. </label>
                <input class="reg-labeled" type="text" id="reg_username" name="reg_username">

                <label  for="reg_email">Correo Electrónico. </label>
                <input class="reg-labeled" type="email" id="reg_email" name="reg_email">
                        
                <label for="reg_password">Contraseña.</label>
                <input class="reg-labeled" type="password" id="reg_password" name="reg_password">

                <label for="reg_confirm-password">Confirmar Contraseña.</label>
                <input class="reg-labeled" type="password" id="reg_confirm_password" name="reg_confirm_password">
            
            </div>

            <div class="reg-labels2 reg-item2">

                <button id="subutton" class="reg-labeledButton" type="submit" value="Log-in">
                <button id="subutton2" class="reg-labeledButton" type="button" value="Contraseña Olvidada"></button>

            </div>

        </div> 

    </form>
</main>
    <?php require_once '../includes/footer.php'; ?>
