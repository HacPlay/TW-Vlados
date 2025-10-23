<?php
ob_start();  // Start output buffering

$servername = "localhost";
$username = "root";  // Pentru XAMPP/WAMP
$password = "";      // Default, fără parolă
$dbname = "tw_vlados";

// Conectare la baza de date
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    // Loghează eroarea într-un fișier de log și arată un mesaj general
    error_log("Conexiune esuata: " . $conn->connect_error);
    die("Eroare la conexiune. Vă rugăm să încercați mai târziu.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validare input
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Validarea email-ului
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresa de email nu este validă.";
        exit;
    }

    // Verifică dacă există un username deja înregistrat
    $sql_check = "SELECT id FROM users WHERE username = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $username);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        echo "Numele de utilizator este deja luat.";
        $stmt_check->close();
    } else {
        // Criptarea parolei
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        // Insert în baza de date
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $password_hashed);

        if ($stmt->execute()) {
            // Redirecționare către pagina principală cu un mesaj de succes
            header("Location: index.php?message=success");
            exit(); 
        } else {
            // Loghează eroarea și afișează un mesaj general
            error_log("Eroare la înregistrare: " . $conn->error);
            echo "Eroare la înregistrare. Vă rugăm să încercați mai târziu.";
        }

        $stmt->close();
    }

    $stmt_check->close();
}

$conn->close();
ob_end_flush();  // Finalizează output buffering
?>
