<?php

namespace Concrete\Package\CvjmTemplate;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;
use Concrete\Package\CvjmTemplate\Theme\Cvjm\PageTheme;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

     protected $pkgHandle = 'cvjm_template';
     protected $appVersionRequired = '8.4.0';
     protected $pkgVersion = '5.0';

     public function getPackageDescription()
     {
          return t("Template mit CVJM-look.");
     }

     public function getPackageName()
     {
          return t("CVJM Template");
     }

     public function install()
     {
          $pkg = parent::install();

          Theme::add('cvjm', $pkg);
          PageTheme::add('cvjm-nav', $pkg);
          PageTheme::add('cvjm-breadcrumb', $pkg);
     }
}