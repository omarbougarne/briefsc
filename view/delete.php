<?php
ob_start();
?>
    <p>Realy?</p>
    <a href="/index.php?action=destroy&id=<?php echo $ID?>">Yes</a>


    <a href="/index.php?action=list">No</a>

<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php';?>
