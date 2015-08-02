<?php
/* @var $this MD2Generator */
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<h2 id="title">MD5 generator</h2>
<div id="service_name">
    <input type="hidden" name="service_name_hidden" id="service_name_hidden" value="MD5" />
</div>


<div id="style_js">     
    <link href="web/css/<?php echo basename( __FILE__, '.view.php' ); ?>.css" rel="stylesheet" type="text/css"> 
    <script>
        $(function () {
            var hash = new Hash();
        });
    </script>
</div>