<?php

namespace web\web_services;

require_once __DIR__ . '/../../Settings.php';

use MToolkit\Network\RPC\Json\Server\MRPCJsonWebService;

class Base64WebService extends MRPCJsonWebService
{

    public function decode($params)
    {
        $encoded = $params['text'];
        $resultText = "";

        if ($encoded != "")
        {
            $resultText = base64_decode($encoded);
            if (!$resultText)
            {
                $resultText = 'Invalid text. Check and retry please.';
            }
        }

        $this->getResponse()->setResult(array(
            'result_text' => $resultText
        ));
    }

    public function encode($params)
    {
        $encoded = $params['text'];
        $resultText = "";

        if ($encoded != "")
        {
            $resultText = base64_encode($encoded);
            if (!$resultText)
            {
                $resultText = 'Invalid text. Check and retry please.';
            }
        }

        $this->getResponse()->setResult(array(
            'result_text' => $resultText
        ));
    }

}
