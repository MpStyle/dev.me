<?php
/* @var $this ShowRGBAColor */
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<h2 id="title">Show RGB color</h2>

<div id="editor">
    <input type="text" id="source_text" class="form-control" placeholder="Insert RGBA or RGB color here, ex: 255,255,255"  />

    <div id="color_container"></div>

    <div id="service_name">
        <input type="hidden" name="service_name_hidden" id="service_name_hidden" value="rgbToHex" />
    </div>
</div>

<div id="style_js">     
    <link href="web/css/<?php echo basename( __FILE__, '.view.php' ); ?>.css" rel="stylesheet" type="text/css"> 
    <script>
        $(function () {
            var showRGBAColor = new ShowRGBAColor();
        });
    </script>
</div>