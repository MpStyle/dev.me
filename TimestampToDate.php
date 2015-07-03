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
		
		parent::getMasterPage()->setWebServiceName('Date to timestamp');
		parent::getMasterPage()->setWebServiceEndPoint('http://www.micene.net/dev.me/web/web_services/DateConverterWebService.php');
		parent::getMasterPage()->setWebServiceRequest('{"jsonrpc":"2.0","method":"timestampToDate","params":{"text":"1420113600","format":"Y/m/d H:i:s"},"id":1}');
		parent::getMasterPage()->setWebServiceResponse('{"jsonrpc":"2.0","result":{"result_text":"2015\/01\/01 13:00:00","isValid":true},"id":1}');
        
        parent::addJavascript('web/javascripts/DateConverter.min.js');
        parent::addCss('web/css/TimestampToDate.css');
        
        parent::setPageTitle("Timestamp to date - Dev.me");
    }
}
