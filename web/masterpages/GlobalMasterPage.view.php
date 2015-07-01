<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
        <header id="header" class="material_shadow"><span id="toggle_menu" class="glyphicon glyphicon-menu-hamburger hidden-sm hidden-md hidden-lg"></span> Dev.me</header>
        <div id="container" class="container-fluid">
            <div class="row">
                <div id="menu" class="hidden-xs col-sm-3 col-md-3 col-lg-3">
                    <input type="text" id="search_functionality_text" placeholder="Search functionality..." />
                    <ul>
                        <li>
                            Hex
                            <ul>
                                <li data-keywords="hex encode encoding"><a href="HexDecode.php">Hex Decode</a></li>
                                <li data-keywords="hex decode decoding"><a href="HexEncode.php">Hex Encode</a></li>
                            </ul>
                        </li>
                        <li>
                            Base64
                            <ul>
                                <li data-keywords="base base64 encode encoding"><a href="Base64Decode.php">Base64 Decode</a></li>
                                <li data-keywords="base base64 decode decoding"><a href="Base64Encode.php">Base64 Encode</a></li>
                            </ul>
                        </li>
                        <li>
                            MDx
                            <ul>
                                <li data-keywords="hash md md2"><a href="MD2Generator.php">MD2</a></li>
                                <li data-keywords="hash md md4"><a href="MD4Generator.php">MD4</a></li>
                                <li data-keywords="hash md md5"><a href="MD5Generator.php">MD5</a></li>
                            </ul>
                        </li>
                        <li>
                            SHA
                            <ul>
                                <li data-keywords="hash sha sha1 sha256"><a href="SHA256Generator.php">SHA 256</a></li>
                                <li data-keywords="hash sha sha1 sha512"><a href="SHA512Generator.php">SHA 512</a></li>
                            </ul>
                        </li>

                        <li>
                            Minify
                            <ul>
                                <li data-keywords="minify minified html xhtml"><a href="MinifyHTML.php">Minify HTML</a></li>
                                <li data-keywords="minify minified css style"><a href="MinifyCSS.php">Minify CSS</a></li>
                                <li data-keywords="minify minified js javascript"><span title="Coming soon" data-toggle="tooltip" data-placement="right">Minify Javascript</span></li>
                                <li data-keywords="minify minified json"><a href="MinifyJSON.php">Minify JSON</a></li>
                            </ul>
                        </li>
                        <li>
                            Text
                            <ul>
                                <li data-keywords="text case upper uppercase"><a href="UpperCase.php">UPPER CASE</a></li>
                                <li data-keywords="text case lower lowercase"><a href="LowerCase.php">lower case</a></li>
                                <li data-keywords="text case capitalize"><a href="Capitalize.php">Capitalize</a></li>
                            </ul>
                        </li>
                        <li>
                            Indentation
                            <ul>
                                <li data-keywords="indent indentation json"><a href="JSONIndentation.php">JSON indentation</a></li>
                                <li data-keywords="indent indentation sql query"><a href="SQLIndentation.php">SQL indentation</a></li>
                                <li data-keywords="indent indentation xml"><a href="XMLIndentation.php">XML indentation</a></li>
                                <li data-keywords="indent indentation html xhtml"><a href="HTMLIndentation.php">HTML indentation</a></li>
                                <li data-keywords="indent indentation css style"><a href="CSSIndentation.php">CSS indentation</a></li>
                                <li data-keywords="indent indentation js javascript"><a href="JavascriptIndentation.php">Javascript indentation</a></li>
                            </ul>
                        </li>
                        <li>
                            Validation
                            <ul>
                                <li data-keywords="validation validate json"><a href="JSONValidation.php">JSON validation</a></li>
                                <li data-keywords="validation validate xml"><a href="XMLValidation.php">XML validation</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="content" class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    <h1 id="title"></h1>
                    <div id="service_name"></div>
                    <div id="editor"></div>
                </div>
            </div>
        </div>
    </body>
</html>
