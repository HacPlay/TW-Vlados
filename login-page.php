<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Autentificare</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/login.js"></script>
</head>
<body>
    <h2>Autentificare</h2>
    <form id="loginForm" class="form-container">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Parolă:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Autentifică-te</button>
    </form>
    <div id="loginResult"></div>
</body>
</html>
