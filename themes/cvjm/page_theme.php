<?php 
namespace Concrete\Package\Cvjmtemplate\Theme\Cvjm;
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {

	public function registerAssets() {
		$this->providesAsset('javascript', 'bootstrap/*');
		$this->providesAsset('css', 'bootstrap/*');
		$this->requireAsset('javascript', 'jquery');
	}

   	protected $pThemeGridFrameworkHandle = 'bootstrap3';
}
