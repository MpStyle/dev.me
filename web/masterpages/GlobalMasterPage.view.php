<?php
namespace web\masterpages;

use business_logic\localization\LocalizationBook;
use web\localizations\Localization;

/* @var $this GlobalMasterPage */
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Start SEO -->
        <meta name="description" content="<?php echo Localization::getString( "short_app_description" ) ?>"/>
        <link rel="original-source" href="http://www.micene.net/dev.me/" />
        <link rel="canonical" href="http://www.micene.net/dev.me/" />
        <meta property="og:locale" content="<?php echo strtolower( LocalizationBook::getLocalization() ) ?>_<?php echo strtoupper( LocalizationBook::getLocalization() ) ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo Localization::getString( "app_motto" ) ?>" />
        <meta property="og:description" content="<?php echo Localization::getString( "short_app_description" ) ?>" />
        <meta property="og:url" content="http://www.micene.net/dev.me/" />
        <meta property="og:site_name" content="<?php Localization::getString( "app_name" ) ?>" />
        <meta property="og:image" content="http://www.micene.net/dev.me/web/images/logo_128.png" />
        <script type="application/ld+json">
            { 
            "@context": "http://schema.org"
            , "@type": "WebSite"
            , "url": "http://www.micene.net/dev.me"
            }
        </script>

        <meta name="twitter:site" content="@MiNi_Group" />
        <meta name="twitter:title" content="<?php Localization::getString( "app_name" ) ?> | <?php echo Localization::getString( "app_motto" ) ?>" />
        <meta name="twitter:description" content="<?php echo Localization::getString( "short_app_description" ) ?>" />
        <meta name="twitter:creator" content="@mpstyle" />
        <meta name="twitter:image:src" content="http://www.micene.net/dev.me/web/images/logo_1024.png" />

        <meta itemprop="name" content="<?php Localization::getString( "app_name" ) ?>" />
        <meta itemprop="description" content="<?php echo Localization::getString( "short_app_description" ) ?>" />
        <meta itemprop="image" content="http://www.micene.net/dev.me/web/images/logo_128.png" />

        <meta name="language" content="<?php echo LocalizationBook::getLocalization() ?>">
        <meta name="author" content="Michele Pagnin">
        <meta name="expires" content="never">
        <meta name="robots" content="all">

        <meta name="rating" content="general" />
        <meta name="distribution" content="global" />
        <meta name="revisit-after" content="1 day" />

        <!-- End SEO -->

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Android web app -->
        <meta name='theme-color' content='#455A64'/>
        <link rel='icon' sizes='192x192' href='web/images/logo_192.png'/>
        <link rel='icon' sizes='128x128' href='web/images/logo_128.png'/>

        <!-- iOS web app -->
        <link rel="apple-touch-icon" href="touch-icon-iphone.png"/>
        <link rel="apple-touch-icon" sizes="76x76" href="web/images/logo_76_ios.png"/>
        <link rel="apple-touch-icon" sizes="120x120" href="web/images/logo_120_ios.png"/>
        <link rel="apple-touch-icon" sizes="128x128" href="web/images/logo_128_ios.png"/>
        <link rel="apple-touch-icon" sizes="152x152" href="web/images/logo_152_ios.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="128x128" href="web/images/logo_128_ios.png"/>
        <link rel="apple-touch-startup-image" href="web/images/splashscreen_ios.png"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="#fff"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>

        <!-- Chome app -->
        <link rel="manifest" href="manifest.json">
        <meta name="mobile-web-app-capable" content="yes">

        <!-- Windows phone web app -->
        <meta name="application-name" content="<?php echo Localization::getString( "app_name" ) ?>" />
        <meta name="msapplication-TileColor" content="#4285f4" />
        <meta name="msapplication-square70x70logo" content="web/images/smalltile.png" />
        <meta name="msapplication-square150x150logo" content="web/images/mediumtile.png" />
        <meta name="msapplication-wide310x150logo" content="web/images/widetile.png" />
        <meta name="msapplication-square310x310logo" content="web/images/largetile.png" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title></title>

        <script src="vendor/components/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/components/jquery/jquery-migrate.min.js" type="text/javascript"></script>

        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

        <script src="web/javascripts/json_rpc_client/jquery.jsonrpcclient.min.js" type="text/javascript"></script>

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500italic,500,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>

        <script src="web/javascripts/GlobalMasterPage.min.js" type="text/javascript"></script>
    </head>
    <body>
        <header id="header" class="material_shadow">
            <span id="toggle_menu" class="glyphicon glyphicon-menu-hamburger hidden-sm hidden-md hidden-lg"></span> 
            <h1>
                <?php echo Localization::getString( "app_name" ) ?>
            </h1>
        </header>
        <div id="container" class="container-fluid">
            <div class="row">
                <div id="menu_container" class="hidden-xs col-sm-3 col-md-3 col-lg-2">
                    <input type="text" id="search_functionality_text" class="form-control" placeholder="Search functionality..." />
                    <ul id="menu">
                        <li>
                            <?php echo Localization::getString( "hex_menu_item" ) ?>
                            <ul class="nav nav-pills nav-stacked">
                                <li data-keywords="hex encode encoding"><a href="HexDecode">Hex Decode</a></li>
                                <li data-keywords="hex decode decoding"><a href="HexEncode">Hex Encode</a></li>
                            </ul>
                        </li>
                        <li>
                            <?php echo Localization::getString( "base64_menu_item" ) ?>
                            <ul class="nav nav-pills nav-stacked">
                                <li data-keywords="base base64 encode encoding"><a href="Base64Decode">Base64 Decode</a></li>
                                <li data-keywords="base base64 decode decoding"><a href="Base64Encode">Base64 Encode</a></li>
                            </ul>
                        </li>
                        <li>
                            <?php echo Localization::getString( "mdx_menu_item" ) ?>
                            <ul class="nav nav-pills nav-stacked">
                                <li data-keywords="hash md md2"><a href="MD2Generator">MD2</a></li>
                                <li data-keywords="hash md md4"><a href="MD4Generator">MD4</a></li>
                                <li data-keywords="hash md md5"><a href="MD5Generator">MD5</a></li>
                            </ul>
                        </li>
                        <li>
                            <?php echo Localization::getString( "sha_menu_item" ) ?>
                            <ul class="nav nav-pills nav-stacked">
                                <li data-keywords="hash sha sha1 sha256"><a href="SHA256Generator">SHA 256</a></li>
                                <li data-keywords="hash sha sha1 sha512"><a href="SHA512Generator">SHA 512</a></li>
                            </ul>
                        </li>

                        <li>
                            <?php echo Localization::getString( "minify_menu_item" ) ?>
                            <ul class="nav nav-pills nav-stacked">
                                <li data-keywords="minify minified html xhtml"><a href="MinifyHTML">Minify HTML</a></li>
                                <li data-keywords="minify minified css style"><a href="MinifyCSS">Minify CSS</a></li>
                                <li data-keywords="minify minified js javascript"><span title="Coming soon" data-toggle="tooltip" data-placement="right">Minify Javascript</span></li>
                                <li data-keywords="minify minified json"><a href="MinifyJSON">Minify JSON</a></li>
                            </ul>
                        </li>
                        <li>
                            <?php echo Localization::getString( "text_menu_item" ) ?>
                            <ul class="nav nav-pills nav-stacked">
                                <li data-keywords="text case upper uppercase"><a href="UpperCase">UPPER CASE</a></li>
                                <li data-keywords="text case lower lowercase"><a href="LowerCase">lower case</a></li>
                                <li data-keywords="text case capitalize"><a href="Capitalize">Capitalize</a></li>
                            </ul>
                        </li>
                        <li>
                            <?php echo Localization::getString( "indentation_menu_item" ) ?>
                            <ul class="nav nav-pills nav-stacked">
                                <li data-keywords="indent indentation json"><a href="JSONIndentation">JSON indentation</a></li>
                                <li data-keywords="indent indentation sql query"><a href="SQLIndentation">SQL indentation</a></li>
                                <li data-keywords="indent indentation xml"><a href="XMLIndentation">XML indentation</a></li>
                                <li data-keywords="indent indentation html xhtml"><a href="HTMLIndentation">HTML indentation</a></li>
                                <li data-keywords="indent indentation css style"><span title="Coming soon" data-toggle="tooltip" data-placement="right">CSS indentation</span></li>
                                <li data-keywords="indent indentation js javascript"><a href="JavascriptIndentation">Javascript indentation</a></li>
                            </ul>
                        </li>
                        <li>
                            <?php echo Localization::getString( "validation_menu_item" ) ?>
                            <ul class="nav nav-pills nav-stacked">
                                <li data-keywords="validation validate json"><a href="JSONValidation">JSON validation</a></li>
                                <li data-keywords="validation validate xml"><a href="XMLValidation">XML validation</a></li>
                            </ul>
                        </li>
                        <li>
                            <?php echo Localization::getString( "converters_menu_item" ) ?>
                            <ul class="nav nav-pills nav-stacked">
                                <li data-keywords="date datetime time timestamp epoch unix"><a href="TimestampToDate">Timestamp to date</a></li>
                                <li data-keywords="date datetime time timestamp epoch unix"><a href="DateToTimestamp">Date to timestamp</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="content" class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <h2 id="title"></h2>
                    <div id="service_name"></div>
                    <div id="editor" class="row"></div>

                    <div class="panel panel-default" id="web_service_info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Web service</h3>
                        </div>
                        <div class="panel-body">
                            <h4>Name</h4>
                            <div><?php echo $this->getWebServiceName() ?></div>

                            <h4>End-point:</h4>
                            <div><?php echo $this->getWebServiceEndPoint() ?></div>

                            <h4>Request</h4>
                            <pre><?php echo $this->getWebServiceRequest() ?></pre>

                            <h4>Response</h4>
                            <pre><?php echo $this->getWebServiceResponse() ?></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-1530145-8', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>
