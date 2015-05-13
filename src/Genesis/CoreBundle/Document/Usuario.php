<?php
namespace Genesis\CoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Usuario
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $strNome;

    /**
     * @MongoDB\Date
     */
    protected $datanasc;

    /**
     * @MongoDB\String
     */
    protected $strSenha;

    /**
     * @MongoDB\String
     */
    protected $strEmail;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set strNome
     *
     * @param string $strNome
     * @return self
     */
    public function setStrNome($strNome)
    {
        $this->strNome = $strNome;
        return $this;
    }

    /**
     * Get strNome
     *
     * @return string $strNome
     */
    public function getStrNome()
    {
        return $this->strNome;
    }

    /**
     * Set datanasc
     *
     * @param date $datanasc
     * @return self
     */
    public function setDatanasc($datanasc)
    {
        $this->datanasc = $datanasc;
        return $this;
    }

    /**
     * Get datanasc
     *
     * @return date $datanasc
     */
    public function getDatanasc()
    {
        return $this->datanasc;
    }

    /**
     * Set strSenha
     *
     * @param string $strSenha
     * @return self
     */
    public function setStrSenha($strSenha)
    {
        $this->strSenha = $strSenha;
        return $this;
    }

    /**
     * Get strSenha
     *
     * @return string $strSenha
     */
    public function getStrSenha()
    {
        return $this->strSenha;
    }

    /**
     * Set strEmail
     *
     * @param string $strEmail
     * @return self
     */
    public function setStrEmail($strEmail)
    {
        $this->strEmail = $strEmail;
        return $this;
    }

    /**
     * Get strEmail
     *
     * @return string $strEmail
     */
    public function getStrEmail()
    {
        return $this->strEmail;
    }
}
