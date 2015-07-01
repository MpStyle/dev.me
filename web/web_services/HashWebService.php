<?php
namespace web\web_services;

require_once '../../Settings.php';

use MToolkit\Core\Enum\HashAlgorithm;
use MToolkit\Core\MHash;
use MToolkit\Network\RPC\Json\Server\MRPCJsonWebService;

class HashWebService extends MRPCJsonWebService
{
    public function sha256($params)
    {
        $plaintext=$params['text'];
        $hash=new MHash(HashAlgorithm::SHA256);
        
        $this->getResponse()->setResult(array(
            'result_text' => $hash->getHash($plaintext)
        ));
    }
    
    public function sha512($params)
    {
        $plaintext=$params['text'];
        $hash=new MHash(HashAlgorithm::SHA512);
        
        $this->getResponse()->setResult(array(
            'result_text' => $hash->getHash($plaintext)
        ));
    }
    
    public function md2($params)
    {
        $plaintext=$params['text'];
        $hash=new MHash(HashAlgorithm::MD2);
        
        $this->getResponse()->setResult(array(
            'result_text' => $hash->getHash($plaintext)
        ));
    }
    
    public function md4($params)
    {
        $plaintext=$params['text'];
        $hash=new MHash(HashAlgorithm::MD4);
        
        $this->getResponse()->setResult(array(
            'result_text' => $hash->getHash($plaintext)
        ));
    }
    
    public function md5($params)
    {
        $plaintext=$params['text'];
        $hash=new MHash(HashAlgorithm::MD5);
        
        $this->getResponse()->setResult(array(
            'result_text' => $hash->getHash($plaintext)
        ));
    }
}
