<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class LowerCase extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/LowerCase.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
		
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
		
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Lower case text...');
		
		parent::getMasterPage()->setWebServiceName('Capitalize');
		parent::getMasterPage()->setWebServiceEndPoint('http://www.micene.net/dev.me/web/web_services/TextWebService.php');
		parent::getMasterPage()->setWebServiceRequest('{jsonrpc: "2.0", method: "toLowerCase", params: {text: "HELLO World"}, id: 1}');
		parent::getMasterPage()->setWebServiceResponse('{"jsonrpc":"2.0","result":{"result_text":"hello world"},"id":1}');
        
        parent::addJavascript('web/javascripts/Text.min.js');
        parent::addCss('web/css/LowerCase.css');
        
        parent::setPageTitle("Lower case - Dev.me");
    }
}
