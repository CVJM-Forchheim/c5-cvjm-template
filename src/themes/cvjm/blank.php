<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?= $view->inc('elements/header.php'); ?>
<div class="container">
    <?php
    $a = new Area('Main');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</div>
<?= $view->inc('elements/footer.php'); ?>