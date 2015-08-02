<?php
/* @var $this ShowHexColor */
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<h2 id="title">Show Hex color</h2>

<div id="editor">
    <input type="text" id="source_text" class="form-control" placeholder="Insert Hex color here, ex: #000000"  />

    <div id="color_container"></div>
</div>

<div id="style_js">     
    <link href="web/css/<?php echo basename( __FILE__, '.view.php' ); ?>.css" rel="stylesheet" type="text/css"> 
    <script>
        $(function () {
            var showHexColor = new ShowHexColor();
        });
    </script>
</div>