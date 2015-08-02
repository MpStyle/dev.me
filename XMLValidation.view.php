<?php
/* @var $this XMLValidation */
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<h2 id="title">XML validation</h2>
<div id="service_name">
    <input type="hidden" name="service_name_hidden" id="service_name_hidden" value="XML" />
</div>

<div id="style_js">     
    <link href="web/css/<?php echo basename( __FILE__, '.view.php' ); ?>.css" rel="stylesheet" type="text/css"> 
    <script>
        $(function () {
            var validation = new Validation();
        });
    </script>
</div>