<?php

namespace web\masterpages;

use MToolkit\Controller\MAbstractController;
use MToolkit\Controller\MAbstractMasterPageController;

class VerticalEditorMasterPage extends MAbstractMasterPageController
{
    private $sourceTextAreaPlaceholder="";
    private $destinationTextAreaPlaceholder="";

    public function __construct(MAbstractController $parent)
    {
        parent::__construct(__DIR__ . '/VerticalEditorMasterPage.view.php', $parent);
        parent::setMasterPage(new GlobalMasterPage($parent));
        parent::addMasterPagePart("editor", "editor");
    }
    
    function getSourceTextAreaPlaceholder()
    {
        return $this->sourceTextAreaPlaceholder;
    }

    function getDestinationTextAreaPlaceholder()
    {
        return $this->destinationTextAreaPlaceholder;
    }

    function setSourceTextAreaPlaceholder($sourceTextAreaPlaceholder)
    {
        $this->sourceTextAreaPlaceholder = $sourceTextAreaPlaceholder;
    }

    function setDestinationTextAreaPlaceholder($destinationTextAreaPlaceholder)
    {
        $this->destinationTextAreaPlaceholder = $destinationTextAreaPlaceholder;
    }


}
