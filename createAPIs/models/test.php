<?php

//établir la connexion
require('../config/Database.php');
require('../models/Produit.php');

$db = new Database();
$pdo = $db->getConnection();

//afficher la list des produits
$p1 = new Produit($pdo);
$p1->lire();
