<?php
ob_start();
?>
    <form action="/index.php?action=store" method="post">
        <label for="firstName">Category Name</label>
        <input name="cat_name">
        <br>

        <label for="datetime">Select Date and Time:</label>
        <input type="datetime-local" id="datetime" name="creation_date" required>
        <br>

        <input type="submit" value="Submit" name="add">
    </form>


<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php';?>
