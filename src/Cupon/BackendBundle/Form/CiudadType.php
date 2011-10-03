<?php

/*
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * This file is part of the Cupon sample application.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Este archivo pertenece a la aplicación de prueba Cupon.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Cupon\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * Formulario para crear y manipular entidades de tipo Ciudad.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class CiudadType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('slug')
        ;
    }

    public function getName()
    {
        return 'cupon_backendbundle_ciudadtype';
    }
}
