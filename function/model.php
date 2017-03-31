<?php

function getCategories() {
    global $bdd;
    $query = $bdd->query("SELECT category FROM category");
    return $query->fetchAll(PDO::FETCH_OBJ);
}
