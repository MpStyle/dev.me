<?php
/* @var $this FromRGBToHexColor */
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<h2 id="title">From RGB to Hex color</h2>

<div id="editor">
    <div class="form-group" id="source_text_container">
        <input type="text" id="source_text" class="form-control" placeholder="Insert RGB color here..." />
    </div>

    <div class="form-group" id="destination_text_container">
        <input type="text" id="destination_text" class="form-control" placeholder="Hex color..." readonly />
    </div>

    <div id="service_name">
        <input type="hidden" name="service_name_hidden" id="service_name_hidden" value="rgbToHex" />
    </div>

    <div id="color_container"></div>
</div>

<div id="style_js">     
    <link href="web/css/<?php echo basename( __FILE__, '.view.php' ); ?>.css" rel="stylesheet" type="text/css"> 
    <script>
        $(function () {
            var color = new Color();
        });
    </script>
</div>