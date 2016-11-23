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

    if($code == '') {
        echo "<script language='javascript'>window.location='../index.php';
        </script>";
    }
    else if ($nome == ''){
        echo "<script language='javascript'>window.location='../index.php';
        </script>";
    }
    else if ($senha == ''){
        echo "<script language='javascript'>window.location='../index.php';
        </script>";
    }else{
        if($painel_atual != $painel){
            echo "<script language='javascript'>window.location='../index.php';
            </script>";
        }
    }
    ?>
</body>
</html>