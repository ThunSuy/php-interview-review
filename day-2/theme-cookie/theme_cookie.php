<?php
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $theme = $_POST['theme'];
    setcookie('theme', $theme, time() + 3600*24*7, "/"); 
    header("Location: theme_cookie.php");
    exit();
} 
?>

<style>
    body {
        background-color: <?= $theme === 'dark' ? '#333' : '#fff'; ?>;
        color: <?= $theme === 'dark' ? '#fff' : '#000'; ?>;
        padding: 20px;
    }

</style>

<form method="POST">
    <label for="theme">Choose Theme:</label>
    <select name="theme" id="theme">
        <option value="light" <?= $theme === 'light' ? 'selected' : ''; ?>>Light</option>
        <option value="dark" <?= $theme === 'dark' ? 'selected' : ''; ?>>Dark</option>
    </select>
    <button type="submit">Set Theme</button>
</form>

<h3>Current Theme: <?= ucfirst($theme); ?></h3>