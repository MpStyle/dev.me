<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class SHA512Generator extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/SHA512Generator.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        
        parent::getMasterPage()->setWebServiceName( 'SHA512 generator' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/HashWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( '{"jsonrpc":"2.0","method":"SHA512","params":{"text":"Hello world"},"id":1}' );
        parent::getMasterPage()->setWebServiceResponse( '{"jsonrpc":"2.0","result":{"result_text":"b7f783baed8297f0db917462184ff4f08e69c2d5e5f79a942600f9725f58ce1f29c18139bf80b06c0fff2bdd34738452ecf40c488c22a7e3d80cdf6f9c1c0d47"},"id":1}' );
        
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to hash...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Hashed text...');
        
        parent::addJavascript('web/javascripts/Hash.min.js');
        parent::addCss('web/css/SHA512Generator.css');
        
        parent::setPageTitle("SHA512 generator - Dev.me");
    }
}
