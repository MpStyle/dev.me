<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class Base64Encode extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/Base64Encode.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        
		parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
		
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to encode...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Encoded text...');
		
		parent::getMasterPage()->setWebServiceName('Base64 encode');
		parent::getMasterPage()->setWebServiceEndPoint('http://www.micene.net/dev.me/web/web_services/Base64WebService.php');
		parent::getMasterPage()->setWebServiceRequest('{jsonrpc: "2.0", method: "encode", params: {text: "Hello world"}, id: 1}');
		parent::getMasterPage()->setWebServiceResponse('{"jsonrpc":"2.0","result":{"result_text":"SGVsbG8gd29ybGQ="},"id":1}');
        
        parent::addJavascript('web/javascripts/Base64.min.js');
        parent::addCss('web/css/Base64Encode.css');
        
        parent::setPageTitle("Base64 encode - Dev.me");
    }
}
