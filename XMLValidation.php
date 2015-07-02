<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\SingleEditorMasterPage;

class XMLValidation extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/XMLValidation.view.php');
        
        parent::setMasterPage(new SingleEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setEditorTextAreaPlaceholder('Insert here the xml to validate...');
        
        parent::addJavascript('web/javascripts/Validation.min.js');
        parent::addCss('web/css/XMLValidation.css');
        
        parent::setPageTitle("XML validation - Dev.me");
    }
}
