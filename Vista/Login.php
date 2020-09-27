<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Login</title>
</head>
<body>
    <h1>Introduce tus datos</h1>
    <form action ="comprueba-login.php" method="post">
        <table>
            <tr>
                <td class="izq">DNI:</td><td class="der"><input type="text"name="login"></td></tr>
                <tr><td class="izq">Password:</td><td class="der"><input type="password" name="password"></td></tr>
                <tr><td colspan="2"><input type="submit" name="enviar" value="Login"></td></tr></table>

</body>
</html>