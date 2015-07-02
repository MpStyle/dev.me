<?php

namespace web\web_services;

require_once __DIR__ . '/../../Settings.php';

use business_logic\html\HTMLBook;
use MToolkit\Network\RPC\Json\Server\MRPCJsonWebService;

class MinifyWebService extends MRPCJsonWebService
{

    public function HTML($params)
    {
        $encoded = $params['text'];

        $this->getResponse()->setResult(array(
            'result_text' => HTMLBook::minify($encoded)
        ));
    }

    public function CSS($params)
    {
        $encoded = $params['text'];

        $this->getResponse()->setResult(array(
            'result_text' => str_replace(array("\r", "\n", "\t", ' '), '', $encoded)
        ));
    }

    public function JSON($params)
    {
        $encoded = $params['text'];
        $isValid = true;
        $jsonDecode = json_decode($encoded);

        if ($jsonDecode === false || $jsonDecode==null)
        {
            $isValid = false;
        }
        else
        {
            $json = json_encode($jsonDecode);

            if ($json === false)
            {
                $json = "";
                $isValid = false;
            }
        }

        $this->getResponse()->setResult(array(
            'result_text' => $json
            , 'isValid' => $isValid
        ));
    }

}
