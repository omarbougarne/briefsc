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
           $controllercategory->destroyCategoryAction($cat_id);
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
           $controllercategory->deleteCategoryAction($cat_id);
            break;
    }
}else{
    
    $controllercategory->indexCategoryAction();
            
           
}
// public function getCategories()
//     {
//         $query = "SELECT * FROM category";
//         $stmt = $this->db->query($query);
//         $stmt->execute();
//         $categoriesData = $stmt->fetchAll();
//         $categories = array();

//         foreach ($categoriesData as $categoryData) {
//             $categories[] = new Category(
//                 $categoryData["cat_id"],
//                 $categoryData["cat_name"],
//                 $categoryData["creation_date"]
//             );
//         }

//         return $categories;
//     }
// categoryDAO.php
// function indexCategoryAction(){
//     $categoryDAO = new CategoryDAO();
//     $categories = $categoryDAO->getCategories();
//     // var_dump($categories);
//     // return $categories;
//     require_once 'view/categorylist.php';
// }
// function to show data in controllercategory.php
// $controllercategory->indexCategoryAction(); the call in router
// so the data gets added in phpmyadmin but it doesnt show in the page