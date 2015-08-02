<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\SingleEditorMasterPage;

class JSONValidation extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/JSONValidation.view.php');
        
        parent::setMasterPage(new SingleEditorMasterPage($this));
        
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        parent::addMasterPagePart("style_js", "style_js");
        
        parent::getMasterPage()->setWebServiceName( 'JSON validation' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/ValidationWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( '{"jsonrpc":"2.0","method":"JSON","params":{"text":"{\"glossary\":{\"title\":\"example glossary\",\"GlossDiv\":{\"title\":\"S\",\"GlossList\":{\"GlossEntry\":{\"ID\":\"SGML\",\"SortAs\":\"SGML\",\"GlossTerm\":\"Standard Generalized Markup Language\",\"Acronym\":\"SGML\",\"Abbrev\":\"ISO 8879:1986\",\"GlossDef\":{\"para\":\"A meta-markup language, used to create markup languages such as DocBook.\",\"GlossSeeAlso\":[\"GML\",\"XML\"]},\"GlossSee\":\"markup\"}}}}}"},"id":1}' );
        parent::getMasterPage()->setWebServiceResponse( '{"jsonrpc":"2.0","result":{"isValid":true},"id":1}' );
        
        parent::getMasterPage()->setEditorTextAreaPlaceholder('Insert here the json to validate...');
        
        
        
        parent::setPageTitle("JSON validation - Dev.me");
    }
}
