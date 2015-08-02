<?php
/* @var $this TimestampToDate */
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<h2 id="title">Timestamp to date</h2>
<div id="service_name">
    <input type="hidden" name="service_name_hidden" id="service_name_hidden" value="timestampToDate" maxlength="10" />
</div>

<div id="editor">
    <div class="row">
        <div id="source_text_container" class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input type="text" id="source_text" class="form-control" placeholder="Insert here the timestamp in seconds..." />
        </div>
    </div>

    <div class="row">
        <div id="format_container" class="form-group col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <select id="format_select" name="format_select" class="form-control">
                <option value="" disabled selected>Select a format...</option>
                <option value="Y/m/d H:i:s">YYYY/MM/DD HH:MM:SS</option>
                <option value="d/m/Y H:i:s">DD/MM/YYYY HH:MM:SS</option>
                <option value="m/d/Y H:i:s">MM/DD/YYYY HH:MM:SS</option>
            </select>
        </div>

        <div id="destination_text_container" class="form-group col-xs-6 col-sm-8 col-md-8 col-lg-8">
            <input type="text" id="destination_text" class="form-control" placeholder="Date..." readonly />    
        </div>
    </div>

</div>

<div id="style_js">     
    <link href="web/css/<?php echo basename( __FILE__, '.view.php' ); ?>.css" rel="stylesheet" type="text/css"> 
    <script>
        $(function () {
            var dateConverter = new DateConverter();
        });
    </script>
</div>