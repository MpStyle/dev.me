<?php

require './Settings.php';

use MToolkit\Controller\MAbstractPageController;
use web\masterpages\VerticalEditorMasterPage;

class MD4Generator extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/MD4Generator.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to hash...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Hashed text...');
        
        parent::addJavascript('web/javascripts/Hash.min.js');
        parent::addCss('web/css/MD4Generator.css');
        
        parent::setPageTitle("MD4 generator - Dev.me");
    }
}
