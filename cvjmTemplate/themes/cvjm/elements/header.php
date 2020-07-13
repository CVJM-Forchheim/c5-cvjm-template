<?php defined( 'C5_EXECUTE') or die(_( "Access Denied.")); ?>
<!DOCTYPE html>
<html lang="<?= Localization::activeLanguage() ?>">

<head>
    <?= Loader::element( 'header_required'); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="<?=$view->getThemePath()?>/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="backpage">
    <div class="<?=$c->getPageWrapperClass()?>">
        <div class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                        <img alt="Titel" src="<?=$view->getThemePath()?>/img/logo.png"/>
                    </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <?php
                    $nav = BlockType::getByHandle('autonav');
                    $nav->controller->orderBy = 'display_asc';
                    $nav->controller->displayPages = 'top';
                    $nav->controller->displaySubPages = 'all';
                    $nav->controller->displaySubPageLevels = 'custom';
                    $nav->controller->displaySubPageLevelsNum = 1;
                    $nav->render('templates/cvjm');
                    ?>
		    <span id="ccm-account-menu-container"></span>
                </div>
            </div>
        </div>
        <div id="main" class="light">
            <div id="banner" class="container">
                <div class="col-xs-12 col-md-12">
                <?php
                    $a = new GlobalArea('Banner');
                    $a->display($c);
                ?>
                </div>
            </div>
