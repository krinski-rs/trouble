<?php
namespace App\DataBase\Postgres\Enum\Types;

use App\DataBase\Postgres\Enum\AbstractEnumType;

/**
 * TipoArquivoFase
 * @author Reinaldo Krinski <reinaldo.krinski@gmail.com>
 */
final class TipoArquivoFase extends AbstractEnumType
{
    const CALCULO_RELEVO                = 'Cálculo e Relevo';
    const DIAGRAMA_BLOCOS               = 'Diagrama Blocos';
    const DIAGRAMA_IRRADIACAO_POP       = 'Diagrama de Irradiação POP';
    const DIAGRAMA_IRRADIACAO_CLIENTE   = 'Diagrama de Irradiação Cliente';
    const IMAGEM_ACESSO                 = 'Imagem Acesso';
    const KMZ_ACESSO                    = 'Kmz Acesso';
    const KMZ_DROP                      = 'Kmz Drop';
    const PLANO_EMENDA                  = 'Plano de Emenda';
    const TOPOLOGIA                     = 'Topologia';
    const UNIFILAR                      = 'Unifilar';
    const VISTA_POP                     = 'Vista POP';
    const VISTA_CLIENTE                 = 'Vista Cliente';
    const VSDX                          = 'VSDX';
    const IMAGEM_GERAL                  = 'Imagem Geral';
    const IP_GERENCIA                   = 'IP Gerência';
    const IMAGEM_DROP                   = 'Imagem Drop';
    
	/**
     * {@inheritdoc}
     */
    protected $name = 'tipo_arquivo_fase';
    
    /**
     * {@inheritdoc}
     */
    protected static $choices = [
        self::CALCULO_RELEVO                => 1,
        self::DIAGRAMA_BLOCOS               => 2,
        self::DIAGRAMA_IRRADIACAO_POP       => 3,
        self::DIAGRAMA_IRRADIACAO_CLIENTE   => 4,
        self::IMAGEM_ACESSO                 => 5,
        self::KMZ_ACESSO                    => 6,
        self::KMZ_DROP                      => 7,
        self::PLANO_EMENDA                  => 8,
        self::TOPOLOGIA                     => 9,
        self::UNIFILAR                      => 10,
        self::VISTA_POP                     => 11,
        self::VISTA_CLIENTE                 => 12,
        self::VSDX                          => 13,
        self::IMAGEM_GERAL                  => 14,
        self::IP_GERENCIA                   => 15,
        self::IMAGEM_DROP                   => 16
    ];
}