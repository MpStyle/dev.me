<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\HorizontalTextMasterPage;

class TimestampToDate extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/TimestampToDate.view.php');
        
        parent::setMasterPage(new web\masterpages\GlobalMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart("editor", "editor");
        parent::addMasterPagePart("service_name", "service_name");
        
        parent::addJavascript('web/javascripts/DateConverter.min.js');
        parent::addCss('web/css/TimestampToDate.css');
        
        parent::setPageTitle("Timestamp to date - Dev.me");
    }
}
