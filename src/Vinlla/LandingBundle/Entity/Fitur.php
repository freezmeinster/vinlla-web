<?php

namespace Vinlla\LandingBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fitur")
 */
class Fitur
{
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;

	 /**
     * @ORM\Column(type="string")
     */
    protected $nama;

	 /**
     * @ORM\Column(type="text")
     */
	protected $keterangan;


    public function getNama()
    {
        return $this->nama;
    }

	public function getId()
    {
        return $this->id;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }
	
	public function getKeterangan()
    {
        return $this->keterangan;
    }

    public function setKeterangan($keterangan)
    {
        $this->keterangan = $keterangan;
    }

	public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('nama', new NotBlank());
		$metadata->addPropertyConstraint('keterangan', new NotBlank());
	}

}
