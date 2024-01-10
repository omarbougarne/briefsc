<?php
ob_start();
?>
    <form action="" method="post">
        <label for="firstName">Email:</label>
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
        <label for="datetime">Select Date and Time:</label>
        <input type="datetime-local" id="datetime" name="datetime" required>
        <br>

        <input type="submit" value="Submit" name="add">
    </form>


<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php';?>
