<?php
$id = $_GET['id'] ?? '1';

echo "<h1>Article</h1>";

$mysqli = new mysqli("db", "ctfuser", "ctfpass", "ctf");
if ($mysqli->connect_error) {
    die("Erreur DB: " . $mysqli->connect_error);
}

$sql = "SELECT id, title, body FROM articles WHERE id = '$id'";
echo "<pre>DEBUG SQL: " . htmlspecialchars($sql) . "</pre>";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
  $res = $mysqli->query($sql);
} catch (mysqli_sql_exception $e) {
  echo "<p><b>Erreur SQL:</b> " . htmlspecialchars($e->getMessage()) . "</p>";
  exit;
}

if ($res->num_rows === 0) {
    echo "<p>Aucun article.</p>";
} else {
    while ($row = $res->fetch_assoc()) {
        echo "<h2>" . htmlspecialchars($row["title"]) . " (#" . $row["id"] . ")</h2>";
        echo "<p>" . htmlspecialchars($row["body"]) . "</p>";
    }
}

echo "<hr><p>Astuce : parfois, jouer avec les paramètres dans l'URL peut révéler des choses...</p>";
