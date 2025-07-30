<?php
function is_prime($number): bool
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

echo "Kiem tra so nguyen to tu 1 den 20:\n";
for ($i = 1; $i <= 20; $i++) {
    echo "\n$i: " . (is_prime($i) ? "la so nguyen to" : "khong la so nguyen to") . "\n";
}
