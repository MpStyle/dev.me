<?php
namespace web\masterpages;

/* @var $this VerticalEditorMasterPage */
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<div id="editor" class="row">
    <div id="source_textarea_container" class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <textarea id="source_textarea" class="form-control" placeholder="<?php echo $this->getSourceTextAreaPlaceholder() ?>"></textarea>
    </div>

    <div id="destination_textarea_container" class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <textarea id="destination_textarea" class="form-control" placeholder="<?php echo $this->getDestinationTextAreaPlaceholder() ?>" readonly></textarea>    
    </div>


</div>