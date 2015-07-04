<?php

require './Settings.php';

use web\BasePage;
use web\masterpages\VerticalEditorMasterPage;

class MinifyHTML extends BasePage
{

    public function __construct()
    {
        parent::__construct( __DIR__ . '/MinifyHTML.view.php' );

        parent::setMasterPage( new VerticalEditorMasterPage( $this ) );

        parent::addMasterPagePart( 'title', 'title' );
        parent::addMasterPagePart( 'service_name', 'service_name' );

        parent::getMasterPage()->setWebServiceName( 'SHA512 generator' );
        parent::getMasterPage()->setWebServiceEndPoint( 'http://www.micene.net/dev.me/web/web_services/MinifyWebService.php' );
        parent::getMasterPage()->setWebServiceRequest( '{"jsonrpc":"2.0","method":"HTML","params":{"text":"&lt;html&gt;
                &lt;body&gt;
                Hello world
                &lt;/body&gt;
                &lt;/html&gt;"},"id":1}' );
        parent::getMasterPage()->setWebServiceResponse( '{"jsonrpc":"2.0","result":{"result_text":"&lt;html&gt; &lt;body&gt; Hello world &lt;/body&gt; &lt;/html&gt;"},"id":1}' );

        parent::getMasterPage()->setSourceTextAreaPlaceholder( 'Insert here the text to minify...' );
        parent::getMasterPage()->setDestinationTextAreaPlaceholder( 'Minified text...' );

        parent::addJavascript( 'web/javascripts/Minify.min.js' );
        parent::addCss( 'web/css/MinifyHTML.css' );

        parent::setPageTitle( "Minify HTML - Dev.me" );
    }

}
