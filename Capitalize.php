<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class Capitalize extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/Capitalize.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
		
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::addMasterPagePart("style_js", "style_js");
		
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to capitalized...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Capitalized text...');
		
		parent::getMasterPage()->setWebServiceName('Capitalize');
		parent::getMasterPage()->setWebServiceEndPoint('http://www.micene.net/dev.me/web/web_services/TextWebService.php');
		parent::getMasterPage()->setWebServiceRequest('{jsonrpc: "2.0", method: "capitalize", params: {text: "hello world"}, id: 1}');
		parent::getMasterPage()->setWebServiceResponse('{"jsonrpc":"2.0","result":{"result_text":"Hello world"},"id":1}');
        
        
        
        parent::setPageTitle("Capitalize - Dev.me");
    }
}
