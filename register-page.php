<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Înregistrare</title>
    <link rel="stylesheet" href="css/register.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/register.js"></script> 

</head>
<body>
    <nav>
        <div class="menu-container">
            <button id="theme-toggle">🌙 Schimbă Tema</button>
        </div>
    </nav>    

    <div class="register-container">
        <h2>Înregistrează-te</h2>
        <form id="registerForm">
        <input type="text" name="username" placeholder="Nume utilizator" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Parolă" required><br>
        <button type="submit">Înregistrează-te</button>
    </form>
    </div>

    <script src="js/register.js"></script>
</body>
</html>
