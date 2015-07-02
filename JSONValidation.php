<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\SingleEditorMasterPage;

class JSONValidation extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/JSONValidation.view.php');
        
        parent::setMasterPage(new SingleEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setEditorTextAreaPlaceholder('Insert here the json to validate...');
        
        parent::addJavascript('web/javascripts/Validation.min.js');
        parent::addCss('web/css/JSONValidation.css');
        
        parent::setPageTitle("JSON validation - Dev.me");
    }
}
