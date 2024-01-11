<?php
// require_once './controller/controlleruser.php';
require_once './controller/controllercategory.php';
    $controllercategory = new ControllerCategory();
// if (isset($_GET['action'])) {
//     $action = $_GET['action'];
//     switch ($action) {
//         case 'create':
//             createAction();
//             break;
//         case 'destroy':
//             destroyAction();
//             break;
//         case 'edit':
//             editAction();
//             break;
//         case 'store':
//             storeAction();
//             break;
//         case 'update':
//             updateAction();
//             break;
//         case 'delete':
//             deleteAction();
//             break;
//     }
// }else{

    var_dump($categories);
    $controllercategory->indexCategoryAction();
            
           
// }