<?php
// require_once './controller/controlleruser.php';
require_once './controller/controllercategory.php';
    $controllercategory = new ControllerCategory();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
           $controllercategory-> createCategoryAction();
            break;
        case 'destroy':
           $controllercategory->destroyCategoryAction();
            break;
        // case 'edit':
        //     editAction();
        //     break;
        case 'store':
            $controllercategory-> storeCategoryAction();
            break;
        // case 'update':
        //     updateAction();
        //     break;
        case 'delete':
           $controllercategory->deleteCategoryAction();
            break;
    }
}else{
    
    $controllercategory->indexCategoryAction();
            
           
}
