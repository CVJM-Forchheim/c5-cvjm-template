<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>

<html lang="<?php echo Localization::activeLanguage() ?>">

<head>
    <?php
    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);
    ?>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath() ?>/css/main.css">
</head>

<body id="backpage">
    <div class="<?php $c->getPageWrapperClass() ?>">
        <header>
            <nav class="navbar navbar-light">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">
                            <img alt="Titel" src="<?= $view->getThemePath() ?>/img/logo.png" />
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
                        $nav->controller->displaySubPageLevelsNum = 2;
                        $nav->render('templates/cvjm-nav');
                        ?>
                        <span id="ccm-account-menu-container"></span>
                    </div>
                </div>
            </nav>
            <div id="breadcrumb" class="light">
                <div class="container">
                    <?php
                    $autonav = BlockType::getByHandle('autonav');
                    $autonav->controller->orderBy = 'display_asc';
                    $autonav->controller->displayPages = 'all';
                    $autonav->controller->displaySubPages = 'relevant_breadcrumb';
                    $autonav->controller->displaySubPageLevels = 'all';
                    $autonav->render('templates/cvjm-breadcrumb');
                    ?>
                </div>
            </div>
        </header>
        <div id="main" class="light">