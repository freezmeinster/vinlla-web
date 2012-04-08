<?php

namespace Vinlla\LandingBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="info")
 */
class Info
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
    protected $judul;


     /**
     * @ORM\Column(type="text")
     */
    protected $isi;

    /**
     * @ORM\Column(type="string", length="100")
     */
	protected $slug;

	public function getId()
    {
        return $this->id;
    }
	
	public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

	public function getIsi()
    {
        return $this->isi;
    }

    public function setIsi($isi)
    {
        $this->isi = $isi;
    }

	public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

	public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('judul', new NotBlank());
		$metadata->addPropertyConstraint('isi', new NotBlank());
		$metadata->addPropertyConstraint('slug', new NotBlank());
	}
}