<?php
/* @var $this Base64Encode */
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<h2 id="title">Base64 encode</h2>
<div id="service_name">
    <input type="hidden" name="service_name_hidden" id="service_name_hidden" value="encode" />
</div>

<div id="style_js">     
    <link href="web/css/<?php echo basename( __FILE__, '.view.php' ); ?>.css" rel="stylesheet" type="text/css"> 
    <script>
        $(function () {
            var base64 = new Base64();
        });
    </script>
</div>
