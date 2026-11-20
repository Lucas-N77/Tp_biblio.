<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblio";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La connexion a échouée : " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

$sql = "SELECT titre, auteur FROM livres";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["titre"] . " - " . $row["auteur"] . "<br>";
    }
} else {
    echo "0 résultat";
}
$conn->close();
?>