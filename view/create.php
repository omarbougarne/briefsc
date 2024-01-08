<?php
ob_start();
?>
    <form action="/index.php?action=store" method="post">
        <label for="firstName">ID:</label>
        <input name="ID">
        <br>

        <label for="lastName">Bus Name:</label>
        <input name="bus_name">
        <br>

        <label for="email">License:</label>
        <input name="license" >
        <br>

        <label for="password">Company:</label>
        <input name="company">
        <br>

        <label for="age">Capacity:</label>
        <input name="capacity">
        <br>
        <label for="age">fkfk:</label>
        <input name="fk">
        <br>

        <input type="submit" value="Submit" name="add">
    </form>


<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php';?>
