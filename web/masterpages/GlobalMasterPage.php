<?php
namespace web\masterpages;

class GlobalMasterPage extends \MToolkit\Controller\MAbstractMasterPageController
{
	private $webServiceName="";
	private $webServiceRequest="";
	private $webServiceResponse="";
	private $webServiceEndPoint="";
	
    public function __construct(\MToolkit\Controller\MAbstractController $parent)
    {
        parent::__construct(__DIR__.'/GlobalMasterPage.view.php', $parent);
    }
	
    public function getWebServiceName()
    {
        return $this->webServiceName;
    }

    public function getWebServiceRequest()
    {
        return $this->webServiceRequest;
    }

    public function getWebServiceResponse()
    {
        return $this->webServiceResponse;
    }

    public function setWebServiceName($webServiceName)
    {
        $this->webServiceName = $webServiceName;
        return $this;
    }

    public function setWebServiceRequest($webServiceRequest)
    {
        $this->webServiceRequest = $webServiceRequest;
        return $this;
    }

    public function setWebServiceResponse($webServiceResponse)
    {
        $this->webServiceResponse = $webServiceResponse;
        return $this;
    }

    public function getWebServiceEndPoint()
    {
        return $this->webServiceEndPoint;
    }

    public function setWebServiceEndPoint($webServiceEndPoint)
    {
        $this->webServiceEndPoint = $webServiceEndPoint;
        return $this;
    }


}
