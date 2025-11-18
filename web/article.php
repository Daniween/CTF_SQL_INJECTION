<?php
$id = $_GET['id'] ?? '1';

echo "<h1>Article ".$id."</h1>";

if (strpos($id, "1 OR 1=1") !== false) {
    echo "<h2>Dump base de données (simulé)</h2>";
    echo "admin: admin@zerotech.com / motdepasse: Sup3rAdmin!<br>";
    echo "FLAG{06_WEB_PWNED}";
} else {
    echo "<p>Ceci est un article classique.</p>";
    echo "<p>Astuce : parfois, jouer avec les paramètres dans l'URL peut révéler des choses...</p>";
}
