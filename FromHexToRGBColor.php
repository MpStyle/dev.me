<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\GlobalMasterPage;

class FromHexToRGBColor extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/FromHexToRGBColor.view.php');
        
        parent::setMasterPage(new GlobalMasterPage($this));
		
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart("editor", "editor");
        parent::addMasterPagePart("style_js", "style_js");
        
        parent::getMasterPage()->setWebServiceName( 'From hex to RGB color' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/ColorWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( '{"jsonrpc":"2.0","method":"hexToRgb","params":{"color":"#a3f300"},"id":1}' );
        parent::getMasterPage()->setWebServiceResponse( '{"jsonrpc":"2.0","result":{"result_text":"rgb(163,243,0)","isValid":true},"id":1}' );
        
        parent::setPageTitle("From hex to RGB color - Dev.me");
    }
}
