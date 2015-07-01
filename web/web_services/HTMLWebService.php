<?php

namespace web\web_services;

require_once __DIR__ . '/../../Settings.php';

use business_logic\html\HTMLBook;
use MToolkit\Network\RPC\Json\Server\MRPCJsonWebService;

class HTMLWebService extends MRPCJsonWebService
{

    public function minifyHTML($params)
    {
        $encoded = $params['text'];

        $this->getResponse()->setResult(array(
            'result_text' => HTMLBook::minify($encoded)
        ));
    }

    public function minifyCSS($params)
    {
        $encoded = $params['text'];

        $this->getResponse()->setResult(array(
            'result_text' => str_replace(array("\r", "\n", "\t", ' '), '', $encoded)
        ));
    }
}
