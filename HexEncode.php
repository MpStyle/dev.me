<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class HexEncode extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/HexEncode.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to encode...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Encoded text...');
        
        parent::addJavascript('web/javascripts/Hex.min.js');
        parent::addCss('web/css/HexEncode.css');
        
        parent::setPageTitle("Hex encode - Dev.me");
    }
}
