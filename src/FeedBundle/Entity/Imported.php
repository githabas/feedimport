<?php

namespace FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;

/**
 * Imported
 *
 * @ORM\Table(name="imported")
 * @ORM\Entity(repositoryClass="FeedBundle\Repository\ImportedRepository")
 */
class Imported
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="integer", name="imp_index", nullable=true)
     * @Type("integer")
     */
    private $index;

    /**
     *
     * @ORM\Column(type="integer", name="imp_index_start_at", nullable=true)
     * @Type("integer")
     */
    private $index_start_at;

    /**
     *
     * @ORM\Column(type="integer", name="imp_integer", nullable=true)
     * @Type("integer")
     */
    private $integer;

    /**
     *
     * @ORM\Column(type="float", name="imp_float", nullable=true)
     * @Type("float")
     */
    private $float;

    /**
     *
     * @ORM\Column(type="string", name="imp_name", nullable=true)
     * @Type("string")
     */
    private $name;

    /**
     *
     * @ORM\Column(type="string", name="imp_surname", nullable=true)
     * @Type("string")
     */
    private $surname;

    /**
     *
     * @ORM\Column(type="string", name="imp_fullname", nullable=true)
     * @Type("string")
     */
    private $fullname;

    /**
     *
     * @ORM\Column(type="string", name="imp_email", nullable=true)
     * @Type("string")
     */
    private $email;

    /**
     *
     * @ORM\Column(type="string", name="imp_bool", nullable=true)
     * @Type("string")
     */
    private $bool;


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
     * Set index
     *
     * @param integer $index
     *
     * @return Imported
     */
    public function setIndex($index)
    {
        $this->index = $index;

        return $this;
    }

    /**
     * Get index
     *
     * @return integer
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Set indexStartAt
     *
     * @param integer $indexStartAt
     *
     * @return Imported
     */
    public function setIndexStartAt($indexStartAt)
    {
        $this->index_start_at = $indexStartAt;

        return $this;
    }

    /**
     * Get indexStartAt
     *
     * @return integer
     */
    public function getIndexStartAt()
    {
        return $this->index_start_at;
    }

    /**
     * Set integer
     *
     * @param integer $integer
     *
     * @return Imported
     */
    public function setInteger($integer)
    {
        $this->integer = $integer;

        return $this;
    }

    /**
     * Get integer
     *
     * @return integer
     */
    public function getInteger()
    {
        return $this->integer;
    }

    /**
     * Set float
     *
     * @param integer $float
     *
     * @return Imported
     */
    public function setFloat($float)
    {
        $this->float = $float;

        return $this;
    }

    /**
     * Get float
     *
     * @return integer
     */
    public function getFloat()
    {
        return $this->float;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Imported
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Imported
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return Imported
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Imported
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set bool
     *
     * @param boolean $bool
     *
     * @return Imported
     */
    public function setBool($bool)
    {
        $this->bool = $bool;

        return $this;
    }

    /**
     * Get bool
     *
     * @return boolean
     */
    public function getBool()
    {
        return $this->bool;
    }
}
