<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class SHA256Generator extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/SHA256Generator.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to hash...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Hashed text...');
        
        parent::addJavascript('web/javascripts/Hash.min.js');
        parent::addCss('web/css/SHA256Generator.css');
        
        parent::setPageTitle("SHA256 generator - Dev.me");
    }
}
