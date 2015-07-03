<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\HorizontalTextMasterPage;

class DateToTimestamp extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/DateToTimestamp.view.php');
        
        parent::setMasterPage(new web\masterpages\GlobalMasterPage($this));
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart("editor", "editor");
        parent::addMasterPagePart("service_name", "service_name");
        
        parent::addJavascript('vendor/moment/moment/min/moment.min.js');
        parent::addJavascript('vendor/eonasdan/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');
        parent::addCss('vendor/eonasdan/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css');
        
        parent::addJavascript('web/javascripts/DateConverter.min.js');
        parent::addCss('web/css/DateToTimestamp.css');
        
        parent::setPageTitle("Date to timestamp - Dev.me");
    }
}
