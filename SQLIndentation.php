<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class SQLIndentation extends BasePage
{
    public function __construct()
    {
        parent::__construct(__DIR__.'/SQLIndentation.view.php');
        
        parent::setMasterPage(new VerticalEditorMasterPage($this));
        
        parent::addMasterPagePart('title', 'title');
        parent::addMasterPagePart('service_name', 'service_name');
        
        parent::getMasterPage()->setWebServiceName( 'SQL indentation' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/IndentationWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( '{"jsonrpc":"2.0","method":"SQL","params":{"text":"CREATE TABLE STATION (ID INTEGER PRIMARY KEY, CITY CHAR(20), STATE CHAR(2), LAT_N REAL, LONG_W REAL);"},"id":1}' );
        parent::getMasterPage()->setWebServiceResponse( '{"jsonrpc":"2.0","result":{"result_text":"CREATE TABLE STATION (
  ID INTEGER PRIMARY KEY, 
  CITY CHAR(20), 
  STATE CHAR(2), 
  LAT_N REAL, 
  LONG_W REAL
);"},"id":1}' );
        
        parent::getMasterPage()->setSourceTextAreaPlaceholder('Insert here the text to indent...');
        parent::getMasterPage()->setDestinationTextAreaPlaceholder('Indented text...');
        
        parent::addJavascript('web/javascripts/Indentation.min.js');
        parent::addCss('web/css/SQLIndentation.css');
        
        parent::setPageTitle("SQL indentation - Dev.me");
    }
}
