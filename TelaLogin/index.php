<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

</head>

<body>



    <div class="back">
        <label>Voltar</label>
        <a href="../TelaInicial/index.php"><img class="iconBack" src="images/icon.png" alt="iconeDeVoltar"></a>
    </div>

    <main>
        <div class="container">

            <h1>LOGIN</h1>
            <form action="testLogin.php" class="form-container" method="POST">
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email">
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="senha" placeholder="Senha">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <input type="submit" class="btn" name="submit" value="Enviar">
            </form>

            <br>
            <div class="remember-forgot">
                <label><input type="checkbox" id="checkbox"> Lembrar Login</label>
                <a href="#">Esqueceu a senha?</a>
            </div>
            <div class="register">
                <p>Não tem uma conta? <a href="../TelaRegistro/index.php    ">Registre-se</a></p>
            </div>
        </div>
    </main>



    <footer>Created by &copy<a href="#"> BlueSystem</a></footer>

</body>

</html>