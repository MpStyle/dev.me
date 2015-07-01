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
        $json=json_encode(json_decode($encoded), JSON_PRETTY_PRINT);
        
        if($json===false)
        {
            $json="";
        }

        $this->getResponse()->setResult(array(
            'result_text' => $json
        ));
    }
    
    public function SQL($params)
    {
        
    }
    
    public function XML($params)
    {
        
    }
    
    public function Javascript($params)
    {
        
    }
}
