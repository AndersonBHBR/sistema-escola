<html>
<head>
    <meta charset="utf-8">
    <title>Sistema Escolar</title>
    <link rel="shortcut icon" href="img/ico_escola.png">
    <link rel="stylesheet" text="text/css" href="css/estilo.css">
</head>
<body>
    <?php
        require "conexao.php";
        @session_start();
        $code = $_SESSION['code'];
        $nome = $_SESSION['nome'];
        $senha = $_SESSION['senha'];
        $painel = $_SESSION['painel'];
    ?>
</body>
</html>