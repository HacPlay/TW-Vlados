<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>Autentificare</title>
    <link rel="stylesheet" href="css/login.css"> 
</head>
<body>
    <h2>Autentificare</h2>
    <form action="login.php" method="POST" class="form-container">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Parolă:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Autentifică-te</button>
    </form>
</body>
</html>
