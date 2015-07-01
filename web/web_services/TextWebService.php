<?php
namespace web\web_services;

require_once '../../Settings.php';

use MToolkit\Network\RPC\Json\Server\MRPCJsonWebService;

class TextWebService extends MRPCJsonWebService
{
    public function toUpperCase($params)
    {
        $text=$params['text'];
        
        $this->getResponse()->setResult(array(
            'result_text' => strtoupper($text)
        ));
    }
    
    public function toLowerCase($params)
    {
        $text=$params['text'];
        
        $this->getResponse()->setResult(array(
            'result_text' => strtolower($text)
        ));
    }
    
    public function capitalize($params)
    {
        $text=$params['text'];
        
        $this->getResponse()->setResult(array(
            'result_text' => ucwords($text)
        ));
    }
}
