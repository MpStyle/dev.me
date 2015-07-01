<?php
namespace web\masterpages;
/* @var $this VerticalEditorMasterPage */
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<div id="editor" class="row">
    <textarea id="source_textarea" class="col-xs-6 col-sm-6 col-md-6 col-lg-6" placeholder="<?php echo $this->getSourceTextAreaPlaceholder() ?>"></textarea>
    <textarea id="destination_textarea" class="col-xs-6 col-sm-6 col-md-6 col-lg-6" placeholder="<?php echo $this->getDestinationTextAreaPlaceholder() ?>" readonly></textarea>
</div>