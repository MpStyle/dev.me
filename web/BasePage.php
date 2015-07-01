<?php

namespace web;

use business_logic\html\HTMLBook;
use MToolkit\Controller\MAbstractPageController;
use Settings;

class BasePage extends MAbstractPageController
{

    protected function postRender()
    {
        parent::postRender();
        if (Settings::MINIFY_HTML)
        {
            parent::setOutput(HTMLBook::minify(parent::getOutput()));
        }
    }

}
