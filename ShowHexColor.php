<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\GlobalMasterPage;

class ShowHexColor extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/ShowHexColor.view.php');
        
        parent::setMasterPage(new GlobalMasterPage($this));
		
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart("editor", "editor");
        parent::addMasterPagePart("style_js", "style_js");
        
        
        
        parent::setPageTitle("Show Hex color - Dev.me");
    }
}
