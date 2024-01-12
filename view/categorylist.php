<?php
ob_start();
// include_once 'controller/controlleruser.php';
?>
<a href="index.php?action=create" class="btn btn-primary">Add</a>
<table class="table">
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

        <td><a href="" class="btn btn-warning">Update</a></td>
        <td><a href="" class="btn btn-danger">Delete</a></td>
    </tr>
    <!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->
<?php endforeach; ?>
</tbody>
</table>
<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php';?>
