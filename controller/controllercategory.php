<?php
require_once 'model/categoryDAO.php';
class ControllerCategory{ 
    private $catDAO;

    public function __construct()
    {
        $this->catDAO = new CategoryDAO();
    }
    
function indexCategoryAction(){
    $categoryDAO = new CategoryDAO();
    $categories = $categoryDAO->getCategories();
    require_once 'view/categorylist.php';
}

function createCategoryAction(){
    require_once 'view/createcategory.php';
}

function storeCategoryAction(){
    $newCategory = new Category($_POST['cat_id'], $_POST['cat_name'], $_POST['creation_date']);


    $categoryDAO = new CategoryDAO();


    $categoryDAO->addCategory($newCategory);


    header('location:index.php');
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
    // $cat_id = $_GET['cat_id'];
    // $categoryDAO = new CategoryDAO();
    // $category = $categoryDAO->getCategoryById($cat_id);
    $cat_id = $_GET['cat_id'];
    $cat = $this->catDAO->getCategoryById($cat_id);
    require_once 'view/deletecategory.php';
}

function destroyCategoryAction(){
    $cat_id = $_GET['cat_id'];
    $categoryDAO = new CategoryDAO();
    $categoryDAO->deleteCategory($cat_id);
    header('location:index.php');
    exit();
}
}
?>
