<?php

namespace web\web_services;

require_once '../../Settings.php';

use MToolkit\Core\Enum\HashAlgorithm;
use MToolkit\Core\MHash;
use MToolkit\Network\RPC\Json\Server\MRPCJsonWebService;

class HexWebService extends MRPCJsonWebService
{

    public function encode($params)
    {
        $string=$params['text'];
        
        $hex = '';
        for ($i = 0; $i < strlen($string); $i++)
        {
            $ord = ord($string[$i]);
            $hexCode = dechex($ord);
            $hex .= substr('0' . $hexCode, -2);
        }
        
        $this->getResponse()->setResult(array(
            'result_text' => strToUpper($hex)
        ));
    }

    public function decode($params)
    {
        $hex=$params['text'];
        
        $string = '';
        for ($i = 0; $i < strlen($hex) - 1; $i+=2)
        {
            $string .= chr(hexdec($hex[$i] . $hex[$i + 1]));
        }
        
        $this->getResponse()->setResult(array(
            'result_text' => $string
        ));
    }

}
