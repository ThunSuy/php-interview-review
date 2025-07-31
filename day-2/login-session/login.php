<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])){
    if ($_POST['username'] === 'admin' && $_POST['password'] === '123'){
        $_SESSION['user'] = 'admin';
        header ("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username" required>
    Password: <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>

<?php
if (isset($error)) {
    echo "<p style='color: red;'>$error</p>";
}   