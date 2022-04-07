<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastre-se!</h1>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']); 
        }
       
    ?>

    <div>
        <form action="process.php" method="POST">
            <label> Nome: </label>
            <input type="text" name="nome" placeholder="digite seu nome"><br><br>

            <label> Email: </label>
            <input type="email" name="email" placeholder="digite seu email"><br><br>

            <input type="submit" value="Cadastrar">


        </form>
    </div>
</body>
</html>