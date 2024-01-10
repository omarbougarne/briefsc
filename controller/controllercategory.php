<?php
class ControllerCategory{ 

function indexCategoryAction(){
    $categoryDAO = new CategoryDAO();
    $categories = $categoryDAO->getCategories();
    require_once 'view/categorylist.php';
}

function createCategoryAction(){
    require_once 'view/create_category.php';
}

function storeCategoryAction(){
    $newCategory = new Category(null, $_POST['cat_name'], $_POST['creation_date']);


    $categoryDAO = new CategoryDAO();


    $categoryDAO->addCategory($newCategory);


    header('location:index.php?action=list_categories');
    exit();
}

function editCategoryAction(){
    $cat_id = $_GET['cat_id'];
    $categoryDAO = new CategoryDAO();
    $category = $categoryDAO->getCategoryById($cat_id);
    require_once 'view/edit_category.php';
}

function updateCategoryAction(){
    $updatedCategory = new Category($_POST['cat_id'], $_POST['cat_name'], $_POST['creation_date']);


    $categoryDAO = new CategoryDAO();


    $categoryDAO->updateCategory($updatedCategory);


    header('location:index.php?action=list_categories');
    exit();
}

function deleteCategoryAction(){
    $cat_id = $_GET['cat_id'];
    $categoryDAO = new CategoryDAO();
    $category = $categoryDAO->getCategoryById($cat_id);
    require_once 'view/delete_category.php';
}

function destroyCategoryAction(){
    $cat_id = $_GET['cat_id'];
    $categoryDAO = new CategoryDAO();
    $categoryDAO->deleteCategory($cat_id);
    header('location:index.php?action=list_categories');
    exit();
}
}
?>
