<?php
ob_start();
// include_once 'controller/controlleruser.php';
?>
<a href="index.php?action=create">Add</a>
<table>
<thead>
    <tr>
    <th>Category ID</th>
        <th>Category Name</th>
        <th>Creation Date</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php foreach ($categories as $category): ?>
    <tr>
    <td><?= $category->getCatId() ?></td>
        <td><?= $category->getCatName() ?></td>
        <td><?= $category->getCreationDate() ?></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php';?>
