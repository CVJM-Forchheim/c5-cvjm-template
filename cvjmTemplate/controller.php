<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class cvjmTemplatePackage extends Package {

     protected $pkgHandle = 'cvjmTemplate';
     protected $appVersionRequired = '5.3.0';
     protected $pkgVersion = '1.0';

     public function getPackageDescription() {
          return t("Template mit CVJM-look.");
     }

     public function getPackageName() {
          return t("CVJM Template");
     }

     public function install() {
          $pkg = parent::install();

		  PageTheme::add('cvjm', $pkg);
     }

     public function upgrade(){
		$pkg = Package::getByHandle('cvjm');

		parent::upgrade($pkg);
	}
}
?>
