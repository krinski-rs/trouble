<?php
namespace App\DataBase\Postgres\Enum\Types;

use App\DataBase\Postgres\Enum\AbstractEnumType;

/**
 * RequestType
 * @author Reinaldo Krinski <reinaldo.krinski@gmail.com>
 */
final class RequestType extends AbstractEnumType
{
    const SUBCASO_TT        = 'Subcaso TT';
    const REDE_COLABORATIVA = 'Rede Colaborativa';
    const CANCELAMENTO_CONTRATO = 'Cancelamento Contrato';
    const CADASTRO_CONTRATO = 'Cadastro Contrato';
    
	/**
     * {@inheritdoc}
     */
    protected $name = 'request_type';
    
    /**
     * {@inheritdoc}
     */
    protected static $choices = [
        self::SUBCASO_TT        => 1,
        self::REDE_COLABORATIVA => 2,
        self::CANCELAMENTO_CONTRATO => 3,
        self::CADASTRO_CONTRATO => 4
    ];
}