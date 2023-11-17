<?php
require_once('conexao.php');

$query = $pdo->query("SELECT * FROM usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($res);
$data = date('Y-m-d H:i:s');
if($linhas == 0){
    $query = "INSERT INTO usuarios  
    VALUES(0, '$nome_sistema', '$email_padrao', '$senha_padrao', '$senha_crip_padrao', 'Administrador', 'Sim','(99) 9.9999-0101','R. A. C. G., - J. N. A. - C./SP', 'foto.jpg', '$data', 'a1b2c3d4e5f6g7h8i9')";
    $pdo->query($query);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Projeto inicial</title>
    <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="login">
        <div class="form">
            <img src="img/logo.jpg" alt="login">
            <div class="">Login</div>
            <form class="registro" action="autenticar.php" method="post">
                <input type="email" name="usuario" id="usuario" placeholder="Seu E-mail">
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>