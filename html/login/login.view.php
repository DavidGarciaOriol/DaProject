<?php require_once '../includes/header.php'; ?>

    <form action="/DaProject/html/index.html" method="post">

        <div class="content">

            <div class="labels item">

                <label  for="username">Usuario</label>
                <input class="labeled" type="text" id="username" name="username">
                        
                <label for="password">Contraseña</label>
                <input class="labeled" type="password" id="password" name="password">
            
            </div>

            <div class="labels2 item2">

                <button id="subutton" class="labeledButton" type="submit"> Log-in </button>
                <button id="subutton2" class="labeledButton" type="button"> Contraseña Olvidada </button>

            </div>

        </div> 

    </form>

    <?php require_once '../includes/footer.php'; ?>