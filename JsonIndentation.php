<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class JsonIndentation extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/JsonIndentation.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to indent...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Indented text...');
        
        parent::addJavascript('web/javascripts/Indentation.min.js');
        parent::addCss('web/css/JsonIndentation.css');
        
        parent::setPageTitle("JSON indentation - Dev.me");
    }
}
