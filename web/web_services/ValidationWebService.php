<?php

namespace web\web_services;

require_once __DIR__ . '/../../Settings.php';

use MToolkit\Network\RPC\Json\Server\MRPCJsonWebService;

class ValidationWebService extends MRPCJsonWebService
{

    public function JSON($params)
    {
        $encoded = $params['text'];
        $jsonDecode = json_decode($encoded);
        $isValid = true;

        if ($jsonDecode === false || $jsonDecode == null)
        {
            $isValid = false;
        }

        $this->getResponse()->setResult(array(
            'isValid' => $isValid
        ));
    }

    public function XML($params)
    {
        $xml = $params['text'];
        $isValid = true;

        if (trim($xml) == '')
        {
            $isValid = false;
        }
        else
        {
            libxml_use_internal_errors(true);

            $doc = new \DOMDocument('1.0', 'utf-8');
            $doc->loadXML($xml);

            $errors = libxml_get_errors();
            libxml_clear_errors();

            $isValid = empty($errors);
        }

        $this->getResponse()->setResult(array(
            'isValid' => $isValid
        ));
    }

}
