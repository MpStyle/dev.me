<?php
require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class HexDecode extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/HexDecode.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to decode...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Decoded text...');
        
        parent::addJavascript('web/javascripts/Hex.min.js');
        parent::addCss('web/css/HexDecode.css');
        
        parent::setPageTitle("Hex decode - Dev.me");
    }
}
