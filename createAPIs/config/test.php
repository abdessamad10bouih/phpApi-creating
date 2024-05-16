<?php

require("./Database.php");

$db = new Database();
$pdo = $db->getConnection();
if ($pdo == null) {
    echo "erreur de connexion";
} else {
    echo "Connexion de réussit";
}
