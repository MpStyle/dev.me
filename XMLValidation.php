<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\SingleEditorMasterPage;

class XMLValidation extends BasePage
{

    public function __construct()
    {
        parent::__construct( __DIR__ . '/XMLValidation.view.php' );

        parent::setMasterPage( new SingleEditorMasterPage( $this ) );

        parent::addMasterPagePart( 'title', 'title' );
        parent::addMasterPagePart( 'service_name', 'service_name' );
        parent::addMasterPagePart( "style_js", "style_js" );

        parent::getMasterPage()->setWebServiceName( 'XML validation' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/ValidationWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( htmlspecialchars( '{"jsonrpc":"2.0","method":"XML","params":{"text":"<note> <to>Tove</to> <from>Jani</from> <heading>Reminder</heading> <body>Don\'t forget me this weekend!</body> </note>"},"id":1}' ) );
        parent::getMasterPage()->setWebServiceResponse( htmlspecialchars( '{"jsonrpc":"2.0","result":{"isValid":true},"id":1}' ) );

        parent::getMasterPage()->setEditorTextAreaPlaceholder( 'Insert here the xml to validate...' );



        parent::setPageTitle( "XML validation - Dev.me" );
    }

}
