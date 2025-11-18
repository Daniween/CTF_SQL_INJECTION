<?php
$page = $_GET['page'] ?? 'home.php';

echo "<h1>Page interne</h1>";

if (strpos($page, "../") !== false) {
    echo "Tentative d'accès interdit.";
} else {
    @include($page);
}
