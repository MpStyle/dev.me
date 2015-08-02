<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class MD4Generator extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/MD4Generator.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::addMasterPagePart("style_js", "style_js");
        
        parent::getMasterPage()->setWebServiceName( 'MD4 generator' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/HashWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( '{"jsonrpc":"2.0","method":"MD4","params":{"text":"Hello world"},"id":1}' );
        parent::getMasterPage()->setWebServiceResponse( '{"jsonrpc":"2.0","result":{"result_text":"2f34e7edc8180b87578159ff58e87c1a"},"id":1}' );
        
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to hash...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Hashed text...');
        
        
        
        parent::setPageTitle("MD4 generator - Dev.me");
    }
}
