<?php defined( 'C5_EXECUTE') or die(_( "Access Denied.")); ?>


    <div id="bottom" class="row">
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
<footer class="footer">
    <div class="container dark">
        <span class="powered-by">
            <a href="http://www.concrete5.org" title="<?php   echo t('concrete5 open source CMS')?>">
                <?php echo t( 'concrete5 Content Management')?>
            </a>
        </span>
        &copy;
        <?php echo date( 'Y')?>
        <a href="<?php   echo DIR_REL ?>/">
            <?php echo SITE?>
        </a>.
        <?php echo t( 'All rights reserved.')?>
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
            <span class="sign-in"><?php  echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php  echo $this->url('/login', 'logout')?>"><?php  echo t('Sign Out')?></a></span>
        <?php   } else { ?>
            <span class="sign-in"><a href="<?php  echo $this->url('/login')?>"><?php  echo t('Sign In to Edit this Site')?></a></span>
        <?php   } ?>
    </div>
</div>

<?php
global $c;
//if (!$c->isEditMode()) {print "<script src=\"".$this->getThemePath()."/js/jquery.min.js\"></script>";}
?>
<script src="<?php echo $this->getThemePath(); ?>/js/jquery.min.js"></script>
<script src="<?php echo $this->getThemePath(); ?>/js/bootstrap.min.js"></script>
<script>
// Put jQuery 1.10.2 into noConflict mode.
var $jq1 = jQuery.noConflict(true);
</script>
<?php Loader::element( 'footer_required'); ?>
</body>

</html>
