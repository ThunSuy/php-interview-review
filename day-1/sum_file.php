<form method="POST">
    Number 1: <input type="number" name="num1" required>
    Number 2: <input type="number" name="num2" required>
    <button type="submit">Calculate Sum</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $filename = "sum.txt";
    file_put_contents($filename, "Sum = " . (intval($_POST['num1']) + intval($_POST['num2'])) . "\n", FILE_APPEND);

    $output = file_get_contents($filename);
    echo "<p><strong>Kết quả từ file:</strong> $output</p>";
}
