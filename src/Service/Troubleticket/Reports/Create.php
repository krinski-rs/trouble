<?php
namespace App\Service\Troubleticket\Reports;

use Psr\Log\LoggerInterface;

class Create
{
    private $objLoggerInterface = NULL;
    
    public function __construct(LoggerInterface $objLoggerInterface)
    {
        $this->objLoggerInterface = $objLoggerInterface;
    }
    
    public function teste(){
        $this->objLoggerInterface->info('jasdfhkl', ['hfhf'=>1, 'asasas'=>2]);
    }
}

