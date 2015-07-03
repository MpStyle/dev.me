<?php
/* @var $this TimestampToDate */
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<h1 id="title">Date to timestamp</h1>
<div id="service_name">
    <input type="hidden" name="service_name_hidden" id="service_name_hidden" value="dateToTimestamp" maxlength="10" />
</div>

<div id="editor">

    <input type="hidden" name="format_select" id="format_select" value="Y/m/d H:i:s" />
    
    <div class="row">
        <div id="destination_text_container" class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class='input-group date' id='datetimepicker5'>
                <input type='text' id="source_text" class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="destination_text_container" class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input type="text" id="destination_text" class="form-control" placeholder="Timestamp in seconds..." readonly />
        </div>
    </div>

</div>