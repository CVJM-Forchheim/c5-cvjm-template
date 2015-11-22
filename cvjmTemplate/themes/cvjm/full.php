<?php defined( 'C5_EXECUTE') or die(_( "Access Denied.")); ?>
<? $view->inc('elements/header.php');?>
<?
    $a = new Area('Main');
    $a->enableGridContainer();
    $a->display($c);
?>
<? $view->inc('elements/footer.php');?>
            
