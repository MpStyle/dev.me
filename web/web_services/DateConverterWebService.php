<?php
namespace web\web_services;

require_once __DIR__ . '/../../Settings.php';

use MToolkit\Network\RPC\Json\Server\MRPCJsonWebService;

class DateConverterWebService extends MRPCJsonWebService
{
    public function timestampToDate($params)
    {
        $timestamp = $params['text'];
        $format = $params['format'];
        $isValid=true;
        $date = date($format, $timestamp);

        if ($date === false)
        {
            $isValid=false;
            $date="";
        }

        $this->getResponse()->setResult(array(
            'result_text' => $date
            , 'isValid' => $isValid
        ));
    }
    
    public function dateToTimestamp($params)
    {
        $timestamp = $params['text'];
        $format = $params['format'];
        
        /* @var $dateTime \DateTime */ $dateTime = \DateTime::createFromFormat($format, $timestamp);

        $this->getResponse()->setResult(array(
            'result_text' => $dateTime->getTimestamp()
        ));
    }
}
