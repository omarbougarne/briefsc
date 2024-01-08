<?php

function database_connections() {

    return new PDO('mysql:host=localhost;dbname=brief9', 'root', '');
}
function listbus() {
    $pdo = database_connections();
    return $pdo->query("SELECT * FROM bus")->fetchAll(PDO::FETCH_OBJ);
}
function createbus() {
    extract($_POST);
    $pdo = database_connections();
    $sql = $pdo->prepare("INSERT INTO bus VALUES(?,?,?,?,?,?)"); 
   return $sql->execute([$ID, $bus_name, $license, $company, $capacity,$fk]);
}
function destorybus($ID) {
    $pdo = database_connections();
    $sql = $pdo->prepare("DELETE FROM bus where id =?"); 
   return $sql->execute([$ID]);
}
function editbus($ID, $bus_number, $license_plate, $company, $capacity,$fk_company) {
    $pdo = database_connections();
    $sql = $pdo->prepare("UPDATE bus SET ID=?, bus_number=?, license_plate=?, company=?, capacity=?,fk_company=? WHERE ID=?"); 
   return $sql->execute([$ID, $bus_number, $license_plate, $company, $capacity,$fk_company,$ID]);

}
function view($ID)
{
    $pdo = database_connections();
    $sql = $pdo->prepare("SELECT * FROM bus WHERE id = ?");
    $sql->execute([$ID]);
    return $sql->fetch(PDO::FETCH_OBJ);
}
