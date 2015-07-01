<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class MD5Generator extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/MD5Generator.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to encode...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Encoded text...');
        
        parent::addJavascript('web/javascripts/Hash.min.js');
        parent::addCss('web/css/MD2Generator.css');
        
        parent::setPageTitle("MD2 generator - Dev.me");
    }
}
