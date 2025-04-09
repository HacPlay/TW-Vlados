<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Înregistrare</title>
    <link rel="stylesheet" href="css/register.css">

</head>
<body>
    <nav>
        <div class="menu-container">
            <button id="theme-toggle">🌙 Schimbă Tema</button>
        </div>
    </nav>    

    <div class="register-container">
        <h2>Înregistrează-te</h2>
        <form action="registerPOST.php" method="POST" class="form-container">
            <label for="username">Nume utilizator:</label>
            <input type="text" name="username" id="username" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="password">Parolă:</label>
            <input type="password" name="password" id="password" required><br>

            <button type="submit" name="register">Înregistrează-te</button>
        </form>
    </div>

    <script src="js/register.js"></script>
</body>
</html>
