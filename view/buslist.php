<?php
ob_start();
// include_once '../controller/controllerbus.php';
?>
<a href="index.php?action=create">Add</a>
<table>
<thead>
    <tr>
        <th>ID</th>
        <th>Bus Number</th>
        <th>License</th>
        <th>Company</th>
        <th>Capacity</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php foreach ($buses as $bus): ?>
    <tr>
        <td><?= $bus->ID ?></td>
        <td><?= $bus->bus_number ?></td>
        <td><?= $bus->license_plate ?></td>
        <td><?= $bus->company ?></td>
        <td><?= $bus->capacity ?></td>
        <td>
        <a href="/index.php?action=edit&id=<?php echo $bus->ID ?>">Edit</a>
            <a href="/index.php?action=delete&id=<?php echo $bus->ID ?>">Delete</a>
        </td>
    </tr>
<?php endforeach;?>
</tbody>
</table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php';?>
