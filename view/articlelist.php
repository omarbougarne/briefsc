<?php
ob_start();
// include_once 'controller/controlleruser.php';
?>
<a href="index.php">Add</a>
<table>
<thead>
    <tr>
        <th>Category Name</th>
        <th>Creation Date</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php foreach ($categories as $category): ?>
    <tr>
        <td><?= $category->getCatName() ?></td>
        <td><?= $category->getCreationDate() ?></td>
        <td>
            <a href="index.php?action=edit&id=<?= $category->getCatId() ?>">Edit</a>
            <a href="index.php?action=delete&id=<?= $category->getCatId() ?>">Delete</a>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php';?>
