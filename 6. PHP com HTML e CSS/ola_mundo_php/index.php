<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>PHP com XAMPP</title>
    <!-- O link para o CSS funciona normalmente -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
        <?php
            // Este código PHP é processado pelo servidor Apache do XAMPP
            $texto = "Olá, Mundo, rodando no XAMPP!";
            echo $texto;
        ?>
    </h1>
    <p>Este arquivo está em: <?php echo __DIR__; ?></p>
</body>
</html>
