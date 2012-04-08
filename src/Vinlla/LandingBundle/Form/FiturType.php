<?php

namespace Vinlla\LandingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class FiturType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('nama');
        $builder->add('keterangan', 'textarea');
    }
	public function getName()
    {
        return 'fitur';
    }

}

