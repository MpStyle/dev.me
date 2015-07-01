<?php
namespace web\masterpages;

class GlobalMasterPage extends \MToolkit\Controller\MAbstractMasterPageController
{
    public function __construct(\MToolkit\Controller\MAbstractController $parent)
    {
        parent::__construct(__DIR__.'/GlobalMasterPage.view.php', $parent);
    }
}
