<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">

    
    <link rel="stylesheet" type="text/css" media="screen" href="<?=BASE_URL?>/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=BASE_URL?>/css/header.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=BASE_URL?>/css/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=BASE_URL?>/css/section.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=BASE_URL?>/css/room.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=BASE_URL?>/css/logForm.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=BASE_URL?>/css/regForm.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=BASE_URL?>/css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://togetherjs.com/togetherjs-min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../javascript/together_config.js"></script>
    
    <script src="javascript/main.js"></script>
    <script src="javascript/room.js"></script>

    
    <title>TogeDJer</title>
  </head>
  <body>

  <header>
    
    <nav id="header" class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?=BASE_URL?>">
                TogeDJer
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <?php if( !isset($_SESSION['usuario']) ): ?>
                    
                    <!--<li class="nav-item">
                    <button id="start-togetherjs">Start TogetherJS</button>
                    </li>-->
                    <li class="nav-item">
                        <a class="login-item link-important" href="<?=BASE_URL?>/login/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="login-item link-important" href="<?=BASE_URL?>/register/register.php">Registrar</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="login-item" href="!#">Comunidades</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        Comunidades
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?=BASE_URL?>create_room">Usuario</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="login-item" href="<?=BASE_URL?>profile"><?=$_SESSION['usuario']['username']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="login-item link-important" href="<?BASE_URL?>/logout">Logout</a>
                    </li>
                <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
