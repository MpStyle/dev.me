<?php
require './Settings.php';

use web\BasePage;
use web\masterpages\GlobalMasterPage;

class Home extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/Home.view.php');
        
        parent::setMasterPage(new GlobalMasterPage($this));
        parent::addMasterPagePart('content', 'content');
        parent::addMasterPagePart("style_js", "style_js");
        
        parent::addCss('web/css/Home.css');
        
        parent::setPageTitle("Dev.me");
    }
}
