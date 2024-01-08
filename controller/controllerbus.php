<?php
require_once 'model/bus.php';
function indexAction(){
$buses = listbus();
require_once 'view/buslist.php';
}
function createAction(){
    require_once 'view/create.php';
    }
function storeAction(){
    createbus();
    header('location:index.php?action=list');
    }
function editAction(){
    $ID=$_GET['id'];
    $bus = view($ID);
require_once 'view/edit.php';
}
function deleteAction(){
    $ID=$_GET['id'];
require_once 'view/delete.php';
}
function destroyAction(){
    destorybus($_GET['id']);
    header('location:index.php');
}
function updateAction(){
    extract($_POST);
    var_dump($bus_number);
    editbus($ID, $bus_number, $license_plate, $company, $capacity,$fk_company);
    header('location:index.php');
}