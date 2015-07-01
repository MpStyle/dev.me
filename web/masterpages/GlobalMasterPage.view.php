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
                            Base64
                            <ul>
                                <li><a href="Base64Decode.php" data-keywords="base base64 encode encoding">Base64 Decode</a></li>
                                <li><a href="Base64Encode.php" data-keywords="base base64 decode decoding">Base64 Encode</a></li>
                            </ul>
                        </li>
                        <li>
                            MDx
                            <ul>
                                <li><a href="MD2Generator.php" data-keywords="hash md md2">MD2</a></li>
                                <li><a href="MD4Generator.php" data-keywords="hash md md4">MD4</a></li>
                                <li><a href="MD5Generator.php" data-keywords="hash md md5">MD5</a></li>
                            </ul>
                        </li>
                        <li>
                            SHA
                            <ul>
                                <li><a href="SHA256Generator.php" data-keywords="hash sha sha1 sha256">SHA 256</a></li>
                                <li><a href="SHA512Generator.php" data-keywords="hash sha sha1 sha512">SHA 512</a></li>
                            </ul>
                        </li>

                        <li>
                            Minify
                            <ul>
                                <li><a href="MinifyHTML.php" data-keywords="minify minified html xhtml">Minify HTML</a></li>
                                <li><a href="MinifyCSS.php" data-keywords="minify minified css style">Minify CSS</a></li>
                                <li><a href="MinifyJavascript.php" data-keywords="minify minified js javascript">Minify Javascript</a></li>
                            </ul>
                        </li>
                        <li>
                            Text
                            <ul>
                                <li><a href="UpperCase.php" data-keywords="text case upper uppercase">UPPER CASE</a></li>
                                <li><a href="LowerCase.php" data-keywords="text case lower lowercase">lower case</a></li>
                                <li><a href="Capitalize.php" data-keywords="text case capitalize">Capitalize</a></li>
                            </ul>
                        </li>
                        <li>
                            Indentation
                            <ul>
                                <li><a href="JSONIndetation.php" data-keywords="indent indentation json">JSON indentation</a></li>
                                <li><a href="SQLIndentation.php" data-keywords="indent indentation sql query">SQL indentation</a></li>
                                <li><a href="XMLIndentation.php" data-keywords="indent indentation xml">XML indentation</a></li>
                                <li><a href="HTMLIndentation.php" data-keywords="indent indentation html xhtml">HTML indentation</a></li>
                                <li><a href="CSSIndentation.php" data-keywords="indent indentation css style">CSS indentation</a></li>
                                <li><a href="JavascriptIndentation.php" data-keywords="indent indentation js javascript">Javascript indentation</a></li>
                            </ul>
                        </li>
                        <li>
                            Validation
                            <ul>
                                <li><a href="JSONValidation.php">JSON validation</a></li>
                                <li><a href="XMLValidation.php">XML validation</a></li>
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
