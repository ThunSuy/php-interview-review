<form method="POST">
    Nhập số: <input type="number" name="number" required>
    <button type="submit">Check</button>
</form>

<?php
function isPrime($number)
{
    if ($number <= 1) return false;
    if ($number == 2) return true;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST['number']);
    if (isPrime($number)) {
        echo "$number là số nguyên tố.";
    } else {
        echo "$number không phải là số nguyên tố.";
    }
}
