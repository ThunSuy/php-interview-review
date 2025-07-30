<?php
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}

echo "<p>Phiên làm việc của bạn đã được truy cập {$_SESSION['counter']} lần.</p>";
echo "<p>Phiên ID: " . session_id() . "</p>";
