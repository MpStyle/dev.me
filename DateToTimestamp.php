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
		
		parent::getMasterPage()->setWebServiceName('Date to timestamp');
		parent::getMasterPage()->setWebServiceEndPoint('http://www.micene.net/dev.me/web/web_services/DateConverterWebService.php');
		parent::getMasterPage()->setWebServiceRequest('{"jsonrpc":"2.0","method":"dateToTimestamp","params":{"text":"2015/01/15 13:00:00","format":"Y/m/d H:i:s"},"id":1}');
		parent::getMasterPage()->setWebServiceResponse('{"jsonrpc":"2.0","result":{"result_text":1421323200},"id":1}');
        
        parent::addJavascript('vendor/moment/moment/min/moment.min.js');
        parent::addJavascript('vendor/eonasdan/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');
        parent::addCss('vendor/eonasdan/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css');
        
        parent::addJavascript('web/javascripts/DateConverter.min.js');
        parent::addCss('web/css/DateToTimestamp.css');
        
        parent::setPageTitle("Date to timestamp - Dev.me");
    }
}
