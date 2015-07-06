<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class XMLIndentation extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/XMLIndentation.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        
        parent::getMasterPage()->setWebServiceName( 'XML indentation' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/IndentationWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( '{"jsonrpc":"2.0","method":"XML","params":{"text":"<note><to>Tove</to><from>Jani</from><heading>Reminder</heading><body>Don\'t forget me this weekend!</body></note>"},"id":1}' );
        parent::getMasterPage()->setWebServiceResponse( '{"jsonrpc":"2.0","result":{"result_text":"<?xml version="1.0"?>
<note>
  <to>Tove</to>
  <from>Jani</from>
  <heading>Reminder</heading>
  <body>Don\'t forget me this weekend!</body>
</note>
","isValid":true},"id":1}' );
        
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to indent...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Indented text...');
        
        parent::addJavascript('web/javascripts/Indentation.min.js');
        parent::addCss('web/css/XMLIndentation.css');
        
        parent::setPageTitle("XML indentation - Dev.me");
    }
}
