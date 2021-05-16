<?php include 'components/navigation.php'?>
<?php $id = rand(134445567,989889898);
setcookie("id", $id, time() + (86400 * 800), "/");
?>
<?php include 'components/catalogue.php'?>
<?php include 'components/footer.php'?>