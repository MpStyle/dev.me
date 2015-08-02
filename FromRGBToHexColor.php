<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\GlobalMasterPage;

class FromRGBToHexColor extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/FromRGBToHexColor.view.php');
        
        parent::setMasterPage(new GlobalMasterPage($this));
		
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart("editor", "editor");
        parent::addMasterPagePart("style_js", "style_js");
        
        parent::getMasterPage()->setWebServiceName( 'From RGB to Hex color' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/ColorWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( '{"jsonrpc":"2.0","method":"rgbToHex","params":{"color":"0,0,0"},"id":1}' );
        parent::getMasterPage()->setWebServiceResponse( '{"jsonrpc":"2.0","result":{"result_text":"#000000","isValid":true},"id":1}' );
        
        parent::setPageTitle("From RGB to Hex color - Dev.me");
    }
}
