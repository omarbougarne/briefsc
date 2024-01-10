<?php
ob_start();
?>
    <form action="/index.php?action=update" method="post">
        <label for="firstName">ID:</label>
        <input name="ID" value="<?= $categroy->cat_id?>">
        <br>

        <label for="lastName">Name:</label>
        <input name="bus_number" value="<?= $category->bus_number?>">
        <br>

        <label for="email">Creation Date:</label>
        <input name="license_plate" value="<?= $categroy->creation_date?>">
        <br>

        <input type="submit" value="Modified" name="modified">
    </form>


<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php';?>
