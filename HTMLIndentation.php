<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class HTMLIndentation extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/HTMLIndentation.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::addMasterPagePart("style_js", "style_js");
        
        parent::getMasterPage()->setWebServiceName( 'XML indentation' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/IndentationWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( htmlspecialchars( '{"jsonrpc":"2.0","method":"XML","params":{"text":"<!DOCTYPE html><html><body><h1>My First Heading</h1><p>My first paragraph.</p></body></html>"},"id":1}' ) );
        parent::getMasterPage()->setWebServiceResponse( htmlspecialchars( '{"jsonrpc":"2.0","result":{"result_text":"<!DOCTYPE html>
<html>
    <body>
        <h1>
            My First Heading
        </h1>
        <p>My first paragraph.</p>
    </body>
</html>","isValid":true},"id":1}' ) );
        
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to indent...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Indented text...');
        
        parent::setPageTitle("HTML indentation - Dev.me");
    }
}
