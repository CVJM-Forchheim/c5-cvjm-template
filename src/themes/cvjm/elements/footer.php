<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
</div>
<div id="bottom">
    <div class="container dark hidden-print">
        <div class="row">
            <?php
            $a = new GlobalArea('Social');
            $a->display($c);
            ?>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <?php
                $a = new GlobalArea('User1');
                $a->display($c);
                ?>
            </div>
            <div class="col-xs-12 col-md-4">
                <?php
                $a = new GlobalArea('User2');
                $a->display($c);
                ?>
            </div>
            <div class="col-xs-12 col-md-4">
                <?php
                $a = new GlobalArea('User3');
                $a->display($c);
                ?>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="container dark hidden-print">
    <span class="powered-by">
        Built with <a href="https://www.concretecms.com">concrete CMS</a> CMS.
    </span>
    &copy;
    <?php echo date('Y') ?>
    <a href="<?php echo DIR_REL ?>/">
        <?php echo Config::get('concrete.site'); ?>
    </a>.
    All rights reserved.
    <?php
    $u = new User();
    if ($u->isRegistered()) { ?>
        <?php
        if (Config::get("ENABLE_USER_PROFILES")) {
            $userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
        } else {
            $userName = $u->getUserName();
        }
        ?>
        <span class="sign-in"><?= t('You are currently logged in as <strong>%s</strong>', $userName) ?>.
            <?php echo Core::make('helper/navigation')->getLogInOutLink(); ?></span>
    <?php } else { ?>
        <span class="sign-in"><?php echo Core::make('helper/navigation')->getLogInOutLink(); ?></span>
    <?php } ?>
</div>
</div>
<?php View::element('footer_required'); ?>
<script type="text/javascript" src="<?= $view->getThemePath() ?>/js/main.js"></script>
</body>

</html>