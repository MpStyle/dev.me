<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class SHA256Generator extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/SHA256Generator.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        
        parent::getMasterPage()->setWebServiceName( 'SHA256 generator' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/HashWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( '{"jsonrpc":"2.0","method":"SHA256","params":{"text":"Hello world"},"id":1}' );
        parent::getMasterPage()->setWebServiceResponse( '{"jsonrpc":"2.0","result":{"result_text":"64ec88ca00b268e5ba1a35678a1b5316d212f4f366b2477232534a8aeca37f3c"},"id":1}' );
        
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to hash...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Hashed text...');
        
        parent::addJavascript('web/javascripts/Hash.min.js');
        parent::addCss('web/css/SHA256Generator.css');
        
        parent::setPageTitle("SHA256 generator - Dev.me");
    }
}
