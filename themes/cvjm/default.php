<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?= $view->inc('elements/header.php'); ?>
<div id="banner" class="container">
    <div class="col-xs-12 col-md-12">
        <?php
        $a = new GlobalArea('Banner');
        $a->display($c);
        ?>
    </div>
</div>
<?php
$a = new Area('Main');
$a->enableGridContainer();
$a->display($c);
?>
<?= $view->inc('elements/footer.php'); ?>