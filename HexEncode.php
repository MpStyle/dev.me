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
        parent::addMasterPagePart("style_js", "style_js");
        
        parent::getMasterPage()->setWebServiceName( 'Hex encode' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/HexWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( '{"jsonrpc":"2.0","method":"encode","params":{"text":"Hello world"},"id":1}' );
        parent::getMasterPage()->setWebServiceResponse( '{"jsonrpc":"2.0","result":{"result_text":"48656C6C6F20776F726C64"},"id":1}' );
        
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to encode...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Encoded text...');
        
        
        
        parent::setPageTitle("Hex encode - Dev.me");
    }
}
