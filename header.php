<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>
        <?php echo $title ?>
    </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light>
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Professores</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cadastro
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./classroom.php">Salas de aula</a></li>
                <li><a class="dropdown-item" href="./subjects.php">Disciplinas</a></li>
                <li><hr class="dropdown-divider"></li>
                <!--<li><a class="dropdown-item" href="#">Bloquear</a></li>-->
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Salas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Disciplinas</a>
            </li>
        </ul>
        
        </div>
    </div>
    </nav>
    <div class = "h-100 d-flex align-items-center justify-content-center">
