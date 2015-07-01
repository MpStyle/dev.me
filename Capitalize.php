<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class Capitalize extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/Capitalize.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to capitalized...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Capitalized text...');
        
        parent::addJavascript('web/javascripts/Text.min.js');
        parent::addCss('web/css/Capitalize.css');
        
        parent::setPageTitle("Capitalize - Dev.me");
    }
}
