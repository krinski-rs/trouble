<?php
namespace App\Controller\Troubleticket;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ReportsController
{
    private $objCreate = NULL;
    
    public function __construct(\App\Service\Troubleticket\Reports\Create $objCreate)
    {
        $this->objCreate = $objCreate;
    }
    
    public function postReports(Request $objRequest)
    {
        return new JsonResponse(['method' => 'post', $objRequest->get('abc')], 200);
    }
    
    public function getReports(Request $objRequest)
    {
        return new JsonResponse(['method' => 'get', $objRequest->request->all()], 200);
    }
    
    public function getReport(int $id, Request $objRequest)
    {
        echo $objRequest->headers->get('Range');
        return new JsonResponse(['id' => $id, 'method' => 'get', 'range'=>$objRequest->headers->get('Range')], 200);
    }
    
    public function putReport(int $id, Request $objRequest)
    {
        return new JsonResponse(['id' => $id, 'method' => 'put', $objRequest->getContent()], 200);
    }
    
    public function patchReport(int $id, Request $objRequest)
    {
        return new JsonResponse(['id' => $id, 'method' => 'patch', $objRequest->getContent()], 200);
    }
    
    public function deleteReport(int $id, Request $objRequest)
    {
        return new JsonResponse(['id' => $id, 'method' => 'delete', $objRequest->getContent()], 200);
    }
    
    public function optionsReport(int $id)
    {
        return new JsonResponse(['id' => $id, 'method' => 'delete', $objRequest->getContent()], 200);
    }
}

