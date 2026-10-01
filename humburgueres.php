<?php
    $conexao = mysqli_connect("localhost","root","","hamburgueres",3307);

    require "class_hamburgueres.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="b1">
    <section class="flex col-12 s1" >
        <div class="col-4">
            <img src="IMG/jujutsu_burguer.png" alt="" class="col-4">
        </div>
        <div>
            <nav>
                <ul>
                    <li><a href="index.php">inicio</a></li>

                    <li><a href="humburgueres.php">Hambúrgueres</a></li>

                    <li><a href="combos.php">Combos</a></li>

                    <li><a href="Drinks.php">Drinks</a></li>

                    <li><a href="sobre_nos.php">sobre nós</a></li>
                    
                    <li><a href="contatos.php">contatos</a></li>
                </ul>
            </nav>
        </div>

        <div>
            <button></button>
        </div>
    </section>

    <section>
        <h2></h2>

        <h1></h1>

        <p></p>
    </section>