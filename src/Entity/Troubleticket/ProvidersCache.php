<?php

namespace App\Entity\Troubleticket;

/**
 * ProvidersCache
 */
class ProvidersCache
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cnpj;

    /**
     * @var string
     */
    private $razaoSocial;

    /**
     * @var string
     */
    private $nomeFantasia;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cnpj
     *
     * @param string $cnpj
     *
     * @return ProvidersCache
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set razaoSocial
     *
     * @param string $razaoSocial
     *
     * @return ProvidersCache
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get razaoSocial
     *
     * @return string
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set nomeFantasia
     *
     * @param string $nomeFantasia
     *
     * @return ProvidersCache
     */
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get nomeFantasia
     *
     * @return string
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }
}

