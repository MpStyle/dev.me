<?php
namespace web\masterpages;

/* @var $this SingleEditorMasterPage */
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<div id="editor" class="row">
    <div id="source_textarea_container" class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <textarea id="source_textarea" class="form-control" placeholder="<?php echo $this->getEditorTextAreaPlaceholder() ?>"></textarea>
    </div>
</div>

<div id="style_js"></div>