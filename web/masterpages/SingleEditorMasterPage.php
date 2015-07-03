<?php

namespace web\masterpages;

use MToolkit\Controller\MAbstractController;
use MToolkit\Controller\MAbstractMasterPageController;

class SingleEditorMasterPage extends MAbstractMasterPageController
{

    private $editorTextAreaPlaceholder = "";

    public function __construct(MAbstractController $parent)
    {
        parent::__construct(__DIR__ . '/SingleEditorMasterPage.view.php', $parent);
        parent::setMasterPage(new GlobalMasterPage($parent));
        parent::addMasterPagePart("editor", "editor");
    }

    public function getEditorTextAreaPlaceholder()
    {
        return $this->editorTextAreaPlaceholder;
    }

    public function setEditorTextAreaPlaceholder($editorTextAreaPlaceholder)
    {
        $this->editorTextAreaPlaceholder = $editorTextAreaPlaceholder;
        return $this;
    }

	public function setWebServiceName($webServiceName)
    {
        parent::getMasterPage()->setWebServiceName($webServiceName);
    }

    public function setWebServiceRequest($webServiceRequest)
    {
        parent::getMasterPage()->setWebServiceRequest($webServiceRequest);
    }

    public function setWebServiceResponse($webServiceResponse)
    {
        parent::getMasterPage()->setWebServiceResponse($webServiceResponse);
    }

}
