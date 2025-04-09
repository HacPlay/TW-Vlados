<?php
session_start();

// Conectarea la baza de date
$conn = new mysqli("localhost", "root", "", "tw_vlados");

if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
        
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

        
            header("Location: index.php");
            exit();
        } else {
            echo "Parolă incorectă.";
        }
    } else {
        echo "Emailul nu există.";
    }

    $stmt->close();
}

$conn->close();
?>
