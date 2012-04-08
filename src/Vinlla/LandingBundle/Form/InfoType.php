<?php

namespace Vinlla\LandingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class InfoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('judul');
        $builder->add('isi', 'textarea');
		$builder->add('slug');
    }
	public function getName()
    {
        return 'info';
    }

}