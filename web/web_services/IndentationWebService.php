<?php

namespace web\web_services;

require_once __DIR__ . '/../../Settings.php';

use MToolkit\Network\RPC\Json\Server\MRPCJsonWebService;

class IndentationWebService extends MRPCJsonWebService
{

    public function HTML($params)
    {
        
    }

    public function CSS($params)
    {
        
    }

    public function JSON($params)
    {
        $encoded = $params['text'];
        $jsonDecode = json_decode($encoded);
        $isValid = true;

        if ($jsonDecode === false || $jsonDecode == null)
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

    public function SQL($params)
    {
        $encoded = $params['text'];
        $sql = \SqlFormatter::format($encoded, false);
        $sql = str_replace("<pre>", "", $sql);
        $sql = str_replace("</pre>", "", $sql);

        $this->getResponse()->setResult(array(
            'result_text' => $sql
        ));
    }

    public function XML($params)
    {
        
    }

    public function Javascript($params)
    {
        
    }

}
