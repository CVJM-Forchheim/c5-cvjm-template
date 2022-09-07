<?php

namespace Concrete\Package\CvjmTemplate\Theme\Cvjm;

use Concrete\Core\Page\Theme\BedrockThemeTrait;
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme
{
    use BedrockThemeTrait;

    public function getThemeName()
    {
        return t('CVJM Theme');
    }

    public function getThemeDescription()
    {
        return t('The CVJM Forchheim Concrete CMS theme.');
    }
}
