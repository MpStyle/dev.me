<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class MD5Generator extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/MD5Generator.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        
        parent::getMasterPage()->setWebServiceName( 'MD5 generator' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/HashWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( '{"jsonrpc":"2.0","method":"MD5","params":{"text":"Hello world"},"id":1}' );
        parent::getMasterPage()->setWebServiceResponse( '{"jsonrpc":"2.0","result":{"result_text":"3e25960a79dbc69b674cd4ec67a72c62"},"id":1}' );
        
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to encode...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Encoded text...');
        
        parent::addJavascript('web/javascripts/Hash.min.js');
        parent::addCss('web/css/MD2Generator.css');
        
        parent::setPageTitle("MD2 generator - Dev.me");
    }
}
